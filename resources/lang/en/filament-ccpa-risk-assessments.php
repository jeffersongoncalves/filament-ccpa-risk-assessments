<?php

return [
    'resource' => [
        'label' => 'Risk assessment',
        'plural_label' => 'Risk assessments',
    ],

    'fields' => [
        'title' => 'Title',
        'processing_activity' => 'Processing activity',
        'description' => 'Description of the processing',
        'necessity' => 'Necessity and proportionality',
        'risks' => 'Risks',
        'risk_title' => 'Risk',
        'threat' => 'Threat (LINDDUN)',
        'likelihood' => 'Likelihood',
        'impact' => 'Impact',
        'measures' => 'Measures, safeguards and mitigation mechanisms',
        'residual_likelihood' => 'Likelihood after measures',
        'residual_impact' => 'Impact after measures',
        'reviewer_opinion' => 'Reviewers\' views',
        'status' => 'Status',
        'inherent_risk' => 'Highest risk',
        'residual_risk' => 'Highest residual risk',
        'next_review_at' => 'Next review',
        'submitted' => 'Submitted to the CPPA',
        'approved_by' => 'Approved by',
    ],

    'help' => [
        'description' => 'The processing, its purpose and the categories of personal information it uses (Regulations §7152).',
        'necessity' => 'Why the processing is reasonably necessary and proportionate, and its benefits weighed against the risks.',
        'risks' => 'Risk level = likelihood x impact: 1-2 low, 3-4 medium, 6-9 high. Without the after-measures scores, the residual risk is the inherent one.',
        'candidates' => 'Processing activities that sell or share personal information, or process sensitive personal information (Regulations §7150(b)), and have no risk assessment yet.',
        'reviewer_opinion' => 'The views of the people who reviewed the assessment.',
        'submit' => 'Record that the risk assessment information was submitted to the California Privacy Protection Agency (Regulations §7157).',
        'no_candidates' => 'Every such processing activity has an assessment.',
    ],

    'scale' => [
        1 => '1 - Low',
        2 => '2 - Medium',
        3 => '3 - High',
    ],

    'levels' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'threats' => [
        'linking' => 'Linking',
        'identifying' => 'Identifying',
        'non_repudiation' => 'Non-repudiation',
        'detecting' => 'Detecting',
        'data_disclosure' => 'Data disclosure',
        'unawareness' => 'Unawareness',
        'non_compliance' => 'Non-compliance',
    ],

    'statuses' => [
        'draft' => 'Draft',
        'approved' => 'Approved',
        'review_due' => 'Review due',
    ],

    'reasons' => [
        'selling_sharing' => 'sells or shares personal information',
        'sensitive_pi' => 'processes sensitive personal information',
    ],

    'actions' => [
        'approve' => 'Approve',
        'export' => 'Export (JSON)',
        'submit' => 'Mark as submitted to the CPPA',
        'candidates' => 'Missing assessments',
        'close' => 'Close',
    ],

    'notifications' => [
        'approved' => 'Risk assessment approved',
        'submitted' => 'Submission recorded',
        'no_risks' => 'Assess at least one risk before approving.',
    ],
];
