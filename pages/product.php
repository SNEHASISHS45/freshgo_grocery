<?php
$product = null;
if ($productId) {
    $product = getProductById($products, $productId);
}
if (!$product) {
    header('Location: ?page=home');
    exit;
}
$isFavorite = in_array($product['id'], $_SESSION['favorites']);
?>
<div class="view-enter" style="min-height: 100vh; display: flex; flex-direction: column;">
    <header class="detail-header">
        <a href="?page=home" class="back-btn">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <button class="fav-btn <?= $isFavorite ? 'active' : '' ?>" onclick="toggleFavorite('<?= $product['id'] ?>')">
            <span class="material-symbols-outlined <?= $isFavorite ? 'filled' : '' ?>">favorite</span>
        </button>
    </header>

    <main style="flex: 1;">
        <div class="detail-image-section">
            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="detail-image">
        </div>

        <div class="detail-content">
            <div class="detail-header-info">
                <div style="flex: 1;">
                    <div class="detail-badges">
                        <span class="detail-category-badge"><?= htmlspecialchars($product['category']) ?></span>
                        <?php if (!empty($product['isOrganic'])): ?>
                        <span class="organic-badge">Local Sourced</span>
                        <?php endif; ?>
                    </div>
                    <h1 class="detail-name"><?= htmlspecialchars($product['name']) ?></h1>
                    <p class="detail-price">₹<?= $product['price'] ?> <span class="detail-weight">/ <?= htmlspecialchars($product['weight']) ?></span></p>
                </div>
                <div class="stock-badge">
                    <span class="stock-label">In Stock</span>
                    <span class="stock-value">Fresh</span>
                </div>
            </div>

            <div class="detail-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div>
                        <p class="feature-label">Freshness</p>
                        <p class="feature-value">Guaranteed</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <span class="material-symbols-outlined">local_shipping</span>
                    </div>
                    <div>
                        <p class="feature-label">Delivery</p>
                        <p class="feature-value">10-12 Mins</p>
                    </div>
                </div>
            </div>

            <div class="detail-about">
                <h4 class="about-title">About this product</h4>
                <p class="about-text">
                    Sourced directly from the best vendors across India, our <?= strtolower(htmlspecialchars($product['name'])) ?> is picked for its superior quality. We prioritize hygiene and freshness to ensure your health and satisfaction.
                </p>
            </div>

            <?php if (!empty($product['nutrients'])): ?>
            <div style="margin-bottom: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
                    <h4 class="about-title" style="margin-bottom: 0;">Nutrition Facts</h4>
                    <span style="font-size: 10px; font-weight: 800; color: var(--zinc-700); text-transform: uppercase; letter-spacing: 0.1em;">Approx. per serving</span>
                </div>
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px;">
                    <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
                        <span style="font-size: 14px; font-weight: 900; color: var(--white);"><?= $product['nutrients']['calories'] ?></span>
                        <span style="display: block; font-size: 8px; font-weight: 800; color: var(--zinc-600); text-transform: uppercase; margin-top: 4px; letter-spacing: 0.1em;">KCAL</span>
                    </div>
                    <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
                        <span style="font-size: 14px; font-weight: 900; color: var(--white);"><?= $product['nutrients']['fiber'] ?></span>
                        <span style="display: block; font-size: 8px; font-weight: 800; color: var(--zinc-600); text-transform: uppercase; margin-top: 4px; letter-spacing: 0.1em;">FIBRE</span>
                    </div>
                    <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
                        <span style="font-size: 14px; font-weight: 900; color: var(--white);"><?= $product['nutrients']['vitC'] ?></span>
                        <span style="display: block; font-size: 8px; font-weight: 800; color: var(--zinc-600); text-transform: uppercase; margin-top: 4px; letter-spacing: 0.1em;">VIT C</span>
                    </div>
                    <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
                        <span style="font-size: 14px; font-weight: 900; color: var(--white);"><?= $product['nutrients']['sugar'] ?></span>
                        <span style="display: block; font-size: 8px; font-weight: 800; color: var(--zinc-600); text-transform: uppercase; margin-top: 4px; letter-spacing: 0.1em;">SUGAR</span>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </main>

    <footer class="detail-footer">
        <div class="detail-footer-inner">
            <div class="qty-selector">
                <button onclick="decreaseQty()">
                    <span class="material-symbols-outlined">remove</span>
                </button>
                <span id="productQty">1</span>
                <button onclick="increaseQty()">
                    <span class="material-symbols-outlined">add</span>
                </button>
            </div>
            <button class="add-basket-btn" onclick="addToCartWithQty('<?= $product['id'] ?>')">
                <span class="material-symbols-outlined">shopping_basket</span>
                Add to Basket
            </button>
        </div>
    </footer>
</div>

<script>
let productQty = 1;
function decreaseQty() {
    if (productQty > 1) {
        productQty--;
        document.getElementById('productQty').textContent = productQty;
    }
}
function increaseQty() {
    productQty++;
    document.getElementById('productQty').textContent = productQty;
}
function addToCartWithQty(id) {
    fetch('api/cart.php?action=add&id=' + id + '&qty=' + productQty)
        .then(response => response.json())
        .then(data => {
            if (data.success) window.location.href = '?page=home';
        });
}
</script>
