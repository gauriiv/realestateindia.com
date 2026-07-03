<link rel="stylesheet" href="assets/css/cities.css">

<section class="cities-section">
    <div class="section-container">
        <h2 class="section-title">Explore Real Estate in Popular Indian Cities</h2>
        <p class="section-subtitle">Discover the finest residential and investment opportunities across India's top cities, backed by smart insights and expert guidance.</p>
        
        <div class="cities-grid">
            <?php
            $cities = [
                ['name' => 'Mumbai', 'emoji' => '🏢'],
                ['name' => 'Bangalore', 'emoji' => '🏛️'],
                ['name' => 'Delhi', 'emoji' => '🛕'],
                ['name' => 'Pune', 'emoji' => '🕌'],
                ['name' => 'Thane', 'emoji' => '🏰'],
                ['name' => 'Hyderabad', 'emoji' => '🕌'],
                ['name' => 'Noida', 'emoji' => '🎯'],
                ['name' => 'Lucknow', 'emoji' => '🕌'],
                ['name' => 'Navi Mumbai', 'emoji' => '🏛️'],
                ['name' => 'Kolkata', 'emoji' => '🛕'],
                ['name' => 'Chennai', 'emoji' => '🛕']
            ];

            foreach($cities as $index => $city) {
                echo '<div class="city-card" onclick="window.location.href=\'properties.php?category=city&val='.urlencode($city['name']).'\'">';
                echo '<div class="city-icon-container">'.$city['emoji'].'</div>';
                echo '<div class="city-name-container"><div class="city-name">'.$city['name'].'</div></div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

