// FreshGo Grocery App - GSAP Powered Animations & Core Logic

// Initialize GSAP Plug-ins
gsap.registerPlugin(ScrollTrigger, CustomEase);

// Custom Easing for Premium Feel
CustomEase.create("cubic", "0.2, 0.8, 0.2, 1");

// 1. Theme Management
function initTheme() {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
}

function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    // Animate transition using GSAP
    const tl = gsap.timeline();
    tl.to("body", {
        opacity: 0, duration: 0.15, onComplete: () => {
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        }
    });
    tl.to("body", { opacity: 1, duration: 0.3, ease: "cubic" });

    showToast(`Neural ${newTheme.charAt(0).toUpperCase() + newTheme.slice(1)} Mode Active`);
}

// 2. Premium Toast System
function showToast(message) {
    const existingToast = document.querySelector('.toast');
    if (existingToast) existingToast.remove();

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.style.cssText = `
        position: fixed;
        bottom: 110px;
        left: 50%;
        transform: translate(-50%, 50px);
        background: var(--primary);
        color: #000;
        padding: 16px 32px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 900;
        z-index: 9999;
        box-shadow: var(--neon-shadow);
        display: flex;
        align-items: center;
        gap: 12px;
        opacity: 0;
        white-space: nowrap;
    `;
    toast.innerHTML = `<span class="material-symbols-outlined filled" style="font-size: 20px;">verified</span> ${message}`;
    document.body.appendChild(toast);

    // GSAP Toast Animation
    gsap.to(toast, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        ease: "cubic"
    });

    setTimeout(() => {
        gsap.to(toast, {
            y: 20,
            opacity: 0,
            duration: 0.4,
            ease: "power2.in",
            onComplete: () => toast.remove()
        });
    }, 2500);
}

// 3. AI Search Concierge
function askAI() {
    const input = document.getElementById('searchInput');
    const panel = document.getElementById('aiResponse');
    const msgBox = document.getElementById('aiMessage');

    if (!input || !input.value.trim()) {
        showToast("Enter a query to initiate AI Protocol");
        return;
    }

    const btn = document.querySelector('button[onclick="askAI()"]');
    gsap.to(btn, { rotation: "+=360", duration: 1, ease: "power2.inOut" });

    setTimeout(() => {
        const hints = [
            `Analysis: The best ${input.value} is currently at Hub #2. High demand today.`,
            `Protocol: Pairs well with organic sourdough. Adding to suggestions.`,
            `Intelligence: Fresh stock of ${input.value} arrived 14 mins ago.`
        ];

        if (panel && msgBox) {
            msgBox.textContent = hints[Math.floor(Math.random() * hints.length)];
            panel.style.display = 'block';
            gsap.fromTo(panel,
                { opacity: 0, y: 10, scale: 0.95 },
                { opacity: 1, y: 0, scale: 1, duration: 0.5, ease: "cubic" }
            );
        }
    }, 800);
}

// 4. Page & Component Animations
function initGSAP() {
    // 4.1 Initial staggered entry for layout sections
    const staggeredSections = document.querySelectorAll('.stagger-1, .stagger-2, .stagger-3, .stagger-4');
    gsap.from(staggeredSections, {
        y: 20,
        opacity: 0,
        duration: 0.8,
        stagger: 0.12,
        ease: "cubic",
        clearProps: "opacity,transform,y"
    });

    // 4.2 Banners scale intro
    gsap.from(".promo-slide", {
        scale: 0.95,
        opacity: 0,
        duration: 1,
        stagger: 0.15,
        ease: "cubic",
        delay: 0.4,
        clearProps: "opacity,transform,scale"
    });

    // 4.3 Handle Cards with ScrollTrigger
    const cards = document.querySelectorAll('.product-card-v3, .bento-card');
    gsap.from(cards, {
        opacity: 0,
        y: 15,
        duration: 0.6,
        stagger: {
            amount: 0.3,
            grid: "auto",
            from: "start"
        },
        ease: "cubic",
        scrollTrigger: {
            trigger: "#view-port",
            scroller: "#view-port",
            start: "top bottom",
            toggleActions: "play none none none"
        },
        clearProps: "opacity,transform,y"
    });

    // 4.4 Interactive Hover Effects
    document.querySelectorAll('.product-card-v3, .bento-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, { y: -8, scale: 1.02, duration: 0.4, ease: "cubic" });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, { y: 0, scale: 1, duration: 0.4, ease: "cubic" });
        });
    });

    // 4.5 Bottom Nav Pulse
    gsap.to(".nav-center-btn .center-circle", {
        boxShadow: "0 0 25px rgba(48, 232, 122, 0.4)",
        repeat: -1,
        yoyo: true,
        duration: 1.5,
        ease: "sine.inOut"
    });

    // 4.6 Refresh Logic
    const refreshST = () => {
        setTimeout(() => { ScrollTrigger.refresh(); }, 500);
    };

    refreshST();
    window.addEventListener('resize', refreshST);
    window.addEventListener('load', refreshST);
}

// 5. Setup & Events
document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initGSAP();

    // URL Message Handler
    const params = new URLSearchParams(window.location.search);
    if (params.has('msg')) {
        showToast(params.get('msg'));
        const url = new URL(window.location);
        url.searchParams.delete('msg');
        window.history.replaceState({}, '', url);
    }

    // Smooth Scroll Integration for Carousels
    const horizScrolls = document.querySelectorAll('.home-carousel, .reorder-list-v3, .no-scrollbar');
    horizScrolls.forEach(el => {
        let isDown = false;
        let startX;
        let scrollLeft;

        el.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - el.offsetLeft;
            scrollLeft = el.scrollLeft;
            gsap.to(el, { cursor: "grabbing", duration: 0.1 });
        });
        el.addEventListener('mouseleave', () => {
            isDown = false;
            gsap.to(el, { cursor: "grab", duration: 0.1 });
        });
        el.addEventListener('mouseup', () => {
            isDown = false;
            gsap.to(el, { cursor: "grab", duration: 0.1 });
        });
        el.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - el.offsetLeft;
            const walk = (x - startX) * 2;
            gsap.to(el, { scrollLeft: scrollLeft - walk, duration: 0.3, ease: "power1.out" });
        });
    });

    // Global Interactive Button Effect
    document.querySelectorAll('button, .icon-btn-v3, .add-btn-v3').forEach(btn => {
        btn.addEventListener('touchstart', () => gsap.to(btn, { scale: 0.92, duration: 0.1 }));
        btn.addEventListener('touchend', () => gsap.to(btn, { scale: 1, duration: 0.2, ease: "cubic" }));
        btn.addEventListener('mousedown', () => gsap.to(btn, { scale: 0.92, duration: 0.1 }));
        btn.addEventListener('mouseup', () => gsap.to(btn, { scale: 1, duration: 0.2, ease: "cubic" }));
    });
});
