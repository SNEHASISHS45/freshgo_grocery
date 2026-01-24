<div class="view-enter checkout-page">
    <header class="checkout-header">
        <a href="?page=cart" class="back-btn">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <h1 class="checkout-title">Payments</h1>
    </header>

    <main>
        <section class="checkout-section">
            <h3 class="checkout-section-title">Delivery Address</h3>
            <div class="address-card">
                <div class="address-icon">
                    <span class="material-symbols-outlined">location_on</span>
                </div>
                <div class="address-info">
                    <p class="address-text">HSR Layout, Sector 2, Bangalore</p>
                    <p class="address-type">Default • Office/Home</p>
                </div>
                <button class="address-edit">Edit</button>
            </div>
        </section>

        <section class="checkout-section">
            <h3 class="checkout-section-title">Pay via</h3>
            <div class="payment-grid">
                <button class="payment-option active" onclick="selectPayment(this, 'upi')">
                    <span class="material-symbols-outlined">qr_code_2</span>
                    <span>UPI (GPay/PhonePe)</span>
                </button>
                <button class="payment-option" onclick="selectPayment(this, 'cod')">
                    <span class="material-symbols-outlined">payments</span>
                    <span>Cash on Delivery</span>
                </button>
            </div>
        </section>

        <section class="checkout-summary">
            <div class="checkout-row">
                <span class="checkout-label">Item Total</span>
                <span class="checkout-value">₹<?= number_format($cartTotal, 2) ?></span>
            </div>
            <div class="checkout-row">
                <span class="checkout-label">Delivery Fee</span>
                <span class="checkout-value <?= $deliveryFee === 0 ? 'free' : '' ?>"><?= $deliveryFee === 0 ? 'FREE' : '₹' . number_format($deliveryFee, 2) ?></span>
            </div>
            <div class="checkout-row">
                <span class="checkout-label">Handling Charge</span>
                <span class="checkout-value">₹5.00</span>
            </div>
            <div class="checkout-total-row">
                <span class="checkout-total-label">Amount to pay</span>
                <span class="checkout-total-value">₹<?= number_format($finalTotal, 2) ?></span>
            </div>
        </section>
    </main>

    <footer class="checkout-footer">
        <a href="?action=place_order" class="pay-btn" id="payBtn">
            <span class="material-symbols-outlined">lock</span>
            Pay ₹<?= number_format($finalTotal, 0) ?> Now
        </a>
    </footer>
</div>

<script>
function selectPayment(btn, method) {
    document.querySelectorAll('.payment-option').forEach(el => el.classList.remove('active'));
    btn.classList.add('active');
}
</script>
