import gsap from 'gsap';
import Lenis from 'lenis';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
document.addEventListener('livewire:navigating', () => {
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



document.addEventListener('livewire:navigated', () => {
    lenis.scrollTo(0, { immediate: true });
    lenis.start();
    resetRevealElements();
    bootPageAnimations();
});

const lenis = new Lenis({
    duration: 1.2,
    easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
});

lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add(time => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);
