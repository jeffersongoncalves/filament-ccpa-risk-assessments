<?php

return [
    'resource' => [
        'label' => '风险评估',
        'plural_label' => '风险评估',
    ],

    'fields' => [
        'title' => '标题',
        'processing_activity' => '处理活动',
        'description' => '处理说明',
        'necessity' => '必要性与相称性',
        'risks' => '风险',
        'risk_title' => '风险',
        'threat' => '威胁（LINDDUN）',
        'likelihood' => '可能性',
        'impact' => '影响',
        'measures' => '措施、保障和缓解机制',
        'residual_likelihood' => '采取措施后的可能性',
        'residual_impact' => '采取措施后的影响',
        'reviewer_opinion' => '审阅者意见',
        'status' => '状态',
        'inherent_risk' => '最高风险',
        'residual_risk' => '最高剩余风险',
        'next_review_at' => '下次审查',
        'submitted' => '已提交 CPPA',
        'approved_by' => '批准人',
    ],

    'help' => [
        'description' => '处理活动、其目的及所使用的个人信息类别（法规 §7152）。',
        'necessity' => '说明处理为何具有合理必要性和相称性，并权衡其收益与风险。',
        'risks' => '风险等级 = 可能性 x 影响：1-2 低，3-4 中，6-9 高。没有措施后评分时，剩余风险等于固有风险。',
        'candidates' => '出售或共享个人信息、或处理敏感个人信息（法规 §7150(b)）且尚无风险评估的处理活动。',
        'reviewer_opinion' => '审阅该评估的人员的意见。',
        'submit' => '记录风险评估信息已提交给加州隐私保护局（California Privacy Protection Agency）（法规 §7157）。',
        'no_candidates' => '所有此类处理活动都已有评估。',
    ],

    'scale' => [
        '1' => '1 - 低',
        '2' => '2 - 中',
        '3' => '3 - 高',
    ],

    'levels' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'threats' => [
        'linking' => '关联',
        'identifying' => '识别',
        'non_repudiation' => '不可否认',
        'detecting' => '检测',
        'data_disclosure' => '数据泄露',
        'unawareness' => '不知情',
        'non_compliance' => '不合规',
    ],

    'statuses' => [
        'draft' => '草稿',
        'approved' => '已批准',
        'review_due' => '需要审查',
    ],

    'reasons' => [
        'selling_sharing' => '出售或共享个人信息',
        'sensitive_pi' => '处理敏感个人信息',
    ],

    'actions' => [
        'approve' => '批准',
        'export' => '导出（JSON）',
        'submit' => '标记为已提交 CPPA',
        'candidates' => '缺少的评估',
        'close' => '关闭',
    ],

    'notifications' => [
        'approved' => '风险评估已批准',
        'submitted' => '已记录提交',
        'no_risks' => '批准前请至少评估一项风险。',
    ],
];
