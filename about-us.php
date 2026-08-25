<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'About Us | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Learn about Nepack and its industrial automation capabilities.',
    'pageEyebrow' => 'Company',
    'pageHeading' => 'About Us',
    'pageIntro' => 'Your trusted partner for industrial automation and pneumatic solutions.',
    'pageBannerImage' => 'images/about-img2.webp',
    'pageBannerImageAlt' => 'Industrial automation and pneumatic equipment',
    'contentEyebrow' => 'Who We Are',
    'contentHeading' => 'Bharat Mill',
    'contentText' => 'We are a Uttar Pradesh based trading house dealing with pneumatic and automation solutions across India for more than three decades. We provide reliable products from reputable manufacturers, along with expert support, to help industries operate more efficiently.',
    'contentImage' => 'images/about-img1.webp',
    'contentImageAlt' => 'Bharat Mill industrial automation facility',
    'contentCtaLabel' => 'Explore Our Products',
    'contentCtaUrl' => '/products.php',
    'strengthsEyebrow' => 'Our Strength',
    'strengthsHeading' => 'Why Choose Bharat Mill',
    'strengths' => [
        ['users', 'Customer-Focused Service', 'We understand your needs and provide tailored solutions with responsive support.'],
        ['shield-check', 'Trusted Product Range', 'We offer high-quality, certified products from reputed manufacturers.'],
        ['headphones', 'After-Sales Support', 'Dedicated assistance post-purchase to help with product usage, troubleshooting, and satisfaction.'],
    ],
    'ctaEyebrow' => "Let's Work Together",
    'ctaHeading' => 'Need a Solution for Your Application?',
    'ctaText' => 'Get in touch with our team for the right products and expert guidance.',
    'ctaPrimaryLabel' => 'Contact Us',
    'ctaPrimaryUrl' => '/contact-us.php',
    'ctaSecondaryLabel' => 'Request Quotation',
    'ctaSecondaryUrl' => '/contact-us.php',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'About Us'],
    ],
]);
