document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('[data-carousel]');

    carousels.forEach((carousel) => {
        const track = carousel.querySelector('.tools-carousel-track');
        const prev = carousel.querySelector('.tools-nav-prev');
        const next = carousel.querySelector('.tools-nav-next');

        if (!track || !prev || !next) return;

        let index = 0;
        const cards = Array.from(track.children);
        const visibleCount = () => {
            if (window.innerWidth >= 1400) return 4;
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 768) return 2;
            return 1;
        };

        const update = () => {
            const count = visibleCount();
            const maxIndex = Math.max(0, cards.length - count);
            const cardWidth = cards[0]?.getBoundingClientRect().width || 0;
            const gap = 24;
            const offset = Math.min(index, maxIndex) * (cardWidth + gap);
            track.style.transform = `translateX(-${offset}px)`;
        };

        prev.addEventListener('click', () => {
            index = Math.max(0, index - 1);
            update();
        });

        next.addEventListener('click', () => {
            const count = visibleCount();
            const maxIndex = Math.max(0, cards.length - count);
            index = Math.min(index + 1, maxIndex);
            update();
        });

        window.addEventListener('resize', update);
        update();
    });
});
