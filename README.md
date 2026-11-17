<div class="filament-hidden">

![Filament CCPA Risk Assessments](https://raw.githubusercontent.com/jeffersongoncalves/filament-ccpa-risk-assessments/3.x/art/jeffersongoncalves-filament-ccpa-risk-assessments.png)

</div>

# Filament CCPA Risk Assessments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-ccpa-risk-assessments.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-ccpa-risk-assessments)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-ccpa-risk-assessments/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-ccpa-risk-assessments/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-ccpa-risk-assessments/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-ccpa-risk-assessments/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-ccpa-risk-assessments.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-ccpa-risk-assessments)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-ccpa-risk-assessments.svg?style=flat-square)](LICENSE.md)

Write the CCPA risk assessments (CCPA Regulations §§7150-7157) of [laravel-ccpa-risk-assessments](https://github.com/jeffersongoncalves/laravel-ccpa-risk-assessments) in your Filament panel.

## Features

- Assessments linked to a processing activity from [laravel-ccpa-notices](https://github.com/jeffersongoncalves/laravel-ccpa-notices), with the description of the processing, its necessity and proportionality, and the reviewers' views.
- Risks in a repeater. Each one has an optional LINDDUN threat, a likelihood and an impact from 1 to 3, the measures taken, and the scores after those measures.
- The table shows the highest inherent risk and the highest residual risk (low, medium or high), the status and the next review.
- **Approve:** asks for the approver's name and schedules the next review. Editing an approved assessment sends it back to draft.
- **Missing assessments:** lists the processing activities that sell or share personal information, or process sensitive personal information, and have no assessment yet (Regulations §7150(b)).
- **Mark as submitted to the CPPA:** records the submission of an approved assessment to the California Privacy Protection Agency (Regulations §7157), shown in a column.
- **Export (JSON)** for each assessment.
- 19 languages.

## Compatibility

| Plugin Version                                                           | Filament |
|--------------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-ccpa-risk-assessments/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-ccpa-risk-assessments/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-ccpa-risk-assessments/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-ccpa-risk-assessments:"^3.0"
php artisan vendor:publish --tag="ccpa-notices-migrations"   # if not published yet
php artisan vendor:publish --tag="ccpa-risk-assessments-migrations"
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\CcpaRiskAssessments\CcpaRiskAssessmentsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            CcpaRiskAssessmentsPlugin::make()
                ->navigationGroup('CCPA')             // default: no group
                ->navigationSort(7)
                ->navigationIcon('heroicon-o-shield-exclamation')
                ->slug('impact-assessments'),
        ]);
}
```

All fluent methods are optional. Pair it with [filament-ccpa-notices](https://github.com/jeffersongoncalves/filament-ccpa-notices) to maintain the processing activities in the same panel.

> The resource has no authorization of its own: register it only on panels whose users write the assessments, or add a policy for `JeffersonGoncalves\CcpaRiskAssessments\Models\RiskAssessment`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
