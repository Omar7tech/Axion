import gsap from 'gsap';

document.addEventListener('DOMContentLoaded', () => {
    // Entrance: entire nav slides down
    gsap.from('#site-nav-wrapper', {
        y: -60,
        opacity: 0,
        duration: 0.9,
        ease: 'power3.out',
        delay: 0.1,
    });

    // Logo comes from left
    gsap.from('#nav-logo', {
        x: -16,
        opacity: 0,
        duration: 0.6,
        ease: 'power2.out',
        delay: 0.55,
    });

    // Links stagger in from top
    gsap.from('.nav-link', {
        y: -10,
        opacity: 0,
        stagger: 0.07,
        duration: 0.5,
        ease: 'power2.out',
        delay: 0.65,
    });

    // CTA slides from right
    gsap.from('#nav-cta', {
        x: 16,
        opacity: 0,
        duration: 0.6,
        ease: 'power2.out',
        delay: 0.85,
    });
});
