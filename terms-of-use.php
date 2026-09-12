<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/terms-of-use', [
    'title' => 'Terms of Use | ' . configValue('app.name', 'Indian Mill Stores Website'),
    'metaDescription' => 'Read the terms and conditions for using the Indian Mill Stores website and purchasing our products.',
    'pageEyebrow' => 'Legal',
    'pageHeading' => 'Terms of Use',
    'pageIntro' => 'The terms and conditions governing use of this website and our products.',
    'sections' => [
        [
            'heading' => 'Terms & Conditions',
            'items' => [
                ['text' => 'This website is operated by Indian Mill Stores (India) Pvt. Ltd. (hereinafter called "the Company").'],
                ['text' => 'Copyrights and any other rights of all texts, graphics, images, trademarks, logos, etc. included in this website belong to the Company, the original authors, or other rights holders. Duplication, reproduction, modification, deletion, transmission, distribution, etc. of the data on this website without the permission of the Company, original authors, or other rights holders are prohibited by copyright laws, except in cases that the copyright laws allow. Please obtain the permission of the Company in advance before using any of the contents of this website.'],
                ['text' => 'We take every effort to ensure that the information on this website is accurate and up-to-date, but make no guarantees of its completeness. Also, we assume no responsibility for any incorrect or unlisted information on this website.'],
                ['text' => 'Please note that we reserve the right to change the contents/use conditions of this website, or to change, postpone, discontinue or terminate the products/service on this website without notice.'],
                ['text' => 'If you would like to link to this website, please contact us in advance by e-mail "marketing.in@indianmillstores.com" so that we can confirm the purpose and contents of your website. We may decline linking from a website that is deemed inappropriate.'],
                ['text' => 'As a general rule, links to this website should be to the front page, "https://www.indianmillstores.com".'],
                ['text' => 'Please note that the URLs other than the front page are subject to change at our convenience without notice.'],
                ['text' => 'The Company will not be liable for any links to this website. We assume no responsibility whatever for any damage resulting from the use of information on this site.'],
            ],
        ],
        [
            'heading' => 'Terms and Conditions - E-commerce',
            'items' => [
                ['label' => 'General: ', 'text' => 'All deliveries and services from "Indian Mill Store" Corporation (India) Pvt. Ltd. D-107 to 112, Phase-II Extn. Noida, Distt. Gautam Budh Nagar, U.P. or A-4, Sector-88, Noida, U.P. or P-41/3, Mahindra World City, 8th Avenue, Domestic Tariff Zone, Natham Sub P.O., Chengalpet District, Tamil Nadu or Plot no.-106, 107, 108, 109, 110, Gallops Industrial Park I, NH-8A Sarkhej-Bavla Road, Rajoda, Ahmedabad, Gujarat hereinafter called Indian Mill Stores shall be governed by the following terms and conditions. No deviation from these except those accepted in writing shall be binding. It is clearly understood that the customer has accepted all our conditions mentioned below and has waived off all purchase conditions in the event of placing the order.'],
                ['label' => 'Delivery: ', 'text' => 'We shall endeavor to keep scheduled delivery dates. However, Indian Mill Stores will not be liable to the buyer for a delay due to incomplete details or any unforeseen events on which the manufacture and transportation of the object of supply materially depend.'],
                ['label' => 'Quantity: ', 'text' => "If you place consecutive or separate orders, we can't consolidate your orders. A separate delivery fee, if applicable, will apply to each order. Subject to any applicable quantity restrictions, you can order as many Goods as you wish in one order."],
                ['label' => 'Pricing: ', 'text' => 'Unless otherwise stated on the website all Prices are inclusive of P&F, Freight, and applicable taxes.'],
                ['label' => 'Return Policy: ', 'text' => 'Indian Mill Stores warrants the equipment manufactured by it to be free from defects. Upon return, transportation charges are prepaid to the "Indian Mill Stores" factory within one year of the original shipment. Indian Mill Stores will repair or replace, at its option, any equipment which determines to contain defective material or workmanship, and will return said equipment to the purchaser. Indian Mill Stores shall not be obligated, however, to repair or replace equipment that has been repaired by others, abused, improperly installed, altered, or otherwise misused or damaged in any way. Indian Mill Stores will not be responsible for any dismantling, reassembly, or re-installation charges. This warranty is in lieu of all other warranties expressed or implied. Indian Mill Stores shall not be liable for any special, indirect, incidental, or consequential damages, including damages claimed in connection with any recission of this agreement by the purchaser. Indian Mill Stores may, if specified, reduce or extend the period of warranty.'],
                ['label' => 'Right: ', 'text' => 'Indian Mill Stores reserves the right to accept or reject your order for any reason at any time. If Indian Mill Stores rejects your order you will receive a refund of any money paid. We also reserve the right to change prices and terms and conditions without any prior notice.'],
                ['label' => 'Place of Jurisdiction: ', 'text' => 'The contractual obligations are governed by Indian laws. The place of jurisdiction for all matters of dispatch shall be Delhi and suits by or against us shall be filed in the courts situated at Delhi exclusively.'],
            ],
        ],
    ],
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Terms of Use'],
    ],
]);
