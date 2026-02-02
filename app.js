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
        // Safety timeout for instant feel
        setTimeout(hide, 800);
    } else {
        hide();
    }
}

// --- CORE SYSTEM ---

// 1. Theme Management
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

// 2. Premium Toast System
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

// 3. AI Search Concierge
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
let isGSAPInitialized = false;
function initGSAP() {
    if (isGSAPInitialized) return;
    isGSAPInitialized = true;

    gsap.registerPlugin(ScrollTrigger, CustomEase);

    // 4.1 Force visibility safety
    const sections = document.querySelectorAll('section');
    if (sections.length > 0) {
        gsap.set(sections, { opacity: 1, y: 0, visibility: 'visible' });
    }

    // 4.2 Initial stagger items
    const staggerItems = document.querySelectorAll('.stagger-item, .product-card-v3');
    if (staggerItems.length > 0) {
        // Use gsap.from to allow CSS defaults as fallback
        gsap.from(staggerItems, {
            opacity: 0,
            y: 15,
            stagger: 0.03,
            duration: 0.6,
            ease: EASE_STANDARD,
            clearProps: "opacity,y,transform",
            overwrite: "auto",
            scrollTrigger: {
                trigger: staggerItems[0],
                scroller: "#view-port",
                start: "top bottom",
                toggleActions: "play none none none"
            }
        });
    }

    // 4.3 Header reveal
    const headers = document.querySelectorAll('header');
    if (headers.length > 0) {
        gsap.from(headers, { y: -10, opacity: 0, duration: 0.4, ease: "power2.out", clearProps: "y,opacity" });
    }

    // 4.4 Section reveal logic
    gsap.utils.toArray('section').forEach((section, index) => {
        if (index <= 1) return; // Top sections already handled by stagger

        gsap.fromTo(section,
            { opacity: 0, y: 20 },
            {
                scrollTrigger: {
                    trigger: section,
                    scroller: "#view-port",
                    start: "top bottom-=50px",
                    toggleActions: "play none none none"
                },
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: "power2.out",
                clearProps: "y,opacity"
            }
        );
    });

    // 4.5 Card Hover Physics
    document.querySelectorAll('.product-card-v3, .u-card, .promo-slide').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, { y: -8, scale: 1.02, boxShadow: "0 20px 40px rgba(0,0,0,0.12)", duration: 0.4, ease: "power2.out" });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, { y: 0, scale: 1, boxShadow: "var(--shadow-sm)", duration: 0.4, ease: "power2.out" });
        });
    });

    // 4.6 Icon Interactions
    document.querySelectorAll('.nav-item-v3, .icon-btn-v3, .category-tile, button i, a i').forEach(el => {
        const icon = el.querySelector('i, svg, .material-symbols-outlined');
        if (!icon) return;

        el.addEventListener('mouseenter', () => gsap.to(icon, { scale: 1.2, rotate: 10, duration: 0.3, ease: "back.out(2)" }));
        el.addEventListener('mouseleave', () => gsap.to(icon, { scale: 1, rotate: 0, duration: 0.3, ease: "power2.out" }));
        el.addEventListener('mousedown', () => gsap.to(icon, { scale: 0.9, duration: 0.1 }));
        el.addEventListener('mouseup', () => gsap.to(icon, { scale: 1.2, duration: 0.2 }));
    });
}

// 5. Setup & Events
function initApp() {
    if (typeof lucide !== 'undefined') lucide.createIcons();

    try {
        handleSplashScreen();
        initTheme();

        // 5.1 Check for URL messages
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('msg')) {
            showToast(urlParams.get('msg'));
            // Clean URL without refresh
            const newUrl = window.location.pathname + window.location.search.replace(/([?&])msg=[^&]*(&|$)/, '$1').replace(/[?&]$/, '');
            window.history.replaceState({}, '', newUrl);
        }

        // 5.2 Scroll Tracking
        const header = document.getElementById('main-header');
        const topRow = document.getElementById('header-top-row');
        const viewPort = document.getElementById('view-port');

        if (header && topRow && viewPort) {
            viewPort.scrollTop = 0;
            viewPort.addEventListener('scroll', () => {
                const isScrolled = viewPort.scrollTop > 20;
                if (isScrolled) {
                    header.classList.add('scrolled');
                    topRow.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                    topRow.classList.remove('scrolled');
                }
            });
        }

        // 5.2 Pull to Refresh
        const pullEl = document.getElementById('pull-to-refresh');
        const refreshIcon = pullEl ? pullEl.querySelector('.refresh-icon') : null;

        if (viewPort && pullEl) {
            let startY = 0;
            let pulling = false;

            viewPort.addEventListener('touchstart', (e) => {
                if (viewPort.scrollTop <= 0) { startY = e.touches[0].pageY; pulling = true; }
            });

            viewPort.addEventListener('touchmove', (e) => {
                if (!pulling) return;
                const diff = e.touches[0].pageY - startY;
                if (diff > 0 && viewPort.scrollTop <= 0) {
                    gsap.set(pullEl, { y: Math.min(diff / 2, 60) });
                    if (refreshIcon) gsap.set(refreshIcon, { rotate: Math.min(diff * 2, 360) });
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
                    setTimeout(() => {
                        pullEl.classList.remove('pull-active');
                        gsap.to(pullEl, { y: 0, duration: 0.4, ease: "back.in(1.7)" });
                        ProgressBar.finish();
                        showToast("Protocol Refreshed: Hub Sync Active");
                    }, 1500);
                } else {
                    gsap.to(pullEl, { y: 0, duration: 0.3 });
                }
                pulling = false;
            });
        }

        // 5.3 Global Haptics & Taps
        document.querySelectorAll('button, a, .clickable').forEach(el => {
            el.addEventListener('click', () => hapticFeedback('light'));
            el.addEventListener('touchstart', () => el.classList.add('tap-active'));
            el.addEventListener('touchend', () => el.classList.remove('tap-active'));
        });

        // 5.4 Scroll Carousels
        document.querySelectorAll('.no-scrollbar').forEach(el => {
            let isDown = false; let startX; let scrollLeft;
            el.addEventListener('mousedown', (e) => { isDown = true; startX = e.pageX - el.offsetLeft; scrollLeft = el.scrollLeft; el.style.cursor = "grabbing"; });
            el.addEventListener('mouseleave', () => { isDown = false; el.style.cursor = "grab"; });
            el.addEventListener('mouseup', () => { isDown = false; el.style.cursor = "grab"; });
            el.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const walk = (e.pageX - el.offsetLeft - startX) * 2;
                el.scrollLeft = scrollLeft - walk;
            });
        });

    } catch (e) {
        console.error("Critical System Protocol Failure:", e);
        const skeleton = document.getElementById('skeleton-overlay');
        if (skeleton) { skeleton.style.display = 'none'; skeleton.style.visibility = 'hidden'; }
        initGSAP();
    }
}

// 8. AJAX Cart System
async function addToCart(id, event) {
    if (event) {
        if (typeof event.preventDefault === 'function') event.preventDefault();
        if (typeof event.stopPropagation === 'function') event.stopPropagation();
    }
    hapticFeedback('medium');

    // Optimistic UI/Loading feel
    const btn = event ? event.currentTarget : null;
    if (btn) gsap.to(btn, { scale: 0.9, duration: 0.1, yoyo: true, repeat: 1 });

    try {
        const response = await fetch(`index.php?action=add_cart&id=${id}&ajax=1`);
        const data = await response.json();

        if (data.status === 'success') {
            updateCartBadge(data.cartCount);
            showToast(data.msg || "Added to basket!");
        }
    } catch (e) {
        console.error("Cart System Protocol Error:", e);
        // Fallback to normal navigation if AJAX fails
        window.location.href = `?action=add_cart&id=${id}`;
    }
}

async function updateCart(id, delta, event) {
    if (event) {
        if (typeof event.preventDefault === 'function') event.preventDefault();
        if (typeof event.stopPropagation === 'function') event.stopPropagation();
    }
    hapticFeedback('light');

    try {
        const response = await fetch(`index.php?action=update_cart&id=${id}&delta=${delta}&ajax=1`);
        const data = await response.json();

        if (data.status === 'success') {
            updateCartBadge(data.cartCount);
            // Optionally reload page if on cart page, or update local UI
            if (window.location.search.includes('page=cart') || window.location.search.includes('page=product')) {
                window.location.reload(); // Product page might need reload to update its own qty counter if we don't handle it in JS
            }
        }
    } catch (e) {
        window.location.href = `?action=update_cart&id=${id}&delta=${delta}`;
    }
}

function updateCartBadge(count) {
    const badges = document.querySelectorAll('.nav-badge-v3');
    const cartNavItem = document.querySelector('a[href="?page=cart"] div');

    if (count > 0) {
        if (badges.length > 0) {
            badges.forEach(b => {
                b.textContent = count;
                gsap.fromTo(b,
                    { scale: 1.5, rotate: 15 },
                    { scale: 1, rotate: 0, duration: 0.5, ease: "back.out(2.5)" }
                );
            });
        } else if (cartNavItem) {
            const badge = document.createElement('span');
            badge.className = 'nav-badge-v3';
            badge.textContent = count;
            cartNavItem.appendChild(badge);
            gsap.from(badge, { scale: 0, duration: 0.5, ease: "back.out(2.5)" });
        }
    } else {
        badges.forEach(b => b.remove());
    }
}

// Initialize App
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initApp);
} else {
    initApp();
}

// 6. Notifications Panel Logic
let isNotifOpen = false;
function toggleNotifications() {
    hapticFeedback('medium');
    const panel = document.getElementById('notifications-panel');
    const overlay = document.getElementById('notifications-overlay');
    if (!panel || !overlay) return;

    if (!isNotifOpen) {
        overlay.style.display = 'block';
        gsap.to(panel, { right: 0, duration: 0.6, ease: "power3.out" });
        gsap.fromTo(overlay, { opacity: 0 }, { opacity: 1, duration: 0.4 });
        isNotifOpen = true;
    } else {
        gsap.to(panel, { right: -400, duration: 0.5, ease: "power3.out" });
        gsap.to(overlay, { opacity: 0, duration: 0.4, onComplete: () => { overlay.style.display = 'none'; } });
        isNotifOpen = false;
    }
}

// 7. Location Detection
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
        showToast("Geolocation not supported");
        locTitle.textContent = "Location Denied";
        return;
    }

    navigator.geolocation.getCurrentPosition(async (position) => {
        const { latitude, longitude } = position.coords;
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&zoom=18&addressdetails=1`, {
                headers: { 'User-Agent': 'FreshGo-App-v4' }
            });
            const data = await response.json();
            ProgressBar.finish();
            if (data && data.address) {
                const area = data.address.suburb || data.address.neighbourhood || "Nearby Hub";
                const city = data.address.city || data.address.state || "India";
                locTitle.textContent = area;
                locSub.textContent = `${city}, India`;
                hapticFeedback('success');
                showToast(`Sync Successful: ${area} Hub`);
            }
        } catch (error) {
            ProgressBar.finish();
            locTitle.textContent = "Esplanade";
            showToast("System Error: Using Last Known Hub");
        }
    }, () => {
        ProgressBar.finish();
        locTitle.textContent = "Permission Required";
        showToast("Access Denied");
    }, { enableHighAccuracy: true, timeout: 5000 });
}

// Theme Observer
const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.attributeName === 'data-theme') {
            console.log(`System Protocol: Theme Shifted to ${document.documentElement.getAttribute('data-theme')}`);
        }
    });
});
observer.observe(document.documentElement, { attributes: true });
