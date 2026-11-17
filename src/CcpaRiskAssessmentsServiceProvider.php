<?php

namespace JeffersonGoncalves\Filament\CcpaRiskAssessments;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaRiskAssessmentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-risk-assessments')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
