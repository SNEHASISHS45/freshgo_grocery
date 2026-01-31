<?php
session_start();

// Initialize session data
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if (!isset($_SESSION['favorites'])) $_SESSION['favorites'] = [];

// Products data
// Products data - Comprehensive Catalog
$products = [
    // Fruits & Vegetables
    ['id' => '1', 'name' => 'Organic Alphonso Mangoes', 'price' => 599, 'category' => 'Fruits & Vegetables', 'image' => 'assets/organic_mangoes.png', 'weight' => '1kg', 'brand' => 'Farm Fresh', 'isOrganic' => true],
    ['id' => '2', 'name' => 'Kashmiri Red Apples', 'price' => 180, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fruits_veg_hero.png', 'weight' => '1kg', 'brand' => 'Kashmir Orchards'],
    ['id' => '3', 'name' => 'Robusta Bananas', 'price' => 45, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fruits_veg_hero.png', 'weight' => '1 dozen', 'brand' => 'Local'],
    ['id' => '4', 'name' => 'Fresh Organic Broccoli', 'price' => 85, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fruits_veg_hero.png', 'weight' => '250g', 'brand' => 'Nature\'s Best', 'isOrganic' => true],
    ['id' => '5', 'name' => 'Hybrid Tomatoes', 'price' => 32, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fresh_tomatoes.png', 'weight' => '500g', 'brand' => 'Farm Direct'],
    ['id' => '6', 'name' => 'Sweet American Corn', 'price' => 40, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fruits_veg_hero.png', 'weight' => '2pcs', 'brand' => 'Farm Fresh'],
    ['id' => '7', 'name' => 'Fresh Palak (Spinach)', 'price' => 22, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fruits_veg_hero.png', 'weight' => '250g', 'brand' => 'Local'],
    
    // Dairy & Bread
    ['id' => '8', 'name' => 'Amul Gold Full Cream Milk', 'price' => 33, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '500ml', 'brand' => 'Amul'],
    ['id' => '9', 'name' => 'Mother Dairy Paneer', 'price' => 88, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '200g', 'brand' => 'Mother Dairy'],
    ['id' => '10', 'name' => 'Amul Salted Butter', 'price' => 56, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '100g', 'brand' => 'Amul'],
    ['id' => '11', 'name' => 'Amul Cheese Slices', 'price' => 135, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '200g', 'brand' => 'Amul'],
    ['id' => '12', 'name' => 'Epigamia Greek Yogurt', 'price' => 60, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '90g', 'brand' => 'Epigamia'],
    ['id' => '13', 'name' => 'Harvest Gold Brown Bread', 'price' => 45, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '400g', 'brand' => 'Harvest Gold'],
    
    // Atta, Rice & Dal
    ['id' => '14', 'name' => 'Aashirvaad Shudh Atta', 'price' => 225, 'category' => 'Atta, Rice & Dal', 'image' => 'assets/staples.png', 'weight' => '5kg', 'brand' => 'ITC'],
    ['id' => '15', 'name' => 'Daawat Rozana Basmati Rice', 'price' => 395, 'category' => 'Atta, Rice & Dal', 'image' => 'assets/staples.png', 'weight' => '5kg', 'brand' => 'Daawat'],
    ['id' => '16', 'name' => 'Tata Sampann Toor Dal', 'price' => 145, 'category' => 'Atta, Rice & Dal', 'image' => 'assets/staples.png', 'weight' => '1kg', 'brand' => 'Tata'],
    ['id' => '17', 'name' => 'Organic Kabuli Chana', 'price' => 120, 'category' => 'Atta, Rice & Dal', 'image' => 'assets/staples.png', 'weight' => '500g', 'brand' => 'Organic Tattva', 'isOrganic' => true],
    
    // Masala & Oil
    ['id' => '18', 'name' => 'Fortune Soya Health Oil', 'price' => 145, 'category' => 'Masala & Oil', 'image' => 'https://plus.unsplash.com/premium_photo-1671560020309-1736b0099451?q=80&w=400', 'weight' => '1L', 'brand' => 'Fortune'],
    ['id' => '19', 'name' => 'Catch Turmeric Powder', 'price' => 48, 'category' => 'Masala & Oil', 'image' => 'https://images.unsplash.com/photo-1615485290382-441e4d049cb5?q=80&w=400', 'weight' => '100g', 'brand' => 'Catch'],
    ['id' => '20', 'name' => 'MDH Garam Masala', 'price' => 78, 'category' => 'Masala & Oil', 'image' => 'https://images.unsplash.com/photo-1593395841927-11120e17300c?q=80&w=400', 'weight' => '100g', 'brand' => 'MDH'],
    ['id' => '21', 'name' => 'Tata Salt Vacuum Evaporated', 'price' => 28, 'category' => 'Masala & Oil', 'image' => 'https://images.unsplash.com/photo-1626197031507-c17099753214?q=80&w=400', 'weight' => '1kg', 'brand' => 'Tata'],
    
    // Snacks & Munchies
    ['id' => '22', 'name' => 'Lay\'s Classic Salted Chips', 'price' => 20, 'category' => 'Snacks & Munchies', 'image' => 'assets/snacks_namkeen.png', 'weight' => '50g', 'brand' => 'PepsiCo'],
    ['id' => '23', 'name' => 'Haldiram\'s Alu Bhujia', 'price' => 45, 'category' => 'Snacks & Munchies', 'image' => 'assets/snacks_namkeen.png', 'weight' => '150g', 'brand' => 'Haldiram'],
    ['id' => '24', 'name' => 'Cadbury Dairy Milk Silk', 'price' => 80, 'category' => 'Snacks & Munchies', 'image' => 'assets/snacks_namkeen.png', 'weight' => '60g', 'brand' => 'Mondelez'],
    ['id' => '25', 'name' => 'Oreo Vanilla Creme Biscuits', 'price' => 30, 'category' => 'Snacks & Munchies', 'image' => 'assets/snacks_namkeen.png', 'weight' => '120g', 'brand' => 'Mondelez'],
    
    // Cold Drinks & Juices
    ['id' => '26', 'name' => 'Coca-Cola Zero Sugar', 'price' => 40, 'category' => 'Cold Drinks & Juices', 'image' => 'assets/energy_drinks_premium.png', 'weight' => '250ml', 'brand' => 'Coca-Cola'],
    ['id' => '27', 'name' => 'Paper Boat Aam Panna', 'price' => 35, 'category' => 'Cold Drinks & Juices', 'image' => 'assets/energy_drinks_premium.png', 'weight' => '200ml', 'brand' => 'Paper Boat'],
    ['id' => '28', 'name' => 'Red Bull Energy Drink', 'price' => 125, 'category' => 'Cold Drinks & Juices', 'image' => 'assets/energy_drinks_premium.png', 'weight' => '250ml', 'brand' => 'Red Bull'],
    ['id' => '29', 'name' => 'Tropicana 100% Orange Juice', 'price' => 110, 'category' => 'Cold Drinks & Juices', 'image' => 'assets/energy_drinks_premium.png', 'weight' => '1L', 'brand' => 'PepsiCo'],
    
    // Breakfast & Instant Food
    ['id' => '30', 'name' => 'Maggi Masala Noodles', 'price' => 14, 'category' => 'Breakfast & Instant Food', 'image' => 'https://plus.unsplash.com/premium_photo-1667054230230-01977e20b3df?q=80&w=400', 'weight' => '70g', 'brand' => 'Nestle'],
    ['id' => '31', 'name' => 'Kellogg\'s Corn Flakes', 'price' => 175, 'category' => 'Breakfast & Instant Food', 'image' => 'https://images.unsplash.com/photo-1594488737010-389f928e08d6?q=80&w=400', 'weight' => '475g', 'brand' => 'Kellogg\'s'],
    ['id' => '32', 'name' => 'Quaker Oats White Oats', 'price' => 199, 'category' => 'Breakfast & Instant Food', 'image' => 'https://images.unsplash.com/photo-1586444248902-2f64eddc13df?q=80&w=400', 'weight' => '1kg', 'brand' => 'PepsiCo'],
    ['id' => '33', 'name' => 'Kissan Mixed Fruit Jam', 'price' => 165, 'category' => 'Breakfast & Instant Food', 'image' => 'https://images.unsplash.com/photo-1563227812-0ea4c22e6cc8?q=80&w=400', 'weight' => '500g', 'brand' => 'HUL'],
    
    // Tea & Coffee
    ['id' => '34', 'name' => 'Tata Tea Gold Premium', 'price' => 165, 'category' => 'Tea & Coffee', 'image' => 'assets/roasted_coffee.png', 'weight' => '250g', 'brand' => 'Tata'],
    ['id' => '35', 'name' => 'Nescafe Classic Coffee', 'price' => 245, 'category' => 'Tea & Coffee', 'image' => 'assets/roasted_coffee.png', 'weight' => '200g', 'brand' => 'Nestle'],
    ['id' => '36', 'name' => 'Brooke Bond Red Label', 'price' => 140, 'category' => 'Tea & Coffee', 'image' => 'assets/roasted_coffee.png', 'weight' => '500g', 'brand' => 'HUL'],
    
    // Personal Care
    ['id' => '37', 'name' => 'Dove Cream Beauty Bar', 'price' => 65, 'category' => 'Personal Care', 'image' => 'assets/personal_care.png', 'weight' => '125g', 'brand' => 'Unilever'],
    ['id' => '38', 'name' => 'Head & Shoulders Shampoo', 'price' => 185, 'category' => 'Personal Care', 'image' => 'assets/personal_care.png', 'weight' => '180ml', 'brand' => 'P&G'],
    ['id' => '39', 'name' => 'Colgate MaxFresh Gel', 'price' => 95, 'category' => 'Personal Care', 'image' => 'assets/personal_care.png', 'weight' => '150g', 'brand' => 'Colgate-Palmolive'],
    
    // Household
    ['id' => '40', 'name' => 'Surf Excel Easy Wash', 'price' => 125, 'category' => 'Household', 'image' => 'https://images.unsplash.com/photo-1610557892470-55d9e80c0bce?q=80&w=400', 'weight' => '1kg', 'brand' => 'HUL'],
    ['id' => '41', 'name' => 'Vim Dishwash Gel Lemon', 'price' => 105, 'category' => 'Household', 'image' => 'https://images.unsplash.com/photo-1603501097261-c8ca0599dd9e?q=80&w=400', 'weight' => '500ml', 'brand' => 'HUL'],
    ['id' => '42', 'name' => 'Lizol Disinfectant Floor Cleaner', 'price' => 195, 'category' => 'Household', 'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=400', 'weight' => '1L', 'brand' => 'Reckitt'],
    ['id' => '43', 'name' => 'Harpic Power Plus', 'price' => 170, 'category' => 'Household', 'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=400', 'weight' => '750ml', 'brand' => 'Reckitt'],
    ['id' => '44', 'name' => 'Odonil Air Freshener', 'price' => 55, 'category' => 'Household', 'image' => 'https://images.unsplash.com/photo-1563453392212-326f5e854473?q=80&w=400', 'weight' => '50g', 'brand' => 'Dabur'],
    
    // Beverage Additions
    ['id' => '45', 'name' => 'Monster Energy Ultra', 'price' => 110, 'category' => 'Cold Drinks & Juices', 'image' => 'assets/energy_drinks_premium.png', 'weight' => '350ml', 'brand' => 'Monster'],
    ['id' => '46', 'name' => 'Sprite Lemon Lime Drink', 'price' => 45, 'category' => 'Cold Drinks & Juices', 'image' => 'assets/energy_drinks_premium.png', 'weight' => '750ml', 'brand' => 'Coca-Cola'],
    
    // Snack Additions
    ['id' => '47', 'name' => 'Kurkure Masala Munch', 'price' => 20, 'category' => 'Snacks & Munchies', 'image' => 'https://images.unsplash.com/photo-1621447509323-570a162dff96?q=80&w=400', 'weight' => '90g', 'brand' => 'PepsiCo'],
    ['id' => '48', 'name' => 'Bikano Navratan Mixture', 'price' => 50, 'category' => 'Snacks & Munchies', 'image' => 'https://images.unsplash.com/photo-1626132646501-f1f3a2157014?q=80&w=400', 'weight' => '200g', 'brand' => 'Bikano'],
    ['id' => '49', 'name' => 'Kinder Joy with Surprise', 'price' => 45, 'category' => 'Snacks & Munchies', 'image' => 'https://images.unsplash.com/photo-1587132131238-00566378415a?q=80&w=400', 'weight' => '20g', 'brand' => 'Ferrero'],
    
    // Exotic & Premium
    ['id' => '50', 'name' => 'Imported Dragon Fruit', 'price' => 120, 'category' => 'Fruits & Vegetables', 'image' => 'assets/exotic_fruits.png', 'weight' => '1pc', 'brand' => 'Exotic Farm', 'isPremium' => true],
    ['id' => '51', 'name' => 'Hass Avocados (Pack of 2)', 'price' => 299, 'category' => 'Fruits & Vegetables', 'image' => 'assets/exotic_fruits.png', 'weight' => '2pcs', 'brand' => 'Global Select', 'isPremium' => true],
    ['id' => '52', 'name' => 'Blueberries (Imported)', 'price' => 350, 'category' => 'Fruits & Vegetables', 'image' => 'assets/fruits_veg_hero.png', 'weight' => '125g', 'brand' => 'Berry Fresh', 'isPremium' => true],
    
    // Organic Additions
    ['id' => '53', 'name' => 'Organic Cold Pressed Mustard Oil', 'price' => 240, 'category' => 'Masala & Oil', 'image' => 'assets/staples.png', 'weight' => '500ml', 'brand' => 'Organic India', 'isOrganic' => true],
    ['id' => '54', 'name' => 'Organic Brown Eggs (6 pcs)', 'price' => 95, 'category' => 'Dairy & Bread', 'image' => 'assets/dairy_bread_hero.png', 'weight' => '6pcs', 'brand' => 'Free Range', 'isOrganic' => true],
    
    // Specialty Coffee
    ['id' => '55', 'name' => 'Blue Tokai Roasted Coffee', 'price' => 450, 'category' => 'Tea & Coffee', 'image' => 'assets/roasted_coffee.png', 'weight' => '250g', 'brand' => 'Blue Tokai', 'isPremium' => true],
];

$categories = ['All', 'Dairy & Bread', 'Fruits & Vegetables', 'Atta, Rice & Dal', 'Masala & Oil', 'Snacks & Munchies', 'Cold Drinks & Juices', 'Breakfast & Instant Food', 'Tea & Coffee', 'Personal Care', 'Household'];

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
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    
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
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="app_tweaks.css?v=<?= time() ?>">
    
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
    <!-- App-like Loading Progress -->
    <div id="app-progress"></div>

    <!-- Neo-Premium Skeleton Loader (Replaces Splash) -->
    <div id="skeleton-overlay">
        <!-- Header Skeleton -->
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; gap: 12px; align-items: center;">
                <div class="skeleton" style="width: 44px; height: 44px; border-radius: 14px;"></div>
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <div class="skeleton skeleton-title" style="width: 100px; height: 16px; margin: 0;"></div>
                    <div class="skeleton skeleton-text" style="width: 140px; height: 10px; margin: 0;"></div>
                </div>
            </div>
            <div style="display: flex; gap: 8px;">
                <div class="skeleton" style="width: 44px; height: 44px; border-radius: 14px;"></div>
                <div class="skeleton" style="width: 44px; height: 44px; border-radius: 14px;"></div>
            </div>
        </div>

        <!-- Banner Skeleton -->
        <div class="skeleton" style="width: 100%; height: 180px; border-radius: 28px;"></div>

        <!-- Categories Skeleton -->
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">
            <?php for($i=0; $i<8; $i++): ?>
            <div style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
                <div class="skeleton" style="width: 100%; aspect-ratio: 1; border-radius: 20px;"></div>
                <div class="skeleton skeleton-text" style="width: 80%; height: 8px;"></div>
            </div>
            <?php endfor; ?>
        </div>

        <!-- Grid Skeleton -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
            <?php for($i=0; $i<4; $i++): ?>
            <div style="background: var(--bg-tile); border-radius: 24px; padding: 12px; border: 1px solid var(--border-subtle);">
                <div class="skeleton skeleton-img" style="border-radius: 20px;"></div>
                <div class="skeleton skeleton-title" style="width: 90%;"></div>
                <div class="skeleton skeleton-text" style="width: 40%;"></div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div class="skeleton skeleton-title" style="width: 30%; height: 24px; margin: 0;"></div>
                    <div class="skeleton" style="width: 60px; height: 32px; border-radius: 8px;"></div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div id="app-container">
        <div id="view-port">
            <!-- Pull to Refresh Simulation -->
            <div id="pull-to-refresh">
                <i data-lucide="refresh-cw" class="refresh-icon"></i>
            </div>
            <?php include "pages/{$page}.php"; ?>
        </div>
        <?php if (in_array($page, ['home', 'explore', 'profile', 'orders', 'rewards'])): ?>
        <nav class="bottom-nav-fixed">
            <a href="?page=home" class="nav-item-v3 <?= $page === 'home' ? 'active' : '' ?>">
                <i data-lucide="home"></i>
                <span class="nav-label">Home</span>
                <span class="u-tooltip">Home View</span>
            </a>
            <a href="?page=explore" class="nav-item-v3 <?= $page === 'explore' ? 'active' : '' ?>">
                <i data-lucide="layout-grid"></i>
                <span class="nav-label">Explore</span>
                <span class="u-tooltip">Browse Items</span>
            </a>
            <a href="?page=cart" class="nav-item-v3 <?= $page === 'cart' ? 'active' : '' ?>">
                <div style="position: relative; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="shopping-basket"></i>
                    <?php if ($cartCount > 0): ?><span class="nav-badge-v3"><?= $cartCount ?></span><?php endif; ?>
                </div>
                <span class="nav-label">Cart</span>
                <span class="u-tooltip">My Basket</span>
            </a>
            <a href="?page=orders" class="nav-item-v3 <?= $page === 'orders' ? 'active' : '' ?>">
                <i data-lucide="receipt"></i>
                <span class="nav-label">Orders</span>
                <span class="u-tooltip">Order History</span>
            </a>
            <a href="?page=profile" class="nav-item-v3 <?= $page === 'profile' ? 'active' : '' ?>">
                <i data-lucide="user"></i>
                <span class="nav-label">Profile</span>
                <span class="u-tooltip">Account Hub</span>
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
                    <i data-lucide="x" style="width: 22px; height: 22px; color: var(--text-primary);"></i>
                </button>
            </header>
            <main class="no-scrollbar" style="flex: 1; overflow-y: auto; padding: 16px;">
                <div id="notifications-list" style="display: flex; flex-direction: column; gap: 12px;">
                    <!-- Notification Item -->
                    <div style="background: var(--bg-secondary); border-radius: 20px; padding: 16px; border: 1.5px solid var(--border-subtle); position: relative; overflow: hidden;">
                         <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--brand-primary);"></div>
                         <div style="display: flex; gap: 14px;">
                             <div style="width: 44px; height: 44px; background: var(--brand-primary-light); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--brand-primary);">
                                 <i data-lucide="truck" style="width: 20px; height: 20px; fill: currentColor;"></i>
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
                                 <i data-lucide="gift" style="width: 20px; height: 20px; fill: currentColor;"></i>
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
    <script>
        // Failsafe: Hide skeleton no matter what after 3.5s
        setTimeout(() => {
            const skeleton = document.getElementById('skeleton-overlay');
            if (skeleton && skeleton.style.display !== 'none') {
                console.warn("Failsafe: Force-hiding skeleton loader.");
                skeleton.style.opacity = '0';
                setTimeout(() => { 
                    skeleton.style.display = 'none';
                    if (typeof initGSAP === 'function') initGSAP();
                }, 500);
            }
        }, 3500);
    </script>
    <script src="app.js?v=<?= time() ?>"></script>
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
