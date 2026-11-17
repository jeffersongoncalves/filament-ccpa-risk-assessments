<?php

return [
    'resource' => [
        'label' => 'Risk qiymətləndirməsi',
        'plural_label' => 'Risk qiymətləndirmələri',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'processing_activity' => 'Emal fəaliyyəti',
        'description' => 'Emalın təsviri',
        'necessity' => 'Zərurət və mütənasiblik',
        'risks' => 'Risklər',
        'risk_title' => 'Risk',
        'threat' => 'Təhlükə (LINDDUN)',
        'likelihood' => 'Ehtimal',
        'impact' => 'Təsir',
        'measures' => 'Tədbirlər, təminatlar və azaltma mexanizmləri',
        'residual_likelihood' => 'Tədbirlərdən sonra ehtimal',
        'residual_impact' => 'Tədbirlərdən sonra təsir',
        'reviewer_opinion' => 'Rəyçilərin fikirləri',
        'status' => 'Status',
        'inherent_risk' => 'Ən yüksək risk',
        'residual_risk' => 'Ən yüksək qalıq risk',
        'next_review_at' => 'Növbəti yoxlama',
        'submitted' => 'CPPA-ya təqdim edilib',
        'approved_by' => 'Təsdiq edən',
    ],

    'help' => [
        'description' => 'Emal, onun məqsədi və istifadə etdiyi şəxsi məlumat kateqoriyaları (Qaydalar §7152).',
        'necessity' => 'Emalın nə üçün ağlabatan dərəcədə zəruri və mütənasib olduğu, faydalarının risklərlə müqayisəsi.',
        'risks' => 'Risk səviyyəsi = ehtimal x təsir: 1-2 aşağı, 3-4 orta, 6-9 yüksək. Tədbirlərdən sonrakı qiymət olmadıqda qalıq risk ilkin riskə bərabərdir.',
        'candidates' => 'Şəxsi məlumatları satan və ya paylaşan, yaxud həssas şəxsi məlumatları emal edən (Qaydalar §7150(b)) və hələ risk qiymətləndirməsi olmayan emal fəaliyyətləri.',
        'reviewer_opinion' => 'Qiymətləndirməni nəzərdən keçirən şəxslərin fikirləri.',
        'submit' => 'Risk qiymətləndirməsi məlumatlarının California Privacy Protection Agency-yə təqdim edildiyini qeyd edin (Qaydalar §7157).',
        'no_candidates' => 'Belə fəaliyyətlərin hamısının qiymətləndirməsi var.',
    ],

    'scale' => [
        '1' => '1 - Aşağı',
        '2' => '2 - Orta',
        '3' => '3 - Yüksək',
    ],

    'levels' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'threats' => [
        'linking' => 'Əlaqələndirmə',
        'identifying' => 'İdentifikasiya',
        'non_repudiation' => 'İnkar edilməzlik',
        'detecting' => 'Aşkarlama',
        'data_disclosure' => 'Məlumatların ifşası',
        'unawareness' => 'Xəbərsizlik',
        'non_compliance' => 'Uyğunsuzluq',
    ],

    'statuses' => [
        'draft' => 'Qaralama',
        'approved' => 'Təsdiqlənib',
        'review_due' => 'Yoxlama vaxtı çatıb',
    ],

    'reasons' => [
        'selling_sharing' => 'şəxsi məlumatları satır və ya paylaşır',
        'sensitive_pi' => 'həssas şəxsi məlumatları emal edir',
    ],

    'actions' => [
        'approve' => 'Təsdiq et',
        'export' => 'İxrac (JSON)',
        'submit' => 'CPPA-ya təqdim edilmiş kimi qeyd etmək',
        'candidates' => 'Çatışmayan qiymətləndirmələr',
        'close' => 'Bağla',
    ],

    'notifications' => [
        'approved' => 'Risk qiymətləndirməsi təsdiqləndi',
        'submitted' => 'Təqdimat qeydə alındı',
        'no_risks' => 'Təsdiqdən əvvəl ən azı bir riski qiymətləndirin.',
    ],
];
