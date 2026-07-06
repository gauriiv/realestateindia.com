<!-- Link hero.css style file -->
<link rel="stylesheet" href="assets/css/hero.css">

<section class="hero-section" style="background-image: url('assets/images/hero-cover-image.png');">
    <div class="hero-overlay"></div>
    
    <div class="hero-container">
        <!-- Headline -->
        <h1 class="hero-headline">India's Largest<br>Real Estate Platform</h1>
        
        <!-- Subheadline -->
        <p class="hero-subheadline">
            From Search to Keys, we've got you covered 
            <span class="bullet">•</span> 
            <span class="highlight">7000+ Homes Designed & Delivered</span>
        </p>
        
        <!-- Tab Navigation -->
        <div class="hero-tabs-wrapper">
            <div class="hero-tabs">
                <button class="hero-tab active" data-tab="buy" onclick="switchHeroTab('buy')">
                    <i class="fa-solid fa-house"></i> <span>Buy</span>
                </button>
                <button class="hero-tab" data-tab="rent" onclick="switchHeroTab('rent')">
                    <i class="fa-solid fa-tag"></i> <span>Rent</span>
                </button>
                <button class="hero-tab" data-tab="projects" onclick="switchHeroTab('projects')">
                    <i class="fa-solid fa-building"></i> <span>Projects</span>
                </button>
                <button class="hero-tab" data-tab="valuation" onclick="switchHeroTab('valuation')">
                    <i class="fa-solid fa-chart-line"></i> <span>Valuation</span>
                    <span class="tab-badge tab-badge-new">NEW</span>
                </button>
                <button class="hero-tab" data-tab="list-property" onclick="switchHeroTab('list-property')">
                    <i class="fa-solid fa-house"></i> <span>List Property</span>
                    <span class="tab-badge tab-badge-free">FREE</span>
                </button>
                <button class="hero-tab" data-tab="agents" onclick="switchHeroTab('agents')">
                    <i class="fa-solid fa-user-tie"></i> <span>Agents</span>
                </button>
            </div>
        </div>
        
        <!-- Search Capsule Bar -->
        <div class="hero-search-bar">
            <!-- City Selector -->
            <div class="search-col city-selector" id="citySelectorTrigger">
                <div class="city-selector-content">
                    <span class="selected-city" id="selectedCityText">Select City</span>
                    <i class="fa-solid fa-chevron-down chevron-icon"></i>
                </div>
                
                <!-- City Dropdown Menu -->
                <div class="city-dropdown-menu" id="cityDropdownMenu">
                    <div class="city-dropdown-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search city..." id="citySearchInput" onclick="event.stopPropagation();">
                    </div>
                    <ul class="city-list" id="cityList">
                        <!-- Populated via Javascript -->
                    </ul>
                </div>
            </div>
            
            <!-- Vertical Separator -->
            <div class="search-divider"></div>
            
            <!-- Locality Search Input -->
            <div class="search-col locality-search">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" placeholder='Search by "Locality"' id="localityInput" autocomplete="off">
                
                <!-- Locality Suggestions Popover -->
                <div class="locality-suggestions" id="localitySuggestions">
                    <div class="suggestions-header">Popular Localities</div>
                    <ul class="locality-list" id="localityList">
                        <!-- Populated via Javascript -->
                    </ul>
                </div>
            </div>
            
            <!-- Action Buttons Group -->
            <div class="search-buttons-group">
                <!-- Ask AI Button (Rainbow Gradient Outline) -->
                <button type="button" class="btn-ask-ai" id="askAiBtn">
                    <i class="fa-solid fa-wand-magic-sparkles text-gradient-rainbow"></i>
                    <span>Ask AI</span>
                </button>
                
                <!-- Main Search Button -->
                <button type="button" class="btn-search-action" id="searchBtn">
                    <span>Search</span>
                </button>
            </div>
        </div>
        <!-- Trending Searches -->
        <div class="trending-searches">
            <span class="trending-label">Trending Searches:</span>
            <a href="#" class="trending-pill">DLF <i class="fa-solid fa-arrow-up-right"></i></a>
            <a href="#" class="trending-pill">Sector 56 <i class="fa-solid fa-arrow-up-right"></i></a>
            <a href="#" class="trending-pill">Sector 46 <i class="fa-solid fa-arrow-up-right"></i></a>
            <a href="#" class="trending-pill">Sector 65 <i class="fa-solid fa-arrow-up-right"></i></a>
            <a href="#" class="trending-pill">Sector 43 <i class="fa-solid fa-arrow-up-right"></i></a>
        </div>
    </div>
</section>

<!-- Ask AI Dialog Modal -->
<div class="ask-ai-modal-overlay" id="askAiModal">
    <div class="ask-ai-modal-container">
        <div class="ask-ai-modal-header">
            <div class="ai-header-title">
                <i class="fa-solid fa-wand-magic-sparkles pulse-icon"></i>
                <h3>RealEstateIndia <span>AI Assistant</span></h3>
            </div>
            <button class="ai-modal-close" id="askAiModalClose"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="ask-ai-modal-body">
            <div class="ai-chat-history" id="aiChatHistory">
                <div class="ai-chat-bubble ai-agent-bubble">
                    <p>Hello! I am your AI property scout. Tell me what you're looking for in natural language! For example: <em>"Find a 3 BHK semi-furnished flat in Gurgaon with a balcony under 1.5 Cr."</em></p>
                </div>
            </div>
            
            <!-- Quick Chips -->
            <div class="ai-quick-chips">
                <button class="ai-chip">3 BHK flat in Gurgaon Sector 56 under 1.5 Cr</button>
                <button class="ai-chip">Ready to move villa in Bangalore Whitefield</button>
                <button class="ai-chip">Spacious PG near HSR Layout, Pune under 15k</button>
                <button class="ai-chip">Commercial space in Connaught Place New Delhi</button>
            </div>
            
            <div class="ai-chat-input-area">
                <input type="text" id="aiQueryInput" placeholder="Describe your dream home (e.g. 2 BHK near metro station in Noida)...">
                <button id="aiSubmitBtn" class="ai-submit-btn"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- Custom Toast Message Notification -->
<div class="hero-toast" id="heroToast">
    <div class="toast-content">
        <i class="fa-solid fa-circle-check toast-icon"></i>
        <div class="toast-text">
            <strong id="toastTitle">Success</strong>
            <span id="toastMessage">Action completed.</span>
        </div>
    </div>
</div>

<script>
// Data structure matching the properties and listings
const cityLocalities = {
    "Bangalore": ["Whitefield", "Electronic City", "Indiranagar", "HSR Layout", "Koramangala", "Yelahanka", "Jayanagar", "Marathahalli"],
    "Gurgaon": ["Sector 56", "DLF Phase 3", "Sohna Road", "Sector 82", "Golf Course Road", "Sector 49", "Sector 67", "Sector 21"],
    "Mumbai": ["Andheri West", "Bandra West", "Thane West", "Kharghar", "Juhu", "Borivali West", "Goregaon East", "Powai"],
    "New Delhi": ["Dwarka", "Saket", "Vasant Kunj", "Greater Kailash", "Rohini", "Connaught Place", "Karol Bagh", "Janakpuri"],
    "Pune": ["Hinjewadi", "Kharadi", "Wakad", "Baner", "Kothrud", "Hadapsar", "Viman Nagar", "Pimple Saudagar"],
    "Lucknow": ["Gomti Nagar", "Aliganj", "Hazratganj", "Indira Nagar", "Aashiana", "Sushant Golf City"],
    "Chennai": ["Velachery", "Adyar", "OMR", "Anna Nagar", "Medavakkam", "Tambaram", "Guindy", "T Nagar"],
    "Hyderabad": ["Gachibowli", "Madhapur", "Kondapur", "Kukatpally", "Jubilee Hills", "Banjara Hills", "Begumpet", "Miyapur"],
    "Kolkata": ["Salt Lake", "New Town", "Rajarhat", "Tollygunge", "Garia", "Behala", "Howrah", "Lake Town"],
    "Ahmedabad": ["Satellite", "SG Highway", "Bodakdev", "Bopal", "Prahlad Nagar", "Chandkheda"],
    "Jaipur": ["Malviya Nagar", "Vaishali Nagar", "Mansarovar", "Jagatpura", "C Scheme", "Tonk Road"],
    "Surat": ["Adajan", "Vesu", "Varachha", "Katargam", "Pal", "Dindoli"],
    "Chandigarh": ["Sector 17", "Sector 35", "Mani Majra", "Sector 22", "Sector 44"],
    "Indore": ["Vijay Nagar", "Nipania", "Palasia", "Bicholi Mardana", "Rajendra Nagar"],
    "Kochi": ["Kadavanthra", "Kakkanad", "Edappally", "Vyttila", "Aluva", "Fort Kochi"]
};

const popularLocalities = ["Dwarka, New Delhi", "Whitefield, Bangalore", "Hinjewadi, Pune", "Andheri West, Mumbai", "Gachibowli, Hyderabad", "Sector 56, Gurgaon"];

let currentActiveTab = 'buy';
let selectedCity = 'New Delhi'; // Default city

// Initialize UI Elements
document.addEventListener("DOMContentLoaded", () => {
    // Set default selected city text
    document.getElementById("selectedCityText").innerText = selectedCity;
    
    // Build city lists and locality lists
    initCitiesList();
    initLocalitiesList();
    
    // Event listeners
    const cityTrigger = document.getElementById("citySelectorTrigger");
    const cityDropdown = document.getElementById("cityDropdownMenu");
    const citySearchInput = document.getElementById("citySearchInput");
    
    cityTrigger.addEventListener("click", (e) => {
        cityDropdown.classList.toggle("active");
        if (cityDropdown.classList.contains("active")) {
            citySearchInput.focus();
        }
        e.stopPropagation();
    });
    
    // Close dropdowns on clicking outside
    document.addEventListener("click", () => {
        cityDropdown.classList.remove("active");
        document.getElementById("localitySuggestions").classList.remove("active");
    });
    
    // Prevent dropdown click closing it
    cityDropdown.addEventListener("click", (e) => {
        e.stopPropagation();
    });
    
    // Search cities filter
    citySearchInput.addEventListener("input", (e) => {
        filterCities(e.target.value);
    });
    
    // Locality suggestions
    const localityInput = document.getElementById("localityInput");
    const localitySuggestions = document.getElementById("localitySuggestions");
    
    localityInput.addEventListener("focus", (e) => {
        initLocalitiesList();
        localitySuggestions.classList.add("active");
        e.stopPropagation();
    });
    
    localityInput.addEventListener("click", (e) => {
        localitySuggestions.classList.add("active");
        e.stopPropagation();
    });
    
    localityInput.addEventListener("input", (e) => {
        filterLocalities(e.target.value);
    });
    

    // Ask AI modal
    const askAiBtn = document.getElementById("askAiBtn");
    const askAiModal = document.getElementById("askAiModal");
    const askAiModalClose = document.getElementById("askAiModalClose");
    const aiSubmitBtn = document.getElementById("aiSubmitBtn");
    const aiQueryInput = document.getElementById("aiQueryInput");
    
    askAiBtn.addEventListener("click", () => {
        askAiModal.classList.add("active");
        document.body.style.overflow = "hidden"; // Disable scroll when modal is open
    });
    
    askAiModalClose.addEventListener("click", () => {
        askAiModal.classList.remove("active");
        document.body.style.overflow = ""; // Enable scroll
    });
    
    askAiModal.addEventListener("click", (e) => {
        if (e.target === askAiModal) {
            askAiModal.classList.remove("active");
            document.body.style.overflow = "";
        }
    });
    
    aiSubmitBtn.addEventListener("click", handleAiSubmit);
    aiQueryInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") handleAiSubmit();
    });
    
    // Setup AI Quick chips
    const chips = document.querySelectorAll(".ai-chip");
    chips.forEach(chip => {
        chip.addEventListener("click", () => {
            aiQueryInput.value = chip.innerText;
            handleAiSubmit();
        });
    });
    
    // Main Search submit
    const searchBtn = document.getElementById("searchBtn");
    searchBtn.addEventListener("click", performSearch);
});

// Initialize City list in dropdown
function initCitiesList() {
    const list = document.getElementById("cityList");
    list.innerHTML = "";
    
    Object.keys(cityLocalities).forEach(city => {
        const li = document.createElement("li");
        li.innerText = city;
        if (city === selectedCity) {
            li.classList.add("active");
        }
        li.addEventListener("click", () => {
            selectCity(city);
        });
        list.appendChild(li);
    });
}

// Select a city
function selectCity(city) {
    selectedCity = city;
    document.getElementById("selectedCityText").innerText = city;
    document.getElementById("localityInput").value = "";
    
    // Update active city class in dropdown list
    const cityItems = document.querySelectorAll("#cityList li");
    cityItems.forEach(item => {
        if (item.innerText === city) {
            item.classList.add("active");
        } else {
            item.classList.remove("active");
        }
    });
    
    document.getElementById("cityDropdownMenu").classList.remove("active");
    showToast("City Updated", `Switched to search in ${city}`);
    
    // Re-initialize localities dropdown list
    initLocalitiesList();
}

// Filter cities list based on input
function filterCities(query) {
    const items = document.querySelectorAll("#cityList li");
    const q = query.toLowerCase().trim();
    
    items.forEach(item => {
        const text = item.innerText.toLowerCase();
        if (text.includes(q)) {
            item.style.display = "";
        } else {
            item.style.display = "none";
        }
    });
}

// Initialize Locality suggestion list
function initLocalitiesList() {
    const list = document.getElementById("localityList");
    list.innerHTML = "";
    
    const localities = cityLocalities[selectedCity] || popularLocalities;
    
    localities.forEach(loc => {
        const li = document.createElement("li");
        li.innerHTML = `<i class="fa-solid fa-location-dot"></i> <span>${loc}</span>`;
        li.addEventListener("click", () => {
            document.getElementById("localityInput").value = loc;
            document.getElementById("localitySuggestions").classList.remove("active");
        });
        list.appendChild(li);
    });
}

// Filter localities
function filterLocalities(query) {
    const list = document.getElementById("localityList");
    list.innerHTML = "";
    
    const q = query.toLowerCase().trim();
    const localities = cityLocalities[selectedCity] || [];
    const matched = localities.filter(loc => loc.toLowerCase().includes(q));
    
    if (matched.length === 0) {
        const li = document.createElement("li");
        li.innerHTML = `<i class="fa-solid fa-circle-info"></i> <span>No matches found for "${query}"</span>`;
        li.style.cursor = "default";
        list.appendChild(li);
        return;
    }
    
    matched.forEach(loc => {
        const li = document.createElement("li");
        li.innerHTML = `<i class="fa-solid fa-location-dot"></i> <span>${loc}</span>`;
        li.addEventListener("click", () => {
            document.getElementById("localityInput").value = loc;
            document.getElementById("localitySuggestions").classList.remove("active");
        });
        list.appendChild(li);
    });
}

// Switch Hero Tab
function switchHeroTab(tabId) {
    currentActiveTab = tabId;
    
    // Update active tab styles
    const tabs = document.querySelectorAll(".hero-tab");
    tabs.forEach(tab => {
        if (tab.getAttribute("data-tab") === tabId) {
            tab.classList.add("active");
        } else {
            tab.classList.remove("active");
        }
    });
    
    // Update input placeholders dynamically
    const localityInput = document.getElementById("localityInput");
    switch (tabId) {
        case 'buy':
            localityInput.placeholder = 'Search by "Locality", "Builder" or "Project"';
            break;
        case 'rent':
            localityInput.placeholder = 'Search by "Locality" or "Apartment Name"';
            break;
        case 'projects':
            localityInput.placeholder = 'Search by "Project Name", "Builder" or "City"';
            break;
        case 'valuation':
            localityInput.placeholder = 'Enter Property Address or Locality to Value';
            break;
        case 'list-property':
            localityInput.placeholder = 'Enter Property Type or Location to List';
            break;
        case 'agents':
            localityInput.placeholder = 'Search Agents by "Locality", "Name" or "Agency"';
            break;
        default:
            localityInput.placeholder = 'Search by "Locality"';
    }
}

// Trigger standard search toast
function performSearch() {
    const locVal = document.getElementById("localityInput").value;
    const tabName = currentActiveTab.toUpperCase().replace("-", " ");
    
    if (!locVal.trim()) {
        showToast("Search Input Required", "Please enter a locality, project, or builder to search.", "warning");
        document.getElementById("localityInput").focus();
        return;
    }
    
    showToast("Searching", `Searching for property in ${locVal}, ${selectedCity} under [${tabName}]...`);
    
    // Simulate navigation/action
    setTimeout(() => {
        // Redirection or content filter can happen here in real app
    }, 1000);
}

// Handle Ask AI Form Submission
function handleAiSubmit() {
    const input = document.getElementById("aiQueryInput");
    const val = input.value.trim();
    if (!val) return;
    
    const chatHistory = document.getElementById("aiChatHistory");
    
    // Add user message
    const userBubble = document.createElement("div");
    userBubble.classList.add("ai-chat-bubble", "ai-user-bubble");
    userBubble.innerHTML = `<p>${escapeHtml(val)}</p>`;
    chatHistory.appendChild(userBubble);
    
    input.value = "";
    chatHistory.scrollTop = chatHistory.scrollHeight;
    
    // Add loader bubble
    const loadingBubble = document.createElement("div");
    loadingBubble.classList.add("ai-chat-bubble", "ai-agent-bubble", "ai-loading-bubble");
    loadingBubble.innerHTML = `<div class="typing-loader"><span></span><span></span><span></span></div>`;
    chatHistory.appendChild(loadingBubble);
    chatHistory.scrollTop = chatHistory.scrollHeight;
    
    // Simulate AI response
    setTimeout(() => {
        loadingBubble.remove();
        
        const agentBubble = document.createElement("div");
        agentBubble.classList.add("ai-chat-bubble", "ai-agent-bubble");
        
        let responseHTML = ``;
        if (val.toLowerCase().includes("crore") || val.toLowerCase().includes("cr") || val.toLowerCase().includes("lakh") || val.toLowerCase().includes("flat") || val.toLowerCase().includes("bhk")) {
            responseHTML = `
                <p>I have scanned through listings in <strong>${selectedCity}</strong> matching your request. Here are top 3 matching options:</p>
                <div class="ai-property-recommendations">
                    <div class="ai-prop-card">
                        <div class="ai-prop-details">
                            <h5>Premium 3 BHK Residency</h5>
                            <p class="ai-prop-loc"><i class="fa-solid fa-location-dot"></i> Sector 56, ${selectedCity}</p>
                            <span class="ai-prop-price">₹1.45 Crores</span>
                        </div>
                        <button class="ai-prop-view" onclick="showToast('Loading Property', 'Navigating to listing...')">View</button>
                    </div>
                    <div class="ai-prop-card">
                        <div class="ai-prop-details">
                            <h5>Dlf Skyline Residences</h5>
                            <p class="ai-prop-loc"><i class="fa-solid fa-location-dot"></i> DLF Phase 3, ${selectedCity}</p>
                            <span class="ai-prop-price">₹1.55 Crores</span>
                        </div>
                        <button class="ai-prop-view" onclick="showToast('Loading Property', 'Navigating to listing...')">View</button>
                    </div>
                </div>
            `;
        } else {
            responseHTML = `
                <p>Sure! I can help you search properties, land, or agents in <strong>${selectedCity}</strong>. Try typing something like: <em>"Find modern 3 BHK flats in popular areas"</em> or <em>"List of agents near Whitefield"</em>.</p>
            `;
        }
        
        agentBubble.innerHTML = responseHTML;
        chatHistory.appendChild(agentBubble);
        chatHistory.scrollTop = chatHistory.scrollHeight;
    }, 1500);
}

// Toast popup utility
function showToast(title, message, type = "success") {
    const toast = document.getElementById("heroToast");
    const toastTitle = document.getElementById("toastTitle");
    const toastMsg = document.getElementById("toastMessage");
    const toastIcon = toast.querySelector(".toast-icon");
    
    toastTitle.innerText = title;
    toastMsg.innerText = message;
    
    // Change icon class based on type
    toastIcon.className = "fa-solid toast-icon";
    if (type === "success") {
        toastIcon.classList.add("fa-circle-check", "text-success");
        toast.style.borderLeft = "5px solid #22c55e";
    } else if (type === "warning") {
        toastIcon.classList.add("fa-triangle-exclamation", "text-warning");
        toast.style.borderLeft = "5px solid #eab308";
    } else {
        toastIcon.classList.add("fa-circle-info", "text-info");
        toast.style.borderLeft = "5px solid #3b82f6";
    }
    
    toast.classList.add("active");
    
    setTimeout(() => {
        toast.classList.remove("active");
    }, 4000);
}

// Escape helper to prevent script injection in input
function escapeHtml(text) {
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}
</script>
