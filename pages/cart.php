<div class="view-enter" style="min-height: 100vh; display: flex; flex-direction: column; padding-bottom: 120px;">
    <header class="cart-header">
        <h2 class="cart-title">My Basket</h2>
        <a href="?action=clear_cart" class="cart-reset">Reset</a>
    </header>

    <main class="cart-items">
        <?php if (empty($_SESSION['cart'])): ?>
        <div class="cart-empty">
            <span class="material-symbols-outlined">shopping_cart</span>
            <p>Your basket is empty, yaar!</p>
        </div>
        <?php else: ?>
            <?php foreach ($_SESSION['cart'] as $item): ?>
            <div class="cart-item">
                <div class="cart-item-image" style="background-image: url('<?= htmlspecialchars($item['image']) ?>');"></div>
                <div class="cart-item-info">
                    <p class="cart-item-name"><?= htmlspecialchars($item['name']) ?></p>
                    <p class="cart-item-price">₹<?= $item['price'] ?></p>
                </div>
                <div class="qty-controls">
                    <button class="qty-btn minus" onclick="updateQty('<?= $item['id'] ?>', -1)">
                        <span class="material-symbols-outlined" style="font-size: 18px;">remove</span>
                    </button>
                    <span class="qty-value"><?= $item['quantity'] ?></span>
                    <button class="qty-btn plus" onclick="updateQty('<?= $item['id'] ?>', 1)">
                        <span class="material-symbols-outlined" style="font-size: 18px;">add</span>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="cart-summary">
                <div class="summary-row">
                    <span class="summary-label">Item Total</span>
                    <span class="summary-value">₹<?= number_format($cartTotal, 2) ?></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Delivery Partner Fee</span>
                    <span class="summary-value <?= $deliveryFee === 0 ? 'free' : '' ?>"><?= $deliveryFee === 0 ? 'FREE' : '₹' . number_format($deliveryFee, 2) ?></span>
                </div>
                <?php if ($deliveryFee === 0): ?>
                <p class="free-delivery-note">Free delivery applied on orders over ₹499</p>
                <?php endif; ?>
                <div class="summary-divider"></div>
                <div class="summary-total">
                    <span class="total-label">To Pay</span>
                    <span class="total-value">₹<?= number_format($finalTotal, 2) ?></span>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <?php if (!empty($_SESSION['cart'])): ?>
    <div class="fixed-footer">
        <a href="?page=checkout" class="checkout-btn">
            <span class="material-symbols-outlined">payments</span>
            Proceed to Payment
        </a>
    </div>
    <?php endif; ?>
</div>
