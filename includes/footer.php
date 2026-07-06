<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/mega_footer_links.css">

<footer class="site-footer">

    <!-- Mega Footer Links Section -->
    <section class="mega-footer" aria-label="Property links by category">
        <div class="mega-footer-inner">
            <div class="mega-footer-grid">
                <?php
                $megaCities = [
                    'Delhi', 'Mumbai', 'Gurgaon', 'Bangalore', 'Pune',
                    'Noida', 'Lucknow', 'Ghaziabad', 'Navi Mumbai',
                    'Greater Noida', 'Chennai', 'Thane', 'Ahmedabad',
                    'Jaipur', 'Hyderabad',
                ];

                $megaColumns = [
                    [
                        'title' => 'Property for Sale',
                        'prefix' => 'Real estate in ',
                    ],
                    [
                        'title' => 'Flats for Sale',
                        'prefix' => 'Flats in ',
                    ],
                    [
                        'title' => 'Flats for Rent',
                        'prefix' => 'Flats for Rent in ',
                    ],
                    [
                        'title' => 'New Projects',
                        'prefix' => 'New Projects in ',
                    ],
                ];

                foreach ($megaColumns as $col) {
                    echo '<div class="mega-footer-col">';
                    echo '<h3 class="mega-footer-heading">' . htmlspecialchars($col['title']) . '</h3>';
                    echo '<nav aria-label="' . htmlspecialchars($col['title']) . '">';
                    echo '<ul class="mega-footer-list">';
                    foreach ($megaCities as $city) {
                        $label = $col['prefix'] . $city;
                        echo '<li>';
                        echo '<a href="#" class="mega-footer-link">';
                        echo '<span class="mega-footer-link-icon" aria-hidden="true">&#8250;</span>';
                        echo htmlspecialchars($label);
                        echo '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                    echo '</nav>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section 1 -- Top Navigation Links -->
    <div class="footer-nav-bar">
        <div class="footer-nav-inner">
            <nav class="footer-nav-links">
                <a href="#">Home</a>
                <span class="nav-pipe">|</span>
                <a href="#">About Us</a>
                <span class="nav-pipe">|</span>
                <a href="#">Contact Us</a>
                <span class="nav-pipe">|</span>
                <a href="#">Complaints</a>
                <span class="nav-pipe">|</span>
                <a href="#">Terms &amp; Conditions</a>
                <span class="nav-pipe">|</span>
                <a href="#">Sitemap</a>
                <span class="nav-pipe">|</span>
                <a href="#">Property Leads</a>
                <span class="nav-pipe">|</span>
                <a href="#">FAQ</a>
                <span class="nav-pipe">|</span>
                <a href="#">Advertise With Us</a>
            </nav>
        </div>
    </div>

    <div class="footer-divider"></div>

    <!-- Section 2 -- App Buttons & Social Icons -->
    <div class="footer-apps-social">
        <div class="footer-apps-social-inner">
            <div class="footer-app-buttons">
                <a href="#" class="app-btn google-play" aria-label="Get it on Google Play">
                    <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                    <span class="app-btn-text">
                        <span class="app-btn-small">GET IT ON</span>
                        <span class="app-btn-large">Google Play</span>
                    </span>
                </a>
                <a href="#" class="app-btn app-store" aria-label="Download on the App Store">
                    <i class="fa-brands fa-apple" aria-hidden="true"></i>
                    <span class="app-btn-text">
                        <span class="app-btn-small">Download on the</span>
                        <span class="app-btn-large">App Store</span>
                    </span>
                </a>
            </div>
            <div class="footer-social-icons">
                <a href="#" class="social-icon social-facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social-icon social-blogger" aria-label="Blogger"><i class="fa-brands fa-blogger-b"></i></a>
                <a href="#" class="social-icon social-pinterest" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                <a href="#" class="social-icon social-x" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="social-icon social-youtube" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="social-icon social-instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-divider"></div>

    <!-- Section 3 -- Disclaimer -->
    <div class="footer-disclaimer">
        <div class="footer-disclaimer-inner">
            <p>
                <strong class="disclaimer-label">Note :</strong>
                We are not responsible for any typographical error due to translation, spelling, or information provided by the seller/builder/agent. Information displayed on this website is collected from various sources and we cannot guarantee the accuracy or completeness of the data. Users are advised to verify all details independently before making any decisions. All properties listed are subject to availability and price changes without prior notice.
            </p>
        </div>
    </div>

    <!-- Section 4 -- Copyright Bar -->
    <div class="footer-copyright">
        <div class="footer-copyright-inner">
            <p>
                Copyright &copy; 2007&ndash;2026 <a href="https://www.mineib.com" class="copyright-link">Mineib Creative Technology</a> All rights reserved.
                <span class="copyright-pipe">|</span>
                <a href="#" class="copyright-link">Terms &amp; Conditions</a>
            </p>
        </div>
    </div>

</footer>

</body>
</html>
