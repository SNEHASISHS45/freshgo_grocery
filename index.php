<?php
session_start();

// Initialize session data
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if (!isset($_SESSION['favorites'])) $_SESSION['favorites'] = [];

// Products data
$products = [
    ['id' => '1', 'name' => 'Amul Gold Full Cream Milk', 'price' => 33, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1550583724-b2692b85b150?q=80&w=400', 'weight' => '500ml', 'brand' => 'Amul'],
    ['id' => '2', 'name' => 'Aashirvaad Shudh Atta', 'price' => 215, 'oldPrice' => 240, 'category' => 'Atta & Flours', 'image' => 'https://images.unsplash.com/photo-1627308595229-7830a5c91f9f?q=80&w=400', 'weight' => '5kg', 'brand' => 'ITC', 'isOnSale' => true],
    ['id' => '3', 'name' => 'Alphonso Mangoes', 'price' => 699, 'category' => 'Fruits', 'image' => 'https://images.unsplash.com/photo-1553279768-865429fa0078?q=80&w=400', 'weight' => '6pcs', 'brand' => 'Farm Fresh', 'isOrganic' => true],
    ['id' => '4', 'name' => 'Maggi Masala Noodles', 'price' => 14, 'category' => 'Instant Food', 'image' => 'https://images.unsplash.com/photo-1612929633738-8fe44f7ec841?q=80&w=400', 'weight' => '70g', 'brand' => 'Nestle'],
    ['id' => '5', 'name' => 'Tata Tea Gold Premium', 'price' => 165, 'category' => 'Tea & Coffee', 'image' => 'https://images.unsplash.com/photo-1594631252845-29fc4586d56c?q=80&w=400', 'weight' => '250g', 'brand' => 'Tata'],
    ['id' => '6', 'name' => 'Fresh Organic Broccoli', 'price' => 89, 'category' => 'Vegetables', 'image' => 'https://images.unsplash.com/photo-1584270354949-c26b0d5b4a0c?q=80&w=400', 'weight' => '250g', 'brand' => 'Local', 'isOrganic' => true],
    ['id' => '7', 'name' => 'Mother Dairy Paneer', 'price' => 85, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1631452180519-c014fe946bc7?q=80&w=400', 'weight' => '200g', 'brand' => 'Mother Dairy'],
    ['id' => '8', 'name' => 'Catch Turmeric Powder', 'price' => 45, 'category' => 'Masala & Spices', 'image' => 'https://images.unsplash.com/photo-1615485290382-441e4d049cb5?q=80&w=400', 'weight' => '100g', 'brand' => 'Catch'],
    ['id' => '9', 'name' => 'Kashmiri Red Apples', 'price' => 149, 'oldPrice' => 179, 'category' => 'Fruits', 'image' => 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?q=80&w=400', 'weight' => '1kg', 'brand' => 'Farm Direct', 'isOnSale' => true],
    ['id' => '10', 'name' => 'Amul Salted Butter', 'price' => 56, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1589985270826-4b7bb135bc9d?q=80&w=400', 'weight' => '100g', 'brand' => 'Amul'],
    ['id' => '11', 'name' => 'Fresh Palak (Spinach)', 'price' => 25, 'category' => 'Vegetables', 'image' => 'https://images.unsplash.com/photo-1576045057995-568f588f82fb?q=80&w=400', 'weight' => '250g', 'brand' => 'Local', 'isOrganic' => true],
    ['id' => '12', 'name' => 'Nescafe Classic Coffee', 'price' => 245, 'category' => 'Tea & Coffee', 'image' => 'https://images.unsplash.com/photo-1559496417-e7f25cb247f3?q=80&w=400', 'weight' => '200g', 'brand' => 'Nestle'],
    ['id' => '13', 'name' => 'MDH Garam Masala', 'price' => 75, 'category' => 'Masala & Spices', 'image' => 'https://images.unsplash.com/photo-1593395841927-11120e17300c?q=80&w=400', 'weight' => '100g', 'brand' => 'MDH'],
    ['id' => '14', 'name' => 'Robusta Bananas', 'price' => 45, 'category' => 'Fruits', 'image' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?q=80&w=400', 'weight' => '1 dozen', 'brand' => 'Farm Fresh'],
    ['id' => '15', 'name' => 'Amul Cheese Slices', 'price' => 120, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1552763443-4299993330cb?q=80&w=400', 'weight' => '200g', 'brand' => 'Amul'],
    ['id' => '16', 'name' => 'Hybrid Tomatoes', 'price' => 35, 'category' => 'Vegetables', 'image' => 'https://images.unsplash.com/photo-1566385101042-1a0aa0c1233c?q=80&w=400', 'weight' => '500g', 'brand' => 'Local'],
];

$categories = ['All', 'Dairy', 'Atta & Flours', 'Fruits', 'Vegetables', 'Tea & Coffee', 'Instant Food', 'Masala & Spices'];

// Helper function to get product by ID
function getProductById($products, $id) {
    foreach ($products as $p) if ($p['id'] === $id) return $p;
    return null;
}

// Handle Actions (Cart, Favorites, Order)
$action = isset($_GET['action']) ? $_GET['action'] : null;
$actionId = isset($_GET['id']) ? $_GET['id'] : null;
$msg = '';

if ($action === 'add_cart' && $actionId) {
    $product = getProductById($products, $actionId);
    if ($product) {
        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] === $actionId) {
                $item['quantity']++;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $_SESSION['cart'][] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'image' => $product['image'],
                'weight' => $product['weight'],
                'category' => $product['category'],
                'quantity' => 1
            ];
        }
        $msg = 'Added to basket!';
    }
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '?page=home';
    // Remove existing msg from referer if any
    $referer = preg_replace('/([?&])msg=[^&]*(&|$)/', '$1', $referer);
    $referer = rtrim($referer, '?&');
    $sep = strpos($referer, '?') !== false ? '&' : '?';
    header('Location: ' . $referer . $sep . 'msg=' . urlencode($msg));
    exit;
}

if ($action === 'update_cart' && $actionId) {
    $delta = isset($_GET['delta']) ? (int)$_GET['delta'] : 0;
    foreach ($_SESSION['cart'] as $key => &$item) {
        if ($item['id'] === $actionId) {
            $item['quantity'] += $delta;
            if ($item['quantity'] <= 0) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
            break;
        }
    }
    header('Location: ?page=cart');
    exit;
}

if ($action === 'toggle_favorite' && $actionId) {
    $key = array_search($actionId, $_SESSION['favorites']);
    if ($key !== false) {
        unset($_SESSION['favorites'][$key]);
        $_SESSION['favorites'] = array_values($_SESSION['favorites']);
    } else {
        $_SESSION['favorites'][] = $actionId;
    }
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '?page=home';
    header('Location: ' . $referer);
    exit;
}

if ($action === 'place_order') {
    $_SESSION['cart'] = [];
    header('Location: ?page=tracking');
    exit;
}

if ($action === 'clear_cart') {
    $_SESSION['cart'] = [];
    header('Location: ?page=cart');
    exit;
}

// Get page and category
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$category = isset($_GET['category']) ? $_GET['category'] : 'All';
$productId = isset($_GET['id']) ? $_GET['id'] : null;

$filteredProducts = $category === 'All' ? $products : array_filter($products, fn($p) => $p['category'] === $category);

// Calculate cart totals
$cartTotal = 0; $cartCount = 0;
foreach ($_SESSION['cart'] as $item) {
    $cartTotal += $item['price'] * $item['quantity'];
    $cartCount += $item['quantity'];
}
$deliveryFee = $cartTotal > 499 ? 0 : 25;
$finalTotal = $cartTotal + ($cartTotal > 0 ? $deliveryFee + 5 : 0);

// Page titles for SEO
$pageTitles = [
    'home' => 'FreshGo Premium | 12-Min Grocery Delivery in Bangalore',
    'explore' => 'Explore Categories | FreshGo Premium',
    'cart' => 'My Basket | FreshGo Premium',
    'checkout' => 'Checkout | FreshGo Premium',
    'rewards' => 'FreshGo Coins & Rewards | FreshGo Premium',
    'profile' => 'My Profile | FreshGo Premium',
    'product' => 'Product Details | FreshGo Premium',
    'tracking' => 'Track Your Order | FreshGo Premium',
    'orders' => 'My Orders | FreshGo Premium',
    'addresses' => 'Saved Addresses | FreshGo Premium',
    'payment' => 'Payment Methods | FreshGo Premium',
    'favorites' => 'My Favorites | FreshGo Premium',
    'notifications' => 'Notifications | FreshGo Premium',
    'settings' => 'Settings | FreshGo Premium',
    'support' => 'Help & Support | FreshGo Premium',
    'search' => 'Search | FreshGo Premium',
    'login' => 'Login | FreshGo Premium',
    'signup' => 'Create Account | FreshGo Premium',
    'forgot' => 'Reset Password | FreshGo Premium',
    'welcome' => 'Welcome to FreshGo Premium'
];
$pageTitle = $pageTitles[$page] ?? 'FreshGo Premium | Fresh Groceries Delivered';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="description" content="FreshGo Premium - Get farm-fresh groceries delivered to your doorstep in 12 minutes. Shop dairy, fruits, vegetables, spices & more from top Indian brands.">
    <meta name="keywords" content="grocery delivery, fresh vegetables, fruits, dairy, online grocery, Bangalore, quick delivery, Amul, Tata, organic">
    <meta name="author" content="FreshGo">
    <meta name="robots" content="index, follow">
    
    <!-- Theme & App Meta -->
    <meta name="theme-color" content="#050505">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="FreshGo">
    <meta name="mobile-web-app-capable" content="yes">
    
    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="Fresh groceries delivered in 12 minutes. Shop dairy, fruits, vegetables & more.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1200">
    <meta property="og:url" content="https://freshgo.app">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="Fresh groceries delivered in 12 minutes.">
    
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🥬</text></svg>">
    <link rel="apple-touch-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🥬</text></svg>">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="manifest.json">
    
    <!-- GSAP Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CustomEase.min.js"></script>
</head>
<script>
    // Immediate theme set to prevent flash
    (function() {
        const theme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', theme);
    })();
</script>
<body>
    <div id="app-container">
        <div id="view-port">
            <?php include "pages/{$page}.php"; ?>
        </div>
        <?php if (in_array($page, ['home', 'explore', 'profile', 'orders', 'rewards'])): ?>
        <nav class="bottom-nav-floating">
            <a href="?page=home" class="nav-item-v3 <?= $page === 'home' ? 'active' : '' ?>">
                <span class="material-symbols-outlined">home</span>
                <span class="nav-label">Home</span>
            </a>
            <a href="?page=explore" class="nav-item-v3 <?= $page === 'explore' ? 'active' : '' ?>">
                <span class="material-symbols-outlined">grid_view</span>
                <span class="nav-label">Explore</span>
            </a>
            <a href="?page=cart" class="nav-item-v3 <?= $page === 'cart' ? 'active' : '' ?>">
                <span class="material-symbols-outlined">shopping_basket</span>
                <span class="nav-label">Cart</span>
                <?php if ($cartCount > 0): ?><span class="nav-badge-v3"><?= $cartCount ?></span><?php endif; ?>
            </a>
            <a href="?page=orders" class="nav-item-v3 <?= $page === 'orders' ? 'active' : '' ?>">
                <span class="material-symbols-outlined">receipt_long</span>
                <span class="nav-label">Orders</span>
            </a>
            <a href="?page=profile" class="nav-item-v3 <?= $page === 'profile' ? 'active' : '' ?>">
                <span class="material-symbols-outlined">person</span>
                <span class="nav-label">Profile</span>
            </a>
        </nav>
        <?php endif; ?>
        <!-- Notifications Panel (Side/Overlay Overlay) -->
        <div id="notifications-panel" style="position: fixed; top: 0; right: -400px; width: 380px; max-width: 90%; height: 100vh; background: var(--bg-main); z-index: 10000; box-shadow: var(--shadow-lg); border-left: 1px solid var(--border-subtle); display: flex; flex-direction: column; overflow: hidden;">
            <header style="padding: 24px; border-bottom: 1px solid var(--border-subtle); display: flex; align-items: center; justify-content: space-between;">
                <div>
                   <h2 style="font-size: 22px; font-weight: 900; color: var(--text-primary); letter-spacing: -0.01em;">Alerts Hub</h2>
                   <p style="font-size: 11px; color: var(--brand-primary); font-weight: 850; text-transform: uppercase; margin-top: 2px;">Protocol: Live Notifications</p>
                </div>
                <button onclick="toggleNotifications()" style="width: 44px; height: 44px; border-radius: 12px; background: var(--bg-secondary); border: none; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                    <span class="material-symbols-outlined" style="color: var(--text-primary);">close</span>
                </button>
            </header>
            <main class="no-scrollbar" style="flex: 1; overflow-y: auto; padding: 16px;">
                <div id="notifications-list" style="display: flex; flex-direction: column; gap: 12px;">
                    <!-- Notification Item -->
                    <div style="background: var(--bg-secondary); border-radius: 20px; padding: 16px; border: 1.5px solid var(--border-subtle); position: relative; overflow: hidden;">
                         <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--brand-primary);"></div>
                         <div style="display: flex; gap: 14px;">
                             <div style="width: 44px; height: 44px; background: var(--brand-primary-light); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--brand-primary);">
                                 <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_shipping</span>
                             </div>
                             <div style="flex: 1;">
                                 <h4 style="font-size: 14px; font-weight: 850; color: var(--text-primary);">Order Transmitted</h4>
                                 <p style="font-size: 12px; color: var(--text-secondary); line-height: 1.4; margin-top: 4px; font-weight: 600;">Your high-priority order #4429 has been dispatched to Hub Alpha.</p>
                                 <span style="font-size: 10px; color: var(--text-muted); font-weight: 800; margin-top: 8px; display: block;">2 MINS AGO</span>
                             </div>
                         </div>
                    </div>
                    
                    <div style="background: var(--bg-secondary); border-radius: 20px; padding: 16px; border: 1.1px solid var(--border-subtle); opacity: 0.7;">
                         <div style="display: flex; gap: 14px;">
                             <div style="width: 44px; height: 44px; background: var(--cat-fruits); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--brand-accent);">
                                 <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">loyalty</span>
                             </div>
                             <div style="flex: 1;">
                                 <h4 style="font-size: 14px; font-weight: 850; color: var(--text-primary);">Flash Credits</h4>
                                 <p style="font-size: 12px; color: var(--text-secondary); line-height: 1.4; margin-top: 4px; font-weight: 600;">System detected ₹50 credits added for your next organic haul.</p>
                                 <span style="font-size: 10px; color: var(--text-muted); font-weight: 800; margin-top: 8px; display: block;">1 HOUR AGO</span>
                             </div>
                         </div>
                    </div>
                </div>
            </main>
            <footer style="padding: 16px; border-top: 1px solid var(--border-subtle); background: var(--bg-secondary);">
                <button style="width: 100%; height: 50px; background: var(--brand-primary); color: #000; border: none; border-radius: 16px; font-weight: 900; font-size: 14px; box-shadow: var(--shadow-md);">MARK ALL AS READ</button>
            </footer>
        </div>
        <div id="notifications-overlay" onclick="toggleNotifications()" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.5); z-index: 9999; display: none; backdrop-filter: blur(4px);"></div>

    </div>
    <script src="app.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('sw.js')
                    .then(reg => console.log('Service Worker Registered'))
                    .catch(err => console.log('Service Worker Failed', err));
            });
        }
    </script>
</body>
</html>
