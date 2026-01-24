// FreshGo Grocery App - JavaScript (No API - Direct PHP)

// Show Toast Notification
function showToast(message) {
    // Remove existing toast
    const existingToast = document.querySelector('.toast');
    if (existingToast) existingToast.remove();

    // Create new toast
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.style.cssText = `
        position: fixed;
        bottom: 100px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--primary);
        color: #000;
        padding: 12px 24px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 700;
        z-index: 9999;
        animation: slideUp 0.3s ease-out;
        box-shadow: 0 10px 40px rgba(57, 255, 20, 0.3);
    `;
    toast.textContent = message;
    document.body.appendChild(toast);

    // Remove after 2 seconds
    setTimeout(() => {
        toast.style.animation = 'slideDown 0.3s ease-out forwards';
        setTimeout(() => toast.remove(), 300);
    }, 2000);
}

// Add CSS animations for toast
const style = document.createElement('style');
style.textContent = `
    @keyframes slideUp {
        from { opacity: 0; transform: translateX(-50%) translateY(20px); }
        to { opacity: 1; transform: translateX(-50%) translateY(0); }
    }
    @keyframes slideDown {
        from { opacity: 1; transform: translateX(-50%) translateY(0); }
        to { opacity: 0; transform: translateX(-50%) translateY(20px); }
    }
`;
document.head.appendChild(style);

// Add to Cart - Direct PHP redirect
function addToCart(productId) {
    window.location.href = '?action=add_cart&id=' + productId;
}

// Update Quantity - Direct PHP redirect
function updateQty(productId, delta) {
    window.location.href = '?action=update_cart&id=' + productId + '&delta=' + delta;
}

// Toggle Favorite - Direct PHP redirect
function toggleFavorite(productId) {
    window.location.href = '?action=toggle_favorite&id=' + productId;
}

// Place Order - Direct PHP redirect
function placeOrder() {
    window.location.href = '?action=place_order';
}

// AI Search (simplified - just shows mock response)
function askAI() {
    const searchInput = document.getElementById('searchInput');
    const aiResponse = document.getElementById('aiResponse');
    const aiMessage = document.getElementById('aiMessage');

    if (!searchInput || !searchInput.value.trim()) return;

    const query = searchInput.value.trim();

    // Show loading state
    const aiBtn = document.getElementById('aiSearchBtn');
    if (aiBtn) {
        aiBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span>';
    }

    // Simulate AI response
    setTimeout(() => {
        const responses = [
            "For " + query + ", I recommend trying our fresh Amul Paneer with some organic vegetables for a delicious sabzi!",
            "Looking for " + query + "? Try pairing it with our Tata Tea Gold for an authentic Indian experience!",
            "Great choice with " + query + "! Our Aashirvaad Atta makes perfect rotis to complement your meal.",
        ];

        if (aiResponse && aiMessage) {
            aiMessage.textContent = responses[Math.floor(Math.random() * responses.length)];
            aiResponse.style.display = 'block';
        }

        if (aiBtn) {
            aiBtn.innerHTML = '<span class="material-symbols-outlined">auto_awesome</span>';
        }
    }, 1000);
}

// Setup event listeners
document.addEventListener('DOMContentLoaded', function () {
    // Search input enter key
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                askAI();
            }
        });
    }

    // AI search button
    const aiSearchBtn = document.getElementById('aiSearchBtn');
    if (aiSearchBtn) {
        aiSearchBtn.addEventListener('click', askAI);
    }

    // Show toast if there's a message in URL
    const urlParams = new URLSearchParams(window.location.search);
    const msg = urlParams.get('msg');
    if (msg) {
        showToast(msg);
        // Clean URL
        const cleanUrl = window.location.pathname + '?page=' + (urlParams.get('page') || 'home');
        if (urlParams.get('category')) {
            window.history.replaceState({}, '', cleanUrl + '&category=' + urlParams.get('category'));
        } else {
            window.history.replaceState({}, '', cleanUrl);
        }
    }
});
