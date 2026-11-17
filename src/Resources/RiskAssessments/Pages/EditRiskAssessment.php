<?php

namespace JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\RiskAssessmentActions;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\RiskAssessmentResource;

class EditRiskAssessment extends EditRecord
{
    protected static string $resource = RiskAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            RiskAssessmentActions::approve(),
            RiskAssessmentActions::submit(),
            RiskAssessmentActions::export(),
            DeleteAction::make(),
        ];
    }
}
