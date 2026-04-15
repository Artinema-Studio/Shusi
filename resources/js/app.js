import AOS from 'aos';
import 'aos/dist/aos.css';
import { gsap } from 'gsap';
import Swiper from 'swiper';
import 'swiper/css';
import '@fortawesome/fontawesome-free/css/all.min.css';

// Initialize AOS
AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    mirror: false
});

// Splash Screen & Entry Animations
window.addEventListener('DOMContentLoaded', () => {
    const splash = document.getElementById('splash-screen');
    const splashLogo = document.querySelector('.splash-logo');
    const mainContent = document.getElementById('main-wrapper');

    if (splash && splashLogo) {
        // Splash Zoom In
        gsap.fromTo(splashLogo, 
            { scale: 0.5, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 1.5, ease: 'power3.out' }
        );

        // Hide Splash after 2 seconds
        setTimeout(() => {
            gsap.to(splash, {
                opacity: 0,
                duration: 0.8,
                onComplete: () => {
                    splash.style.display = 'none';
                    if (mainContent) {
                        mainContent.style.opacity = '1';
                        initHeroAnimations();
                    }
                }
            });
        }, 2000);
    } else {
        // Fallback if no splash
        if (mainContent) mainContent.style.opacity = '1';
        initHeroAnimations();
    }
});

function initHeroAnimations() {
    const heroTitle = document.querySelector('.hero-title');
    const heroBtn = document.querySelector('.hero-btn');
    
    if (heroTitle) {
        gsap.fromTo(heroTitle, 
            { scale: 0.8, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 1.5, ease: 'power3.out' }
        );
    }
    
    if (heroBtn) {
        gsap.fromTo(heroBtn, 
            { scale: 0.8, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 1.5, ease: 'power3.out', delay: 0.5 }
        );
    }
}

// Navbar Scroll Effect
const nav = document.getElementById('main-nav');
const logo = document.getElementById('nav-logo');
const navLinks = document.querySelectorAll('.nav-link');

if (nav) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'py-4');
            nav.classList.remove('py-6');
            
            // Scrolled: Black text
            if (logo) logo.classList.replace('text-white', 'text-black');
            navLinks.forEach(link => {
                link.classList.add('text-black');
                link.classList.remove('text-white');
            });
        } else {
            nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'py-4');
            nav.classList.add('py-6');
            
            // Top: White text
            if (logo) logo.classList.replace('text-black', 'text-white');
            navLinks.forEach(link => {
                link.classList.add('text-white');
                link.classList.remove('text-black');
            });
        }
    });
}
