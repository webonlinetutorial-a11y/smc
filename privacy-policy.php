<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/privacy-policy', [
    'title' => 'Privacy Policy | ' . configValue('app.name', 'Indian Mill Stores Website'),
    'metaDescription' => 'Read the privacy policy for Indian Mill Stores and learn how we collect, use, and protect your information.',
    'pageEyebrow' => 'Legal',
    'pageHeading' => 'Privacy Policy',
    'pageIntro' => 'How we collect, use, and protect your information.',
    'introText' => 'This privacy notice for Indian Mill Stores website describes how and why we might collect, store, use, and/or share ("process") your information when you use our services, such as when you visit our website that links to this privacy policy, or engage with us in other related ways — including any sales, marketing, or events.',
    'faqHeading' => 'Frequently Asked Questions',
    'faqs' => [
        [
            'question' => 'What personal information do we process?',
            'answer' => 'When you visit, use, or navigate our Services, we may process personal information depending on how you interact with us and the Services, the choices you make, and the products and features you use.',
        ],
        [
            'question' => 'Do we process any sensitive personal information?',
            'answer' => 'We do not process sensitive personal information. However, we may process sensitive personal information, when necessary, with your consent or as otherwise permitted by applicable law.',
        ],
        [
            'question' => 'Do we receive any information from third parties?',
            'answer' => 'We may receive information from public databases, marketing partners, social media platforms, and other outside sources as per our requirements from time to time.',
        ],
        [
            'question' => 'How do we process your information?',
            'answer' => 'We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent. However, it may be noted that we process your information only when we have a valid legal reason to do so.',
        ],
        [
            'question' => 'In what situations and with which types of parties do we share personal information?',
            'answer' => 'We may share information in specific situations and with specific categories of third parties.',
        ],
        [
            'question' => 'How do we keep your information safe?',
            'answer' => 'We have organizational and technical processes and procedures in place to protect your personal information. However, no electronic transmission over the internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information.',
        ],
    ],
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Privacy Policy'],
    ],
]);
