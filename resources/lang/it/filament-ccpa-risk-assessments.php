<?php

return [
    'resource' => [
        'label' => 'Valutazione del rischio',
        'plural_label' => 'Valutazioni del rischio',
    ],

    'fields' => [
        'title' => 'Titolo',
        'processing_activity' => 'Attività di trattamento',
        'description' => 'Descrizione del trattamento',
        'necessity' => 'Necessità e proporzionalità',
        'risks' => 'Rischi',
        'risk_title' => 'Rischio',
        'threat' => 'Minaccia (LINDDUN)',
        'likelihood' => 'Probabilità',
        'impact' => 'Impatto',
        'measures' => 'Misure, garanzie e meccanismi di mitigazione',
        'residual_likelihood' => 'Probabilità dopo le misure',
        'residual_impact' => 'Impatto dopo le misure',
        'reviewer_opinion' => 'Pareri dei revisori',
        'status' => 'Stato',
        'inherent_risk' => 'Rischio più alto',
        'residual_risk' => 'Rischio residuo più alto',
        'next_review_at' => 'Prossima revisione',
        'submitted' => 'Trasmessa alla CPPA',
        'approved_by' => 'Approvato da',
    ],

    'help' => [
        'description' => 'Il trattamento, la sua finalità e le categorie di informazioni personali che utilizza (Regolamento §7152).',
        'necessity' => 'Perché il trattamento è ragionevolmente necessario e proporzionato, e i suoi benefici bilanciati con i rischi.',
        'risks' => 'Livello di rischio = probabilità x impatto: 1-2 basso, 3-4 medio, 6-9 alto. Senza i valori dopo le misure, il rischio residuo è quello inerente.',
        'candidates' => 'Attività di trattamento che vendono o condividono informazioni personali, o trattano informazioni personali sensibili (Regolamento §7150(b)), e non hanno ancora una valutazione del rischio.',
        'reviewer_opinion' => 'I pareri delle persone che hanno esaminato la valutazione.',
        'submit' => 'Registra che le informazioni della valutazione del rischio sono state trasmesse alla California Privacy Protection Agency (Regolamento §7157).',
        'no_candidates' => 'Ognuna di queste attività ha una valutazione.',
    ],

    'scale' => [
        '1' => '1 - Bassa',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Collegamento',
        'identifying' => 'Identificazione',
        'non_repudiation' => 'Non ripudio',
        'detecting' => 'Rilevamento',
        'data_disclosure' => 'Divulgazione dei dati',
        'unawareness' => 'Inconsapevolezza',
        'non_compliance' => 'Non conformità',
    ],

    'statuses' => [
        'draft' => 'Bozza',
        'approved' => 'Approvata',
        'review_due' => 'Revisione da fare',
    ],

    'reasons' => [
        'selling_sharing' => 'vende o condivide informazioni personali',
        'sensitive_pi' => 'tratta informazioni personali sensibili',
    ],

    'actions' => [
        'approve' => 'Approva',
        'export' => 'Esporta (JSON)',
        'submit' => 'Segna come trasmessa alla CPPA',
        'candidates' => 'Valutazioni mancanti',
        'close' => 'Chiudi',
    ],

    'notifications' => [
        'approved' => 'Valutazione del rischio approvata',
        'submitted' => 'Trasmissione registrata',
        'no_risks' => 'Valuta almeno un rischio prima di approvare.',
    ],
];
