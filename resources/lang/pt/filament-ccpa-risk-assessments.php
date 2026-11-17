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
        'reviewer_opinion' => 'Pareceres dos revisores',
        'status' => 'Estado',
        'inherent_risk' => 'Risco mais alto',
        'residual_risk' => 'Risco residual mais alto',
        'next_review_at' => 'Próxima revisão',
        'submitted' => 'Submetida à CPPA',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O tratamento, a sua finalidade e as categorias de informações pessoais que utiliza (Regulamento §7152).',
        'necessity' => 'Porque é que o tratamento é razoavelmente necessário e proporcional, e os seus benefícios ponderados face aos riscos.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento que vendem ou partilham informações pessoais, ou tratam informações pessoais sensíveis (Regulamento §7150(b)), e ainda não têm avaliação de risco.',
        'reviewer_opinion' => 'Os pareceres das pessoas que reviram a avaliação.',
        'submit' => 'Registe que as informações da avaliação de risco foram submetidas à California Privacy Protection Agency (Regulamento §7157).',
        'no_candidates' => 'Todas essas atividades de tratamento têm avaliação.',
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
        'linking' => 'Ligação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Deteção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovada',
        'review_due' => 'Revisão em falta',
    ],

    'reasons' => [
        'selling_sharing' => 'vende ou partilha informações pessoais',
        'sensitive_pi' => 'trata informações pessoais sensíveis',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'submit' => 'Marcar como submetida à CPPA',
        'candidates' => 'Avaliações em falta',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação de risco aprovada',
        'submitted' => 'Submissão registada',
        'no_risks' => 'Avalie pelo menos um risco antes de aprovar.',
    ],
];
