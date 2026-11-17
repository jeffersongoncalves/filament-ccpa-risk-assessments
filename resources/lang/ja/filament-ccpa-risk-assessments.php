<?php

return [
    'resource' => [
        'label' => 'リスク評価',
        'plural_label' => 'リスク評価',
    ],

    'fields' => [
        'title' => 'タイトル',
        'processing_activity' => '処理活動',
        'description' => '処理の説明',
        'necessity' => '必要性と比例性',
        'risks' => 'リスク',
        'risk_title' => 'リスク',
        'threat' => '脅威（LINDDUN）',
        'likelihood' => '発生可能性',
        'impact' => '影響度',
        'measures' => '対策・保護措置・軽減策',
        'residual_likelihood' => '対策後の発生可能性',
        'residual_impact' => '対策後の影響度',
        'reviewer_opinion' => 'レビュー担当者の見解',
        'status' => 'ステータス',
        'inherent_risk' => '最大のリスク',
        'residual_risk' => '最大の残存リスク',
        'next_review_at' => '次回レビュー',
        'submitted' => 'CPPA に提出済み',
        'approved_by' => '承認者',
    ],

    'help' => [
        'description' => '処理、その目的、および利用する個人情報のカテゴリ（規則 §7152）。',
        'necessity' => '処理が合理的に必要かつ相当である理由と、その利益とリスクの比較衡量。',
        'risks' => 'リスクレベル = 発生可能性 x 影響度：1-2 低、3-4 中、6-9 高。対策後の評価がない場合、残存リスクは固有リスクと同じです。',
        'candidates' => '個人情報を販売・共有する、またはセンシティブな個人情報を処理する（規則 §7150(b)）にもかかわらず、まだリスク評価のない処理活動。',
        'reviewer_opinion' => '評価をレビューした人々の見解。',
        'submit' => 'リスク評価の情報を California Privacy Protection Agency に提出したことを記録します（規則 §7157）。',
        'no_candidates' => '該当する処理活動はすべて評価済みです。',
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
        'linking' => 'リンク付け',
        'identifying' => '識別',
        'non_repudiation' => '否認防止',
        'detecting' => '検知',
        'data_disclosure' => 'データの開示',
        'unawareness' => '認識の欠如',
        'non_compliance' => '非遵守',
    ],

    'statuses' => [
        'draft' => '下書き',
        'approved' => '承認済み',
        'review_due' => 'レビュー期限',
    ],

    'reasons' => [
        'selling_sharing' => '個人情報を販売・共有している',
        'sensitive_pi' => 'センシティブな個人情報を処理している',
    ],

    'actions' => [
        'approve' => '承認',
        'export' => 'エクスポート（JSON）',
        'submit' => 'CPPA に提出済みにする',
        'candidates' => '不足している評価',
        'close' => '閉じる',
    ],

    'notifications' => [
        'approved' => 'リスク評価を承認しました',
        'submitted' => '提出を記録しました',
        'no_risks' => '承認する前に少なくとも1つのリスクを評価してください。',
    ],
];
