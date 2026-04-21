import gsap from 'gsap';
import Lenis from 'lenis';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Swiper from 'swiper';
import { Autoplay, Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
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

let brainTrustSwiper = null;

function initBrainTrust() {
    if (!document.querySelector('.brain-trust-swiper')) return;

    // Destroy previous instance on SPA navigation
    if (brainTrustSwiper) {
        brainTrustSwiper.destroy(true, true);
        brainTrustSwiper = null;
    }

    const progress = document.getElementById('bt-progress');
    const total = document.querySelectorAll('.brain-trust-swiper .swiper-slide').length;

    // Offset aligns first slide with the page container edge — only on tablet+
    const offset = Math.max(24, (window.innerWidth - 1280) / 2 + 32);

    brainTrustSwiper = new Swiper('.brain-trust-swiper', {
        modules: [Autoplay, Navigation],
        slidesPerView: 1.2,
        spaceBetween: 24,
        loop: false,
        grabCursor: true,
        preventClicks: false,
        preventClicksPropagation: false,
        autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
        navigation: { prevEl: '#bt-prev', nextEl: '#bt-next' },
        breakpoints: {
            640: {
                slidesPerView: 2.5,
                spaceBetween: 32,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 32,
            },
        },
        on: {
            slideChange(swiper) {
                if (!progress) return;
                const pct = ((swiper.realIndex + 1) / total) * 100;
                gsap.to(progress, { width: pct + '%', duration: 0.4, ease: 'power2.out' });
            },
        },
    });
}


document.addEventListener('livewire:navigated', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Initialize Brain Trust Swiper
    initBrainTrust();

    // Parallax for Background (Moves slowly up)
    gsap.to("#parallax-bg", {
        scrollTrigger: {
            trigger: "section",
            start: "top top",
            end: "bottom top",
            scrub: true
        },
        y: 100,
        opacity: 0.1
    });

    // Parallax for Content (Moves faster up)
    gsap.to("#parallax-content", {
        scrollTrigger: {
            trigger: "section",
            start: "top top",
            end: "bottom top",
            scrub: true
        },
        y: -80,
        opacity: 0
    });

    ScrollProgress.init({
        color: '#E6B12E',
        height: '3px',
        position: 'top'
    });
});


