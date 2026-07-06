<section class="agents-section" aria-labelledby="agents-heading">
    <div class="agents-container">
        <div class="agents-header">
            <h2 id="agents-heading" class="agents-title">
                <span class="title-highlight">Top Real Estate Agents</span> in <span class="title-city">Mohali</span>
            </h2>
        </div>

        <div class="agents-carousel-wrap">
            <button class="agents-nav agents-nav-prev" aria-label="Previous agents" type="button"><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></button>
            <button class="agents-nav agents-nav-next" aria-label="Next agents" type="button"><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></button>

            <div class="agents-track">
                <?php
                $agents = [
                    [
                        'name' => 'Veerji Estates',
                        'location' => 'Kharar Road, Mohali',
                        'sale' => '8',
                        'rent' => '2',
                        'tags' => ['Kharar', 'Kharar Road', 'Kurali'],
                        'more' => '+5',
                        'logo' => 'VE',
                        'tone' => 'red',
                    ],
                    [
                        'name' => 'North Realtor',
                        'location' => 'Phase 7, Mohali',
                        'sale' => '127',
                        'rent' => '',
                        'tags' => ['Chandigarh', 'Mohali', 'Zirakpur'],
                        'more' => '',
                        'logo' => 'NR',
                        'tone' => 'teal',
                    ],
                    [
                        'name' => 'Regency Realtors',
                        'location' => 'Sector 118 Mohali',
                        'sale' => '75',
                        'rent' => '',
                        'tags' => ['Acme Heights Colony'],
                        'more' => '+140',
                        'logo' => 'RR',
                        'tone' => 'maroon',
                    ],
                    [
                        'name' => 'KD Pro Estate',
                        'location' => 'Sector 115 Mohali',
                        'sale' => '11',
                        'rent' => '',
                        'tags' => ['Khanpur', 'Kharar'],
                        'more' => '+6',
                        'logo' => 'KD',
                        'tone' => 'brown',
                    ],
                    [
                        'name' => 'Saluja Estate Zirakpur',
                        'location' => 'Zirakpur Road, Mohali',
                        'sale' => '148',
                        'rent' => '2',
                        'tags' => ['Mohali', 'Zirakpur'],
                        'more' => '',
                        'logo' => 'SE',
                        'tone' => 'black',
                    ],
                    [
                        'name' => 'Malhi Real Estate',
                        'location' => 'Kharar, Mohali',
                        'sale' => '50',
                        'rent' => '6',
                        'tags' => ['Chandigarh', 'Mohali'],
                        'more' => '+1',
                        'logo' => 'MR',
                        'tone' => 'ink',
                    ],
                    [
                        'name' => 'DM REALTORS',
                        'location' => 'TDI City, Mohali',
                        'sale' => '9',
                        'rent' => '',
                        'tags' => ['Chandigarh', 'Mohali'],
                        'more' => '',
                        'logo' => 'DM',
                        'tone' => 'red',
                    ],
                    [
                        'name' => 'INCH 2 ACRES',
                        'location' => 'Sector 118 Mohali',
                        'sale' => '34',
                        'rent' => '',
                        'tags' => ['Chandigarh', 'Mohali'],
                        'more' => '',
                        'logo' => 'I2A',
                        'tone' => 'gold',
                    ],
                    [
                        'name' => 'Prime Properties',
                        'location' => 'Sector 70, Mohali',
                        'sale' => '62',
                        'rent' => '5',
                        'tags' => ['Mohali', 'SAS Nagar'],
                        'more' => '+12',
                        'logo' => 'PP',
                        'tone' => 'teal',
                    ],
                    [
                        'name' => 'Skyline Realtors',
                        'location' => 'Airport Road, Mohali',
                        'sale' => '41',
                        'rent' => '3',
                        'tags' => ['Mohali', 'Kharar'],
                        'more' => '',
                        'logo' => 'SR',
                        'tone' => 'maroon',
                    ],
                    [
                        'name' => 'Apex Realty Solutions',
                        'location' => 'Sector 69, Mohali',
                        'sale' => '93',
                        'rent' => '8',
                        'tags' => ['Mohali', 'Panchkula'],
                        'more' => '+23',
                        'logo' => 'AR',
                        'tone' => 'brown',
                    ],
                    [
                        'name' => 'Vertex Estates',
                        'location' => 'VIP Road, Zirakpur',
                        'sale' => '55',
                        'rent' => '',
                        'tags' => ['Zirakpur', 'Ambala'],
                        'more' => '',
                        'logo' => 'VE',
                        'tone' => 'ink',
                    ],
                    [
                        'name' => 'Goldmine Realtors',
                        'location' => 'Sector 91, Mohali',
                        'sale' => '117',
                        'rent' => '4',
                        'tags' => ['Mohali', 'Chandigarh'],
                        'more' => '+9',
                        'logo' => 'GR',
                        'tone' => 'gold',
                    ],
                    [
                        'name' => 'City Homes Realty',
                        'location' => 'Phase 5, Mohali',
                        'sale' => '28',
                        'rent' => '7',
                        'tags' => ['Mohali'],
                        'more' => '',
                        'logo' => 'CH',
                        'tone' => 'red',
                    ],
                    [
                        'name' => 'Pioneer Estate',
                        'location' => 'Sector 117, Mohali',
                        'sale' => '73',
                        'rent' => '2',
                        'tags' => ['Mohali', 'Kharar Road'],
                        'more' => '+15',
                        'logo' => 'PE',
                        'tone' => 'black',
                    ],
                ];

                $pages = array_chunk($agents, 8);
                foreach ($pages as $page) {
                    echo '<div class="agents-grid" role="list">';
                    foreach ($page as $agent) {
                        $profileUrl = 'agent_profile.php?name=' . urlencode($agent['name']);
                        echo '<article class="agent-card" role="listitem" data-profile="' . htmlspecialchars($profileUrl) . '" tabindex="0">';
                        echo '<div class="agent-card-header">';
                        echo '<div class="agent-logo agent-logo-' . htmlspecialchars($agent['tone']) . '" aria-hidden="true"><span>' . htmlspecialchars($agent['logo']) . '</span></div>';
                        echo '<div class="agent-info">';
                        echo '<h4 class="agent-name">' . htmlspecialchars($agent['name']) . '</h4>';
                        echo '<p class="agent-location">' . htmlspecialchars($agent['location']) . '</p>';
                        echo '</div></div>';
                        echo '<div class="agent-stats">';
                        echo '<div class="stat-item"><span class="stat-num">' . htmlspecialchars($agent['sale']) . '</span><span class="stat-label">Sale<br>Properties</span></div>';
                        if (!empty($agent['rent'])) {
                            echo '<div class="stat-divider"></div><div class="stat-item"><span class="stat-num">' . htmlspecialchars($agent['rent']) . '</span><span class="stat-label">Rent<br>Properties</span></div>';
                        }
                        echo '</div>';
                        echo '<div class="agent-tags">';
                        foreach ($agent['tags'] as $tag) {
                            echo '<span class="tag">' . htmlspecialchars($tag) . '</span>';
                        }
                        if (!empty($agent['more'])) {
                            echo '<span class="tag tag-more">' . htmlspecialchars($agent['more']) . '</span>';
                        }
                        echo '</div>';
                        echo '</article>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div class="agents-bottom-link">
            <a href="all_agents.php">See all Agents <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <script src="assets/js/agents.js"></script>

</section>
