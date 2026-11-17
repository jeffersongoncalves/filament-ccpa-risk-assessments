<?php

namespace JeffersonGoncalves\Filament\CcpaRiskAssessments;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaRiskAssessmentsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-risk-assessments';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
