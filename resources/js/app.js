import Alpine from 'alpinejs';
import AOS from 'aos';
import Lenis from '@studio-freight/lenis';
import gsap from 'gsap';
import Typed from 'typed.js';
import 'flowbite';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Lenis Smooth Scroll
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 2. Initialize AOS (Animate on Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50,
    });

    // 3. Initialize Typed.js for Dynamic Hero Headline
    const typedElement = document.querySelector('#typed-text');
    if (typedElement) {
        new Typed('#typed-text', {
            strings: [
                'Flutter & Mobile Specialist',
                'Laravel & FastAPI Backend Engineer',
                'Full-Stack Solution Architect',
                'UI/UX Figma-to-Code Developer'
            ],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true,
        });
    }

    // 4. GSAP Hero Entrance Animations
    gsap.from('.gsap-hero-title', {
        opacity: 0,
        y: 30,
        duration: 1,
        stagger: 0.2,
        ease: 'power3.out'
    });

    gsap.from('.gsap-badge', {
        scale: 0.8,
        opacity: 0,
        duration: 0.8,
        delay: 0.4,
        ease: 'back.out(1.7)'
    });
});
