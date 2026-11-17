<?php

return [
    'resource' => [
        'label' => 'Risk değerlendirmesi',
        'plural_label' => 'Risk değerlendirmeleri',
    ],

    'fields' => [
        'title' => 'Başlık',
        'processing_activity' => 'İşleme faaliyeti',
        'description' => 'İşlemenin tanımı',
        'necessity' => 'Gereklilik ve orantılılık',
        'risks' => 'Riskler',
        'risk_title' => 'Risk',
        'threat' => 'Tehdit (LINDDUN)',
        'likelihood' => 'Olasılık',
        'impact' => 'Etki',
        'measures' => 'Önlemler, güvenceler ve azaltma mekanizmaları',
        'residual_likelihood' => 'Önlemlerden sonra olasılık',
        'residual_impact' => 'Önlemlerden sonra etki',
        'reviewer_opinion' => 'İnceleyenlerin görüşleri',
        'status' => 'Durum',
        'inherent_risk' => 'En yüksek risk',
        'residual_risk' => 'En yüksek kalıntı risk',
        'next_review_at' => 'Sonraki inceleme',
        'submitted' => 'CPPA\'ya sunuldu',
        'approved_by' => 'Onaylayan',
    ],

    'help' => [
        'description' => 'İşleme, amacı ve kullandığı kişisel bilgi kategorileri (Yönetmelik §7152).',
        'necessity' => 'İşlemenin neden makul ölçüde gerekli ve orantılı olduğu ve faydalarının risklere karşı tartılması.',
        'risks' => 'Risk seviyesi = olasılık x etki: 1-2 düşük, 3-4 orta, 6-9 yüksek. Önlem sonrası puanlar yoksa kalıntı risk doğal risktir.',
        'candidates' => 'Kişisel bilgileri satan veya paylaşan ya da hassas kişisel bilgileri işleyen (Yönetmelik §7150(b)) ve henüz risk değerlendirmesi olmayan işleme faaliyetleri.',
        'reviewer_opinion' => 'Değerlendirmeyi inceleyen kişilerin görüşleri.',
        'submit' => 'Risk değerlendirmesi bilgilerinin California Privacy Protection Agency\'ye sunulduğunu kaydedin (Yönetmelik §7157).',
        'no_candidates' => 'Bu işleme faaliyetlerinin hepsinin değerlendirmesi var.',
    ],

    'scale' => [
        '1' => '1 - Düşük',
        '2' => '2 - Orta',
        '3' => '3 - Yüksek',
    ],

    'levels' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'threats' => [
        'linking' => 'Bağlantılama',
        'identifying' => 'Tanımlama',
        'non_repudiation' => 'İnkâr edilemezlik',
        'detecting' => 'Tespit',
        'data_disclosure' => 'Verilerin ifşası',
        'unawareness' => 'Habersizlik',
        'non_compliance' => 'Uyumsuzluk',
    ],

    'statuses' => [
        'draft' => 'Taslak',
        'approved' => 'Onaylandı',
        'review_due' => 'İnceleme zamanı geldi',
    ],

    'reasons' => [
        'selling_sharing' => 'kişisel bilgileri satıyor veya paylaşıyor',
        'sensitive_pi' => 'hassas kişisel bilgileri işliyor',
    ],

    'actions' => [
        'approve' => 'Onayla',
        'export' => 'Dışa aktar (JSON)',
        'submit' => 'CPPA\'ya sunuldu olarak işaretle',
        'candidates' => 'Eksik değerlendirmeler',
        'close' => 'Kapat',
    ],

    'notifications' => [
        'approved' => 'Risk değerlendirmesi onaylandı',
        'submitted' => 'Sunum kaydedildi',
        'no_risks' => 'Onaylamadan önce en az bir riski değerlendirin.',
    ],
];
