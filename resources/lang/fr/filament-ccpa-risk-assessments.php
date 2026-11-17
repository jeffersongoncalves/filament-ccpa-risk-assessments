<?php

return [
    'resource' => [
        'label' => 'Évaluation des risques',
        'plural_label' => 'Évaluations des risques',
    ],

    'fields' => [
        'title' => 'Titre',
        'processing_activity' => 'Activité de traitement',
        'description' => 'Description du traitement',
        'necessity' => 'Nécessité et proportionnalité',
        'risks' => 'Risques',
        'risk_title' => 'Risque',
        'threat' => 'Menace (LINDDUN)',
        'likelihood' => 'Vraisemblance',
        'impact' => 'Impact',
        'measures' => 'Mesures, garanties et mécanismes d\'atténuation',
        'residual_likelihood' => 'Vraisemblance après mesures',
        'residual_impact' => 'Impact après mesures',
        'reviewer_opinion' => 'Avis des relecteurs',
        'status' => 'Statut',
        'inherent_risk' => 'Risque le plus élevé',
        'residual_risk' => 'Risque résiduel le plus élevé',
        'next_review_at' => 'Prochaine revue',
        'submitted' => 'Transmise à la CPPA',
        'approved_by' => 'Approuvé par',
    ],

    'help' => [
        'description' => 'Le traitement, sa finalité et les catégories d\'informations personnelles qu\'il utilise (Règlement §7152).',
        'necessity' => 'Pourquoi le traitement est raisonnablement nécessaire et proportionné, et ses avantages mis en balance avec les risques.',
        'risks' => 'Niveau de risque = vraisemblance x impact : 1-2 faible, 3-4 moyen, 6-9 élevé. Sans notes après mesures, le risque résiduel est le risque initial.',
        'candidates' => 'Activités de traitement qui vendent ou partagent des informations personnelles, ou traitent des informations personnelles sensibles (Règlement §7150(b)), et n\'ont pas encore d\'évaluation des risques.',
        'reviewer_opinion' => 'L\'avis des personnes qui ont relu l\'évaluation.',
        'submit' => 'Consignez que les informations de l\'évaluation des risques ont été transmises à la California Privacy Protection Agency (Règlement §7157).',
        'no_candidates' => 'Chacune de ces activités a une analyse.',
    ],

    'scale' => [
        '1' => '1 - Faible',
        '2' => '2 - Moyen',
        '3' => '3 - Élevé',
    ],

    'levels' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'threats' => [
        'linking' => 'Mise en relation',
        'identifying' => 'Identification',
        'non_repudiation' => 'Non-répudiation',
        'detecting' => 'Détection',
        'data_disclosure' => 'Divulgation de données',
        'unawareness' => 'Méconnaissance',
        'non_compliance' => 'Non-conformité',
    ],

    'statuses' => [
        'draft' => 'Brouillon',
        'approved' => 'Approuvée',
        'review_due' => 'Revue à faire',
    ],

    'reasons' => [
        'selling_sharing' => 'vend ou partage des informations personnelles',
        'sensitive_pi' => 'traite des informations personnelles sensibles',
    ],

    'actions' => [
        'approve' => 'Approuver',
        'export' => 'Exporter (JSON)',
        'submit' => 'Marquer comme transmise à la CPPA',
        'candidates' => 'Analyses manquantes',
        'close' => 'Fermer',
    ],

    'notifications' => [
        'approved' => 'Évaluation des risques approuvée',
        'submitted' => 'Transmission enregistrée',
        'no_risks' => 'Évaluez au moins un risque avant d\'approuver.',
    ],
];
