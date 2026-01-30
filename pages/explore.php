<?php
// Explore Page - Premium Search & Category Filtering
$search = isset($_GET['search']) ? $_GET['search'] : '';
$browseMode = ($category === 'All' && empty($search));

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
<div class="view-enter explore-page-v3" style="background: var(--bg-main); min-height: 100vh;">
    <!-- Neo-Premium Explore Header -->
    <header style="background: var(--bg-main); padding: 16px 16px 20px; position: sticky; top: 0; z-index: 1000; box-shadow: var(--shadow-sm); border-bottom: 1px solid var(--border-subtle);">
         <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
             <div style="display: flex; align-items: center; gap: 14px;">
                 <?php if (!$browseMode): ?>
                 <button class="icon-btn-v3" onclick="location.href='?page=explore'" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                    <span class="material-symbols-outlined" style="font-size: 24px; color: var(--text-primary);">chevron_left</span>
                 </button>
                 <?php endif; ?>
                 <div>
                    <h1 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;"><?= $browseMode ? 'Shop by Category' : ($search ? 'Results' : $category) ?></h1>
                    <?php if (!$browseMode && $search): ?><p style="font-size: 11px; color: var(--text-muted); font-weight: 700; margin-top: 2px;">Searching for "<?= htmlspecialchars($search) ?>"</p><?php endif; ?>
                 </div>
             </div>
             <div style="display: flex; gap: 10px;">
                <button class="icon-btn-v3" onclick="toggleTheme()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                    <span class="material-symbols-outlined light-icon" style="color: var(--text-primary);">dark_mode</span>
                    <span class="material-symbols-outlined dark-icon" style="color: var(--text-primary);">light_mode</span>
                </button>
                <button class="icon-btn-v3" onclick="toggleNotifications()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                    <span class="material-symbols-outlined" style="color: var(--text-primary);">notifications</span>
                </button>
             </div>
         </div>
         <form action="index.php" method="GET" class="search-bar-v3" style="background: var(--bg-secondary); border-radius: 16px; height: 52px; display: flex; align-items: center; padding: 0 16px; gap: 12px; border: 1px solid var(--border-subtle);">
            <input type="hidden" name="page" value="explore">
            <span class="material-symbols-outlined" style="color: var(--brand-primary); font-size: 22px;">search</span>
            <input type="text" name="search" placeholder="Search for bread, jam, fruits..." value="<?= htmlspecialchars($search) ?>" autocomplete="off" style="flex: 1; background: none; border: none; outline: none; font-size: 15px; font-weight: 700; color: var(--text-primary);">
         </form>
    </header>

     <main style="padding: 24px 16px;">
         <?php if ($browseMode): ?>
         <!-- Browse Mode Category Grid -->
         <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px 12px; padding-bottom: 120px;">
            <?php
            $depts = [
                ['n' => 'Dairy', 'i' => '🥛', 'bg' => 'var(--cat-dairy)', 'id' => 'Dairy'],
                ['n' => 'Fruits', 'i' => '🍎', 'bg' => 'var(--cat-fruits)', 'id' => 'Fruits'],
                ['n' => 'Veggies', 'i' => '🥦', 'bg' => 'var(--cat-veggies)', 'id' => 'Vegetables'],
                ['n' => 'Snacks', 'i' => '🍪', 'bg' => 'var(--cat-snacks)', 'id' => 'Instant Food'],
                ['n' => 'Atta', 'i' => '🌾', 'bg' => 'var(--cat-atta)', 'id' => 'Atta & Flours'],
                ['n' => 'Spices', 'i' => '🌶️', 'bg' => 'var(--cat-spices)', 'id' => 'Masala & Spices'],
                ['n' => 'Brew', 'i' => '☕', 'bg' => 'var(--cat-tea)', 'id' => 'Tea & Coffee'],
                ['n' => 'Frozen', 'i' => '🧊', 'bg' => 'var(--cat-frozen)', 'id' => 'Dairy'],
            ];
            foreach ($depts as $d): ?>
            <a href="?page=explore&category=<?= urlencode($d['id']) ?>" style="text-decoration: none; display: flex; flex-direction: column; align-items: center; gap: 10px;">
                <div style="width: 100%; aspect-ratio: 1; background: <?= $d['bg'] ?>; border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 30px; border: 1.5px solid var(--bg-main); box-shadow: var(--shadow-sm); transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    <?= $d['i'] ?>
                </div>
                <span style="font-size: 11px; font-weight: 850; color: var(--text-primary); text-align: center; line-height: 1.2;"><?= $d['n'] ?></span>
            </a>
            <?php endforeach; ?>
         </div>
         <?php else: ?>
         <!-- Product Grid Results -->
         <?php if (empty($filteredProducts)): ?>
         <div style="text-align: center; padding: 100px 20px;">
            <div style="width: 120px; height: 120px; background: var(--bg-secondary); border-radius: 44px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; border: 2px solid var(--border-subtle);">
                <span class="material-symbols-outlined" style="font-size: 54px; color: var(--text-muted); opacity: 0.5;">search_off</span>
            </div>
            <h3 style="font-size: 22px; font-weight: 900; color: var(--text-primary); letter-spacing: -0.01em;">No results found</h3>
            <p style="color: var(--text-secondary); font-size: 14px; margin-top: 12px; font-weight: 600; line-height: 1.5; padding: 0 20px;">We couldn't find exactly what you're looking for. Try a different term or browse categories.</p>
            <button onclick="location.href='?page=explore'" style="margin-top: 32px; height: 50px; padding: 0 32px; background: var(--brand-primary); color: #fff; border: none; border-radius: 16px; font-weight: 850; font-size: 14px; box-shadow: var(--shadow-md);">Explore All Categories</button>
         </div>
         <?php else: ?>
         <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; padding-bottom: 120px;">
            <?php foreach ($filteredProducts as $item): ?>
            <?php 
                $isFav = in_array($item['id'], $_SESSION['favorites']); 
                $deliveryTime = rand(8, 15) . " MINS";
            ?>
            <div class="product-card-v3">
                <div class="delivery-time-badge">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">timer</span>
                    <?= $deliveryTime ?>
                </div>
                <button class="fav-btn-v3 <?= $isFav ? 'active' : '' ?>" onclick="location.href='?action=toggle_favorite&id=<?= $item['id'] ?>'">
                    <span class="material-symbols-outlined <?= $isFav ? 'filled' : '' ?>" style="font-size: 18px;">favorite</span>
                </button>
                <div class="product-img-v3" onclick="location.href='?page=product&id=<?= $item['id'] ?>'">
                    <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                </div>
                <div class="product-title-v3"><?= $item['name'] ?></div>
                <div class="product-weight-v3"><?= $item['weight'] ?></div>
                <div class="product-footer-v3">
                    <div class="price-container-v3">
                        <span class="price-current">₹<?= $item['price'] ?></span>
                        <?php if (isset($item['oldPrice'])): ?>
                            <span class="price-old">₹<?= $item['oldPrice'] ?></span>
                        <?php endif; ?>
                    </div>
                    <button class="add-btn-v3" onclick="location.href='?action=add_cart&id=<?= $item['id'] ?>'">ADD</button>
                </div>
            </div>
            <?php endforeach; ?>
         </div>
         <?php endif; ?>
         <?php endif; ?>
     </main>
</div>


