<?php

namespace JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\RiskAssessmentActions;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\Resources\RiskAssessments\RiskAssessmentResource;

class ListRiskAssessments extends ListRecords
{
    protected static string $resource = RiskAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            RiskAssessmentActions::candidates(),
            CreateAction::make(),
        ];
    }
}
