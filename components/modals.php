<!-- Sign In / Registration Modal -->
<div id="signinModal" class="modal-overlay">
    <div class="modal-content">
        <span class="close-modal" onclick="closeSignInModal()">&times;</span>
        
        <!-- Step 1: Registration -->
        <div id="modal-step-1" class="modal-step active">
            <h2>Join Free & Register</h2>
            <p class="modal-subtitle">Create an account to post properties and save searches.</p>
            
            <form class="registration-form" onsubmit="event.preventDefault(); goToStep2();">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="tel" placeholder="Enter mobile number" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Create a password" required>
                </div>
                
                <button type="submit" class="modal-primary-btn">Continue to Property Posting</button>
            </form>
            <p class="modal-footer-text">Already have an account? <a href="#">Log In</a></p>
        </div>

        <!-- Step 2: Property Posting & Subscription (Side by Side) -->
        <div id="modal-step-2" class="modal-step">
            <div class="step-2-container">
                <!-- Left Side: Property Posting Intent -->
                <div class="posting-side">
                    <h2>What do you want to post?</h2>
                    <p>Select the category of your property</p>
                    
                    <div class="property-options-grid">
                        <div class="prop-option">
                            <i class="fa-solid fa-house"></i>
                            <span>Sell Home</span>
                        </div>
                        <div class="prop-option">
                            <i class="fa-solid fa-key"></i>
                            <span>Rent Home</span>
                        </div>
                        <div class="prop-option">
                            <i class="fa-solid fa-building"></i>
                            <span>Commercial</span>
                        </div>
                        <div class="prop-option">
                            <i class="fa-solid fa-map"></i>
                            <span>Plot/Land</span>
                        </div>
                    </div>
                    
                    <button class="modal-primary-btn outline-btn" onclick="goToStep1()">Back</button>
                </div>

                <!-- Right Side: Subscription Plans -->
                <div class="subscription-side">
                    <h2>Upgrade Your Listing</h2>
                    <p>Get up to 10x more leads with premium plans.</p>
                    
                    <div class="subscription-card basic">
                        <div class="card-header">
                            <h4>Basic</h4>
                            <span class="price">Free</span>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> 1 Property Listing</li>
                            <li><i class="fa-solid fa-check"></i> Visibility for 30 Days</li>
                        </ul>
                        <button class="select-plan-btn">Select</button>
                    </div>

                    <div class="subscription-card premium">
                        <div class="card-header">
                            <h4>Premium <span class="badge">Recommended</span></h4>
                            <span class="price">₹1,999</span>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> Up to 5 Listings</li>
                            <li><i class="fa-solid fa-check"></i> Top Search Visibility</li>
                            <li><i class="fa-solid fa-check"></i> Dedicated Manager</li>
                        </ul>
                        <button class="select-plan-btn active">Select Premium</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('signinModal');
    const step1 = document.getElementById('modal-step-1');
    const step2 = document.getElementById('modal-step-2');

    function openSignInModal() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // prevent scrolling
    }

    function closeSignInModal() {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    function goToStep2() {
        step1.classList.remove('active');
        step2.classList.add('active');
    }

    function goToStep1() {
        step2.classList.remove('active');
        step1.classList.add('active');
    }

    // Close on click outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeSignInModal();
        }
        if (event.target == document.getElementById('propertyModal')) {
            closePropertyModal();
        }
    }
</script>

<!-- Dynamic Property Details Modal -->
<div id="propertyModal" class="modal-overlay">
    <div class="modal-content property-modal-content">
        <span class="close-modal" onclick="closePropertyModal()">&times;</span>
        
        <div class="prop-modal-layout">
            <div class="prop-modal-image-col">
                <img id="pm-img" src="" alt="Property Image">
            </div>
            <div class="prop-modal-info-col">
                <h2 id="pm-title">Property Title</h2>
                <p class="pm-loc"><i class="fa-solid fa-location-dot"></i> <span id="pm-loc-text">Location, City</span></p>
                <div class="pm-price-row">
                    <span class="pm-price" id="pm-price">₹ 0</span>
                </div>
                
                <div class="pm-specs-grid">
                    <div class="pm-spec">
                        <i class="fa-solid fa-bed"></i>
                        <div>
                            <span>Area/Type</span>
                            <strong id="pm-area">2 BHK</strong>
                        </div>
                    </div>
                    <div class="pm-spec">
                        <i class="fa-solid fa-map-pin"></i>
                        <div>
                            <span>Nearby</span>
                            <strong id="pm-nearby">Metro Station</strong>
                        </div>
                    </div>
                </div>

                <div class="pm-actions">
                    <button class="modal-primary-btn contact-btn"><i class="fa-solid fa-phone"></i> Contact Dealer/Owner</button>
                    <button class="modal-primary-btn outline-btn"><i class="fa-regular fa-envelope"></i> Message</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const propModal = document.getElementById('propertyModal');
    
    function openPropertyModal(data) {
        document.getElementById('pm-img').src = data.img;
        document.getElementById('pm-title').innerText = data.title;
        document.getElementById('pm-loc-text').innerText = data.location;
        document.getElementById('pm-price').innerText = data.price;
        document.getElementById('pm-area').innerText = data.area;
        document.getElementById('pm-nearby').innerText = data.nearby;
        
        propModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closePropertyModal() {
        propModal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
</script>
