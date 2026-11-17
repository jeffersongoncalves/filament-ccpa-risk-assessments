<?php

namespace JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Support\HtmlString;
use JeffersonGoncalves\CcpaRiskAssessments\Enums\AssessmentStatus;
use JeffersonGoncalves\CcpaRiskAssessments\Models\RiskAssessment;
use JeffersonGoncalves\CcpaRiskAssessments\RiskAssessmentManager;
use Symfony\Component\HttpFoundation\StreamedResponse;

class RiskAssessmentActions
{
    public static function approve(): Action
    {
        return Action::make('approve')
            ->label(RiskAssessmentResource::label('actions.approve'))
            ->icon('heroicon-o-check-badge')
            ->color('success')
            ->visible(fn (RiskAssessment $record): bool => $record->status === AssessmentStatus::Draft || $record->isReviewDue())
            ->schema([
                TextInput::make('approved_by')
                    ->label(RiskAssessmentResource::label('fields.approved_by'))
                    ->default(fn (): ?string => auth()->user()?->getAttribute('name'))
                    ->required()
                    ->maxLength(255),
            ])
            ->action(function (RiskAssessment $record, array $data, Action $action): void {
                if ($record->scoredRisks() === []) {
                    Notification::make()->danger()->title(RiskAssessmentResource::label('notifications.no_risks'))->send();
                    $action->halt();
                }

                $record->approve((string) $data['approved_by']);
                Notification::make()->success()->title(RiskAssessmentResource::label('notifications.approved'))->send();
            });
    }

    public static function export(): Action
    {
        return Action::make('export')
            ->label(RiskAssessmentResource::label('actions.export'))
            ->icon('heroicon-o-arrow-down-tray')
            ->color('gray')
            ->action(fn (RiskAssessment $record): StreamedResponse => response()->streamDownload(function () use ($record): void {
                echo json_encode(app(RiskAssessmentManager::class)->export($record), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            }, 'risk-assessment-'.$record->getKey().'.json', ['Content-Type' => 'application/json']));
    }

    /**
     * Record that the assessment information was submitted to the CPPA (Regulations §7157).
     */
    public static function submit(): Action
    {
        return Action::make('submit')
            ->label(RiskAssessmentResource::label('actions.submit'))
            ->icon('heroicon-o-paper-airplane')
            ->color('info')
            ->requiresConfirmation()
            ->modalDescription(RiskAssessmentResource::label('help.submit'))
            ->visible(fn (RiskAssessment $record): bool => $record->status === AssessmentStatus::Approved && $record->submitted_at === null)
            ->action(function (RiskAssessment $record): void {
                $record->markSubmitted();
                Notification::make()->success()->title(RiskAssessmentResource::label('notifications.submitted'))->send();
            });
    }

    /**
     * Processing activities that sell or share personal information, or process sensitive personal information, and have no assessment yet.
     */
    public static function candidates(): Action
    {
        return Action::make('candidates')
            ->label(RiskAssessmentResource::label('actions.candidates'))
            ->icon('heroicon-o-exclamation-triangle')
            ->color('warning')
            ->badge(fn (): ?int => count(app(RiskAssessmentManager::class)->candidates()) ?: null)
            ->modalHeading(RiskAssessmentResource::label('actions.candidates'))
            ->modalDescription(RiskAssessmentResource::label('help.candidates'))
            ->modalContent(function (): HtmlString {
                $candidates = app(RiskAssessmentManager::class)->candidates();

                if ($candidates === []) {
                    return new HtmlString('<p>'.e(RiskAssessmentResource::label('help.no_candidates')).'</p>');
                }

                $items = array_map(fn (array $candidate): string => '<li><strong>'.e($candidate['activity']->name).'</strong>: '
                    .e(implode(', ', array_map(fn (string $reason): string => RiskAssessmentResource::label("reasons.{$reason}"), $candidate['reasons']))).'</li>', $candidates);

                return new HtmlString('<ul style="list-style: disc; padding-inline-start: 1.25rem;">'.implode('', $items).'</ul>');
            })
            ->modalSubmitAction(false)
            ->modalCancelActionLabel(RiskAssessmentResource::label('actions.close'));
    }
}
