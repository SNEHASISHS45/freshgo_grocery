// FreshGo Grocery App - GSAP Powered Animations & Core Logic

// Initialize GSAP Plug-ins
gsap.registerPlugin(ScrollTrigger, CustomEase);

// Material Design 3 "Emphasized" Easing
CustomEase.create("m3-emphasized", "0.2, 0, 0, 1");
CustomEase.create("m3-decelerate", "0, 0, 0, 1");

// 1. Theme Management
function initTheme() {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
}

function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);

    // Update Meta Theme Color for Status Bar Sync
    const metaTheme = document.querySelector('meta[name="theme-color"]');
    if (metaTheme) metaTheme.setAttribute('content', newTheme === 'dark' ? '#060807' : '#FFFFFF');

    showToast(`${newTheme.charAt(0).toUpperCase() + newTheme.slice(1)} Mode Activated`);
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
    toast.innerHTML = `<span class="material-symbols-outlined filled" style="font-size: 20px;">check_circle</span> ${message}`;
    document.body.appendChild(toast);

    // GSAP Toast Animation
    gsap.fromTo(toast,
        { y: 60, opacity: 0, scale: 0.8 },
        { y: 0, opacity: 1, scale: 1, duration: 0.7, ease: "m3-emphasized" }
    );

    setTimeout(() => {
        gsap.to(toast, {
            y: -20,
            opacity: 0,
            scale: 0.9,
            duration: 0.5,
            ease: "m3-emphasized",
            onComplete: () => toast.remove()
        });
    }, 2800);
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
    gsap.to(btn, { rotation: "+=360", duration: 1, ease: "m3-emphasized" });

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
                { opacity: 0, y: 15, scale: 0.95 },
                { opacity: 1, y: 0, scale: 1, duration: 0.6, ease: "m3-emphasized" }
            );
        }
    }, 800);
}

// 4. Page & Component Animations
function initGSAP() {
    // 4.1 Page Entrance Reveal
    const views = document.querySelectorAll('.view-enter');
    if (views.length > 0) {
        gsap.fromTo(views,
            { opacity: 1 },
            { opacity: 1, duration: 0.1 } // Just a placeholder to ensure the class is active
        );

        // Stagger inner elements of the view
        const headers = document.querySelectorAll('header');
        const sections = document.querySelectorAll('main > section, main > div');

        gsap.from(headers, { y: -20, opacity: 0, duration: 0.8, ease: "m3-emphasized" });
        gsap.from(sections, {
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: 0.1,
            ease: "m3-emphasized",
            delay: 0.1
        });
    }

    // 4.2 Interactive Hover Effects
    document.querySelectorAll('.product-card-v3, .bento-card, .category-tile').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -6,
                boxShadow: "0 12px 32px rgba(0,0,0,0.08)",
                borderColor: "var(--brand-primary)",
                duration: 0.4,
                ease: "m3-emphasized"
            });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                boxShadow: "var(--shadow-sm)",
                borderColor: "var(--border-color)",
                duration: 0.4,
                ease: "m3-emphasized"
            });
        });
    });


    // 4.5 Refresh Logic
    const refreshST = () => {
        setTimeout(() => { if (typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh(); }, 500);
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
    document.querySelectorAll('button, .icon-btn-v3, .add-btn-v3, .nav-item-v3').forEach(btn => {
        btn.addEventListener('touchstart', () => gsap.to(btn, { scale: 0.94, duration: 0.1 }));
        btn.addEventListener('touchend', () => gsap.to(btn, { scale: 1, duration: 0.2, ease: "m3-emphasized" }));
        btn.addEventListener('mousedown', () => gsap.to(btn, { scale: 0.94, duration: 0.1 }));
        btn.addEventListener('mouseup', () => gsap.to(btn, { scale: 1, duration: 0.2, ease: "m3-emphasized" }));
    });
});

// --- NEW SYSTEM FEATURES ---

// 6. Notifications Panel Logic
let isNotifOpen = false;
function toggleNotifications() {
    const panel = document.getElementById('notifications-panel');
    const overlay = document.getElementById('notifications-overlay');

    if (!isNotifOpen) {
        overlay.style.display = 'block';
        gsap.to(panel, { right: 0, duration: 0.6, ease: "m3-emphasized" });
        gsap.from(overlay, { opacity: 0, duration: 0.4 });
        isNotifOpen = true;
    } else {
        gsap.to(panel, { right: -400, duration: 0.5, ease: "m3-emphasized" });
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

// 7. Real Location Detection
async function detectLocation() {
    const locTitle = document.getElementById('location-title');
    const locSub = document.getElementById('location-subtitle');

    if (!locTitle) return;

    showToast("Initializing Deep Location Sync...");
    locTitle.textContent = "Locating...";

    if (!navigator.geolocation) {
        showToast("Geolocation is not supported by your browser.");
        locTitle.textContent = "Location Denied";
        return;
    }

    navigator.geolocation.getCurrentPosition(async (position) => {
        const { latitude, longitude } = position.coords;
        console.log(`Protocol: Lat ${latitude}, Lon ${longitude}`);

        try {
            // Updated fetch with User-Agent header as required by Nominatim Policy
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&zoom=18&addressdetails=1`, {
                headers: {
                    'User-Agent': 'FreshGo-Grocery-App-v4'
                }
            });

            if (!response.ok) throw new Error('Network Protocol Error');

            const data = await response.json();

            if (data && data.address) {
                const area = data.address.suburb || data.address.neighbourhood || data.address.city_district || data.address.village || "Nearby Hub";
                const city = data.address.city || data.address.town || data.address.state || "Location Sync";

                locTitle.textContent = area;
                locSub.textContent = `${city}, India`;
                showToast(`Sync Successful: ${area} Hub`);

                // Entrance animation for the new text
                gsap.from([locTitle, locSub], { opacity: 0, y: 5, stagger: 0.1, duration: 0.4, ease: "m3-emphasized" });
            } else {
                throw new Error('Data Empty');
            }
        } catch (error) {
            console.error("Sync Error:", error);
            locTitle.textContent = "HSR Layout"; // Robust legacy fallback
            locSub.textContent = "Bengaluru, KA 560102";
            showToast("System Error: Using Last Known Hub");
        }
    }, (error) => {
        console.error("Geo Error:", error);
        locTitle.textContent = "Permission Required";
        showToast("Access Denied: Please enable Location");
    }, {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    });
}

// 8. Global Theme Observer (Ensures UI Sync)
const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.attributeName === 'data-theme') {
            const theme = document.documentElement.getAttribute('data-theme');
            console.log(`System Protocol: Theme Shifted to ${theme}`);
        }
    });
});
observer.observe(document.documentElement, { attributes: true });
