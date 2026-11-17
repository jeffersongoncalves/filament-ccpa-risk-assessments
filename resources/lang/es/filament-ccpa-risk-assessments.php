<?php

return [
    'resource' => [
        'label' => 'Evaluación de riesgos',
        'plural_label' => 'Evaluaciones de riesgos',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Actividad de tratamiento',
        'description' => 'Descripción del tratamiento',
        'necessity' => 'Necesidad y proporcionalidad',
        'risks' => 'Riesgos',
        'risk_title' => 'Riesgo',
        'threat' => 'Amenaza (LINDDUN)',
        'likelihood' => 'Probabilidad',
        'impact' => 'Impacto',
        'measures' => 'Medidas, salvaguardas y mecanismos de mitigación',
        'residual_likelihood' => 'Probabilidad tras las medidas',
        'residual_impact' => 'Impacto tras las medidas',
        'reviewer_opinion' => 'Opiniones de los revisores',
        'status' => 'Estado',
        'inherent_risk' => 'Riesgo más alto',
        'residual_risk' => 'Riesgo residual más alto',
        'next_review_at' => 'Próxima revisión',
        'submitted' => 'Presentada a la CPPA',
        'approved_by' => 'Aprobado por',
    ],

    'help' => [
        'description' => 'El tratamiento, su finalidad y las categorías de información personal que utiliza (Reglamento §7152).',
        'necessity' => 'Por qué el tratamiento es razonablemente necesario y proporcionado, y sus beneficios sopesados frente a los riesgos.',
        'risks' => 'Nivel de riesgo = probabilidad x impacto: 1-2 bajo, 3-4 medio, 6-9 alto. Sin las notas tras las medidas, el riesgo residual es el inherente.',
        'candidates' => 'Actividades de tratamiento que venden o comparten información personal, o tratan información personal sensible (Reglamento §7150(b)), y aún no tienen evaluación de riesgos.',
        'reviewer_opinion' => 'Las opiniones de las personas que revisaron la evaluación.',
        'submit' => 'Registra que la información de la evaluación de riesgos se presentó a la California Privacy Protection Agency (Reglamento §7157).',
        'no_candidates' => 'Todas esas actividades de tratamiento tienen evaluación.',
    ],

    'scale' => [
        '1' => '1 - Baja',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculación',
        'identifying' => 'Identificación',
        'non_repudiation' => 'No repudio',
        'detecting' => 'Detección',
        'data_disclosure' => 'Divulgación de datos',
        'unawareness' => 'Desconocimiento',
        'non_compliance' => 'Incumplimiento',
    ],

    'statuses' => [
        'draft' => 'Borrador',
        'approved' => 'Aprobada',
        'review_due' => 'Revisión pendiente',
    ],

    'reasons' => [
        'selling_sharing' => 'vende o comparte información personal',
        'sensitive_pi' => 'trata información personal sensible',
    ],

    'actions' => [
        'approve' => 'Aprobar',
        'export' => 'Exportar (JSON)',
        'submit' => 'Marcar como presentada a la CPPA',
        'candidates' => 'Evaluaciones faltantes',
        'close' => 'Cerrar',
    ],

    'notifications' => [
        'approved' => 'Evaluación de riesgos aprobada',
        'submitted' => 'Presentación registrada',
        'no_risks' => 'Evalúe al menos un riesgo antes de aprobar.',
    ],
];
