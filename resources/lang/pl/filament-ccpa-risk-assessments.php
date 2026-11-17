<?php

return [
    'resource' => [
        'label' => 'Ocena ryzyka',
        'plural_label' => 'Oceny ryzyka',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'processing_activity' => 'Czynność przetwarzania',
        'description' => 'Opis przetwarzania',
        'necessity' => 'Niezbędność i proporcjonalność',
        'risks' => 'Ryzyka',
        'risk_title' => 'Ryzyko',
        'threat' => 'Zagrożenie (LINDDUN)',
        'likelihood' => 'Prawdopodobieństwo',
        'impact' => 'Wpływ',
        'measures' => 'Środki, zabezpieczenia i mechanizmy ograniczania',
        'residual_likelihood' => 'Prawdopodobieństwo po środkach',
        'residual_impact' => 'Wpływ po środkach',
        'reviewer_opinion' => 'Opinie recenzentów',
        'status' => 'Status',
        'inherent_risk' => 'Najwyższe ryzyko',
        'residual_risk' => 'Najwyższe ryzyko szczątkowe',
        'next_review_at' => 'Następny przegląd',
        'submitted' => 'Przekazano do CPPA',
        'approved_by' => 'Zatwierdził',
    ],

    'help' => [
        'description' => 'Przetwarzanie, jego cel i kategorie wykorzystywanych danych osobowych (Rozporządzenie §7152).',
        'necessity' => 'Dlaczego przetwarzanie jest rozsądnie konieczne i proporcjonalne oraz jak jego korzyści mają się do ryzyka.',
        'risks' => 'Poziom ryzyka = prawdopodobieństwo x wpływ: 1-2 niskie, 3-4 średnie, 6-9 wysokie. Bez ocen po środkach ryzyko szczątkowe równa się ryzyku inherentnemu.',
        'candidates' => 'Czynności przetwarzania, które sprzedają lub udostępniają dane osobowe albo przetwarzają wrażliwe dane osobowe (Rozporządzenie §7150(b)), i nie mają jeszcze oceny ryzyka.',
        'reviewer_opinion' => 'Opinie osób, które przejrzały ocenę.',
        'submit' => 'Zapisz, że informacje z oceny ryzyka przekazano do California Privacy Protection Agency (Rozporządzenie §7157).',
        'no_candidates' => 'Każda taka czynność przetwarzania ma ocenę.',
    ],

    'scale' => [
        '1' => '1 - Niskie',
        '2' => '2 - Średnie',
        '3' => '3 - Wysokie',
    ],

    'levels' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'threats' => [
        'linking' => 'Powiązanie',
        'identifying' => 'Identyfikacja',
        'non_repudiation' => 'Niezaprzeczalność',
        'detecting' => 'Wykrywanie',
        'data_disclosure' => 'Ujawnienie danych',
        'unawareness' => 'Nieświadomość',
        'non_compliance' => 'Niezgodność',
    ],

    'statuses' => [
        'draft' => 'Szkic',
        'approved' => 'Zatwierdzona',
        'review_due' => 'Wymagany przegląd',
    ],

    'reasons' => [
        'selling_sharing' => 'sprzedaje lub udostępnia dane osobowe',
        'sensitive_pi' => 'przetwarza wrażliwe dane osobowe',
    ],

    'actions' => [
        'approve' => 'Zatwierdź',
        'export' => 'Eksportuj (JSON)',
        'submit' => 'Oznacz jako przekazaną do CPPA',
        'candidates' => 'Brakujące oceny',
        'close' => 'Zamknij',
    ],

    'notifications' => [
        'approved' => 'Ocena ryzyka zatwierdzona',
        'submitted' => 'Zapisano przekazanie',
        'no_risks' => 'Przed zatwierdzeniem oceń co najmniej jedno ryzyko.',
    ],
];
