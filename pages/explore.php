<?php
// Explore Page - Premium Search & Category Filtering (Indian Localization)

$search = isset($_GET['search']) ? $_GET['search'] : '';
$browseMode = ($category === 'All' && empty($search));

$departments = [
    ['name' => 'Dairy, Bread & Eggs', 'id_name' => 'Dairy', 'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB4Y-vofCH2X572FGp6jP9KQiAs1atxVzNOlbrOsT4PFYJqQv-Gm5ST8jHlsbVHNJWOY9_uuISNU8KildHjYKb58_nQ0cmxsvHcmutH1ABmgI_0wi1_dThRXBQnkFQ1ybpS5iJ_E5NCATn1RV_4-huhUa9D2eJVPFSp-SxGCW7-GFJovOsVRszhFNJcaOEhHL4XIxuYcOAoB7pGwO-HxZGN7lCdPo7EFUFIFQhLyEamEXseGcw359AO8ayHIvN8ty7ihE0qLbVnCG_s', 'color' => '#EDF7FC'],
    ['name' => 'Vegetables & Fruits', 'id_name' => 'Vegetables', 'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDaZGPeNO240DmeZgwPTbu2Dzk24eU-2JsKrLrmjfwvZCmcr3jtlAaNzNGwA93kKmu1et2I0MJMyGICn__ZwTZL9xvZ8l2XQReSiG6ERAnfy4jdCn6-7pRjkvt7eBdBJvMLYi2BFy6Or4gvILHfwk4yetzoYB-WDBVafzvnqgnYiHbsVQD4tS1e8BBm98TSwIAMb-yHKtS2QaZnosDlh-Bb024hw2FBNdgq8Y_38IKzf1_W4TXiCd0J0zg393fHetZh6QkxrP7FI1Ln', 'color' => '#EBF9F1'],
    ['name' => 'Atta, Rice & Dal', 'id_name' => 'Atta & Flours', 'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=200', 'color' => '#FDE8E4'],
    ['name' => 'Masala & Spices', 'id_name' => 'Masala & Spices', 'image' => 'https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=400', 'color' => '#F4EBF7'],
    ['name' => 'Tea, Coffee & More', 'id_name' => 'Tea & Coffee', 'image' => 'https://images.unsplash.com/photo-1544787210-2211d7c329d7?q=80&w=400', 'color' => '#FFF6EE'],
    ['name' => 'Snacks & Munchies', 'id_name' => 'Instant Food', 'image' => 'https://images.unsplash.com/photo-1612929633738-8fe44f7ec841?q=80&w=400', 'color' => '#FFF9E5'],
];

// Handle search filtering
if (!empty($search)) {
    $filteredProducts = array_filter($products, function($p) use ($search) {
        return stripos($p['name'], $search) !== false || stripos($p['category'], $search) !== false || stripos($p['brand'], $search) !== false;
    });
} else if ($category !== 'All') {
    $filteredProducts = array_filter($products, function($p) use ($category) {
        return $p['category'] === $category;
    });
}
?>
<div class="view-enter explore-page-v3">
    <header class="home-header-v3">
         <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
             <?php if (!$browseMode): ?>
             <button class="icon-btn-v3 glass" onclick="location.href='?page=explore'">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <?php else: ?>
             <div style="width: 44px;"></div>
             <?php endif; ?>
             <h1 style="font-size: 20px; font-weight: 800;"><?= $browseMode ? 'Find Products' : ($search ? 'Search Results' : $category) ?></h1>
             <button class="icon-btn-v3 glass theme-toggle-btn" onclick="toggleTheme()" style="position: relative;">
                <span class="material-symbols-outlined dark-icon" style="display: none;">dark_mode</span>
                <span class="material-symbols-outlined light-icon">light_mode</span>
             </button>
         </div>
         <form action="index.php" method="GET" class="search-bar-v3">
            <input type="hidden" name="page" value="explore">
            <span class="material-symbols-outlined">search</span>
            <input type="text" name="search" placeholder="Search for 'bread', 'chips'..." value="<?= htmlspecialchars($search) ?>" autocomplete="off">
        </form>
    </header>

    <main style="padding: 24px;">
        <?php if ($browseMode): ?>
        <!-- Departments Grid -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; padding-bottom: 120px;">
            <?php foreach ($departments as $dept): ?>
            <a href="?page=explore&category=<?= urlencode($dept['id_name']) ?>" style="text-decoration: none;">
                <div style="background: <?= $dept['color'] ?>; border: 1px solid rgba(0,0,0,0.05); border-radius: var(--radius-xl); padding: 24px; height: 180px; display: flex; flex-direction: column; align-items: center; justify-content: space-between; transition: transform 0.2s;" onmouseover="this.style.transform='scale(0.98)'" onmouseout="this.style.transform='scale(1)'">
                    <div style="width: 100px; height: 80px;">
                        <img src="<?= $dept['image'] ?>" alt="<?= $dept['name'] ?>" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h4 style="color: #0E1B13; font-size: 15px; font-weight: 800; text-align: center; line-height: 1.2;"><?= $dept['name'] ?></h4>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <!-- Filtered Product Results -->
        <?php if (empty($filteredProducts)): ?>
        <div style="text-align: center; padding: 60px 20px;">
            <div style="width: 80px; height: 80px; background: var(--bg-secondary); border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px;">
                <span class="material-symbols-outlined" style="font-size: 40px; color: var(--text-muted); opacity: 0.5;">search_off</span>
            </div>
            <h3 style="font-size: 18px; font-weight: 800;">No products found</h3>
            <p style="color: var(--text-muted); font-size: 14px; margin-top: 8px;">Try searching for something else like "milk" or "maggi".</p>
        </div>
        <?php else: ?>
        <div class="best-seller-grid-v3" style="padding: 0 0 120px;">
            <?php foreach ($filteredProducts as $product): ?>
            <?php $isFav = in_array($product['id'], $_SESSION['favorites']); ?>
            <div class="product-card-v3">
                <div class="product-img-v3 glass" onclick="location.href='?page=product&id=<?= $product['id'] ?>'" style="cursor: pointer;">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=400';">
                    <button class="fav-btn-v3 <?= $isFav ? 'active' : '' ?>" onclick="event.stopPropagation(); location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                        <span class="material-symbols-outlined <?= $isFav ? 'filled' : '' ?>" style="font-size: 20px;"><?= $isFav ? 'favorite' : 'favorite' ?></span>
                    </button>
                </div>
                <div class="product-meta-v3" style="padding: 8px 4px 0;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em;"><?= $product['category'] ?></span>
                    <h4 style="font-size: 15px; font-weight: 800; margin-bottom: 8px; line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $product['name'] ?></h4>
                    <div class="product-footer-v3">
                        <div style="display: flex; flex-direction: column;">
                            <span class="price" style="font-size: 18px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">₹<?= $product['price'] ?></span>
                            <span style="font-size: 11px; color: var(--text-muted); font-weight: 850; text-transform: uppercase;"><?= $product['weight'] ?></span>
                        </div>
                        <button class="add-btn-v3" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">
                            <span class="material-symbols-outlined" style="font-weight: 950; font-size: 24px;">shopping_basket</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </main>
</div>
