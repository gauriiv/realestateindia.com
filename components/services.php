<link rel="stylesheet" href="assets/css/services.css">

<section class="services-section">
    <div class="section-container">
        <h2 class="section-title">Everything you Need at One Place</h2>
        
        <div class="services-tabs">
            <button class="tab-btn active" data-target="tab-buyers">For Buyers / Owners</button>
            <button class="tab-btn" data-target="tab-tenants">For Tenants</button>
            <button class="tab-btn" data-target="tab-agents">For Agents</button>
            <button class="tab-btn" data-target="tab-builders">For Builders & Banks</button>
        </div>
        
        <!-- Buyers / Owners Tab -->
        <div class="services-content-box" id="tab-buyers">
            <div class="service-item">
                <div class="service-icon">💸</div>
                <h4 class="service-title">Home Loan</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🛋️</div>
                <h4 class="service-title">Home Interior Design</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">📊</div>
                <h4 class="service-title">Valuation</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🧭</div>
                <h4 class="service-title">Vastu Calculator</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🏠</div>
                <h4 class="service-title">Property Management</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🏘️</div>
                <h4 class="service-title">Sell or Rent Property</h4>
            </div>
        </div>

        <!-- Tenants Tab -->
        <div class="services-content-box" id="tab-tenants" style="display: none;">
            <div class="service-item">
                <div class="service-icon">📄</div>
                <h4 class="service-title">Online Rent Agreement</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🧾</div>
                <h4 class="service-title">Rent Receipts</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🏠</div>
                <h4 class="service-title">Property Management</h4>
            </div>
        </div>

        <!-- Agents Tab -->
        <div class="services-content-box" id="tab-agents" style="display: none;">
            <div class="service-item">
                <div class="service-icon">📢</div>
                <h4 class="service-title">List Property With Us</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🤝</div>
                <h4 class="service-title">Co-Broking For New Projects</h4>
            </div>
        </div>

        <!-- Builders & Banks Tab -->
        <div class="services-content-box" id="tab-builders" style="display: none;">
            <div class="service-item">
                <div class="service-icon">📢</div>
                <h4 class="service-title">Advertise With Us</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🕶️</div>
                <h4 class="service-title">3D/AR/VR Services</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🧠</div>
                <h4 class="service-title">Data Intelligence</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">📝</div>
                <h4 class="service-title">Mortgage Partnerships</h4>
            </div>
            <div class="service-item">
                <div class="service-icon">🤖</div>
                <h4 class="service-title">Super Agent Pro</h4>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-btn');
    const contents = document.querySelectorAll('.services-content-box');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            tab.classList.add('active');

            // Hide all content boxes
            contents.forEach(content => {
                content.style.display = 'none';
            });

            // Show target content box
            const targetId = tab.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.style.display = 'grid';
            }
        });
    });
});
</script>
