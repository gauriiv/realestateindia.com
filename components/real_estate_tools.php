<!-- Property Research Tools Component Start -->
<link rel="stylesheet" href="assets/css/real_estate_tools.css">
<div class="prt-component-wrapper">
    <!-- Header -->
    <div class="prt-section-header">
        <h2 class="prt-main-heading">User property research tools</h2>
        <p class="prt-sub-heading">Calculate your borrowing power and understand your financial options</p>
    </div>

    <!-- Slider Container -->
    <div class="prt-slider-container">
        <div class="prt-cards-track" id="prtCardsTrack">
            
            <!-- Card 1: EMI Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">EMI<br>Calculator</h3>
                    <p class="prt-card-desc">Calculate your monthly home loan EMI with accurate interest rates and plan your property purchase budget effortlessly.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-calculator"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to EMI Calculator">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Card 2: Eligibility Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">Eligibility<br>Calculator</h3>
                    <p class="prt-card-desc">Check your home loan eligibility instantly based on your income, existing obligations, and desired loan tenure.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to Eligibility Calculator">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Card 3: Affordability Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">Affordability<br>Calculator</h3>
                    <p class="prt-card-desc">Determine how much property you can truly afford by analyzing your income, expenses, and financing options in real-time.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to Affordability Calculator">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Card 4: Area Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">Area<br>Calculator</h3>
                    <p class="prt-card-desc">Convert and compare land area units like square feet, square meters, acres, and square yards for accurate property measurements.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-vector-square"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to Area Calculator">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Card 5: Property Valuation Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">Property<br>Valuation</h3>
                    <p class="prt-card-desc">Estimate your property's current market value based on location, size, amenities, and recent comparable sales in your area.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to Property Valuation">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Card 6: Rental Yield Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">Rental<br>Yield</h3>
                    <p class="prt-card-desc">Calculate potential rental income and annual yield for your property by comparing market rates and expected occupancy.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-coins"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to Rental Yield Calculator">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Card 7: Stamp Duty Calculator -->
            <div class="prt-tool-card">
                <div class="prt-card-content">
                    <h3 class="prt-card-title">Stamp Duty<br>Calculator</h3>
                    <p class="prt-card-desc">Determine stamp duty and registration charges for your property purchase based on state government rates and guidelines.</p>
                </div>
                <div class="prt-tool-icon" aria-hidden="true">
                    <i class="fa-solid fa-file-contract"></i>
                </div>
                <button class="prt-action-circle-btn" aria-label="Go to Stamp Duty Calculator">
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

        </div>

        <!-- Floating Slider Next Navigation Button -->
        <button class="prt-floating-nav-next" id="prtNextBtn" aria-label="Next items">
            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
    </div>
</div>

<!-- Scoped Logical Navigation Scripts -->
<script>
    (function() {
        const track = document.getElementById('prtCardsTrack');
        const nextBtn = document.getElementById('prtNextBtn');
        if (track && nextBtn) {
            nextBtn.addEventListener('click', () => {
                const firstCard = track.querySelector('.prt-tool-card');
                if (!firstCard) return;
                const stepWidth = firstCard.offsetWidth + 20;
                
                if (track.scrollLeft + track.offsetWidth >= track.scrollWidth - 15) {
                    track.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    track.scrollBy({ left: stepWidth, behavior: 'smooth' });
                }
            });
        }
    })();
</script>