<?php
// Product Detail Page - Indian Localization
$product = null;
if ($productId) {
    $product = getProductById($products, $productId);
}
if (!$product) {
    $product = $products[0]; // Fallback to first product
}
$isFavorite = in_array($product['id'], $_SESSION['favorites']);

// Check if already in cart to show current qty
$currentQty = 0;
foreach($_SESSION['cart'] as $item) {
    if ($item['id'] === $product['id']) {
        $currentQty = $item['quantity'];
        break;
    }
}
?>
<div class="view-enter product-detail-v3" style="background: var(--bg-main);">
    <header class="home-header-v3" style="background: transparent; position: absolute; width: 100%; border: none; z-index: 10;">
        <div class="header-top-row stagger-1">
            <button class="icon-btn-v3 glass" onclick="history.back()">
                <span class="material-symbols-outlined">arrow_back_ios</span>
            </button>
            <button class="icon-btn-v3 glass" onclick="location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                <span class="material-symbols-outlined <?= $isFavorite ? 'filled' : '' ?>" style="color: <?= $isFavorite ? 'var(--primary)' : 'inherit' ?>;">favorite</span>
            </button>
        </div>
    </header>

    <div class="detail-img-v3-container stagger-1" style="background: var(--bg-secondary);">
        <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 80%; height: 80%; object-fit: contain; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.1));" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=400';">
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 80px; background: linear-gradient(0deg, var(--bg-main) 0%, transparent 100%);"></div>
    </div>

    <main class="stagger-2" style="padding: 24px; padding-bottom: 140px; position: relative; margin-top: -30px; background: var(--bg-main); border-radius: 40px 40px 0 0;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <div style="flex: 1;">
                <span class="glass-pill-badge" style="background: var(--primary-light); color: var(--primary); font-weight: 900;"><?= $product['isOrganic'] ? '🌱 ORGANIC PROTOCOL' : ($product['brand'] ?? 'PREMIUM SELECTION') ?></span>
                <h1 style="font-size: 28px; font-weight: 950; margin-top: 16px; line-height: 1.1; letter-spacing: -0.03em;"><?= htmlspecialchars($product['name']) ?></h1>
                <p style="color: var(--text-muted); font-size: 15px; font-weight: 700; margin-top: 8px;"><?= $product['weight'] ?> • Batch #FG-<?= rand(100,999) ?></p>
            </div>
            <div style="text-align: right; margin-left: 16px;">
                 <p style="font-size: 28px; font-weight: 950; color: var(--primary); letter-spacing: -0.01em;">₹<?= $product['price'] ?></p>
                 <p style="font-size: 12px; color: var(--text-muted); font-weight: 800; text-decoration: line-through; margin-top: 4px;">MRP ₹<?= round($product['price'] * 1.25) ?></p>
            </div>
        </div>

        <div style="margin-top: 32px;">
            <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 20px;">Unit Configuration</p>
            <div style="display: flex; gap: 14px; overflow-x: auto; padding-bottom: 4px;" class="no-scrollbar">
                <div class="weight-pill-v3 active" style="min-width: 100px; text-align: center; border-radius: 18px; height: 52px; display: flex; align-items: center; justify-content: center; font-weight: 900;"><?= $product['weight'] ?></div>
                <div class="weight-pill-v3" style="min-width: 100px; text-align: center; border-radius: 18px; height: 52px; display: flex; align-items: center; justify-content: center; font-weight: 900; background: var(--bg-secondary);">Multipack</div>
                <div class="weight-pill-v3" style="min-width: 100px; text-align: center; border-radius: 18px; height: 52px; display: flex; align-items: center; justify-content: center; font-weight: 900; background: var(--bg-secondary);">Bulk Size</div>
            </div>
        </div>

        <div style="margin-top: 32px;">
            <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 14px;">Product Intel</p>
            <p style="font-size: 15px; line-height: 1.6; color: var(--text-muted); font-weight: 700;">
                Engineered for freshness. Our <?= htmlspecialchars($product['name']) ?> undergoes rigorous quality protocols to ensure 100% nutrient retention and authentic taste.
            </p>
        </div>

        <!-- Nutrient Bento -->
        <div style="margin-top: 32px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 36px; padding: 28px; box-shadow: var(--shadow-sm);">
             <div style="display: flex; justify-content: space-between; margin-bottom: 24px; align-items: center;">
                 <h4 style="font-size: 16px; font-weight: 900;">Nutritional Matrix</h4>
                 <span style="font-size: 10px; font-weight: 950; color: var(--text-muted); text-transform: uppercase;">Per 100g serving</span>
             </div>
             <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">
                 <?php 
                 $nuts = [['v'=>'52', 'l'=>'CAL'], ['v'=>'0.3g', 'l'=>'FAT'], ['v'=>'14g', 'l'=>'CARB'], ['v'=>'1.1g', 'l'=>'PRO']];
                 foreach($nuts as $n): ?>
                 <div style="text-align: center; background: var(--bg-main); padding: 12px 4px; border-radius: 16px; border: 1px solid var(--border-color);">
                     <p style="font-size: 16px; font-weight: 950; color: var(--text-primary);"><?= $n['v'] ?></p>
                     <p style="font-size: 8px; font-weight: 950; color: var(--primary); text-transform: uppercase; margin-top: 6px; letter-spacing: 0.1em;"><?= $n['l'] ?></p>
                 </div>
                 <?php endforeach; ?>
             </div>
        </div>
    </main>

    <footer style="position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); width: 100%; max-width: 430px; padding: 24px 24px 40px; background: linear-gradient(0deg, var(--bg-main) 80%, transparent 100%); z-index: 100;">
        <div style="display: flex; gap: 16px;">
            <?php if($currentQty > 0): ?>
            <div style="display: flex; align-items: center; background: var(--bg-secondary); border: 2.3px solid var(--primary); border-radius: 20px; padding: 0 4px; height: 68px; box-shadow: var(--neon-shadow);">
                <button onclick="location.href='?action=update_cart&id=<?= $product['id'] ?>&delta=-1'" style="border: none; background: none; font-size: 26px; font-weight: 950; width: 50px; cursor: pointer; color: var(--text-primary);">-</button>
                <span style="font-size: 20px; font-weight: 950; width: 30px; text-align: center;"><?= $currentQty ?></span>
                <button onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'" style="border: none; background: none; font-size: 26px; font-weight: 950; width: 50px; color: var(--primary); cursor: pointer;">+</button>
            </div>
            <?php else: ?>
            <button onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>&msg=Added to your basket!'" class="neon-btn" style="flex: 1; height: 68px; background: var(--primary); color: #000; border: none; border-radius: 20px; font-size: 18px; font-weight: 950; cursor: pointer; box-shadow: var(--neon-shadow);">
                ADD TO BASKET
            </button>
            <?php endif; ?>
        </div>
    </footer>
</div>
