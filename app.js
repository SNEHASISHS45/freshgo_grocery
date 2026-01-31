// FreshGo Grocery App - GSAP Powered Animations & Core Logic
const EASE_EMPHASIZED = "power3.out";
const EASE_STANDARD = "power2.out";

// 1. App-like Haptic Feedback
function hapticFeedback(type = 'light') {
    if (!navigator.vibrate) return;

    switch (type) {
        case 'light': navigator.vibrate(10); break;
        case 'medium': navigator.vibrate(20); break;
        case 'heavy': navigator.vibrate(50); break;
        case 'success': navigator.vibrate([10, 30, 10]); break;
        case 'error': navigator.vibrate([50, 50, 50]); break;
    }
}

// 2. Global Progress Bar Logic
const ProgressBar = {
    el: document.getElementById('app-progress'),
    start() {
        if (!this.el) return;
        this.el.style.width = '0%';
        this.el.style.opacity = '1';
        gsap.to(this.el, { width: '70%', duration: 1.5, ease: "power1.out" });
    },
    finish() {
        if (!this.el) return;
        gsap.to(this.el, {
            width: '100%',
            duration: 0.5,
            ease: "power2.inout",
            onComplete: () => {
                gsap.to(this.el, { opacity: 0, duration: 0.3 });
            }
        });
    }
};

// 3. Skeleton Transition Logic
function handleSplashScreen() {
    const skeleton = document.getElementById('skeleton-overlay');
    if (!skeleton) return;

    const hide = () => {
        skeleton.style.opacity = '0';
        setTimeout(() => {
            skeleton.style.display = 'none';
            skeleton.style.visibility = 'hidden';
            if (typeof initGSAP === 'function') initGSAP();
        }, 500);
    };

    if (typeof gsap !== 'undefined') {
        gsap.to(skeleton, {
            opacity: 0,
            duration: 0.8,
            delay: 0.2,
            ease: "power2.out",
            onComplete: hide
        });
        // Safety timeout: hide after 1.5s regardless of GSAP
        setTimeout(hide, 1500);
    } else {
        hide();
    }
}

// --- CORE SYSTEM ---

// 1. Theme Management (Modified for Haptics)
function initTheme() {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
}

function toggleTheme() {
    hapticFeedback('medium');
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);

    const metaTheme = document.querySelector('meta[name="theme-color"]');
    if (metaTheme) metaTheme.setAttribute('content', newTheme === 'dark' ? '#060807' : '#FFFFFF');

    showToast(`${newTheme.charAt(0).toUpperCase() + newTheme.slice(1)} Mode Activated`);
}

// 2. Premium Toast System (Modified for Haptics)
function showToast(message) {
    hapticFeedback('light');
    const existingToast = document.querySelector('.toast');
    if (existingToast) existingToast.remove();

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.style.cssText = `
        position: fixed;
        bottom: 110px;
        left: 50%;
        transform: translate(-50%, 0);
        background: var(--brand-primary);
        color: #000;
        padding: 14px 28px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 950;
        z-index: 9999;
        box-shadow: 0 10px 40px rgba(21, 209, 112, 0.4);
        display: flex;
        align-items: center;
        gap: 12px;
        opacity: 0;
        white-space: nowrap;
        border: 2px solid rgba(255,255,255,0.2);
    `;
    toast.innerHTML = `<i data-lucide="check-circle" style="width: 20px; height: 20px;"></i> ${message}`;
    document.body.appendChild(toast);
    if (typeof lucide !== 'undefined') lucide.createIcons();

    gsap.fromTo(toast,
        { y: 60, opacity: 0, scale: 0.8 },
        { y: 0, opacity: 1, scale: 1, duration: 0.7, ease: EASE_EMPHASIZED }
    );

    setTimeout(() => {
        gsap.to(toast, {
            y: -20,
            opacity: 0,
            scale: 0.9,
            duration: 0.5,
            ease: EASE_EMPHASIZED,
            onComplete: () => toast.remove()
        });
    }, 2800);
}

// 3. AI Search Concierge (Modified with Progress)
function askAI() {
    hapticFeedback('medium');
    const input = document.getElementById('searchInput');
    const panel = document.getElementById('aiResponse');
    const msgBox = document.getElementById('aiMessage');

    if (!input || !input.value.trim()) {
        showToast("Enter a query to initiate AI Protocol");
        return;
    }

    ProgressBar.start();
    const btn = document.querySelector('button[onclick="askAI()"]');
    if (btn) gsap.to(btn, { rotation: "+=360", duration: 1, ease: EASE_EMPHASIZED });

    setTimeout(() => {
        ProgressBar.finish();
        const hints = [
            `Analysis: The best ${input.value} is currently at Hub #2. High demand today.`,
            `Protocol: Pairs well with organic sourdough. Adding to suggestions.`,
            `Intelligence: Fresh stock of ${input.value} arrived 14 mins ago.`
        ];

        if (panel && msgBox) {
            msgBox.textContent = hints[Math.floor(Math.random() * hints.length)];
            panel.style.display = 'block';
            gsap.fromTo(panel,
                { opacity: 0, y: 15, scale: 0.95 },
                { opacity: 1, y: 0, scale: 1, duration: 0.6, ease: EASE_EMPHASIZED }
            );
        }
    }, 800);
}

// 4. Page & Component Animations
function initGSAP() {
    gsap.registerPlugin(ScrollTrigger);

    // Initial View Entrance stagger
    if (document.querySelector('.stagger-item')) {
        gsap.from('.stagger-item', {
            opacity: 0,
            y: 20,
            stagger: 0.08,
            duration: 0.6,
            ease: EASE_EMPHASIZED
        });
    }

    const headers = document.querySelectorAll('header');
    if (headers.length > 0) {
        gsap.from(headers, { y: -20, opacity: 0, duration: 0.8, ease: EASE_STANDARD });
    }

    // Section reveal animations
    gsap.utils.toArray('section').forEach(section => {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                scroller: "#view-port",
                start: "top bottom-=60px",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: 40,
            duration: 1,
            ease: "expo.out"
        });
    });

    // Advanced Product Card Reveal
    const productCards = document.querySelectorAll('.product-card-v3');
    if (productCards.length > 0) {
        gsap.from(productCards, {
            scrollTrigger: {
                trigger: productCards[0],
                scroller: "#view-port",
                start: "top bottom"
            },
            opacity: 0,
            y: 50,
            scale: 0.9,
            stagger: {
                each: 0.1,
                grid: "auto",
                from: "start"
            },
            duration: 1.2,
            ease: "elastic.out(1, 0.8)",
            clearProps: "all"
        });
    }

    // Icon Micro-interactions Logic
    document.querySelectorAll('.nav-item-v3, .icon-btn-v3, .category-tile').forEach(el => {
        const icon = el.querySelector('i');
        if (!icon) return;

        el.addEventListener('mouseenter', () => {
            gsap.to(icon, {
                scale: 1.3,
                rotate: 15,
                duration: 0.4,
                ease: "back.out(2)"
            });
        });

        el.addEventListener('mouseleave', () => {
            gsap.to(icon, {
                scale: 1,
                rotate: 0,
                duration: 0.4,
                ease: "elastic.out(1, 0.3)"
            });
        });

        el.addEventListener('mousedown', () => {
            gsap.to(icon, { scale: 0.8, duration: 0.1 });
        });

        el.addEventListener('mouseup', () => {
            gsap.to(icon, { scale: 1.3, duration: 0.2 });
        });
    });

    // Card Hover Physics
    document.querySelectorAll('.product-card-v3, .u-card, .promo-slide').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -10,
                scale: 1.02,
                boxShadow: "0 20px 40px rgba(0,0,0,0.12)",
                duration: 0.5,
                ease: "power2.out"
            });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                scale: 1,
                boxShadow: "var(--shadow-sm)",
                duration: 0.5,
                ease: "power2.out"
            });
        });
    });
}

// 5. Setup & Events
function initApp() {
    try {
        handleSplashScreen(); // High priority: clear the view
        initTheme();

        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        function initScrollTracker() {
            const header = document.getElementById('main-header');
            const topRow = document.getElementById('header-top-row');
            const viewPort = document.getElementById('view-port');

            if (!header || !topRow || !viewPort) return;

            viewPort.addEventListener('scroll', () => {
                const isScrolled = viewPort.scrollTop > 20;

                if (isScrolled) {
                    header.classList.add('scrolled');
                    topRow.classList.add('scrolled');
                    gsap.to(header, {
                        backgroundColor: 'var(--bg-header)',
                        duration: 0.3,
                        ease: "power2.out"
                    });
                } else {
                    header.classList.remove('scrolled');
                    topRow.classList.remove('scrolled');
                    gsap.to(header, {
                        backgroundColor: 'var(--bg-header)',
                        duration: 0.3,
                        ease: "power2.out"
                    });
                }
            });
        }

        initScrollTracker();

        // 4.7 Pull to Refresh Simulation Logic
        function initPullToRefresh() {
            const viewPort = document.getElementById('view-port');
            const pullEl = document.getElementById('pull-to-refresh');
            const icon = pullEl ? pullEl.querySelector('.refresh-icon') : null;

            if (!viewPort || !pullEl) return;

            let startY = 0;
            let pulling = false;

            viewPort.addEventListener('touchstart', (e) => {
                if (viewPort.scrollTop <= 0) {
                    startY = e.touches[0].pageY;
                    pulling = true;
                }
            });

            viewPort.addEventListener('touchmove', (e) => {
                if (!pulling) return;
                const diff = e.touches[0].pageY - startY;
                if (diff > 0 && viewPort.scrollTop <= 0) {
                    const rotation = Math.min(diff * 2, 360);
                    const y = Math.min(diff / 2, 60);
                    gsap.set(pullEl, { y: y });
                    gsap.set(icon, { rotate: rotation });
                    if (diff > 100) hapticFeedback('light');
                }
            });

            viewPort.addEventListener('touchend', (e) => {
                if (!pulling) return;
                const diff = e.changedTouches[0].pageY - startY;
                if (diff > 100 && viewPort.scrollTop <= 0) {
                    pullEl.classList.add('pull-active');
                    hapticFeedback('medium');
                    ProgressBar.start();

                    // Simulate Refresh
                    setTimeout(() => {
                        pullEl.classList.remove('pull-active');
                        gsap.to(pullEl, { y: 0, duration: 0.4, ease: "back.in(1.7)" });
                        ProgressBar.finish();
                        showToast("Protocol Refreshed: Hub Sync Active");
                        detectLocation(); // Auto update location on pull
                    }, 1500);
                } else {
                    gsap.to(pullEl, { y: 0, duration: 0.3 });
                }
                pulling = false;
            });
        }

        initPullToRefresh();

        document.querySelectorAll('button, a, .clickable, .nav-item-v3').forEach(el => {
            el.addEventListener('click', () => {
                hapticFeedback('light');
            });

            el.addEventListener('touchstart', () => el.classList.add('tap-active'));
            el.addEventListener('touchend', () => el.classList.remove('tap-active'));
        });

        const params = new URLSearchParams(window.location.search);
        if (params.has('msg')) {
            showToast(params.get('msg'));
            const url = new URL(window.location);
            url.searchParams.delete('msg');
            window.history.replaceState({}, '', url);
        }

        // Carousels and other scroll logic...
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
    } catch (e) {
        console.error("Critical System Protocol Failure:", e);
        const skeleton = document.getElementById('skeleton-overlay');
        if (skeleton) {
            skeleton.style.display = 'none';
            skeleton.style.visibility = 'hidden';
        }
        if (typeof initGSAP === 'function') initGSAP();
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initApp);
} else {
    initApp();
}

// 6. Notifications Panel Logic (Modified with Haptics)
let isNotifOpen = false;
function toggleNotifications() {
    hapticFeedback('medium');
    const panel = document.getElementById('notifications-panel');
    const overlay = document.getElementById('notifications-overlay');
    if (!panel || !overlay) return;

    if (!isNotifOpen) {
        overlay.style.display = 'block';
        gsap.to(panel, { right: 0, duration: 0.6, ease: "power3.out" });
        gsap.from(overlay, { opacity: 0, duration: 0.4 });
        isNotifOpen = true;
    } else {
        gsap.to(panel, { right: -400, duration: 0.5, ease: "power3.out" });
        gsap.to(overlay, {
            opacity: 0,
            duration: 0.4,
            onComplete: () => {
                overlay.style.display = 'none';
                overlay.style.opacity = 1;
            }
        });
        isNotifOpen = false;
    }
}

// 7. Real Location Detection (Modified with Haptics)
async function detectLocation() {
    hapticFeedback('heavy');
    const locTitle = document.getElementById('location-title');
    const locSub = document.getElementById('location-subtitle');

    if (!locTitle) return;

    ProgressBar.start();
    showToast("Initializing Deep Location Sync...");
    locTitle.textContent = "Locating...";

    if (!navigator.geolocation) {
        ProgressBar.finish();
        showToast("Geolocation is not supported by your browser.");
        locTitle.textContent = "Location Denied";
        return;
    }

    navigator.geolocation.getCurrentPosition(async (position) => {
        const { latitude, longitude } = position.coords;

        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&zoom=18&addressdetails=1`, {
                headers: { 'User-Agent': 'FreshGo-Grocery-App-v4' }
            });

            if (!response.ok) throw new Error('Network Protocol Error');

            const data = await response.json();
            ProgressBar.finish();

            if (data && data.address) {
                const area = data.address.suburb || data.address.neighbourhood || data.address.city_district || data.address.village || "Nearby Hub";
                const city = data.address.city || data.address.town || data.address.state || "Location Sync";

                locTitle.textContent = area;
                locSub.textContent = `${city}, India`;
                hapticFeedback('success');
                showToast(`Sync Successful: ${area} Hub`);

                const locElements = [locTitle, locSub].filter(el => el !== null);
                if (locElements.length > 0) {
                    gsap.from(locElements, { opacity: 0, y: 5, stagger: 0.1, duration: 0.4, ease: EASE_EMPHASIZED });
                }
            }
        } catch (error) {
            ProgressBar.finish();
            locTitle.textContent = "HSR Layout";
            locSub.textContent = "Bengaluru, KA 560102";
            showToast("System Error: Using Last Known Hub");
        }
    }, (error) => {
        ProgressBar.finish();
        locTitle.textContent = "Permission Required";
        showToast("Access Denied: Please enable Location");
    }, {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    });
}

// 8. Observer
const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.attributeName === 'data-theme') {
            const theme = document.documentElement.getAttribute('data-theme');
            console.log(`System Protocol: Theme Shifted to ${theme}`);
        }
    });
});
observer.observe(document.documentElement, { attributes: true });
