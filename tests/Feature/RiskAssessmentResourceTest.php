<?php

use JeffersonGoncalves\CcpaNotices\Models\ProcessingActivity;
use JeffersonGoncalves\CcpaRiskAssessments\Enums\AssessmentStatus;
use JeffersonGoncalves\CcpaRiskAssessments\Enums\RiskLevel;
use JeffersonGoncalves\CcpaRiskAssessments\Models\RiskAssessment;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\CcpaRiskAssessmentsPlugin;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\Pages\CreateRiskAssessment;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\Pages\EditRiskAssessment;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\Pages\ListRiskAssessments;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\RiskAssessmentActions;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\RiskAssessmentResource;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Anna Schmidt', 'email' => 'dpo@example.com']));
});

function risky(): RiskAssessment
{
    return RiskAssessment::create([
        'title' => 'Fraud scoring',
        'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => 2, 'impact' => 3, 'residual_likelihood' => 1, 'residual_impact' => 3]],
    ]);
}

it('creates an assessment linked to a processing activity, with scored risks', function () {
    $activity = ProcessingActivity::create(['name' => 'Fraud scoring', 'purpose' => 'Prevent fraud']);

    Livewire::test(CreateRiskAssessment::class)
        ->fillForm([
            'title' => 'Fraud scoring',
            'processing_activity_id' => $activity->getKey(),
            'necessity' => 'Only payment metadata',
            'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => '2', 'impact' => '3', 'residual_likelihood' => '1', 'residual_impact' => '3']],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $assessment = RiskAssessment::sole();

    expect($assessment->processingActivity->is($activity))->toBeTrue()
        ->and($assessment->highestRisk(residual: false))->toBe(RiskLevel::High)
        ->and($assessment->highestRisk())->toBe(RiskLevel::Medium);
});

it('lists assessments with their risk levels', function () {
    $assessment = risky();

    Livewire::test(ListRiskAssessments::class)
        ->assertCanSeeTableRecords([$assessment])
        ->assertSee('High')
        ->assertSee('Medium')
        ->assertSee('Draft');
});

it('approves with the approver name', function () {
    $assessment = risky();

    Livewire::test(EditRiskAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('approve', ['approved_by' => 'Anna Schmidt (DPO)'])
        ->assertHasNoActionErrors();

    expect($assessment->fresh())
        ->status->toBe(AssessmentStatus::Approved)
        ->approved_by->toBe('Anna Schmidt (DPO)')
        ->next_review_at->not->toBeNull();
});

it('refuses to approve without risks', function () {
    $assessment = RiskAssessment::create(['title' => 'Empty']);

    Livewire::test(EditRiskAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('approve', ['approved_by' => 'DPO']);

    expect($assessment->fresh()->status)->toBe(AssessmentStatus::Draft);
});

it('exports one assessment as JSON', function () {
    $assessment = risky();

    Livewire::test(EditRiskAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('export')
        ->assertFileDownloaded('risk-assessment-'.$assessment->getKey().'.json');
});

it('shows the processing activities that still need an assessment', function () {
    ProcessingActivity::create(['name' => 'Telehealth', 'purpose' => 'Appointments', 'models' => [TestUser::class]]);

    Livewire::test(ListRiskAssessments::class)->assertActionVisible('candidates');

    expect((string) RiskAssessmentActions::candidates()->getModalContent())
        ->toContain('Telehealth')
        ->toContain('processes sensitive personal information');
});

it('records the submission to the CPPA once approved', function () {
    $assessment = risky();

    Livewire::test(EditRiskAssessment::class, ['record' => $assessment->getKey()])
        ->assertActionHidden('submit');

    $assessment->approve('Privacy lead');

    Livewire::test(EditRiskAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('submit');

    expect($assessment->fresh()->submitted_at)->not->toBeNull();

    Livewire::test(ListRiskAssessments::class)
        ->assertTableColumnStateSet('submitted', true, $assessment->fresh());
});

it('applies the fluent plugin options', function () {
    CcpaRiskAssessmentsPlugin::get()->navigationGroup('CCPA')->slug('risk-assessments');

    expect(RiskAssessmentResource::getNavigationGroup())->toBe('CCPA')
        ->and(RiskAssessmentResource::getSlug())->toBe('risk-assessments');
});
