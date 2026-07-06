<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RealEstateIndia - Find Property, Trusted Agents</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Core Styles -->
<link rel="stylesheet" href="assets/css/header.css">
</head>
<body>

<div class="mobile-nav-overlay" aria-hidden="true"></div>

<header class="main-header">
    
       
          
        
    
    <div class="header-container">
        <!-- Logo Section -->
        <div class="header-left">
            <a href="index.php" class="logo">
                <i class="fa-solid fa-house-user logo-icon"></i>
                <span class="logo-text">RealEstate<span>India</span></span>
            </a>
            
            <div class="location-dropdown">
                <span>All India</span>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>

        <!-- Navigation Section -->
        <nav class="header-nav" aria-label="Primary Navigation">
            <div class="mobile-nav-header">
                <a href="index.php" class="mobile-sidebar-logo">
                    <i class="fa-solid fa-house-user"></i>
                    <span>RealEstateIndia</span>
                </a>
                <button class="mobile-nav-close" type="button" aria-label="Close menu">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <ul>
                <li class="nav-item has-dropdown">
                    <a href="#">Buy <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Properties for Sale</a></li>
                        <li><a href="#">New Projects</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Rents <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Residential Rent</a></li>
                        <li><a href="#">Commercial Rent</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Projects <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Upcoming Projects</a></li>
                        <li><a href="#">Top Builders</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Valuation <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Property Calculator</a></li>
                        <li><a href="#">Market Trends</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">List Property <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Post Free Ad</a></li>
                        <li><a href="#">Seller Services</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Agents <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Find an Agent</a></li>
                        <li><a href="#">Join as Agent</a></li>
                    </ul>
                </li>
            </ul>
            <div class="mobile-nav-footer">
                <a href="#" class="post-property-btn">Post Property</a>
                <a href="#" class="mobile-nav-link"><i class="fa-regular fa-circle-question"></i> Help Center</a>
                <a href="#" class="mobile-nav-link"><i class="fa-regular fa-user"></i> Sign In / Join Free</a>
            </div>
        </nav>

        <!-- Action Section -->
        <div class="header-actions">
            <a href="#" class="post-property-btn">
                <span class="badge-free">FREE</span>
                Post Property
            </a>
            
            <a href="#" class="help-icon" title="Help"><i class="fa-regular fa-circle-question"></i></a>
            
            <div class="signin-btn" onclick="openSignInModal()">
                <i class="fa-regular fa-user"></i>
                <div class="signin-text">
                    <span class="main-text">Sign In</span>
                    <span class="sub-text">Join Free</span>
                </div>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
</header>

<script>
    const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
    const mobileNavClose = document.querySelector(".mobile-nav-close");
    const mobileNavOverlay = document.querySelector(".mobile-nav-overlay");
    const headerNav = document.querySelector(".header-nav");

    function toggleMobileMenu(force) {
        if (window.innerWidth > 1024) {
            headerNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            document.body.classList.remove('menu-open');
            return;
        }

        const shouldOpen = typeof force === 'boolean' ? force : !headerNav.classList.contains('active');
        headerNav.classList.toggle('active', shouldOpen);
        mobileNavOverlay.classList.toggle('active', shouldOpen);
        document.body.classList.toggle('menu-open', shouldOpen);
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener("click", () => toggleMobileMenu());
    }

    if (mobileNavClose) {
        mobileNavClose.addEventListener("click", () => toggleMobileMenu(false));
    }

    if (mobileNavOverlay) {
        mobileNavOverlay.addEventListener("click", () => toggleMobileMenu(false));
    }

    window.addEventListener('resize', () => {
        if (window.innerWidth > 1024) {
            toggleMobileMenu(false);
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            toggleMobileMenu(false);
        }
    });

    const navItems = document.querySelectorAll(".nav-item > a");
    navItems.forEach(item => {
        item.addEventListener("click", function(e) {
            const parentLi = this.parentElement;

            if (window.innerWidth <= 1024 && parentLi.classList.contains('has-dropdown')) {
                e.preventDefault();
                parentLi.classList.toggle('open');
                return;
            }

            e.preventDefault();

            document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('star-anim-active'));
            parentLi.classList.add('star-anim-active');

            setTimeout(() => {
                parentLi.classList.remove('star-anim-active');
            }, 3000);
        });
    });
</script>