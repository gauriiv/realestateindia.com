<link rel="stylesheet" href="assets/css/property_filters.css">
<!-- TOP INTERACTIVE FILTER CONSOLE -->
<div class="property-filters-section">
    <div class="footer-container">
        <div class="console-header">
            <h2>Explore Properties Across India</h2>
            <p>Find exactly what you are looking for by selecting your preferences below.</p>
            
            <div class="console-toggles">
                <button class="console-toggle-btn active" id="btn-buyer-toggle"><i class="fa-solid fa-magnifying-glass"></i> I want to Buy/Rent</button>
                <button class="console-toggle-btn" id="btn-seller-toggle"><i class="fa-solid fa-tag"></i> I want to Sell/Rent out</button>
            </div>
        </div>

        <!-- Buyer Filters Section -->
        <div class="console-content active" id="buyer-console-section">
            
            <!-- Type of Properties -->
            <div class="filter-wrapper">
                <div class="filter-group">
                    <span class="filter-label"><i class="fa-solid fa-building"></i> Property Type</span>
                    <div class="filter-buttons" id="prop-type-filters">
                        <button class="filter-btn active" data-type="All">All</button>
                        <button class="filter-btn" data-type="Plots">Plots</button>
                        <button class="filter-btn" data-type="Villas">Villas</button>
                        <button class="filter-btn" data-type="Apartments">Apartments</button>
                        <button class="filter-btn" data-type="Farmhouse">Farmhouse</button>
                        <button class="filter-btn" data-type="Commercial Shop">Commercial Shop</button>
                        <button class="filter-btn" data-type="Office Space">Office Space</button>
                        <button class="filter-btn" data-type="Rent Property">Rent Property</button>
                        <button class="filter-btn" data-type="Investment Property">Investment Property</button>
                    </div>
                </div>
            </div>

            <!-- Customer Needs -->
            <div class="filter-wrapper">
                <div class="filter-group">
                    <span class="filter-label"><i class="fa-solid fa-cart-shopping"></i> Need Type</span>
                    <div class="filter-buttons" id="need-filters">
                        <button class="filter-btn active" data-need="Buying">Buying</button>
                        <button class="filter-btn" data-need="Renting">Renting</button>
                        <button class="filter-btn" data-need="Lease">Lease</button>
                    </div>
                </div>
            </div>

            <!-- House Area / BHK -->
            <div class="filter-wrapper">
                <div class="filter-group">
                    <span class="filter-label"><i class="fa-solid fa-bed"></i> House Area (BHK)</span>
                    <div class="filter-buttons" id="bhk-filters">
                        <button class="filter-btn active" data-bhk="1 BHK">1 BHK</button>
                        <button class="filter-btn" data-bhk="2 BHK">2 BHK</button>
                        <button class="filter-btn" data-bhk="3 BHK">3 BHK</button>
                        <button class="filter-btn" data-bhk="4 BHK">4 BHK</button>
                        <button class="filter-btn" data-bhk="5+ BHK">5+ BHK</button>
                    </div>
                </div>
            </div>

            <!-- Budget -->
            <div class="filter-wrapper">
                <div class="filter-group">
                    <span class="filter-label"><i class="fa-solid fa-wallet"></i> Budget</span>
                    <div class="filter-buttons" id="budget-filters">
                        <button class="filter-btn active" data-budget="Under ₹50 Lacs">Under ₹50 Lacs</button>
                        <button class="filter-btn" data-budget="₹50 Lacs - ₹1 Cr">₹50 Lacs - ₹1 Cr</button>
                        <button class="filter-btn" data-budget="₹1 Cr - ₹2 Cr">₹1 Cr - ₹2 Cr</button>
                        <button class="filter-btn" data-budget="₹2 Cr - ₹5 Cr">₹2 Cr - ₹5 Cr</button>
                        <button class="filter-btn" data-budget="₹5 Cr - ₹10 Cr">₹5 Cr - ₹10 Cr</button>
                        <button class="filter-btn" data-budget="Above ₹10 Cr">Above ₹10 Cr</button>
                    </div>
                </div>
            </div>

            <!-- City or Area -->
            <div class="filter-wrapper">
                <div class="filter-group">
                    <span class="filter-label"><i class="fa-solid fa-city"></i> Top Cities</span>
                    <div class="filter-buttons" id="city-filters">
                        <button class="filter-btn active" data-city="Mumbai">Mumbai</button>
                        <button class="filter-btn" data-city="Delhi NCR">Delhi NCR</button>
                        <button class="filter-btn" data-city="Bangalore">Bangalore</button>
                        <button class="filter-btn" data-city="Pune">Pune</button>
                        <button class="filter-btn explore-btn" onclick="openAllCitiesModal()">Explore More <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Seller Filters Section -->
        <div class="console-content" id="seller-console-section">
            <div class="seller-intro">
                <div class="seller-intro-content">
                    <h3>Sell or Rent Your Property Fast & Easily</h3>
                    <p>Join millions of owners and agents listing their spaces on India's top property portal. Post for free and get verified leads in hours!</p>
                </div>
                <a href="#" class="seller-cta-btn"><i class="fa-solid fa-plus"></i> Post Property Free</a>
            </div>
        </div>

    </div>
</div>

<!-- All Cities Modal -->
<div id="allCitiesModal" class="modal-overlay">
    <div class="modal-content all-cities-modal">
        <span class="close-modal" onclick="closeAllCitiesModal()">&times;</span>
        <h2>Explore All Cities in India</h2>
        <div class="cities-grid">
            <div class="city-col">
                <h4>North India</h4>
                <ul>
                    <li><a href="#" class="city-select" data-city="Chandigarh">Chandigarh</a></li>
                    <li><a href="#" class="city-select" data-city="Lucknow">Lucknow</a></li>
                    <li><a href="#" class="city-select" data-city="Jaipur">Jaipur</a></li>
                    <li><a href="#" class="city-select" data-city="Gurgaon">Gurgaon</a></li>
                    <li><a href="#" class="city-select" data-city="Noida">Noida</a></li>
                </ul>
            </div>
            <div class="city-col">
                <h4>South India</h4>
                <ul>
                    <li><a href="#" class="city-select" data-city="Chennai">Chennai</a></li>
                    <li><a href="#" class="city-select" data-city="Hyderabad">Hyderabad</a></li>
                    <li><a href="#" class="city-select" data-city="Kochi">Kochi</a></li>
                    <li><a href="#" class="city-select" data-city="Coimbatore">Coimbatore</a></li>
                    <li><a href="#" class="city-select" data-city="Mysore">Mysore</a></li>
                </ul>
            </div>
            <div class="city-col">
                <h4>West India</h4>
                <ul>
                    <li><a href="#" class="city-select" data-city="Ahmedabad">Ahmedabad</a></li>
                    <li><a href="#" class="city-select" data-city="Surat">Surat</a></li>
                    <li><a href="#" class="city-select" data-city="Nagpur">Nagpur</a></li>
                    <li><a href="#" class="city-select" data-city="Vadodara">Vadodara</a></li>
                    <li><a href="#" class="city-select" data-city="Nashik">Nashik</a></li>
                </ul>
            </div>
            <div class="city-col">
                <h4>East & Central</h4>
                <ul>
                    <li><a href="#" class="city-select" data-city="Kolkata">Kolkata</a></li>
                    <li><a href="#" class="city-select" data-city="Bhubaneswar">Bhubaneswar</a></li>
                    <li><a href="#" class="city-select" data-city="Patna">Patna</a></li>
                    <li><a href="#" class="city-select" data-city="Indore">Indore</a></li>
                    <li><a href="#" class="city-select" data-city="Bhopal">Bhopal</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab switching for footer quick explorer
    const buyerToggle = document.getElementById('btn-buyer-toggle');
    const sellerToggle = document.getElementById('btn-seller-toggle');
    const buyerConsole = document.getElementById('buyer-console-section');
    const sellerConsole = document.getElementById('seller-console-section');

    if (buyerToggle && sellerToggle) {
        buyerToggle.addEventListener('click', () => {
            buyerToggle.classList.add('active');
            sellerToggle.classList.remove('active');
            buyerConsole.classList.add('active');
            sellerConsole.classList.remove('active');
        });

        sellerToggle.addEventListener('click', () => {
            sellerToggle.classList.add('active');
            buyerToggle.classList.remove('active');
            sellerConsole.classList.add('active');
            buyerConsole.classList.remove('active');
        });
    }

    // Modal Logic
    const citiesModal = document.getElementById('allCitiesModal');
    function openAllCitiesModal() {
        citiesModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    function closeAllCitiesModal() {
        citiesModal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
    window.addEventListener('click', function(event) {
        if (event.target == citiesModal) {
            closeAllCitiesModal();
        }
    });

    // REDIRECT TO PROPERTIES PAGE ON FILTER CLICK
    function attachRedirect(selector, category) {
        document.querySelectorAll(selector).forEach(btn => {
            btn.addEventListener('click', (e) => {
                if(e.target.closest('.explore-btn')) return;
                const targetBtn = e.target.closest('.filter-btn');
                const val = targetBtn.getAttribute(`data-${category}`);
                
                // Redirect to properties.php with query params
                window.location.href = `properties.php?category=${encodeURIComponent(category)}&val=${encodeURIComponent(val)}`;
            });
        });
    }

    attachRedirect('#prop-type-filters .filter-btn', 'type');
    attachRedirect('#need-filters .filter-btn', 'need');
    attachRedirect('#bhk-filters .filter-btn', 'bhk');
    attachRedirect('#budget-filters .filter-btn', 'budget');
    attachRedirect('#city-filters .filter-btn:not(.explore-btn)', 'city');

    // Modal city click
    document.querySelectorAll('.city-select').forEach(a => {
        a.addEventListener('click', (e) => {
            e.preventDefault();
            const city = e.target.getAttribute('data-city');
            window.location.href = `properties.php?category=city&val=${encodeURIComponent(city)}`;
        });
    });
</script>
