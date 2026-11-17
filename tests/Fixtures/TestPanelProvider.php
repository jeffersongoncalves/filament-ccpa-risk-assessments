<?php

namespace JeffersonGoncalves\Filament\CcpaRiskAssessments\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\CcpaRiskAssessments\CcpaRiskAssessmentsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CcpaRiskAssessmentsPlugin::make(),
            ]);
    }
}
