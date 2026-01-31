<?php
// Product Detail Page - FreshGo Unique Identity
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
<div class="view-enter product-detail-v3" style="background: var(--bg-secondary); min-height: 100vh;">
    <!-- Neo-Premium Product Header -->
    <header style="padding: 16px; position: fixed; top: 0; left: 50%; transform: translateX(-50%); width: 100%; max-width: 430px; display: flex; justify-content: space-between; z-index: 1000; gap: 8px;">
        <button onclick="history.back()" style="width: 44px; height: 44px; border-radius: 14px; background: rgba(255,255,255,0.7); backdrop-filter: blur(20px); border: 1.5px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-sm);">
            <i data-lucide="chevron-left" style="color: #000; width: 24px; height: 24px;"></i>
        </button>
        <div style="display: flex; gap: 10px;">
            <button class="icon-btn-v3" onclick="toggleTheme()" style="width: 44px; height: 44px; border-radius: 14px; background: rgba(255,255,255,0.7); backdrop-filter: blur(20px); border: 1.5px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-sm);">
                <i data-lucide="moon" class="light-icon" style="color: #000; width: 22px; height: 22px;"></i>
                <i data-lucide="sun" class="dark-icon" style="color: #000; width: 22px; height: 22px;"></i>
            </button>
            <button onclick="location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'" style="width: 44px; height: 44px; border-radius: 14px; background: rgba(255,255,255,0.7); backdrop-filter: blur(20px); border: 1.5px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-sm);">
                <i data-lucide="heart" style="color: <?= $isFavorite ? '#FF4D4F' : '#000' ?>; width: 22px; height: 22px; <?= $isFavorite ? 'fill: #FF4D4F;' : '' ?>"></i>
            </button>
        </div>
    </header>

    <!-- Product Image Showcase -->
    <div style="width: 100%; height: 440px; background: #fff; border-radius: 0 0 48px 48px; display: flex; align-items: center; justify-content: center; padding: 48px; position: relative; box-shadow: var(--shadow-md);">
        <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100%; height: 100%; object-fit: contain; filter: drop-shadow(0 24px 48px rgba(0,0,0,0.1));">
        
        <!-- Premium Badge Overlay -->
        <div style="position: absolute; bottom: 32px; right: 24px; background: var(--brand-secondary); color: #fff; padding: 12px 20px; border-radius: 16px; display: flex; align-items: center; gap: 10px; box-shadow: var(--shadow-lg);">
             <div style="width: 24px; height: 24px; background: var(--brand-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                 <i data-lucide="check-circle" style="width: 14px; height: 14px; color: #000;"></i>
             </div>
             <div style="display: flex; flex-direction: column;">
                 <span style="font-size: 9px; font-weight: 850; text-transform: uppercase; color: var(--brand-primary); letter-spacing: 0.05em;">Fresh Certified</span>
                 <span style="font-size: 11px; font-weight: 800;">100% Quality</span>
             </div>
        </div>
    </div>

    <main style="padding: 32px 20px 160px;">
        <div style="background: var(--bg-tile); border-radius: 32px; padding: 28px; box-shadow: var(--shadow-sm); border: 1px solid var(--border-color);">
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div style="flex: 1;">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                        <span style="font-size: 10px; font-weight: 900; background: var(--brand-primary-light); color: var(--brand-primary); padding: 4px 10px; border-radius: 6px; text-transform: uppercase;"><?= $product['category'] ?></span>
                        <div style="width: 4px; height: 4px; background: var(--border-subtle); border-radius: 50%;"></div>
                        <span style="font-size: 11px; color: var(--brand-primary); font-weight: 850;">In Stock</span>
                    </div>
                    <h1 style="font-size: 26px; font-weight: 950; color: var(--text-primary); line-height: 1.2; letter-spacing: -0.02em;"><?= htmlspecialchars($product['name']) ?></h1>
                    <p style="font-size: 14px; color: var(--text-secondary); font-weight: 700; margin-top: 4px;"><?= $product['weight'] ?></p>
                </div>
                <div style="text-align: right;">
                    <div style="background: var(--bg-secondary); padding: 6px 14px; border-radius: 12px; font-size: 12px; font-weight: 900; color: var(--text-primary); border: 1px solid var(--border-subtle);">
                         4.8 <i data-lucide="star" style="width: 14px; height: 14px; color: #FFCC00; fill: #FFCC00; vertical-align: middle;"></i>
                    </div>
                </div>
            </div>
            
            <div style="display: flex; align-items: center; gap: 14px; margin-top: 28px;">
                <h2 style="font-size: 32px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.02em;">₹<?= $product['price'] ?></h2>
                <div style="display: flex; flex-direction: column;">
                    <span style="font-size: 14px; color: var(--text-muted); text-decoration: line-through; font-weight: 700; line-height: 1;">₹<?= round($product['price'] * 1.25) ?></span>
                    <span style="color: #FF3B89; font-size: 11px; font-weight: 900; margin-top: 2px; text-transform: uppercase;">Save 25% Off</span>
                </div>
            </div>
        </div>

        <!-- Neo-Trust Badges -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 24px;">
            <div style="background: var(--bg-tile); border-radius: 20px; padding: 18px; border: 1px solid var(--border-color); display: flex; flex-direction: column; align-items: center; text-align: center; gap: 10px; box-shadow: var(--shadow-sm);">
                 <div style="width: 44px; height: 44px; background: var(--cat-veggies); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="leaf" style="color: var(--brand-primary); width: 24px; height: 24px;"></i>
                 </div>
                 <span style="font-size: 11px; font-weight: 850; color: var(--text-primary); line-height: 1.2;">100%<br>Organic</span>
            </div>
            <div style="background: var(--bg-tile); border-radius: 20px; padding: 18px; border: 1px solid var(--border-color); display: flex; flex-direction: column; align-items: center; text-align: center; gap: 10px; box-shadow: var(--shadow-sm);">
                 <div style="width: 44px; height: 44px; background: var(--cat-fruits); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="zap" style="color: #FF844B; width: 24px; height: 24px;"></i>
                 </div>
                 <span style="font-size: 11px; font-weight: 850; color: var(--text-primary); line-height: 1.2;">10 Min<br>Delivery</span>
            </div>
            <div style="background: var(--bg-tile); border-radius: 20px; padding: 18px; border: 1px solid var(--border-color); display: flex; flex-direction: column; align-items: center; text-align: center; gap: 10px; box-shadow: var(--shadow-sm);">
                 <div style="width: 44px; height: 44px; background: var(--cat-dairy); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="shield-check" style="color: #3B71FE; width: 26px; height: 26px;"></i>
                 </div>
                 <span style="font-size: 11px; font-weight: 850; color: var(--text-primary); line-height: 1.2;">Secure<br>Checkout</span>
            </div>
        </div>

        <div style="margin-top: 40px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 16px;">
                <h3 style="font-size: 18px; font-weight: 900; color: var(--text-primary); letter-spacing: -0.01em;">Specifications</h3>
                <div style="flex: 1; height: 1.5px; background: var(--border-subtle);"></div>
            </div>
            <div style="background: var(--bg-tile); border-radius: 28px; padding: 24px; border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
                <div style="display: flex; justify-content: space-between; padding-bottom: 14px; border-bottom: 1px solid var(--border-subtle);">
                    <span style="font-size: 14px; color: var(--text-secondary); font-weight: 700;">Brand</span>
                    <span style="font-size: 14px; color: var(--text-primary); font-weight: 850;"><?= $product['brand'] ?></span>
                </div>
                <div style="display: flex; flex-direction: column; gap: 6px; padding-top: 14px;">
                    <span style="font-size: 14px; color: var(--text-secondary); font-weight: 700;">Description</span>
                    <p style="font-size: 13px; color: var(--text-secondary); line-height: 1.7; font-weight: 600;">Authentic, premium grade <?= htmlspecialchars($product['name']) ?> meticulously selected for quality. Rich in nutrients and delivered fresh to your doorstep within minutes.</p>
                </div>
            </div>
        </div>
        <div style="margin-top: 48px; border-top: 1px solid var(--border-subtle); padding-top: 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 900; color: var(--text-primary); letter-spacing: -0.01em;">You might also like</h3>
                <button onclick="location.href='?page=explore&category=<?= urlencode($product['category']) ?>'" style="background: none; border: none; font-size: 13px; font-weight: 850; color: var(--brand-primary);">View Category</button>
            </div>
            <div class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding-bottom: 8px;">
                <?php 
                $similar = array_values(array_filter($products, function($p) use ($product) {
                    return $p['category'] === $product['category'] && $p['id'] !== $product['id'];
                }));
                foreach (array_slice($similar, 0, 6) as $sim): ?>
                <div class="product-card-v3" style="min-width: 150px; max-width: 150px; padding: 12px;">
                    <div class="product-img-v3" style="height: 110px; margin-bottom: 8px;" onclick="location.href='?page=product&id=<?= $sim['id'] ?>'">
                        <img src="<?= $sim['image'] ?>" alt="<?= $sim['name'] ?>" style="width: 80%; height: 80%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 12px; height: 32px; overflow: hidden;"><?= $sim['name'] ?></div>
                    <div class="product-footer-v3">
                        <span class="price-current" style="font-size: 13px;">₹<?= $sim['price'] ?></span>
                        <button class="add-btn-v3" style="width: 28px; height: 28px; border-radius: 8px;" onclick="location.href='?action=add_cart&id=<?= $sim['id'] ?>'">+</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <!-- Floating Neo-Action Island -->
    <footer style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); width: calc(100% - 32px); max-width: 400px; background: var(--brand-secondary); border-radius: 24px; padding: 18px 24px; z-index: 1000; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-premium); border: 1px solid rgba(255,255,255,0.05);">
        <div style="display: flex; flex-direction: column;">
            <span style="font-size: 22px; font-weight: 950; color: #fff; letter-spacing: -0.01em;">₹<?= $product['price'] ?></span>
            <span style="font-size: 10px; font-weight: 850; color: var(--brand-primary); text-transform: uppercase; letter-spacing: 0.08em;">Best Price Guaranteed</span>
        </div>
        
        <?php if($currentQty > 0): ?>
        <div style="display: flex; align-items: center; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); border-radius: 20px; padding: 4px; width: 140px;">
            <button onclick="location.href='?action=update_cart&id=<?= $product['id'] ?>&delta=-1'" style="flex: 1; height: 48px; background: none; border: none; color: #fff; font-weight: 950; font-size: 24px;">-</button>
            <span style="color: #fff; font-weight: 900; width: 34px; text-align: center; font-size: 18px;"><?= $currentQty ?></span>
            <button onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'" style="flex: 1; height: 48px; background: none; border: none; color: #fff; font-weight: 950; font-size: 24px;">+</button>
        </div>
        <?php else: ?>
        <button onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'" style="background: var(--brand-primary); color: #000; border: none; border-radius: 20px; padding: 14px 28px; font-size: 14px; font-weight: 950; text-transform: uppercase; display: flex; align-items: center; gap: 10px; box-shadow: 0 8px 24px rgba(21, 209, 112, 0.3);">
            <i data-lucide="shopping-cart" style="width: 20px; height: 20px; fill: #000;"></i>
            Add to Basket
        </button>
        <?php endif; ?>
    </footer>
</div>


