<?php

return [
    'resource' => [
        'label' => 'Xavfni baholash',
        'plural_label' => 'Xavflarni baholash',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'processing_activity' => 'Ishlov berish faoliyati',
        'description' => 'Ishlov berish tavsifi',
        'necessity' => 'Zaruriyat va mutanosiblik',
        'risks' => 'Xavflar',
        'risk_title' => 'Xavf',
        'threat' => 'Tahdid (LINDDUN)',
        'likelihood' => 'Ehtimollik',
        'impact' => 'Ta\'sir',
        'measures' => 'Choralar, kafolatlar va yumshatish mexanizmlari',
        'residual_likelihood' => 'Choralardan keyingi ehtimollik',
        'residual_impact' => 'Choralardan keyingi ta\'sir',
        'reviewer_opinion' => 'Koʻrib chiquvchilarning fikrlari',
        'status' => 'Holat',
        'inherent_risk' => 'Eng yuqori xavf',
        'residual_risk' => 'Eng yuqori qoldiq xavf',
        'next_review_at' => 'Keyingi tekshiruv',
        'submitted' => 'CPPA ga topshirilgan',
        'approved_by' => 'Tasdiqlagan',
    ],

    'help' => [
        'description' => 'Qayta ishlash, uning maqsadi va foydalaniladigan shaxsiy maʼlumotlar toifalari (Qoidalar §7152).',
        'necessity' => 'Qayta ishlash nima uchun oqilona zarur va mutanosib ekani, uning foydalari xavflarga nisbatan qanday baholangani.',
        'risks' => 'Xavf darajasi = ehtimollik x ta\'sir: 1-2 past, 3-4 o\'rta, 6-9 yuqori. Choralardan keyingi baholar bo\'lmasa, qoldiq xavf dastlabki xavfga teng.',
        'candidates' => 'Shaxsiy maʼlumotlarni sotadigan yoki ulashadigan, yoxud nozik shaxsiy maʼlumotlarni qayta ishlaydigan (Qoidalar §7150(b)) va hali xavfni baholash oʻtkazilmagan faoliyatlar.',
        'reviewer_opinion' => 'Baholashni koʻrib chiqqan shaxslarning fikrlari.',
        'submit' => 'Xavfni baholash maʼlumotlari California Privacy Protection Agency ga topshirilganini qayd eting (Qoidalar §7157).',
        'no_candidates' => 'Bunday faoliyatlarning barchasida baholash bor.',
    ],

    'scale' => [
        '1' => '1 - Past',
        '2' => '2 - O\'rta',
        '3' => '3 - Yuqori',
    ],

    'levels' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'threats' => [
        'linking' => 'Bog\'lash',
        'identifying' => 'Identifikatsiya',
        'non_repudiation' => 'Rad etib bo\'lmaslik',
        'detecting' => 'Aniqlash',
        'data_disclosure' => 'Ma\'lumotlarni oshkor qilish',
        'unawareness' => 'Xabarsizlik',
        'non_compliance' => 'Nomuvofiqlik',
    ],

    'statuses' => [
        'draft' => 'Qoralama',
        'approved' => 'Tasdiqlangan',
        'review_due' => 'Tekshiruv vaqti keldi',
    ],

    'reasons' => [
        'selling_sharing' => 'shaxsiy maʼlumotlarni sotadi yoki ulashadi',
        'sensitive_pi' => 'nozik shaxsiy maʼlumotlarni qayta ishlaydi',
    ],

    'actions' => [
        'approve' => 'Tasdiqlash',
        'export' => 'Eksport (JSON)',
        'submit' => 'CPPA ga topshirilgan deb belgilash',
        'candidates' => 'Yetishmayotgan baholashlar',
        'close' => 'Yopish',
    ],

    'notifications' => [
        'approved' => 'Xavfni baholash tasdiqlandi',
        'submitted' => 'Topshirish qayd etildi',
        'no_risks' => 'Tasdiqlashdan oldin kamida bitta xavfni baholang.',
    ],
];
