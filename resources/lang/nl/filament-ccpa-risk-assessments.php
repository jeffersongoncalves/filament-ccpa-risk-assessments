<?php

return [
    'resource' => [
        'label' => 'Risicobeoordeling',
        'plural_label' => 'Risicobeoordelingen',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verwerkingsactiviteit',
        'description' => 'Beschrijving van de verwerking',
        'necessity' => 'Noodzaak en evenredigheid',
        'risks' => 'Risico\'s',
        'risk_title' => 'Risico',
        'threat' => 'Dreiging (LINDDUN)',
        'likelihood' => 'Waarschijnlijkheid',
        'impact' => 'Impact',
        'measures' => 'Maatregelen, waarborgen en mitigatiemechanismen',
        'residual_likelihood' => 'Waarschijnlijkheid na maatregelen',
        'residual_impact' => 'Impact na maatregelen',
        'reviewer_opinion' => 'Standpunten van de beoordelaars',
        'status' => 'Status',
        'inherent_risk' => 'Hoogste risico',
        'residual_risk' => 'Hoogste restrisico',
        'next_review_at' => 'Volgende beoordeling',
        'submitted' => 'Ingediend bij de CPPA',
        'approved_by' => 'Goedgekeurd door',
    ],

    'help' => [
        'description' => 'De verwerking, het doel ervan en de categorieën persoonsgegevens die ze gebruikt (Verordening §7152).',
        'necessity' => 'Waarom de verwerking redelijkerwijs noodzakelijk en evenredig is, en de voordelen afgewogen tegen de risico\'s.',
        'risks' => 'Risiconiveau = waarschijnlijkheid x impact: 1-2 laag, 3-4 gemiddeld, 6-9 hoog. Zonder scores na maatregelen is het restrisico het inherente risico.',
        'candidates' => 'Verwerkingsactiviteiten die persoonsgegevens verkopen of delen, of gevoelige persoonsgegevens verwerken (Verordening §7150(b)), en nog geen risicobeoordeling hebben.',
        'reviewer_opinion' => 'De standpunten van de mensen die de beoordeling hebben bekeken.',
        'submit' => 'Leg vast dat de informatie over de risicobeoordeling is ingediend bij de California Privacy Protection Agency (Verordening §7157).',
        'no_candidates' => 'Elk van deze verwerkingsactiviteiten heeft een beoordeling.',
    ],

    'scale' => [
        '1' => '1 - Laag',
        '2' => '2 - Gemiddeld',
        '3' => '3 - Hoog',
    ],

    'levels' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'threats' => [
        'linking' => 'Koppeling',
        'identifying' => 'Identificatie',
        'non_repudiation' => 'Onweerlegbaarheid',
        'detecting' => 'Detectie',
        'data_disclosure' => 'Openbaarmaking van gegevens',
        'unawareness' => 'Onwetendheid',
        'non_compliance' => 'Niet-naleving',
    ],

    'statuses' => [
        'draft' => 'Concept',
        'approved' => 'Goedgekeurd',
        'review_due' => 'Beoordeling nodig',
    ],

    'reasons' => [
        'selling_sharing' => 'verkoopt of deelt persoonsgegevens',
        'sensitive_pi' => 'verwerkt gevoelige persoonsgegevens',
    ],

    'actions' => [
        'approve' => 'Goedkeuren',
        'export' => 'Exporteren (JSON)',
        'submit' => 'Markeren als ingediend bij de CPPA',
        'candidates' => 'Ontbrekende beoordelingen',
        'close' => 'Sluiten',
    ],

    'notifications' => [
        'approved' => 'Risicobeoordeling goedgekeurd',
        'submitted' => 'Indiening vastgelegd',
        'no_risks' => 'Beoordeel ten minste één risico voordat u goedkeurt.',
    ],
];
