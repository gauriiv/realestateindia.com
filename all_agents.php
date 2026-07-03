<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="assets/css/all_agents.css">

<main class="agents-page">
    <div class="page-header">
        <div class="container">
            <h1>Our Trusted <span class="highlight">Real Estate Agents</span></h1>
            <p>Connect with hundreds of verified property dealers, experts, and consultants across India.</p>
        </div>
    </div>

    <div class="container">
        <!-- City Filter -->
        <div class="city-filter-bar">
            <span><i class="fa-solid fa-city"></i> Filter by City:</span>
            <div id="agent-city-filters">
                <button class="city-btn active" data-city="All">All Cities</button>
                <button class="city-btn" data-city="Mumbai">Mumbai</button>
                <button class="city-btn" data-city="Delhi NCR">Delhi NCR</button>
                <button class="city-btn" data-city="Bangalore">Bangalore</button>
                <button class="city-btn" data-city="Pune">Pune</button>
                <button class="city-btn" data-city="Chennai">Chennai</button>
            </div>
        </div>

        <div class="agents-directory-grid" id="agents-grid">
            <div class="loading-spinner">
                <i class="fa-solid fa-circle-notch fa-spin"></i> Loading agents...
            </div>
        </div>
    </div>
</main>

<script>
    const agentImages = [
        "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=150&q=80",
        "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&q=80",
        "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=150&q=80",
        "https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=150&q=80",
        "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&q=80",
        "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=150&q=80",
        "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&q=80",
        "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&q=80",
        "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&q=80",
        "https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=150&q=80"
    ];

    const firstNames = ["Rajesh", "Priya", "Amit", "Neha", "Vikram", "Sneha", "Rahul", "Pooja", "Sanjay", "Anjali"];
    const lastNames = ["Kumar", "Sharma", "Patel", "Gupta", "Singh", "Desai", "Joshi", "Verma", "Mehta", "Reddy"];
    
    const cityLocalities = {
        "Mumbai": ["Andheri West", "Bandra", "Worli", "Juhu", "Powai"],
        "Delhi NCR": ["Dwarka", "South Extension", "Vasant Kunj", "Connaught Place"],
        "Bangalore": ["Whitefield", "Electronic City", "Koramangala", "Indiranagar"],
        "Pune": ["Kharadi", "Hinjewadi", "Koregaon Park", "Viman Nagar"],
        "Chennai": ["T Nagar", "Velachery", "Adyar", "Anna Nagar"]
    };

    function getRandomItem(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateAgents(targetCity = "All") {
        let results = [];
        let citiesToGenerate = targetCity === "All" ? Object.keys(cityLocalities) : [targetCity];
        
        citiesToGenerate.forEach(city => {
            // Generate 15 agents per city
            for (let i = 0; i < 15; i++) {
                let fn = getRandomItem(firstNames);
                let ln = getRandomItem(lastNames);
                let loc = getRandomItem(cityLocalities[city]);
                
                results.push({
                    name: `${fn} ${ln}`,
                    firm: `${ln} Real Estate Group`,
                    img: getRandomItem(agentImages),
                    city: city,
                    locality: loc,
                    experience: getRandomInt(2, 25),
                    reviews: getRandomInt(10, 500),
                    rating: (Math.random() * 1.5 + 3.5).toFixed(1) // 3.5 to 5.0
                });
            }
        });
        
        // Shuffle array if "All"
        if (targetCity === "All") {
            results = results.sort(() => Math.random() - 0.5);
        }
        
        return results;
    }

    function renderAgents(data) {
        const grid = document.getElementById('agents-grid');
        grid.innerHTML = '';
        
        data.forEach((agent, idx) => {
            let delay = (idx % 15) * 0.05;
            
            grid.innerHTML += `
                <div class="dir-agent-card" style="animation-delay: ${delay}s">
                    <div class="dir-agent-profile">
                        <img src="${agent.img}" alt="${agent.name}">
                        <div class="verified-badge"><i class="fa-solid fa-check"></i> Verified</div>
                    </div>
                    <div class="dir-agent-details">
                        <h4>${agent.name}</h4>
                        <p class="firm-name">${agent.firm}</p>
                        
                        <div class="agent-stats">
                            <span class="rating"><i class="fa-solid fa-star"></i> ${agent.rating} (${agent.reviews})</span>
                            <span class="exp"><i class="fa-solid fa-briefcase"></i> ${agent.experience} Yrs Exp.</span>
                        </div>
                        
                        <p class="agent-loc"><i class="fa-solid fa-location-dot"></i> ${agent.locality}, ${agent.city}</p>
                        
                        <div class="dir-agent-actions">
                            <button class="action-btn call-btn">
                                <i class="fa-solid fa-phone"></i> <span>Call Now</span>
                            </button>
                            <button class="action-btn message-btn">
                                <i class="fa-brands fa-whatsapp"></i> <span>WhatsApp</span>
                            </button>
                        </div>
                    </div>
                </div>
            `;
        });
    }

    setTimeout(() => {
        let allAgents = generateAgents("All");
        renderAgents(allAgents);
    }, 500);

    // Filter Logic
    document.querySelectorAll('.city-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            document.querySelectorAll('.city-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const city = btn.getAttribute('data-city');
            const data = generateAgents(city);
            renderAgents(data);
        });
    });

</script>

<?php include 'includes/footer.php'; ?>
