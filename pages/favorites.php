<div class="view-enter" style="padding-bottom: 100px;">
    <header class="cart-header">
        <a href="?page=profile" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
        <h1 class="cart-title">My Favorites</h1>
        <div style="width: 24px;"></div>
    </header>

    <?php
    $favoriteProducts = array_filter($products, function($p) {
        return in_array($p['id'], $_SESSION['favorites']);
    });
    ?>

    <main style="padding: 16px 24px;">
        <?php if (empty($_SESSION['favorites'])): ?>
        <div style="text-align: center; padding: 60px 20px;">
            <span class="material-symbols-outlined" style="font-size: 64px; color: var(--zinc-700); margin-bottom: 16px;">favorite</span>
            <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px;">No favorites yet</h3>
            <p style="font-size: 14px; color: var(--zinc-500); margin-bottom: 24px;">Tap the heart icon on products to save them here</p>
            <a href="?page=home" style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary); color: #000; padding: 12px 24px; border-radius: 12px; font-size: 14px; font-weight: 700; text-decoration: none;">
                <span class="material-symbols-outlined" style="font-size: 18px;">shopping_cart</span>
                Start Shopping
            </a>
        </div>
        <?php else: ?>
        <div class="products-grid" style="padding: 0;">
            <?php foreach ($favoriteProducts as $product): ?>
            <div class="product-card">
                <div class="product-image-container" onclick="window.location.href='?page=product&id=<?= $product['id'] ?>'">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image">
                    <button class="favorite-btn active" onclick="event.stopPropagation(); toggleFavorite('<?= $product['id'] ?>')">
                        <span class="material-symbols-outlined filled">favorite</span>
                    </button>
                </div>
                <div class="product-info">
                    <p class="product-category"><?= htmlspecialchars($product['category']) ?></p>
                    <h4 class="product-name"><?= htmlspecialchars($product['name']) ?></h4>
                    <div class="product-footer">
                        <div class="product-price">
                            <span class="price-current">₹<?= $product['price'] ?></span>
                        </div>
                        <button class="add-btn" onclick="addToCart('<?= $product['id'] ?>')">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </main>
</div>
