<link rel="stylesheet" href="assets/css/footer.css">

<footer class="site-footer">
    <!-- Main Footer Information Links -->
    <div class="footer-links-section">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Col 1: About -->
                <div class="footer-col brand-col">
                    <div class="footer-logo">
                        <i class="fa-solid fa-house-chimney"></i> RealEstate<span>India</span>.com
                    </div>
                    <p class="brand-desc">
                        RealEstateIndia.com is India's leading real estate platform, offering comprehensive services for buyers, sellers, landlords, and tenants. Browse millions of listings, connect with top agents, and find your dream space today.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Col 2: Services -->
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#">Buy a Home</a></li>
                        <li><a href="#">Rent a Property</a></li>
                        <li><a href="#">Sell / Post Property</a></li>
                        <li><a href="#">Home Loan Services</a></li>
                        <li><a href="#">Property Valuation</a></li>
                        <li><a href="#">Legal Assistance</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company -->
                <div class="footer-col">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Real Estate Blog</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact -->
                <div class="footer-col contact-col">
                    <h3>Contact Us</h3>
                    <ul class="contact-list">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <span>+91-1800-REAL-ESTATE<br><small>Toll Free (9:00 AM - 7:00 PM)</small></span>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <span>support@realestateindia.com</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Connaught Place, New Delhi, India - 110001</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Copyright Bar -->
    <div class="footer-bottom">
        <div class="footer-container">
            <div class="bottom-flex">
                <p>&copy; 2026 RealEstateIndia.com. All Rights Reserved.</p>
                <div class="bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('click', function(e) {
        const ripple = document.createElement('div');
        ripple.classList.add('click-ripple');
        const size = 30; // initial size
        ripple.style.width = ripple.style.height = `${size}px`;
        ripple.style.left = `${e.clientX - size/2}px`;
        ripple.style.top = `${e.clientY - size/2}px`;
        document.body.appendChild(ripple);
        
        ripple.addEventListener('animationend', () => {
            ripple.remove();
        });
    });
</script>
</body>
</html>
