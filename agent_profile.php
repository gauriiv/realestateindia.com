<?php 
include 'includes/header.php'; 

$agentName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Rajesh Kumar';

// Mock data base
$agents = [
    'Rajesh Kumar' => [
        'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=300&q=80',
        'firm' => 'RK Properties',
        'rating' => 4.5,
        'reviews' => 124,
        'loc' => 'Andheri West, Mumbai',
        'phone' => '+91 98765 43210',
        'email' => 'rajesh@rkproperties.in',
        'whatsapp' => '+91 98765 43210',
        'desc' => 'Rajesh is a seasoned real estate professional with over 15 years of experience in the Mumbai market. Specializing in luxury residential and commercial properties, he has successfully closed over 500 deals and is known for his transparent and client-first approach.',
        'exp' => '15+ Years',
        'sales' => '500+',
        'active' => '32'
    ],
    'Priya Sharma' => [
        'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80',
        'firm' => 'Sharma Realty Group',
        'rating' => 5.0,
        'reviews' => 89,
        'loc' => 'Dwarka, New Delhi',
        'phone' => '+91 87654 32109',
        'email' => 'priya@sharmarealty.in',
        'whatsapp' => '+91 87654 32109',
        'desc' => 'Priya brings a wealth of knowledge and expertise about buying and selling real estate in Delhi NCR. She is dedicated to finding the perfect fit for her clients and offers deep insights into neighborhood trends.',
        'exp' => '8 Years',
        'sales' => '210',
        'active' => '18'
    ],
    'Viri Sharmav' => [
        'img' => 'https://images.unsplash.com/photo-1780396508935-94e234affc92?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'firm' => 'Viri Associates',
        'rating' => 5.0,
        'reviews' => 2105,
        'loc' => 'Hassanpur',
        'phone' => '+91 76543 21098',
        'email' => 'viri@viriassociates.in',
        'whatsapp' => '+91 76543 21098',
        'desc' => 'With unparalleled local knowledge and thousands of satisfied clients, Viri is the top-rated agent in Hassanpur. He specializes in agricultural lands, large plots, and premium villas.',
        'exp' => '20+ Years',
        'sales' => '3000+',
        'active' => '120'
    ],
    'Amit Patel' => [
        'img' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=300&q=80',
        'firm' => 'Patel Associates',
        'rating' => 4.0,
        'reviews' => 45,
        'loc' => 'SG Highway, Ahmedabad',
        'phone' => '+91 65432 10987',
        'email' => 'amit@patelrealty.in',
        'whatsapp' => '+91 65432 10987',
        'desc' => 'Amit focuses on commercial and retail leasing across Ahmedabad. He helps businesses find the perfect spot to grow their operations with strategic lease negotiations.',
        'exp' => '5 Years',
        'sales' => '85',
        'active' => '24'
    ],
    'Neha Gupta' => [
        'img' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=300&q=80',
        'firm' => 'Gupta Real Estate',
        'rating' => 4.5,
        'reviews' => 112,
        'loc' => 'Koregaon Park, Pune',
        'phone' => '+91 54321 09876',
        'email' => 'neha@guptaestates.in',
        'whatsapp' => '+91 54321 09876',
        'desc' => 'Specializing in the vibrant Pune market, Neha is passionate about connecting families with beautiful residential apartments and bespoke villas in premium localities.',
        'exp' => '10 Years',
        'sales' => '320',
        'active' => '45'
    ]
];

$agent = $agents[$agentName] ?? $agents['Rajesh Kumar'];

// Mock up some properties for this agent
$agentProjects = [
    [
        'title' => 'Luxury Apartment 3BHK',
        'price' => '₹ 1.8 Cr',
        'loc' => $agent['loc'],
        'img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=400&q=80'
    ],
    [
        'title' => 'Premium Villa 4BHK',
        'price' => '₹ 3.5 Cr',
        'loc' => $agent['loc'],
        'img' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=400&q=80'
    ],
    [
        'title' => 'Commercial Office Space',
        'price' => '₹ 85 Lacs',
        'loc' => $agent['loc'],
        'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&q=80'
    ],
    [
        'title' => 'Modern Studio Apartment',
        'price' => '₹ 45 Lacs',
        'loc' => $agent['loc'],
        'img' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=400&q=80'
    ]
];
?>

<link rel="stylesheet" href="assets/css/agent_profile.css">

<main class="agent-profile-page">
    <div class="ap-container">
        
        <!-- Left Sidebar: Agent Identity & Contact -->
        <aside class="ap-sidebar">
            <img class="ap-avatar" src="<?= $agent['img'] ?>" alt="<?= $agentName ?>">
            <h2><?= $agentName ?></h2>
            <p class="ap-firm"><i class="fa-solid fa-briefcase"></i> <?= $agent['firm'] ?></p>
            
            <div class="ap-rating">
                <?php
                $fullStars = floor($agent['rating']);
                $halfStar = ($agent['rating'] - $fullStars) >= 0.5 ? 1 : 0;
                $emptyStars = 5 - $fullStars - $halfStar;

                for($i=0; $i<$fullStars; $i++) echo '<i class="fa-solid fa-star"></i>';
                if($halfStar) echo '<i class="fa-solid fa-star-half-stroke"></i>';
                for($i=0; $i<$emptyStars; $i++) echo '<i class="fa-regular fa-star"></i>';
                ?>
                <span>(<?= $agent['reviews'] ?> Reviews)</span>
            </div>

            <div class="ap-contact-info">
                <div class="ap-contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span><?= $agent['loc'] ?></span>
                </div>
                <div class="ap-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span><?= $agent['phone'] ?></span>
                </div>
                <div class="ap-contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span><?= $agent['email'] ?></span>
                </div>
            </div>

            <div class="ap-actions">
                <button class="ap-btn ap-btn-primary" onclick="alert('Calling <?= $agent['phone'] ?>...')"><i class="fa-solid fa-phone"></i> Call Now</button>
                <button class="ap-btn ap-btn-outline" onclick="alert('Opening WhatsApp to <?= $agent['whatsapp'] ?>...')"><i class="fa-brands fa-whatsapp"></i> WhatsApp</button>
                <button class="ap-btn ap-btn-outline" onclick="alert('Drafting email to <?= $agent['email'] ?>...')"><i class="fa-regular fa-envelope"></i> Message</button>
            </div>
        </aside>

        <!-- Right Content: About & Projects -->
        <section class="ap-content">
            <div class="ap-about">
                <h3>About <?= $agentName ?></h3>
                <p><?= $agent['desc'] ?></p>
                
                <div class="ap-stats">
                    <div class="ap-stat">
                        <h4><?= $agent['exp'] ?></h4>
                        <span>Experience</span>
                    </div>
                    <div class="ap-stat">
                        <h4><?= $agent['sales'] ?></h4>
                        <span>Properties Sold</span>
                    </div>
                    <div class="ap-stat">
                        <h4><?= $agent['active'] ?></h4>
                        <span>Active Listings</span>
                    </div>
                </div>
            </div>

            <div class="ap-about">
                <h3>Active Properties by <?= $agentName ?></h3>
                <div class="ap-projects-grid">
                    <?php foreach($agentProjects as $proj): ?>
                    <div class="ap-project-card">
                        <img class="ap-project-img" src="<?= $proj['img'] ?>" alt="<?= $proj['title'] ?>">
                        <div class="ap-project-details">
                            <h4><?= $proj['title'] ?></h4>
                            <p class="ap-project-loc"><i class="fa-solid fa-location-dot"></i> <?= $proj['loc'] ?></p>
                            <div class="ap-project-price"><?= $proj['price'] ?></div>
                            <button class="ap-project-btn">View Details</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php include 'includes/footer.php'; ?>
