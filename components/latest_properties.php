<link rel="stylesheet" href="assets/css/latest_properties.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<?php
$latestPropertiesSale = $latestPropertiesSale ?? [
    [
        'image' => 'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Luxury penthouse with panoramic city view',
        'agent_image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Aarav Sharma',
        'price' => '₹4.30 Cr.',
        'status' => 'FOR SALE',
        'status_class' => 'status-sale',
        'type' => 'Flats & Apartments',
        'title' => 'Luxury 4.5 BHK Apartment',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'area' => '3900 Sq.ft.',
        'location' => 'Sector 68, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Bright modern villa with landscaped garden',
        'agent_image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Neha Kapoor',
        'price' => '₹3.85 Cr.',
        'status' => 'FOR SALE',
        'status_class' => 'status-sale',
        'type' => 'Luxury Villas',
        'title' => 'Private Garden Villa',
        'beds' => '5 Beds',
        'baths' => '5 Baths',
        'area' => '5200 Sq.ft.',
        'location' => 'Aerocity, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1460317442991-0ec209397118?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Contemporary duplex with premium interiors',
        'agent_image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Rohan Verma',
        'price' => '₹5.10 Cr.',
        'status' => 'FOR SALE',
        'status_class' => 'status-sale',
        'type' => 'Penthouses',
        'title' => 'Skyline Penthouse Residence',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'area' => '4100 Sq.ft.',
        'location' => 'Phase 8, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Elegant apartment with premium finishes',
        'agent_image' => 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Ishita Gill',
        'price' => '₹2.95 Cr.',
        'status' => 'FOR SALE',
        'status_class' => 'status-sale',
        'type' => 'Ready to Move',
        'title' => 'Designer 3 BHK Residence',
        'beds' => '3 Beds',
        'baths' => '3 Baths',
        'area' => '2850 Sq.ft.',
        'location' => 'Sector 70, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Warm luxury home with open plan living',
        'agent_image' => 'https://images.unsplash.com/photo-1504593811423-6dd665756598?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Kavya Bhatia',
        'price' => '₹4.70 Cr.',
        'status' => 'FOR SALE',
        'status_class' => 'status-sale',
        'type' => 'Townhomes',
        'title' => 'Urban Luxury Townhome',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'area' => '3600 Sq.ft.',
        'location' => 'Sector 78, Mohali',
        'link' => '#'
    ],
];

$latestPropertiesRent = $latestPropertiesRent ?? [
    [
        'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Stylish rental apartment with premium furnishing',
        'agent_image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Sanya Rao',
        'price' => '₹2.70 Lac',
        'status' => 'FOR RENT',
        'status_class' => 'status-rent',
        'type' => 'Luxury Rentals',
        'title' => 'Refined 3 BHK Rental Flat',
        'beds' => '3 Beds',
        'baths' => '3 Baths',
        'area' => '2400 Sq.ft.',
        'location' => 'Sector 54, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1448630360428-65456885c650?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Modern rental villa in a serene neighborhood',
        'agent_image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Devansh Singh',
        'price' => '₹3.20 Lac',
        'status' => 'FOR RENT',
        'status_class' => 'status-rent',
        'type' => 'Serviced Villas',
        'title' => 'Executive Villa Retreat',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'area' => '3100 Sq.ft.',
        'location' => 'Phase 7, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Premium rental residence with modern layout',
        'agent_image' => 'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Meera Tandon',
        'price' => '₹1.90 Lac',
        'status' => 'FOR RENT',
        'status_class' => 'status-rent',
        'type' => 'Premium Flats',
        'title' => 'Contemporary 2 BHK Home',
        'beds' => '2 Beds',
        'baths' => '2 Baths',
        'area' => '1800 Sq.ft.',
        'location' => 'Sector 85, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Elegant rental loft with premium materials',
        'agent_image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Vikram Joshi',
        'price' => '₹2.10 Lac',
        'status' => 'FOR RENT',
        'status_class' => 'status-rent',
        'type' => 'Lofts & Suites',
        'title' => 'Designer Loft Suite',
        'beds' => '2 Beds',
        'baths' => '2 Baths',
        'area' => '2000 Sq.ft.',
        'location' => 'Sector 61, Mohali',
        'link' => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1464288550599-43d5c3d6f2d7?auto=format&fit=crop&w=1200&q=80',
        'alt' => 'Luxury rental residence with scenic views',
        'agent_image' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=300&q=80',
        'agent_name' => 'Ananya Malhotra',
        'price' => '₹2.80 Lac',
        'status' => 'FOR RENT',
        'status_class' => 'status-rent',
        'type' => 'Residences',
        'title' => 'Panoramic Residence',
        'beds' => '3 Beds',
        'baths' => '3 Baths',
        'area' => '2650 Sq.ft.',
        'location' => 'Phase 3B2, Mohali',
        'link' => '#'
    ],
];

function renderLatestPropertiesCarousel(string $heading, string $description, array $properties, string $sliderClass): void
{
    echo '<section class="latest-properties-section" aria-labelledby="' . htmlspecialchars($sliderClass . '-heading') . '">';
    echo '<div class="latest-properties-section-header">';
    echo '<div class="latest-properties-section-intro">';
    echo '<h2 class="latest-properties-section-title" id="' . htmlspecialchars($sliderClass . '-heading') . '">' . htmlspecialchars($heading) . '</h2>';
    echo '<p class="latest-properties-section-description">' . htmlspecialchars($description) . '</p>';
    echo '</div>';
    echo '<div class="latest-properties-nav" aria-label="Carousel controls">';
    echo '<button class="latest-properties-nav-button latest-properties-nav-prev" type="button" aria-label="Scroll previous properties"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i></button>';
    echo '<button class="latest-properties-nav-button latest-properties-nav-next" type="button" aria-label="Scroll next properties"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button>';
    echo '</div>';
    echo '</div>';
    echo '<div class="latest-properties-slider-shell">';
    echo '<div class="swiper latest-properties-slider ' . htmlspecialchars($sliderClass) . '" aria-label="' . htmlspecialchars($heading) . '">';
    echo '<div class="swiper-wrapper">';

    foreach ($properties as $index => $property) {
        echo '<div class="swiper-slide">';
        echo '<article class="latest-property-card" style="--card-delay:' . intval($index * 100) . 'ms;">';
        echo '<div class="property-image-shell">';
        echo '<img src="' . htmlspecialchars($property['image']) . '" alt="' . htmlspecialchars($property['alt']) . '" loading="lazy" decoding="async">';
        echo '<div class="property-image-overlay">';
        echo '<span class="property-price-badge">' . htmlspecialchars($property['price']) . '</span>';
        echo '<span class="property-status-badge ' . htmlspecialchars($property['status_class']) . '">' . htmlspecialchars($property['status']) . '</span>';
        echo '<button class="property-favorite-button" type="button" aria-label="Save ' . htmlspecialchars($property['title']) . '"><i class="fa-regular fa-heart" aria-hidden="true"></i></button>';
        echo '</div>';
        echo '</div>';
        echo '<div class="property-card-body">';
        echo '<span class="property-type">' . htmlspecialchars($property['type']) . '</span>';
        if (!empty($property['agent_image'])) {
            echo '<div class="property-agent-avatar-wrap">';
            echo '<img class="property-agent-avatar" src="' . htmlspecialchars($property['agent_image']) . '" alt="' . htmlspecialchars($property['agent_name'] ?? 'Agent') . '" loading="lazy" decoding="async">';
            echo '</div>';
        }
        echo '<h3 class="property-title">' . htmlspecialchars($property['title']) . '</h3>';
        echo '<p class="property-location"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> ' . htmlspecialchars($property['location']) . '</p>';
        echo '<div class="property-divider"></div>';
        echo '<div class="property-bottom-row">';
        echo '<div class="property-price-block"><span class="property-price">' . htmlspecialchars($property['price']) . '</span><span class="property-price-label">Starting Price</span></div>';
        echo '<a class="property-cta" href="' . htmlspecialchars($property['link']) . '">View Details <span class="cta-arrow" aria-hidden="true">→</span></a>';
        echo '</div>';
        echo '</div>';
        echo '</article>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
}
?>

<section class="latest-properties-showcase" aria-labelledby="latest-properties-title">
    <div class="latest-properties-showcase-inner">
        <div class="latest-properties-heading-block">
            <p class="latest-properties-eyebrow">Curated For Discerning Buyers</p>
            <h2 class="latest-properties-main-heading" id="latest-properties-title">Latest Properties <span>for Sale / Rent</span> in Mohali</h2>
            <div class="latest-properties-divider" aria-hidden="true"></div>
        </div>

        <?php renderLatestPropertiesCarousel('Property for Sale', 'Explore luxury residential properties available for sale.', $latestPropertiesSale, 'latest-properties-sale'); ?>
        <?php renderLatestPropertiesCarousel('Property for Rent', 'Explore premium rental properties available in Mohali.', $latestPropertiesRent, 'latest-properties-rent'); ?>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
window.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.latest-properties-slider').forEach(function (sliderEl) {
        const section = sliderEl.closest('.latest-properties-section');
        if (!section || typeof window.Swiper === 'undefined') {
            return;
        }

        const nextBtn = section.querySelector('.latest-properties-nav-next');
        const prevBtn = section.querySelector('.latest-properties-nav-prev');

        new window.Swiper(sliderEl, {
            slidesPerView: 1.2,
            spaceBetween: 18,
            speed: 500,
            loop: true,
            grabCursor: true,
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            navigation: {
                nextEl: nextBtn,
                prevEl: prevBtn
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.2
                },
                640: {
                    slidesPerView: 2
                },
                900: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            },
            watchOverflow: true
        });
    });
});
</script>
