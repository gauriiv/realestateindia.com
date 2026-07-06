document.addEventListener('DOMContentLoaded', function () {
    var wrap = document.querySelector('.projects-carousel-wrap');
    if (!wrap) return;
    var grid = wrap.querySelector('.projects-grid');
    var prevBtn = wrap.querySelector('.projects-nav-prev');
    var nextBtn = wrap.querySelector('.projects-nav-next');
    if (!grid) return;

    /* Carousel nav */
    function updateNavButtons() {
        if (!prevBtn || !nextBtn) return;
        var scrollLeft = grid.scrollLeft;
        var maxScroll = grid.scrollWidth - grid.clientWidth;
        prevBtn.classList.toggle('projects-hidden', scrollLeft <= 1);
        nextBtn.classList.toggle('projects-hidden', scrollLeft >= maxScroll - 1);
    }

    function scrollGrid(direction) {
        var card = grid.querySelector('.project-card');
        if (!card) return;
        var cardWidth = card.offsetWidth + parseInt(getComputedStyle(grid).gap) || 16;
        var amount = direction === 'prev' ? -cardWidth : cardWidth;
        grid.scrollBy({ left: amount, behavior: 'smooth' });
    }

    if (prevBtn) prevBtn.addEventListener('click', function (e) { e.stopPropagation(); scrollGrid('prev'); });
    if (nextBtn) nextBtn.addEventListener('click', function (e) { e.stopPropagation(); scrollGrid('next'); });

    grid.addEventListener('scroll', updateNavButtons, { passive: true });
    window.addEventListener('resize', updateNavButtons);
    setTimeout(updateNavButtons, 100);

    /* Card click — open modal */
    wrap.addEventListener('click', function (e) {
        var btn = e.target.closest('.project-btn');
        if (btn) {
            e.stopPropagation();
            var card = btn.closest('.project-card');
            if (card) openProjectModal(card);
            return;
        }

        var card = e.target.closest('.project-card');
        if (card) openProjectModal(card);
    });

    /* Keyboard */
    wrap.addEventListener('keydown', function (e) {
        var card = e.target.closest('.project-card');
        if (!card) return;
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            openProjectModal(card);
        }
    });

    function openProjectModal(card) {
        var data;
        try {
            data = JSON.parse(card.getAttribute('data-project'));
        } catch (_) {
            return;
        }
        var mockData = {
            img: data.img,
            title: data.title,
            location: data.location,
            price: data.price,
            area: data.area,
            nearby: data.nearby || 'Premium location, Top amenities'
        };
        if (typeof openPropertyModal === 'function') {
            openPropertyModal(mockData);
        } else {
            console.error('Property modal function not found!');
        }
    }
});