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
        <nav class="header-nav">
            <ul>
                <li class="nav-item has-dropdown">
                    <a href="#">Buy <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Ready to Move</a></li>
                        <li><a href="#">Under Construction</a></li>
                        <li><a href="#">Plots/Land</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Rent <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Flats for Rent</a></li>
                        <li><a href="#">Houses/Villas</a></li>
                        <li><a href="#">PG/Co-living</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Projects <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">New Launches</a></li>
                        <li><a href="#">Upcoming Projects</a></li>
                        <li><a href="#">Luxury Projects</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Agents <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Find an Agent</a></li>
                        <li><a href="#">Top Rated Dealers</a></li>
                        <li><a href="#">Agent Registration</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#">Services <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Home Loans</a></li>
                        <li><a href="#">Interior Design</a></li>
                        <li><a href="#">Legal Services</a></li>
                        <li><a href="#">Property Valuation</a></li>
                    </ul>
                </li>
            </ul>
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
    const headerNav = document.querySelector(".header-nav");

    mobileMenuBtn.addEventListener("click", () => {
        headerNav.classList.toggle("active");
    });
</script>