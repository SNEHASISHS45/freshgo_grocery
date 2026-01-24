<?php
session_start();

// Initialize session data
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if (!isset($_SESSION['favorites'])) $_SESSION['favorites'] = [];

// Products data
$products = [
    ['id' => '1', 'name' => 'Amul Gold Full Cream Milk', 'price' => 33, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1550583724-1255818c09d3?q=80&w=400', 'weight' => '500ml', 'brand' => 'Amul'],
    ['id' => '2', 'name' => 'Aashirvaad Shudh Atta', 'price' => 215, 'oldPrice' => 240, 'category' => 'Atta & Flours', 'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=400', 'weight' => '5kg', 'brand' => 'ITC', 'isOnSale' => true],
    ['id' => '3', 'name' => 'Alphonso Mangoes', 'price' => 699, 'category' => 'Fruits', 'image' => 'https://images.unsplash.com/photo-1553279768-865429fa0078?q=80&w=400', 'weight' => '6pcs', 'brand' => 'Farm Fresh', 'isOrganic' => true],
    ['id' => '4', 'name' => 'Maggi 2-Min Noodles', 'price' => 14, 'category' => 'Instant Food', 'image' => 'https://images.unsplash.com/photo-1612929633738-8fe44f7ec841?q=80&w=400', 'weight' => '70g', 'brand' => 'Nestle'],
    ['id' => '5', 'name' => 'Tata Tea Gold', 'price' => 165, 'category' => 'Tea & Coffee', 'image' => 'https://images.unsplash.com/photo-1544787210-2211d7c329d7?q=80&w=400', 'weight' => '250g', 'brand' => 'Tata'],
    ['id' => '6', 'name' => 'Organic Broccoli', 'price' => 89, 'category' => 'Vegetables', 'image' => 'https://images.unsplash.com/photo-1584270354949-c26b0d5b4a0c?q=80&w=400', 'weight' => '250g', 'brand' => 'Local', 'isOrganic' => true],
    ['id' => '7', 'name' => 'Mother Dairy Paneer', 'price' => 85, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1631452180519-c014fe946bc7?q=80&w=400', 'weight' => '200g', 'brand' => 'Mother Dairy'],
    ['id' => '8', 'name' => 'Catch Turmeric Powder', 'price' => 45, 'category' => 'Masala & Spices', 'image' => 'https://images.unsplash.com/photo-1615485290382-441e4d049cb5?q=80&w=400', 'weight' => '100g', 'brand' => 'Catch'],
    ['id' => '9', 'name' => 'Fresh Red Apples', 'price' => 149, 'oldPrice' => 179, 'category' => 'Fruits', 'image' => 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?q=80&w=400', 'weight' => '1kg', 'brand' => 'Kashmir', 'isOnSale' => true],
    ['id' => '10', 'name' => 'Amul Butter', 'price' => 56, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1589985270826-4b7bb135bc9d?q=80&w=400', 'weight' => '100g', 'brand' => 'Amul'],
    ['id' => '11', 'name' => 'Fresh Spinach', 'price' => 25, 'category' => 'Vegetables', 'image' => 'https://images.unsplash.com/photo-1576045057995-568f588f82fb?q=80&w=400', 'weight' => '250g', 'brand' => 'Local', 'isOrganic' => true],
    ['id' => '12', 'name' => 'Nescafe Classic', 'price' => 245, 'category' => 'Tea & Coffee', 'image' => 'https://images.unsplash.com/photo-1559496417-e7f25cb247f3?q=80&w=400', 'weight' => '200g', 'brand' => 'Nestle'],
    ['id' => '13', 'name' => 'MDH Garam Masala', 'price' => 75, 'category' => 'Masala & Spices', 'image' => 'https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=400', 'weight' => '100g', 'brand' => 'MDH'],
    ['id' => '14', 'name' => 'Fresh Bananas', 'price' => 45, 'category' => 'Fruits', 'image' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?q=80&w=400', 'weight' => '1 dozen', 'brand' => 'Farm Fresh'],
    ['id' => '15', 'name' => 'Amul Cheese Slices', 'price' => 120, 'category' => 'Dairy', 'image' => 'https://images.unsplash.com/photo-1486297678162-eb2a19b0a32d?q=80&w=400', 'weight' => '200g', 'brand' => 'Amul'],
    ['id' => '16', 'name' => 'Fresh Tomatoes', 'price' => 35, 'category' => 'Vegetables', 'image' => 'https://images.unsplash.com/photo-1546470427-f4f1d6c7e27e?q=80&w=400', 'weight' => '500g', 'brand' => 'Local'],
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
                'quantity' => 1
            ];
        }
        $msg = 'Added to basket!';
    }
    header('Location: ?page=home&msg=' . urlencode($msg));
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
</head>
<body>
    <div id="app-container">
        <div id="view-port">
            <?php include "pages/{$page}.php"; ?>
        </div>
        <?php if (in_array($page, ['home', 'explore', 'cart', 'rewards', 'profile'])): ?>
        <nav class="bottom-nav">
            <a href="?page=home" class="nav-item <?= $page === 'home' ? 'active' : '' ?>">
                <span class="material-symbols-outlined <?= $page === 'home' ? 'filled' : '' ?>">home</span>
                <span class="nav-label">Home</span>
            </a>
            <a href="?page=explore" class="nav-item <?= $page === 'explore' ? 'active' : '' ?>">
                <span class="material-symbols-outlined <?= $page === 'explore' ? 'filled' : '' ?>">grid_view</span>
                <span class="nav-label">Explore</span>
            </a>
            <a href="?page=cart" class="nav-item <?= $page === 'cart' ? 'active' : '' ?>">
                <div class="cart-icon-wrapper">
                    <span class="material-symbols-outlined <?= $page === 'cart' ? 'filled' : '' ?>">shopping_basket</span>
                    <?php if ($cartCount > 0): ?><span class="cart-badge"><?= $cartCount ?></span><?php endif; ?>
                </div>
                <span class="nav-label">Cart</span>
            </a>
            <a href="?page=rewards" class="nav-item <?= $page === 'rewards' ? 'active' : '' ?>">
                <span class="material-symbols-outlined <?= $page === 'rewards' ? 'filled' : '' ?>">stars</span>
                <span class="nav-label">Coins</span>
            </a>
            <a href="?page=profile" class="nav-item <?= $page === 'profile' ? 'active' : '' ?>">
                <span class="material-symbols-outlined <?= $page === 'profile' ? 'filled' : '' ?>">person</span>
                <span class="nav-label">Profile</span>
            </a>
        </nav>
        <?php endif; ?>
    </div>
    <script src="app.js"></script>
</body>
</html>
