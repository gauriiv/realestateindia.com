<link rel="stylesheet" href="assets/css/hero.css">
<section class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="hero-overlay"></div>
    <div class="hero-container">
        
        <h1 class="hero-title">Find Your Dream <span>Home</span> Across India</h1>
        
        <div class="hero-search-wrapper">
            <!-- Search Tabs -->
            <div class="search-tabs">
                <button class="tab-btn active">Buy</button>
                <button class="tab-btn">Rent / PG</button>
                <button class="tab-btn">Projects</button>
                <button class="tab-btn">Commercial</button>
                <button class="tab-btn">Dealers</button>
            </div>
            
            <!-- Search Box (Row Layout) -->
            <div class="search-box">
                <div class="search-field dropdown-field">
                    <span>Property Types</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="search-field input-field">
                    <input type="text" placeholder="Search City, Locality, Project">
                </div>
                <div class="search-icon-target">
                    <i class="fa-solid fa-crosshairs"></i>
                </div>
                <button class="search-submit">
                    <i class="fa-solid fa-magnifying-glass"></i> SEARCH
                </button>
            </div>
        </div>

    </div>
</section>

<script>
    // Hero tab interactions
    const heroTabs = document.querySelectorAll('.hero-search-wrapper .tab-btn');
    heroTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            heroTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });
</script>
