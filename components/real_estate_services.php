<link rel="stylesheet" href="assets/css/real_estate_services.css">

<section class="res-services-section">
    <div class="res-services-container">
        <div class="res-services-header">
            <h2 class="res-services-title">
                <span class="highlight">Real Estate Service</span> <span class="normal">in Mohali</span>
            </h2>
        </div>

        <div class="res-services-grid">
            <?php
            $services = [
                [
                    'title' => 'Agents / Brokers',
                    'desc'  => 'Here Are Hassle-Free Solutions! Buy - Sell - Rent Your Property',
                    'icon'  => 'fa-handshake',
                ],
                [
                    'title' => 'Builders / Developers',
                    'desc'  => 'List of the most trusted and reliable builders to fulfill your Dream HOME.',
                    'icon'  => 'fa-building',
                ],
                [
                    'title' => 'Architects / Architecture',
                    'desc'  => 'Professional Architecture will meet your needs and expectations.',
                    'icon'  => 'fa-draw-polygon',
                ],
                [
                    'title' => 'Interior Decorators',
                    'desc'  => 'A One-Stop Solution for all your decor Needs to Match Your Lifestyle.',
                    'icon'  => 'fa-couch',
                ],
                [
                    'title' => 'Vaastu Consultant',
                    'desc'  => 'Connect to top most Vastu consultants for right direction.',
                    'icon'  => 'fa-compass',
                ],
                [
                    'title' => 'Building Contractors',
                    'desc'  => 'General contractor for a home repair, remodel, or construction.',
                    'icon'  => 'fa-helmet-safety',
                ],
                [
                    'title' => 'Home Inspection',
                    'desc'  => 'A complete range of building and home inspection services.',
                    'icon'  => 'fa-house-circle-check',
                ],
                [
                    'title' => 'Property Consultants',
                    'desc'  => 'List of Leading Real Estate Consultant for Professional Assistance Services.',
                    'icon'  => 'fa-user-tie',
                ],
            ];

            foreach ($services as $service) {
                echo '
                <article class="res-service-card">
                    <div class="res-service-card-content">
                        <h3 class="res-service-title">' . htmlspecialchars($service['title']) . '</h3>
                        <p class="res-service-desc">' . htmlspecialchars($service['desc']) . '</p>
                        <a href="#" class="res-service-btn" tabindex="0">Read More</a>
                    </div>
                    <div class="res-service-icon">
                        <i class="fa-solid ' . htmlspecialchars($service['icon']) . '"></i>
                    </div>
                </article>
                ';
            }
            ?>
        </div>
    </div>
</section>
