<link rel="stylesheet" href="assets/css/property_filters.css">
<!-- TOP INTERACTIVE FILTER CONSOLE (Moved from footer) -->
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
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-building"></i> Property Type</span>
                <div class="filter-buttons">
                    <button class="filter-btn active">All</button>
                    <button class="filter-btn">Plots</button>
                    <button class="filter-btn">Villas</button>
                    <button class="filter-btn">Apartments</button>
                    <button class="filter-btn">Farmhouse</button>
                    <button class="filter-btn">Commercial Shop</button>
                    <button class="filter-btn">Office Space</button>
                    <button class="filter-btn">Rent Property</button>
                    <button class="filter-btn">Investment Property</button>
                </div>
            </div>

            <!-- Customer Needs -->
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-cart-shopping"></i> Need Type</span>
                <div class="filter-buttons">
                    <button class="filter-btn active">Buying</button>
                    <button class="filter-btn">Renting</button>
                    <button class="filter-btn">Lease</button>
                </div>
            </div>

            <!-- House Area / BHK -->
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-bed"></i> House Area (BHK)</span>
                <div class="filter-buttons">
                    <button class="filter-btn">1 BHK</button>
                    <button class="filter-btn active">2 BHK</button>
                    <button class="filter-btn">3 BHK</button>
                    <button class="filter-btn">4 BHK</button>
                    <button class="filter-btn">5+ BHK</button>
                </div>
            </div>

            <!-- Budget -->
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-wallet"></i> Budget</span>
                <div class="filter-buttons">
                    <button class="filter-btn">Under ₹50 Lacs</button>
                    <button class="filter-btn active">₹50 Lacs - ₹1 Cr</button>
                    <button class="filter-btn">₹1 Cr - ₹2 Cr</button>
                    <button class="filter-btn">₹2 Cr - ₹5 Cr</button>
                    <button class="filter-btn">Above ₹5 Cr</button>
                </div>
            </div>

            <!-- City or Area -->
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-city"></i> Top Cities</span>
                <div class="filter-buttons">
                    <button class="filter-btn active">Mumbai</button>
                    <button class="filter-btn">Delhi NCR</button>
                    <button class="filter-btn">Bangalore</button>
                    <button class="filter-btn">Pune</button>
                    <button class="filter-btn">Hyderabad</button>
                    <button class="filter-btn">Chennai</button>
                    <button class="filter-btn">Kolkata</button>
                    <button class="filter-btn">Ahmedabad</button>
                </div>
            </div>

            <!-- Localities -->
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-location-crosshairs"></i> Locality</span>
                <div class="filter-buttons">
                    <button class="filter-btn">Whitefield (Bangalore)</button>
                    <button class="filter-btn">Andheri West (Mumbai)</button>
                    <button class="filter-btn">Dwarka (Delhi)</button>
                    <button class="filter-btn">Gachibowli (Hyderabad)</button>
                    <button class="filter-btn">Noida Sector 62 (Noida)</button>
                    <button class="filter-btn">Kharadi (Pune)</button>
                    <button class="filter-btn">Velachery (Chennai)</button>
                    <button class="filter-btn">Salt Lake (Kolkata)</button>
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
            
            <div class="filter-group">
                <span class="filter-label"><i class="fa-solid fa-screwdriver-wrench"></i> Seller Tools</span>
                <div class="filter-buttons">
                    <button class="filter-btn">Seller Guide</button>
                    <button class="filter-btn">Find Agents</button>
                    <button class="filter-btn">Advertise with Us</button>
                    <button class="filter-btn">Seller Dashboard</button>
                    <button class="filter-btn">Agent Registration</button>
                    <button class="filter-btn">Owner Advantage Plan</button>
                    <button class="filter-btn">Property Valuation Services</button>
                </div>
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

        // Handle filter buttons interaction
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                btn.classList.toggle('active');
            });
        });
    }
</script>
