<link rel="stylesheet" href="assets/css/hero.css">
<section class="hero-section" style="background-image: url('https://www.squareyards.com/assets/images/home-desktop-cover.png?aio=w-1521;h-558;crop');">
    <div class="hero-overlay"></div>
    <div class="hero-container">
        <div class="hero-top-row">
            <div class="hero-badge">★ 4.7 · 18k Google reviews</div>
        </div>
        <h1 class="hero-title">India's Largest<br>Real Estate Platform</h1>
        <p class="hero-subtitle">From Search to Keys, we've got you covered <span>• Trusted by 2M+ Buyers</span></p>
        <div class="hero-search-block">
            <div class="hero-tabs">
                <button type="button" class="tab-btn active"><span class="tab-icon"><i class="fa-solid fa-house"></i></span>Buy</button>
                <button type="button" class="tab-btn"><span class="tab-icon"><i class="fa-solid fa-tag"></i></span>Rent</button>
                <button type="button" class="tab-btn"><span class="tab-icon"><i class="fa-solid fa-building"></i></span>Projects</button>
                <button type="button" class="tab-btn"><span class="tab-icon"><i class="fa-solid fa-chart-line"></i></span>Valuation</button>
                <button type="button" class="tab-btn"><span class="tab-icon"><i class="fa-solid fa-house-chimney-user"></i></span>List Property</button>
                <button type="button" class="tab-btn"><span class="tab-icon"><i class="fa-solid fa-user"></i></span>Agents</button>
            </div>
            <div class="hero-search-card">
                <div class="hero-search-fields">
                    <button type="button" class="search-field dropdown-field">
                        <span>Select City</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <label class="search-field input-field">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder='Search by "Locality"' autocomplete="off">
                    </label>
                    <button type="button" class="ai-btn"><span class="ai-icon"><i class="fa-solid fa-magic"></i></span>Ask AI</button>
                    <button type="button" class="search-submit">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const heroTabs = document.querySelectorAll('.hero-tabs .tab-btn');
    heroTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            heroTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });
</script>
