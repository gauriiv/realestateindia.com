<?php 
include 'includes/header.php'; 
$category = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : 'type';
$val = isset($_GET['val']) ? htmlspecialchars($_GET['val']) : 'All';
?>

<link rel="stylesheet" href="assets/css/properties.css">

<main class="properties-page">
    <div class="page-header">
        <div class="container">
            <h1>Searching Properties: <span class="highlight"><?= $val ?></span></h1>
            <p>We found <strong>100+</strong> matching properties for your search criteria.</p>
        </div>
    </div>

    <div class="container">
        <!-- Locality Filter (Shows if city is searched) -->
        <div id="locality-filter-section" style="display:none;" class="locality-chips">
            <span class="loc-label"><i class="fa-solid fa-location-crosshairs"></i> Filter by Locality:</span>
            <div id="locality-buttons"></div>
        </div>

        <div class="properties-grid" id="properties-grid">
            <!-- Properties injected by JS -->
            <div class="loading-spinner">
                <i class="fa-solid fa-circle-notch fa-spin"></i> Loading properties...
            </div>
        </div>
    </div>
</main>

<script>
    const category = "<?= $category ?>";
    const val = "<?= $val ?>";

    // Extensive pool of real-estate images
    const sampleImages = [
        "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600",
        "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600",
        "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=600",
        "https://images.unsplash.com/photo-1502672260266-1c1c24240938?w=600",
        "https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=600",
        "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600",
        "https://images.unsplash.com/photo-1484154218962-a197022b5858?w=600",
        "https://images.unsplash.com/photo-1513694203232-719a280e022f?w=600",
        "https://images.unsplash.com/photo-1582037928769-181f2644ce9e?w=600",
        "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600",
        "https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=600",
        "https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?w=600",
        "https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=600",
        "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600"
    ];

    const cityLocalities = {
        "Mumbai": ["Andheri West", "Bandra", "Worli", "Juhu", "Powai", "Borivali", "Goregaon", "Malad", "Colaba"],
        "Delhi NCR": ["Dwarka", "South Extension", "Vasant Kunj", "Connaught Place", "Rohini", "Gurgaon Sec 42", "Noida Ext"],
        "Bangalore": ["Whitefield", "Electronic City", "Koramangala", "Indiranagar", "HSR Layout", "BTM Layout", "Marathahalli"],
        "Pune": ["Kharadi", "Hinjewadi", "Koregaon Park", "Viman Nagar", "Wakad", "Baner", "Aundh"],
        "Default": ["Central Area", "North District", "South End", "Tech Park Zone", "Downtown", "Suburbs"]
    };

    function getRandomImg() {
        return sampleImages[Math.floor(Math.random() * sampleImages.length)];
    }
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateProperties(cat, v, count = 100) {
        let results = [];
        for (let i = 1; i <= count; i++) {
            let item = { img: getRandomImg(), id: i };
            
            let areaSqft = getRandomInt(800, 4500);
            let priceLacs = getRandomInt(40, 950);
            let priceStr = priceLacs > 100 ? '₹' + (priceLacs/100).toFixed(2) + ' Cr' : '₹' + priceLacs + ' Lacs';
            
            let locs = (cat === 'city' && cityLocalities[v]) ? cityLocalities[v] : cityLocalities["Default"];
            let randomLoc = locs[getRandomInt(0, locs.length-1)];

            if (cat === 'type') {
                item.title = `Premium ${v !== 'All' ? v : 'Property'} in ${randomLoc}`;
                item.price = priceStr;
                item.loc = randomLoc;
            } else if (cat === 'bhk') {
                item.title = `Luxury ${v} Apartment - ${randomLoc}`;
                let psqft = getRandomInt(5000, 15000);
                let total = (areaSqft * psqft) / 100000;
                item.price = total > 100 ? '₹' + (total/100).toFixed(2) + ' Cr' : '₹' + total.toFixed(2) + ' Lacs';
                item.loc = randomLoc;
            } else if (cat === 'budget') {
                item.title = `Beautiful Home in ${randomLoc}`;
                item.price = v;
                item.loc = randomLoc;
            } else if (cat === 'city' || cat === 'locality') {
                let currentLoc = cat === 'locality' ? v : randomLoc;
                item.title = `Exclusive Property in ${currentLoc}`;
                item.price = priceStr;
                item.loc = currentLoc;
            } else {
                item.title = `Amazing Space in ${randomLoc}`;
                item.price = priceStr;
                item.loc = randomLoc;
            }
            
            item.area = `${areaSqft} sqft`;
            item.nearby = ["Hospital, Mall", "Metro Station", "Tech Park, School", "Airport", "Bus Stand"][getRandomInt(0,4)];
            results.push(item);
        }
        return results;
    }

    function renderProperties(data) {
        const grid = document.getElementById('properties-grid');
        grid.innerHTML = '';
        
        data.forEach((prop, idx) => {
            // Slight staggered animation delay
            let delay = (idx % 10) * 0.05;
            
            grid.innerHTML += `
                <div class="result-card" style="animation-delay: ${delay}s">
                    <div class="result-img-wrapper">
                        <img src="${prop.img}" alt="${prop.title}">
                        <span class="result-badge">Verified</span>
                        <div class="card-overlay-actions">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-share-nodes"></i>
                        </div>
                    </div>
                    <div class="result-details">
                        <h4>${prop.title}</h4>
                        <div class="result-specs">
                            <p class="highlight-price"><i class="fa-solid fa-indian-rupee-sign"></i> Price: ${prop.price}</p>
                            <p><i class="fa-solid fa-ruler-combined"></i> Area: ${prop.area}</p>
                            <p><i class="fa-solid fa-location-dot"></i> Loc: ${prop.loc}</p>
                            <p class="nearby-info"><i class="fa-solid fa-map-pin"></i> Nearby: ${prop.nearby}</p>
                        </div>
                        <div class="card-footer-btns">
                            <button class="btn-outline">Contact Agent</button>
                            <button class="btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            `;
        });
    }

    // Initialize
    setTimeout(() => {
        let properties = generateProperties(category, val, 100);
        renderProperties(properties);

        // If city is selected, show localities
        if (category === 'city') {
            const locSection = document.getElementById('locality-filter-section');
            const locBtns = document.getElementById('locality-buttons');
            let locs = cityLocalities[val] || cityLocalities["Default"];
            
            locs.forEach(l => {
                let btn = document.createElement('button');
                btn.className = 'loc-btn';
                btn.innerText = l;
                btn.onclick = () => {
                    document.querySelectorAll('.loc-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    let newProps = generateProperties('locality', l, 100);
                    renderProperties(newProps);
                    document.querySelector('.page-header h1 .highlight').innerText = l + ", " + val;
                };
                locBtns.appendChild(btn);
            });
            locSection.style.display = 'flex';
        }
    }, 600); // Artificial delay to show spinner
</script>

<?php include 'includes/footer.php'; ?>
