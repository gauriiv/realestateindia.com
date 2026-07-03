<?php
include 'includes/header.php';

$type = isset($_GET['type']) ? htmlspecialchars($_GET['type']) : 'Agents';

$serviceData = [
    'Agents' => [
        'title' => 'Agent Services',
        'subtitle' => 'Find the perfect real estate agent to guide you through buying, selling, or renting.',
        'options' => [
            ['icon' => '👨‍💼', 'title' => 'Buying Agents', 'desc' => 'Experts who will help you find and negotiate the best deal on your dream home.'],
            ['icon' => '📈', 'title' => 'Selling Agents', 'desc' => 'Maximize your property value with our top-rated selling experts.'],
            ['icon' => '🔑', 'title' => 'Rental Agents', 'desc' => 'Find verified tenants quickly and hassle-free.']
        ]
    ],
    'Builders' => [
        'title' => 'Builders & Developers',
        'subtitle' => 'Connect with top-rated developers for your next big project.',
        'options' => [
            ['icon' => '🏢', 'title' => 'Commercial Developers', 'desc' => 'Specialists in office spaces and retail complexes.'],
            ['icon' => '🏡', 'title' => 'Residential Builders', 'desc' => 'Premium villa and apartment constructors.'],
            ['icon' => '🏗️', 'title' => 'Custom Home Builders', 'desc' => 'Build your customized dream home from scratch.']
        ]
    ],
    'Architecture' => [
        'title' => 'Architecture Services',
        'subtitle' => 'Get professional architectural designs tailored to your vision.',
        'options' => [
            ['icon' => '📐', 'title' => 'Residential Design', 'desc' => 'Modern, sustainable, and beautiful home designs.'],
            ['icon' => '🏢', 'title' => 'Commercial Layouts', 'desc' => 'Optimized space planning for your business.'],
            ['icon' => '🌳', 'title' => 'Landscape Architecture', 'desc' => 'Transform your outdoors with stunning landscapes.']
        ]
    ],
    'Interior' => [
        'title' => 'Interior Design',
        'subtitle' => 'Decorate your dream home with top interior design experts.',
        'options' => [
            ['icon' => '🛋️', 'title' => 'Living Room Makeover', 'desc' => 'Cozy and modern setups for your family area.'],
            ['icon' => '🛏️', 'title' => 'Bedroom Styling', 'desc' => 'Relaxing and personalized bedroom designs.'],
            ['icon' => '🍳', 'title' => 'Modular Kitchens', 'desc' => 'Sleek, highly functional, and space-saving kitchens.']
        ]
    ],
    'Vastu' => [
        'title' => 'Vastu Consultants',
        'subtitle' => 'Ensure harmony, prosperity, and positive energy in your space.',
        'options' => [
            ['icon' => '🏠', 'title' => 'Residential Vastu', 'desc' => 'Align your home with natural positive energies.'],
            ['icon' => '🏢', 'title' => 'Office Vastu', 'desc' => 'Boost productivity and success in your workspace.'],
            ['icon' => '🗺️', 'title' => 'Plot Vastu', 'desc' => 'Consultations before you begin your construction.']
        ]
    ],
    'Contractors' => [
        'title' => 'Building Contractors',
        'subtitle' => 'Hire reliable and experienced contractors for your construction needs.',
        'options' => [
            ['icon' => '🧱', 'title' => 'Turnkey Contractors', 'desc' => 'End-to-end solutions from foundation to finish.'],
            ['icon' => '🛠️', 'title' => 'Renovation Experts', 'desc' => 'Upgrade and repair your existing property.'],
            ['icon' => '⚡', 'title' => 'MEP Contractors', 'desc' => 'Mechanical, Electrical, and Plumbing specialists.']
        ]
    ],
    'Inspection' => [
        'title' => 'Home Inspection',
        'subtitle' => 'Get a comprehensive evaluation of the property before making a deal.',
        'options' => [
            ['icon' => '🔍', 'title' => 'Pre-Purchase Inspection', 'desc' => 'Ensure the property is safe and structurally sound.'],
            ['icon' => '💧', 'title' => 'Leakage & Seepage Check', 'desc' => 'Identify hidden water damage and plumbing issues.'],
            ['icon' => '⚡', 'title' => 'Electrical Safety Audit', 'desc' => 'Complete testing of wiring and panels for safety.']
        ]
    ],
    'Consultants' => [
        'title' => 'Property Consultants',
        'subtitle' => 'Expert legal and investment advice for your real estate journey.',
        'options' => [
            ['icon' => '⚖️', 'title' => 'Legal Advisory', 'desc' => 'Ensure all property documents and titles are clear.'],
            ['icon' => '💰', 'title' => 'Investment Consulting', 'desc' => 'Find the highest ROI properties for your portfolio.'],
            ['icon' => '🏦', 'title' => 'Loan & Finance Advisory', 'desc' => 'Get the best mortgage rates and financing options.']
        ]
    ]
];

$data = $serviceData[$type] ?? $serviceData['Agents'];
?>

<link rel="stylesheet" href="assets/css/services_page.css">

<main class="services-page">
    <div class="sp-hero">
        <h1><?= $data['title'] ?></h1>
        <p><?= $data['subtitle'] ?></p>
    </div>

    <div class="sp-container">
        <div class="sp-options-grid">
            <?php foreach($data['options'] as $option): ?>
            <div class="sp-option-card">
                <div class="sp-option-icon"><?= $option['icon'] ?></div>
                <h3><?= $option['title'] ?></h3>
                <p><?= $option['desc'] ?></p>
                <button class="sp-btn">Explore Providers</button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
