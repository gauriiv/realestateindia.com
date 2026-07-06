<link rel="stylesheet" href="assets/css/cities.css">

<section class="cities-section" aria-labelledby="cities-heading">
    <div class="section-container">
        <div class="section-header">
            <div>
                <p class="section-eyebrow">Popular Locations</p>
                <h2 id="cities-heading" class="section-title">Explore Real Estate in Popular Indian Cities</h2>
            </div>
            <p class="section-subtitle">Discover premium homes, smart investments, and trusted guidance across India’s most sought-after cities.</p>
        </div>

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

            foreach ($cities as $city) {
                $cityLink = 'properties.php?category=city&val=' . urlencode($city['name']);
                echo '<a class="city-card" href="' . htmlspecialchars($cityLink) . '" aria-label="Explore properties in ' . htmlspecialchars($city['name']) . '">';
                echo '<span class="city-icon-badge">' . htmlspecialchars($city['emoji']) . '</span>';
                echo '<span class="city-content"><span class="city-name">' . htmlspecialchars($city['name']) . '</span><span class="city-meta">Explore listings</span></span>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</section>

