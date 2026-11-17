<?php

return [
    'resource' => [
        'label' => 'Risikobewertung',
        'plural_label' => 'Risikobewertungen',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verarbeitungstätigkeit',
        'description' => 'Beschreibung der Verarbeitung',
        'necessity' => 'Notwendigkeit und Verhältnismäßigkeit',
        'risks' => 'Risiken',
        'risk_title' => 'Risiko',
        'threat' => 'Bedrohung (LINDDUN)',
        'likelihood' => 'Eintrittswahrscheinlichkeit',
        'impact' => 'Auswirkung',
        'measures' => 'Maßnahmen, Garantien und Abhilfemechanismen',
        'residual_likelihood' => 'Wahrscheinlichkeit nach Maßnahmen',
        'residual_impact' => 'Auswirkung nach Maßnahmen',
        'reviewer_opinion' => 'Ansichten der Prüfer',
        'status' => 'Status',
        'inherent_risk' => 'Höchstes Risiko',
        'residual_risk' => 'Höchstes Restrisiko',
        'next_review_at' => 'Nächste Prüfung',
        'submitted' => 'An die CPPA übermittelt',
        'approved_by' => 'Genehmigt von',
    ],

    'help' => [
        'description' => 'Die Verarbeitung, ihr Zweck und die Kategorien personenbezogener Informationen, die sie nutzt (Verordnung §7152).',
        'necessity' => 'Warum die Verarbeitung vernünftigerweise erforderlich und verhältnismäßig ist und wie ihr Nutzen gegen die Risiken abgewogen wird.',
        'risks' => 'Risikostufe = Wahrscheinlichkeit x Auswirkung: 1-2 niedrig, 3-4 mittel, 6-9 hoch. Ohne Werte nach Maßnahmen entspricht das Restrisiko dem inhärenten Risiko.',
        'candidates' => 'Verarbeitungstätigkeiten, die personenbezogene Informationen verkaufen oder teilen oder sensible personenbezogene Informationen verarbeiten (Verordnung §7150(b)) und noch keine Risikobewertung haben.',
        'reviewer_opinion' => 'Die Ansichten der Personen, die die Bewertung geprüft haben.',
        'submit' => 'Halten Sie fest, dass die Informationen zur Risikobewertung an die California Privacy Protection Agency übermittelt wurden (Verordnung §7157).',
        'no_candidates' => 'Für jede dieser Verarbeitungstätigkeiten gibt es eine Abschätzung.',
    ],

    'scale' => [
        '1' => '1 - Niedrig',
        '2' => '2 - Mittel',
        '3' => '3 - Hoch',
    ],

    'levels' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'threats' => [
        'linking' => 'Verknüpfung',
        'identifying' => 'Identifizierung',
        'non_repudiation' => 'Nichtabstreitbarkeit',
        'detecting' => 'Erkennung',
        'data_disclosure' => 'Offenlegung von Daten',
        'unawareness' => 'Unkenntnis',
        'non_compliance' => 'Nichteinhaltung',
    ],

    'statuses' => [
        'draft' => 'Entwurf',
        'approved' => 'Genehmigt',
        'review_due' => 'Prüfung fällig',
    ],

    'reasons' => [
        'selling_sharing' => 'verkauft oder teilt personenbezogene Informationen',
        'sensitive_pi' => 'verarbeitet sensible personenbezogene Informationen',
    ],

    'actions' => [
        'approve' => 'Genehmigen',
        'export' => 'Exportieren (JSON)',
        'submit' => 'Als an die CPPA übermittelt markieren',
        'candidates' => 'Fehlende Abschätzungen',
        'close' => 'Schließen',
    ],

    'notifications' => [
        'approved' => 'Risikobewertung genehmigt',
        'submitted' => 'Übermittlung erfasst',
        'no_risks' => 'Bewerten Sie vor der Genehmigung mindestens ein Risiko.',
    ],
];
