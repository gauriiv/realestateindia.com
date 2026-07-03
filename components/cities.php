<link rel="stylesheet" href="assets/css/cities.css">

<section class="cities-section">
    <div class="section-container">
        <h2 class="section-title">Find Your Property in Your Preferred <span>City</span></h2>
        
        <div class="cities-grid">
            <?php
            $cities = [
                ['name' => 'Bangalore', 'props' => '35686', 'img' => 'https://images.unsplash.com/photo-1596176530529-78163a4f7af2?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Gurgaon', 'props' => '34851', 'img' => 'https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Mumbai', 'props' => '34422', 'img' => 'https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'New Delhi', 'props' => '31359', 'img' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Pune', 'props' => '29335', 'img' => 'https://images.unsplash.com/photo-1565551357597-293e50c60d9d?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Lucknow', 'props' => '26081', 'img' => 'https://images.unsplash.com/photo-1627883584877-3e1eeaa0ebbe?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Chennai', 'props' => '24110', 'img' => 'https://images.unsplash.com/photo-1582510003544-4d00b7f74220?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Hyderabad', 'props' => '22405', 'img' => 'https://images.unsplash.com/photo-1591504720492-9907c0892019?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Kolkata', 'props' => '20199', 'img' => 'https://images.unsplash.com/photo-1558431382-27e303142255?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Ahmedabad', 'props' => '18442', 'img' => 'https://images.unsplash.com/photo-1616766098956-c81f12114571?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Jaipur', 'props' => '16223', 'img' => 'https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Surat', 'props' => '14101', 'img' => 'https://images.unsplash.com/photo-1616145610811-1335b2e9e208?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Chandigarh', 'props' => '12050', 'img' => 'https://images.unsplash.com/photo-1596176530529-78163a4f7af2?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Indore', 'props' => '10444', 'img' => 'https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Kochi', 'props' => '8920', 'img' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'Sohna', 'props'=> '99999','img'=> 'https://unsplash.com/photos/a-view-of-a-hill-through-a-window-Q9bAHxocNDw']
            ];

            foreach($cities as $index => $city) {
                echo '<div class="city-card" onclick="openCityPropertyPanel(\''.$city['name'].'\')">';
                echo '<div class="city-img-wrapper"><img src="'.$city['img'].'" alt="'.$city['name'].'"></div>';
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
    const panel = document.getElementById('city-property-panel');
    const panelTitle = document.getElementById('panel-city-title');

    function openCityPropertyPanel(cityName) {
        panelTitle.innerHTML = `Properties in <span>${cityName}</span>`;
        panel.classList.add('active');
        // Scroll slightly so panel is fully in view
        panel.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function closeCityPropertyPanel() {
        panel.classList.remove('active');
    }
    
    // Toggle active classes on click
    const tglBtns = document.querySelectorAll('.tgl-btn');
    tglBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tglBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    const catBtns = document.querySelectorAll('.cat-btn');
    catBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            catBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });
</script>
