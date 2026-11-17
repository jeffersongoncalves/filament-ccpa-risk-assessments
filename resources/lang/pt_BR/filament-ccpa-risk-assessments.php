<?php

return [
    'resource' => [
        'label' => 'Avaliação de risco',
        'plural_label' => 'Avaliações de risco',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Atividade de tratamento',
        'description' => 'Descrição do tratamento',
        'necessity' => 'Necessidade e proporcionalidade',
        'risks' => 'Riscos',
        'risk_title' => 'Risco',
        'threat' => 'Ameaça (LINDDUN)',
        'likelihood' => 'Probabilidade',
        'impact' => 'Impacto',
        'measures' => 'Medidas, salvaguardas e mecanismos de mitigação',
        'residual_likelihood' => 'Probabilidade após as medidas',
        'residual_impact' => 'Impacto após as medidas',
        'reviewer_opinion' => 'Opiniões dos revisores',
        'status' => 'Situação',
        'inherent_risk' => 'Maior risco',
        'residual_risk' => 'Maior risco residual',
        'next_review_at' => 'Próxima revisão',
        'submitted' => 'Enviada à CPPA',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O tratamento, sua finalidade e as categorias de informações pessoais que utiliza (Regulamento §7152).',
        'necessity' => 'Por que o tratamento é razoavelmente necessário e proporcional, e seus benefícios ponderados frente aos riscos.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento que vendem ou compartilham informações pessoais, ou tratam informações pessoais sensíveis (Regulamento §7150(b)), e ainda não têm avaliação de risco.',
        'reviewer_opinion' => 'As opiniões das pessoas que revisaram a avaliação.',
        'submit' => 'Registre que as informações da avaliação de risco foram enviadas à California Privacy Protection Agency (Regulamento §7157).',
        'no_candidates' => 'Todas essas atividades de tratamento têm relatório.',
    ],

    'scale' => [
        '1' => '1 - Baixa',
        '2' => '2 - Média',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Detecção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento do titular',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovado',
        'review_due' => 'Revisão pendente',
    ],

    'reasons' => [
        'selling_sharing' => 'vende ou compartilha informações pessoais',
        'sensitive_pi' => 'trata informações pessoais sensíveis',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'submit' => 'Marcar como enviada à CPPA',
        'candidates' => 'Relatórios faltando',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação de risco aprovada',
        'submitted' => 'Envio registrado',
        'no_risks' => 'Avalie ao menos um risco antes de aprovar.',
    ],
];
