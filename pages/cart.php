<?php
// Cart Page - Indian Localization
$cart_items = $_SESSION['cart'];
$subtotal = 0;
foreach ($cart_items as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}
$delivery_fee = ($subtotal > 0 && $subtotal < 499) ? 25 : 0;
$handling_fee = $subtotal > 0 ? 5 : 0;
$total = $subtotal + $delivery_fee + $handling_fee;
?>
<div class="view-enter cart-page-v3" style="background: var(--bg-main); min-height: 100vh; padding-bottom: 160px;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 800; letter-spacing: -0.01em;">My Basket</h1>
             <button class="icon-btn-v3 glass" onclick="location.href='?action=clear_cart'">
                 <span class="material-symbols-outlined">delete_sweep</span>
             </button>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <?php if (empty($cart_items)): ?>
        <div class="stagger-2" style="text-align: center; padding: 100px 0;">
            <div style="width: 140px; height: 140px; background: var(--bg-secondary); border-radius: 48px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; border: 1px solid var(--border-color);">
                <span class="material-symbols-outlined filled" style="font-size: 64px; color: var(--text-muted); opacity: 0.3;">shopping_basket</span>
            </div>
            <h2 style="font-size: 24px; font-weight: 900; letter-spacing: -0.02em;">Basket is empty</h2>
            <p style="color: var(--text-muted); font-size: 15px; margin-top: 12px; font-weight: 700; line-height: 1.5;">Inventory currently at zero. <br>Initiate shop protocol to begin.</p>
            <a href="?page=home" class="neon-btn" style="display: inline-flex; align-items: center; justify-content: center; margin-top: 40px; padding: 20px 48px; background: var(--primary); color: #000; border-radius: 20px; text-decoration: none; font-weight: 950; text-transform: uppercase;">START SHOPPING</a>
        </div>
        <?php else: ?>
        <div class="stagger-2" style="display: flex; flex-direction: column; gap: 16px;">
            <?php foreach ($cart_items as $item): ?>
            <div style="display: flex; align-items: center; gap: 18px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 32px; padding: 20px; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                <div style="width: 80px; height: 80px; background: var(--bg-main); border-radius: 20px; padding: 12px; cursor: pointer; border: 1px solid var(--border-color);" onclick="location.href='?page=product&id=<?= $item['id'] ?>'">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" style="width: 100%; height: 100%; object-fit: contain;" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=200';">
                </div>
                <div style="flex: 1;">
                    <h4 style="font-size: 15px; font-weight: 850; cursor: pointer; line-height: 1.3;" onclick="location.href='?page=product&id=<?= $item['id'] ?>'"><?= htmlspecialchars($item['name']) ?></h4>
                    <p style="font-size: 13px; color: var(--primary); font-weight: 900; margin-top: 4px;">₹<?= $item['price'] ?></p>
                    <div style="display: flex; align-items: center; gap: 16px; margin-top: 14px;">
                         <button onclick="location.href='?action=update_cart&id=<?= $item['id'] ?>&delta=-1'" style="width: 36px; height: 36px; border: 1.5px solid var(--border-color); background: none; border-radius: 12px; font-weight: 950; font-size: 18px; cursor: pointer;">-</button>
                         <span style="font-size: 16px; font-weight: 950; color: var(--text-primary);"><?= $item['quantity'] ?></span>
                         <button onclick="location.href='?action=add_cart&id=<?= $item['id'] ?>'" style="width: 36px; height: 36px; border: 1.5px solid var(--primary); background: none; border-radius: 12px; font-weight: 950; font-size: 18px; color: var(--primary); cursor: pointer;">+</button>
                    </div>
                </div>
                <div style="text-align: right;">
                    <p style="font-size: 18px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">₹<?= $item['price'] * $item['quantity'] ?></p>
                    <button onclick="location.href='?action=update_cart&id=<?= $item['id'] ?>&delta=-<?= $item['quantity'] ?>'" style="background: var(--red); border: none; color: #fff; font-size: 9px; font-weight: 950; padding: 6px 12px; border-radius: 50px; margin-top: 12px; cursor: pointer; text-transform: uppercase;">DROP</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Bill Summary -->
        <div class="stagger-3" style="margin-top: 32px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 36px; padding: 28px; box-shadow: var(--shadow-sm); animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
            <p style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 24px;">Bill Intelligence</p>
            <div style="display: flex; flex-direction: column; gap: 14px;">
                 <div style="display: flex; justify-content: space-between;">
                     <span style="font-size: 14px; color: var(--text-muted); font-weight: 800;">Cart Subtotal</span>
                     <span style="font-size: 14px; font-weight: 900;">₹<?= $subtotal ?></span>
                 </div>
                 <div style="display: flex; justify-content: space-between;">
                     <span style="font-size: 14px; color: var(--text-muted); font-weight: 800;">Neural Delivery</span>
                     <span style="font-size: 14px; font-weight: 950; color: <?= $delivery_fee === 0 ? 'var(--primary)' : 'inherit' ?>;"><?= $delivery_fee === 0 ? 'WAVED' : '₹'.$delivery_fee ?></span>
                 </div>
                 <div style="display: flex; justify-content: space-between;">
                     <span style="font-size: 14px; color: var(--text-muted); font-weight: 800;">Handling Ops</span>
                     <span style="font-size: 14px; font-weight: 900;">₹<?= $handling_fee ?></span>
                 </div>
                 <div style="height: 1.5px; background: var(--border-color); margin: 10px 0; border-radius: 10px;"></div>
                 <div style="display: flex; justify-content: space-between; align-items: center;">
                     <span style="font-size: 20px; font-weight: 950; letter-spacing: -0.01em;">Total Payable</span>
                     <span style="font-size: 26px; font-weight: 950; color: var(--primary); letter-spacing: -0.02em;">₹<?= $total ?></span>
                 </div>
            </div>
        </div>

        <!-- Safe Checkout Footer -->
        <div class="stagger-4" style="margin-top: 24px; text-align: center; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.4s;">
             <p style="font-size: 12px; color: var(--text-muted); font-weight: 800; display: flex; align-items: center; justify-content: center; gap: 6px;">
                 <span class="material-symbols-outlined filled" style="font-size: 16px; color: var(--primary);">verified_user</span>
                 AES-256 SECURED TRANSACTION
             </p>
        </div>

        <footer style="position: fixed; bottom: 32px; left: 50%; transform: translateX(-50%); width: 100%; max-width: 430px; padding: 0 24px; z-index: 100;">
            <button onclick="location.href='?page=checkout'" class="neon-btn" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 72px; background: var(--primary); color: #000; border: none; border-radius: 22px; font-size: 18px; font-weight: 950; text-decoration: none; gap: 14px; box-shadow: var(--neon-shadow);">
                PROCEED TO PAY
                <span class="material-symbols-outlined" style="font-weight: 900;">credit_card</span>
            </button>
        </footer>
        <?php endif; ?>
    </main>
</div>
