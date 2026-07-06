document.addEventListener('DOMContentLoaded', function () {
    var wrap = document.querySelector('.agents-carousel-wrap');
    if (!wrap) return;
    var track = wrap.querySelector('.agents-track');
    var prevBtn = wrap.querySelector('.agents-nav-prev');
    var nextBtn = wrap.querySelector('.agents-nav-next');
    if (!track) return;

    function updateNavButtons() {
        if (!prevBtn || !nextBtn) return;
        var scrollLeft = track.scrollLeft;
        var maxScroll = track.scrollWidth - track.clientWidth;
        prevBtn.classList.toggle('agents-hidden', scrollLeft <= 1);
        nextBtn.classList.toggle('agents-hidden', scrollLeft >= maxScroll - 1);
    }

    function scrollGrid(direction) {
        var amount = direction === 'prev' ? -track.clientWidth : track.clientWidth;
        track.scrollBy({ left: amount, behavior: 'smooth' });
    }

    if (prevBtn) prevBtn.addEventListener('click', function (e) { e.stopPropagation(); scrollGrid('prev'); });
    if (nextBtn) nextBtn.addEventListener('click', function (e) { e.stopPropagation(); scrollGrid('next'); });

    track.addEventListener('scroll', updateNavButtons, { passive: true });
    window.addEventListener('resize', updateNavButtons);
    setTimeout(updateNavButtons, 100);

    /* --- card click delegation --- */
    var activeTouch = null;

    wrap.addEventListener('click', function (e) {
        var btn = e.target.closest('.agent-btn');
        if (btn) {
            e.stopPropagation();
            var action = btn.getAttribute('data-action');
            if (action === 'call') {
                var phone = btn.getAttribute('data-phone');
                window.location.href = 'tel:' + phone;
            } else if (action === 'message') {
                var agent = btn.getAttribute('data-agent');
                window.location.href = 'agent_profile.php?name=' + encodeURIComponent(agent);
            }
            return;
        }

        var card = e.target.closest('.agent-card');
        if (card) {
            var url = card.getAttribute('data-profile');
            if (url) window.location.href = url;
        }
    });

    wrap.addEventListener('keydown', function (e) {
        var card = e.target.closest('.agent-card');
        if (!card) return;
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            var url = card.getAttribute('data-profile');
            if (url) window.location.href = url;
        }
    });

    wrap.addEventListener('touchstart', function (e) {
        var card = e.target.closest('.agent-card');
        if (card) activeTouch = card;
    }, { passive: true });

    wrap.addEventListener('touchmove', function () { activeTouch = null; }, { passive: true });
    wrap.addEventListener('touchend', function () { activeTouch = null; }, { passive: true });
});