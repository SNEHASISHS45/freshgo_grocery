<div class="view-enter favorites-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 850; letter-spacing: -0.01em;">Saved Items</h1>
             <div style="width: 44px;"></div>
         </div>
    </header>

    <?php
    $favoriteProducts = array_filter($products, function($p) {
        return in_array($p['id'], $_SESSION['favorites']);
    });
    ?>

    <main style="padding: 0 24px;">
        <?php if (empty($_SESSION['favorites'])): ?>
        <div class="stagger-2" style="text-align: center; padding: 100px 0;">
            <div style="width: 130px; height: 130px; background: var(--bg-secondary); border-radius: 44px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; border: 1px solid var(--border-color);">
                <span class="material-symbols-outlined filled" style="font-size: 64px; color: var(--red); opacity: 0.3;">favorite</span>
            </div>
            <h2 style="font-size: 24px; font-weight: 900; letter-spacing: -0.02em;">Archive Empty</h2>
            <p style="color: var(--text-muted); font-size: 15px; margin-top: 12px; font-weight: 700; line-height: 1.5;">Seal your favorites to see them <br>saved in the protocol.</p>
            <a href="?page=home" class="neon-btn" style="display: inline-flex; align-items: center; justify-content: center; margin-top: 40px; padding: 18px 40px; background: var(--primary); color: #000; border-radius: 18px; text-decoration: none; font-weight: 950; text-transform: uppercase;">EXPLORE STORE</a>
        </div>
        <?php else: ?>
        <div class="best-seller-grid-v3" style="padding: 24px 0 140px;">
            <?php foreach ($favoriteProducts as $product): ?>
            <div class="product-card-v3">
                <div class="product-img-v3 glass" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=400';">
                    <button class="fav-btn-v3 active" onclick="event.stopPropagation(); location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                        <span class="material-symbols-outlined filled" style="color: var(--primary);">favorite</span>
                    </button>
                </div>
                <div class="product-meta-v3" style="padding: 8px 4px 0;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em;"><?= htmlspecialchars($product['category']) ?></span>
                    <h4 style="font-size: 15px; font-weight: 800; margin-bottom: 8px; line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= htmlspecialchars($product['name']) ?></h4>
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
    </main>
</div>
