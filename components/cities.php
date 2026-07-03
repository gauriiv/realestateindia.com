<link rel="stylesheet" href="assets/css/cities.css">

<section class="cities-section">
    <div class="section-container">
        <h2 class="section-title">Find Your Property in Your Preferred <span>City</span></h2>
        
        <div class="cities-grid">
            <?php
            $cities = [
                ['name' => 'Bangalore', 'props' => '35686', 'emoji' => '💻', 'color' => 'color-1'],
                ['name' => 'Gurgaon', 'props' => '34851', 'emoji' => '🏢', 'color' => 'color-2'],
                ['name' => 'Mumbai', 'props' => '34422', 'emoji' => '🎬', 'color' => 'color-3'],
                ['name' => 'New Delhi', 'props' => '31359', 'emoji' => '🏛️', 'color' => 'color-4'],
                ['name' => 'Pune', 'props' => '29335', 'emoji' => '🎓', 'color' => 'color-5'],
                ['name' => 'Lucknow', 'props' => '26081', 'emoji' => '🕌', 'color' => 'color-6'],
                ['name' => 'Chennai', 'props' => '24110', 'emoji' => '🏖️', 'color' => 'color-7'],
                ['name' => 'Hyderabad', 'props' => '22405', 'emoji' => '🍲', 'color' => 'color-8'],
                ['name' => 'Kolkata', 'props' => '20199', 'emoji' => '🚊', 'color' => 'color-1'],
                ['name' => 'Ahmedabad', 'props' => '18442', 'emoji' => '🎪', 'color' => 'color-2'],
                ['name' => 'Jaipur', 'props' => '16223', 'emoji' => '🏰', 'color' => 'color-3'],
                ['name' => 'Surat', 'props' => '14101', 'emoji' => '💎', 'color' => 'color-4'],
                ['name' => 'Chandigarh', 'props' => '12050', 'emoji' => '🌳', 'color' => 'color-5'],
                ['name' => 'Indore', 'props' => '10444', 'emoji' => '🧹', 'color' => 'color-6'],
                ['name' => 'Kochi', 'props' => '8920', 'emoji' => '⛴️', 'color' => 'color-7'],
                ['name' => 'Sohna', 'props'=> '99999', 'emoji' => '🏞️', 'color' => 'color-8']
            ];

            foreach($cities as $index => $city) {
                echo '<div class="city-card" onclick="openCityPropertyPanel(\''.$city['name'].'\')">';
                echo '<div class="city-emoji-wrapper '.$city['color'].'">'.$city['emoji'].'</div>';
                echo '<div class="city-name">'.$city['name'].'</div>';
                echo '<div class="city-props">'.$city['props'].'+ Properties</div>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Inline Expandable Panel (Hidden by default) -->
        <div id="city-property-panel" class="city-property-panel">
            <div class="panel-header">
                <h3 id="panel-city-title">Properties in <span>City Name</span></h3>
                <i class="fa-solid fa-xmark close-panel" onclick="closeCityPropertyPanel()"></i>
            </div>
            
            <div class="panel-layout">
                <!-- Left Side: Buy / Rent Option -->
                <div class="panel-left">
                    <h4>I am looking to</h4>
                    <div class="toggle-buttons">
                        <button class="tgl-btn active">Buy</button>
                        <button class="tgl-btn">Rent</button>
                    </div>
                    
                    <h4 style="margin-top: 25px;">Discover the City</h4>
                    <div class="discover-buttons">
                        <button class="discover-btn">
                            <i class="fa-solid fa-map-location-dot"></i> Exploring the City
                        </button>
                        <button class="discover-btn">
                            <i class="fa-solid fa-book-open-reader"></i> City Guide
                        </button>
                    </div>
                </div>

                <!-- Right Side: Sale / Project / Rent Option -->
                <div class="panel-right">
                    <h4>Property Category</h4>
                    <div class="category-buttons">
                        <button class="cat-btn">
                            <i class="fa-solid fa-house"></i>
                            <span>Resale</span>
                        </button>
                        <button class="cat-btn active">
                            <i class="fa-solid fa-building-user"></i>
                            <span>New Project</span>
                        </button>
                        <button class="cat-btn">
                            <i class="fa-solid fa-key"></i>
                            <span>Rental</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="panel-action">
                <button class="view-properties-btn">View All Properties <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

    </div>
</section>

<script>
    // Redirect to the properties list page for the selected city
    function openCityPropertyPanel(cityName) {
        window.location.href = `properties.php?category=city&val=${encodeURIComponent(cityName)}`;
    }
</script>

