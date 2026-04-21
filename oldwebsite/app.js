import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Swiper from 'swiper';
import { Autoplay, Navigation } from 'swiper/modules';
import 'swiper/css';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

// ── Lenis smooth scroll ───────────────────────────────────────────────────
const lenis = new Lenis({
    duration: 1.2,
    easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
});

lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add(time => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);

// ── Nav ───────────────────────────────────────────────────────────────────
let navEntranceDone = false;

function initNav() {
    const pill      = document.getElementById('nav-pill');
    const navWrap   = document.getElementById('nav-links-wrap');
    const glider    = document.getElementById('nav-glider');
    const hamburger = document.getElementById('nav-hamburger');

    if (!pill) return;

    // Entrance — only on first load, not on every SPA navigation
    if (!navEntranceDone) {
        navEntranceDone = true;
        gsap.from(pill, { y: -80, opacity: 0, duration: 0.7, ease: 'back.out(1.5)', delay: 0.05 });
        gsap.from('.nav-link', { opacity: 0, y: -5, duration: 0.3, stagger: 0.05, delay: 0.45, ease: 'power2.out' });
    }


    // Desktop link glider
    if (glider && navWrap) {
        const navLinks = navWrap.querySelectorAll('.nav-link');
        const activeLink = navWrap.querySelector('[aria-current="page"]');
        if (activeLink) {
            const nr = navWrap.getBoundingClientRect();
            const lr = activeLink.getBoundingClientRect();
            gsap.set(glider, { x: lr.left - nr.left, width: lr.width, opacity: 0 });
        }
        navLinks.forEach(link => {
            link.addEventListener('mouseenter', () => {
                const nr = navWrap.getBoundingClientRect();
                const lr = link.getBoundingClientRect();
                gsap.to(glider, { x: lr.left - nr.left, width: lr.width, opacity: 1, duration: 0.2, ease: 'power2.out' });
            });
        });
        navWrap.addEventListener('mouseleave', () => gsap.to(glider, { opacity: 0, duration: 0.15 }));
    }

    // Mobile compact drawer
    const drawer = document.getElementById('nav-drawer');
    if (!hamburger || !drawer) return;

    const hamTop = hamburger.querySelector('.ham-top');
    const hamMid = hamburger.querySelector('.ham-mid');
    const hamBot = hamburger.querySelector('.ham-bot');
    let isOpen = false;

    function openDrawer() {
        isOpen = true;
        hamburger.setAttribute('aria-expanded', 'true');
        drawer.setAttribute('aria-hidden', 'false');

        // Same gap at bottom as top (pt-5 = 20px): pill 64 + top-pad 20 + gap 8 + bottom-pad 20 = 112
        const targetH = window.innerHeight - 112;
        gsap.fromTo(drawer, { height: 0, overflow: 'hidden' }, { height: targetH, duration: 0.35, ease: 'power3.out' });

        // Morph hamburger → ✕
        gsap.to(hamTop, { rotation: 45,  y: 7.5, duration: 0.28, ease: 'power2.inOut' });
        gsap.to(hamMid, { opacity: 0,             duration: 0.14 });
        gsap.to(hamBot, { rotation: -45, y: -7.5, duration: 0.28, ease: 'power2.inOut' });
    }

    function closeDrawer() {
        isOpen = false;
        hamburger.setAttribute('aria-expanded', 'false');
        drawer.setAttribute('aria-hidden', 'true');

        gsap.to(drawer, { height: 0, duration: 0.28, ease: 'power2.in' });

        // Restore hamburger
        gsap.to(hamTop, { rotation: 0, y: 0, duration: 0.28, ease: 'power2.inOut' });
        gsap.to(hamMid, { opacity: 1,         duration: 0.2,  delay: 0.08 });
        gsap.to(hamBot, { rotation: 0, y: 0,  duration: 0.28, ease: 'power2.inOut' });
    }

    window.closeNavDrawer = closeDrawer;

    hamburger.addEventListener('click', () => isOpen ? closeDrawer() : openDrawer());
    drawer.querySelectorAll('.drawer-link').forEach(el => el.addEventListener('click', closeDrawer));
    document.addEventListener('keydown', e => e.key === 'Escape' && isOpen && closeDrawer());

}

// ── Hero entrance (home page) ─────────────────────────────────────────────
function initHero() {
    if (!document.getElementById('home-hero')) return;

    const els = ['#hero-line1', '#hero-line2', '#hero-line3', '#hero-body', '#hero-ctas', '#hero-stats', '#hero-deco'];

    gsap.to(els, {
        opacity: 1,
        duration: 0.6,
        ease: 'power2.out',
        stagger: 0.1,
        delay: 0.1,
    });
}


// ── Scroll reveals ────────────────────────────────────────────────────────
function initReveals() {
    // Generic .reveal (fade up)
    document.querySelectorAll('.reveal').forEach(el => {
        const delay = parseFloat(el.dataset.delay || 0);
        ScrollTrigger.create({
            trigger: el, start: 'top 88%', once: true,
            onEnter: () => gsap.to(el, { opacity: 1, y: 0, duration: 0.65, delay, ease: 'power3.out' }),
        });
    });

    // .reveal-left (slide from left)
    document.querySelectorAll('.reveal-left').forEach(el => {
        ScrollTrigger.create({
            trigger: el, start: 'top 88%', once: true,
            onEnter: () => gsap.to(el, { opacity: 1, x: 0, duration: 0.7, ease: 'power3.out' }),
        });
    });

    // .reveal-right (slide from right)
    document.querySelectorAll('.reveal-right').forEach(el => {
        ScrollTrigger.create({
            trigger: el, start: 'top 88%', once: true,
            onEnter: () => gsap.to(el, { opacity: 1, x: 0, duration: 0.7, ease: 'power3.out' }),
        });
    });

    // .reveal-scale
    document.querySelectorAll('.reveal-scale').forEach(el => {
        ScrollTrigger.create({
            trigger: el, start: 'top 88%', once: true,
            onEnter: () => gsap.to(el, { opacity: 1, scale: 1, duration: 0.6, ease: 'back.out(1.3)' }),
        });
    });

    // Product cards — stagger fade
    const productCards = document.querySelectorAll('.product-card');
    if (productCards.length) {
        gsap.set(productCards, { opacity: 0 });
        ScrollTrigger.create({
            trigger: productCards[0], start: 'top 88%', once: true,
            onEnter: () => gsap.to(productCards, {
                opacity: 1, duration: 0.5, stagger: 0.1, ease: 'power2.out',
            }),
        });
    }

    // Spec section cards — staggered fade up
    const specCards = document.querySelectorAll('.spec-card');
    if (specCards.length) {
        gsap.set(specCards, { opacity: 0, y: 28 });
        ScrollTrigger.create({
            trigger: specCards[0], start: 'top 88%', once: true,
            onEnter: () => gsap.to(specCards, {
                opacity: 1, y: 0, duration: 0.55, stagger: 0.09, ease: 'power3.out',
            }),
        });
    }

    // Spec rows — cascade left to right
    document.querySelectorAll('.spec-row').forEach((el, i) => {
        ScrollTrigger.create({
            trigger: el, start: 'top 90%', once: true,
            onEnter: () => gsap.to(el, {
                opacity: 1, x: 0, duration: 0.5, delay: i * 0.07, ease: 'power2.out',
            }),
        });
    });
}

// ── CTA section entrance ─────────────────────────────────────────────────
function initCta() {
    const left  = document.getElementById('cta-left');
    const right = document.getElementById('cta-right');
    if (!left && !right) return;

    const items = [left, right].filter(Boolean);
    gsap.set(items, { opacity: 0, y: 22 });

    ScrollTrigger.create({
        trigger: left || right,
        start: 'top 88%',
        once: true,
        onEnter: () => gsap.to(items, {
            opacity: 1, y: 0,
            duration: 0.55, stagger: 0.12,
            ease: 'power2.out',
        }),
    });
}

// ── Specifications title scrub ────────────────────────────────────────────
function initSpecTitle() {
    const base   = document.getElementById('spec-title-base');
    const accent = document.getElementById('spec-title-accent');
    if (!base || !accent) return;

    const section = base.closest('section');
    const st = { trigger: section, start: 'top 90%', end: 'top 15%', scrub: 1.5 };

    // "Specifi" — starts blurred + dim, sharpens as section enters
    gsap.fromTo(base,
        { filter: 'blur(10px)', opacity: 0.15 },
        { filter: 'blur(0px)', opacity: 1, ease: 'none', scrollTrigger: st }
    );

    // "cations." — slightly delayed blur, sharpens after base
    gsap.fromTo(accent,
        { filter: 'blur(18px)', opacity: 0 },
        { filter: 'blur(0px)', opacity: 1, ease: 'none', scrollTrigger: { ...st, scrub: 1 } }
    );
}

// ── About logo hover effect ───────────────────────────────────────────────
function initAboutLogo() {
    const wrap      = document.getElementById('about-logo-wrap');
    const logo      = document.getElementById('about-logo-img');
    const ringInner = document.getElementById('about-ring-inner');
    const ringOuter = document.getElementById('about-ring-outer');

    if (!wrap || !logo) return;

    wrap.addEventListener('mouseenter', () => {
        gsap.to(logo,      { scale: 1.06, duration: 0.5, ease: 'power2.out' });
        gsap.to(ringInner, { rotation: 30,  duration: 0.8, ease: 'power2.out' });
        gsap.to(ringOuter, { rotation: -20, duration: 0.8, ease: 'power2.out' });
    });

    wrap.addEventListener('mouseleave', () => {
        gsap.to(logo,      { scale: 1,  duration: 0.5, ease: 'power2.inOut' });
        gsap.to(ringInner, { rotation: 0, duration: 0.7, ease: 'power2.inOut' });
        gsap.to(ringOuter, { rotation: 0, duration: 0.7, ease: 'power2.inOut' });
    });
}

// ── Subtle brand watermark ───────────────────────────────────────────────
function initBrandWatermark() {
    document.querySelectorAll('[data-brand-watermark]').forEach(watermark => {
        gsap.set(watermark, { opacity: 0, y: 18, scale: 0.96 });

        ScrollTrigger.create({
            trigger: watermark,
            start: 'top 88%',
            once: true,
            onEnter: () => gsap.to(watermark, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.8,
                ease: 'power3.out',
            }),
        });

        gsap.to(watermark, {
            y: -14,
            rotation: 3,
            ease: 'none',
            scrollTrigger: {
                trigger: watermark,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1.4,
            },
        });
    });
}

// ── Counter animation ─────────────────────────────────────────────────────
function initCounters() {
    document.querySelectorAll('.counter').forEach(el => {
        const target = parseInt(el.dataset.target, 10);
        const suffix = el.dataset.suffix || '';

        ScrollTrigger.create({
            trigger: el, start: 'top 85%', once: true,
            onEnter: () => {
                gsap.fromTo(
                    { val: 0 },
                    { val: target,
                      duration: 1.6,
                      ease: 'power2.out',
                      onUpdate: function () {
                          el.textContent = Math.round(this.targets()[0].val) + suffix;
                      },
                    }
                );
            },
        });
    });
}

// ── Testimonials carousel (Swiper) ────────────────────────────────────────
let testimonialsSwiper = null;

function initTestimonials() {
    if (!document.querySelector('.testimonials-swiper')) return;

    // Destroy previous instance on SPA navigation
    if (testimonialsSwiper) {
        testimonialsSwiper.destroy(true, true);
        testimonialsSwiper = null;
    }

    const progress = document.getElementById('t-progress');
    const total    = document.querySelectorAll('.testimonials-swiper .swiper-slide').length;

    // Offset aligns first slide with the page container edge — only on tablet+
    const offset = Math.max(24, (window.innerWidth - 1280) / 2 + 32);

    testimonialsSwiper = new Swiper('.testimonials-swiper', {
        modules: [Autoplay, Navigation],
        slidesPerView: 1,
        spaceBetween: 16,
        loop: false,
        grabCursor: true,
        preventClicks: false,
        preventClicksPropagation: false,
        autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
        navigation: { prevEl: '#t-prev', nextEl: '#t-next' },
        breakpoints: {
            640:  { slidesPerView: 1.6, spaceBetween: 20 },
            1024: { slidesPerView: 3,   spaceBetween: 24 },
        },
        on: {
            slideChange(swiper) {
                if (!progress) return;
                const pct = ((swiper.realIndex + 1) / total) * 100;
                gsap.to(progress, { width: pct + '%', duration: 0.4, ease: 'power2.out' });
            },
            click(swiper, event) {
                const anchor = event.target.closest('a[href]');
                if (anchor && !swiper.animating) {
                    window.location.href = anchor.href;
                }
            },
        },
    });
}

function resetRevealElements() {
    // Reset hero elements to opacity only
    ['#hero-line1','#hero-line2','#hero-line3','#hero-body','#hero-ctas','#hero-stats','#hero-deco'].forEach(id => {
        const el = document.querySelector(id);
        if (el) gsap.set(el, { opacity: 0, clearProps: 'transform' });
    });

    document.querySelectorAll('.reveal,.reveal-left,.reveal-right,.reveal-scale').forEach(el => {
        gsap.set(el, { clearProps: 'all' });
        el.style.opacity = '0';

        if (el.classList.contains('reveal')) {
            el.style.transform = 'translateY(30px)';
        }

        if (el.classList.contains('reveal-left')) {
            el.style.transform = 'translateX(-30px)';
        }

        if (el.classList.contains('reveal-right')) {
            el.style.transform = 'translateX(30px)';
        }

        if (el.classList.contains('reveal-scale')) {
            el.style.transform = 'scale(0.94)';
        }
    });

    document.querySelectorAll('.spec-row').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateX(-20px)';
    });

    document.querySelectorAll('.spec-card').forEach(el => {
        gsap.set(el, { opacity: 0, y: 28 });
    });

    // Why-us section
    const whySection = document.getElementById('why-us-section');
    if (whySection) {
        const eyebrow = document.getElementById('why-us-eyebrow');
        const title   = document.getElementById('why-us-title');
        const right   = document.getElementById('why-us-right');
        if (eyebrow) gsap.set(eyebrow, { opacity: 0, x: -25 });
        if (title)   gsap.set(title,   { opacity: 0, y: 24 });
        if (right)   gsap.set(right,   { opacity: 0, x: 25 });
        whySection.querySelectorAll('.why-card').forEach(el => gsap.set(el, { opacity: 0, y: 28 }));
    }
}

// ── Why Us section entrance ───────────────────────────────────────────────────
function initWhyUs() {
    const section = document.getElementById('why-us-section');
    if (!section) return;

    const eyebrow = document.getElementById('why-us-eyebrow');
    const title   = document.getElementById('why-us-title');
    const right   = document.getElementById('why-us-right');
    const cards   = section.querySelectorAll('.why-card');

    // Set initial hidden states
    if (eyebrow) gsap.set(eyebrow, { opacity: 0, x: -25 });
    if (title)   gsap.set(title,   { opacity: 0, y: 24 });
    if (right)   gsap.set(right,   { opacity: 0, x: 25 });

    // Header timeline: eyebrow → title → right col
    const tl = gsap.timeline({
        scrollTrigger: { trigger: section, start: 'top 72%', once: true },
        defaults: { ease: 'power3.out' },
    });

    if (eyebrow) tl.to(eyebrow, { opacity: 1, x: 0, duration: 0.55 });
    if (title)   tl.to(title,   { opacity: 1, y: 0, duration: 0.7  }, '-=0.3');
    if (right)   tl.to(right,   { opacity: 1, x: 0, duration: 0.65 }, '-=0.45');

    // Cards — batch stagger
    if (cards.length) {
        ScrollTrigger.batch(cards, {
            onEnter: (batch) => gsap.to(batch, {
                opacity: 1, y: 0, duration: 0.6, stagger: 0.1, ease: 'power3.out',
            }),
            start: 'top 88%',
            once: true,
        });
    }
}

// ── Why Us parallax depth ─────────────────────────────────────────────────────
function initWhyUsParallax() {
    const section = document.getElementById('why-us-section');
    if (!section) return;

    const st = { trigger: section, start: 'top bottom', end: 'bottom top' };

    gsap.to('#why-us-bg-deco', {
        y: -220,
        rotation: 18,
        ease: 'none',
        scrollTrigger: { ...st, scrub: 2 },
    });

    // Skip horizontal parallax on mobile — title overflows off-screen
    if (window.innerWidth >= 1024) {
        gsap.to('#why-us-title', {
            x: -55,
            ease: 'none',
            scrollTrigger: { ...st, scrub: 1.8 },
        });
    }

    const cardsGrid = document.getElementById('why-us-cards-grid');
    if (cardsGrid) {
        gsap.to(cardsGrid, {
            y: -45,
            ease: 'none',
            scrollTrigger: { ...st, scrub: 1.1 },
        });
    }
}

// ── Why-us card hover ─────────────────────────────────────────────────────────
function initWhyCards() {
    document.querySelectorAll('[data-why-card]').forEach(card => {
        const icon  = card.querySelector('.why-icon');
        const title = card.querySelector('h3');

        card.addEventListener('mouseenter', () => {
            gsap.to(icon,  { y: -5, scale: 1.12, duration: 0.35, ease: 'power2.out' });
            gsap.to(title, { y: -2, duration: 0.3, ease: 'power2.out' });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(icon,  { y: 0, scale: 1, duration: 0.4, ease: 'power2.inOut' });
            gsap.to(title, { y: 0, duration: 0.35, ease: 'power2.inOut' });
        });
    });
}

function bootPageAnimations() {
    initNav();
    initHero();
    initReveals();
    initWhyUs();
    initWhyUsParallax();
    initSpecTitle();
    initCta();
    initAboutLogo();
    initCounters();
    initTestimonials();
    initWhyCards();
    initBrandWatermark();

    // Refresh after the new DOM has been painted so ScrollTrigger reads the
    // correct layout on both fresh loads and SPA back/forward navigation.
    requestAnimationFrame(() => {
        ScrollTrigger.refresh();
    });
}

// Re-init Swiper whenever the testimonials component re-renders (open, close, submit)
['feedback-submitted', 'testimonials-reinit'].forEach(event => {
    window.addEventListener(event, () => requestAnimationFrame(() => initTestimonials()));
});

// ── Google Translate ──────────────────────────────────────────────────────

window.googleTranslateElementInit = function () {
    new window.google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,ar,zh-CN,es,fr,de,tr,pt,ru,ja,ko',
        autoDisplay: false,
    }, 'google_translate_element');
};

window.langSwitcher = function () {
    return {
        open: false,
        currentCode: (() => {
            const m = document.cookie.match(/googtrans=\/en\/([^;]+)/);
            return m ? decodeURIComponent(m[1]) : 'en';
        })(),
        langs: [
            { code: 'en',    name: 'English',    native: 'English'   },
            { code: 'ar',    name: 'Arabic',     native: 'العربية'   },
            { code: 'zh-CN', name: 'Chinese',    native: '中文'       },
            { code: 'es',    name: 'Spanish',    native: 'Español'   },
            { code: 'fr',    name: 'French',     native: 'Français'  },
            { code: 'de',    name: 'German',     native: 'Deutsch'   },
            { code: 'tr',    name: 'Turkish',    native: 'Türkçe'   },
            { code: 'pt',    name: 'Portuguese', native: 'Português' },
            { code: 'ru',    name: 'Russian',    native: 'Русский'  },
            { code: 'ja',    name: 'Japanese',   native: '日本語'    },
            { code: 'ko',    name: 'Korean',     native: '한국어'    },
        ],
        get current() {
            return this.langs.find(l => l.code === this.currentCode) ?? this.langs[0];
        },
        select(lang) {
            this.open = false;
            if (lang.code === 'en') {
                document.cookie = 'googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';
                document.cookie = 'googtrans=; path=/; domain=.' + location.hostname + '; expires=Thu, 01 Jan 1970 00:00:00 UTC';
            } else {
                document.cookie = 'googtrans=/en/' + lang.code + '; path=/';
                document.cookie = 'googtrans=/en/' + lang.code + '; path=/; domain=.' + location.hostname;
            }
            location.reload();
        },
    };
};

// When translation is active, force full page reloads on wire:navigate links.
// Livewire's partial DOM swaps cause Google Translate to re-translate already-
// translated nodes (especially @persist'd elements), producing corrupted text.
document.addEventListener('click', (e) => {
    const m = document.cookie.match(/googtrans=\/en\/([^;]+)/);
    if (!m) return;
    const link = e.target.closest('a[href]');
    if (!link || !link.hasAttribute('wire:navigate')) return;
    if (link.hostname !== location.hostname) return;
    e.preventDefault();
    e.stopImmediatePropagation();
    location.href = link.href;
}, true);

// ── Livewire SPA navigation ───────────────────────────────────────────────
document.addEventListener('livewire:navigating', () => {
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
    lenis.stop();

    if (testimonialsSwiper) {
        testimonialsSwiper.destroy(true, true);
        testimonialsSwiper = null;
    }
});

document.addEventListener('livewire:navigated', () => {
    lenis.scrollTo(0, { immediate: true });
    lenis.start();
    resetRevealElements();
    bootPageAnimations();
});
