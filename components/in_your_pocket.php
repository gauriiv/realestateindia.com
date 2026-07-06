<?php
// components/in_your_pocket.php
?>
<section class="pocket-section" id="pocket-section">
    <!-- Decorative background circle -->
    <div class="pocket-bg-circle" aria-hidden="true"></div>

    <div class="pocket-wrapper">

        <!-- Left: Content -->
        <div class="pocket-left">
            <h2 class="pocket-heading">Real Estate in your pocket</h2>
            <p class="pocket-desc">
                With our app, spend less time searching and more time at your
                dream home. <strong>Download now!</strong>
            </p>

            <!-- SMS Form -->
            <form class="pocket-sms-form" id="pocket-sms-form" novalidate>
                <input
                    type="tel"
                    id="pocket-mobile-input"
                    class="pocket-mobile-input"
                    placeholder="Enter Mobile number"
                    maxlength="10"
                    pattern="\d{10}"
                    autocomplete="tel"
                    aria-label="Enter your 10-digit mobile number"
                    required
                >
                <button type="submit" class="pocket-send-btn" aria-label="Send app link">Send Link</button>
            </form>

            <!-- Store Buttons + QR -->
            <div class="pocket-bottom-row">
                <!-- Google Play -->
                <a href="#" class="pocket-store-btn pocket-google" aria-label="Get it on Google Play">
                    <svg class="pocket-store-icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.18 23.76a2.5 2.5 0 0 1-.68-.47L13.79 12 2.5.71A2.5 2.5 0 0 1 3.18.24L15.86 12 3.18 23.76zM.5 22.46V1.54L11.77 12 .5 22.46zM16.64 15.27l-2.1-2.1 2.52-2.52 2.37 1.35a1.37 1.37 0 0 1 0 2.38l-2.37 1.35-.42-.46zM3.93.07l11.44 6.53-2.58 2.58L3.93.07z"/>
                    </svg>
                    <span class="pocket-store-text">
                        <span class="pocket-store-label">GET IT ON</span>
                        <span class="pocket-store-name">Google Play</span>
                    </span>
                </a>

                <!-- App Store -->
                <a href="#" class="pocket-store-btn pocket-apple" aria-label="Download on the App Store">
                    <svg class="pocket-store-icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                    </svg>
                    <span class="pocket-store-text">
                        <span class="pocket-store-label">Download on the</span>
                        <span class="pocket-store-name">App Store</span>
                    </span>
                </a>

                <!-- QR Code -->
                <div class="pocket-qr-box">
                    <div class="pocket-qr-img-wrap">
                        <img
                            src="https://www.squareyards.com/assets/images/app-download/qr-code-v-two.svg"
                            alt="Scan QR code to download app"
                            class="pocket-qr-img"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Phone Mockup -->
        <div class="pocket-right">
            <img
                src="https://www.squareyards.com/assets/images/app-download/desktop-app-screen-new.png"
                alt="Real Estate App on Mobile"
                class="pocket-phone-img"
                loading="lazy"
            >
        </div>

    </div>
</section>

<script>
(function() {
    const form = document.getElementById('pocket-sms-form');
    const input = document.getElementById('pocket-mobile-input');

    function validatePhone(val) {
        return val.length === 10 && /^\d+$/.test(val);
    }

    function setError(show) {
        input.style.borderColor = show ? '#e53e3e' : '';
        input.setAttribute('aria-invalid', show ? 'true' : 'false');
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const val = input.value.trim();

        if (!validatePhone(val)) {
            setError(true);
            input.focus();
            return;
        }

        setError(false);

        const btn = form.querySelector('.pocket-send-btn');
        const originalText = btn.textContent;
        btn.textContent = 'Sent!';
        btn.style.background = '#22c55e';
        btn.disabled = true;

        setTimeout(function() {
            btn.textContent = originalText;
            btn.style.background = '';
            btn.disabled = false;
            input.value = '';
            input.focus();
        }, 2500);
    });

    input.addEventListener('input', function() {
        setError(false);
    });
})();
</script>
