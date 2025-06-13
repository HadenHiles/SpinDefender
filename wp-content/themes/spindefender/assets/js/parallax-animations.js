// parallax-animations.js
// Adds parallax and scroll-based reveal animations to elements with .parallax or .scroll-reveal classes

document.addEventListener('DOMContentLoaded', function () {
    // Parallax effect for elements with .parallax-bg
    const parallaxEls = document.querySelectorAll('.parallax-bg');
    window.addEventListener('scroll', function () {
        const scrollY = window.scrollY;
        parallaxEls.forEach(el => {
            const speed = parseFloat(el.getAttribute('data-parallax-speed')) || 0.5;
            el.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });

    // Scroll reveal for elements with .scroll-reveal
    const revealEls = document.querySelectorAll('.scroll-reveal');
    const revealOnScroll = () => {
        const windowHeight = window.innerHeight;
        revealEls.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < windowHeight - 60) {
                el.classList.add('revealed');
            } else {
                el.classList.remove('revealed');
            }
        });
    };
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
});
