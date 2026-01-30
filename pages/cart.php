<?php
// Cart Page - Neo-Premium High-Fidelity Design
$cart_items = $_SESSION['cart'];
$subtotal = 0;
foreach ($cart_items as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}
$isEligibleForFreeDelivery = $subtotal >= 499;
$delivery_fee = ($subtotal > 0 && !$isEligibleForFreeDelivery) ? 25 : 0;
$handling_fee = $subtotal > 0 ? 5 : 0;
$total = $subtotal + $delivery_fee + $handling_fee;
?>
<div class="view-enter cart-page-v3" style="background: var(--bg-secondary); min-height: 100vh;">
    <!-- Neo-Premium Header -->
    <header style="background: var(--bg-main); padding: 16px 16px 20px; position: sticky; top: 0; z-index: 1000; border-bottom: 2px solid var(--border-subtle); display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
        <div style="display: flex; align-items: center; gap: 14px;">
            <button class="icon-btn-v3" onclick="location.href='?page=home'" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <span class="material-symbols-outlined" style="font-size: 24px; color: var(--text-primary);">chevron_left</span>
            </button>
            <div>
                <h1 style="font-size: 20px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">My Basket</h1>
                <p style="font-size: 11px; color: var(--brand-primary); font-weight: 850; text-transform: uppercase; margin-top: 2px;"><?= count($cart_items) ?> Items Hub</p>
            </div>
        </div>
        <div style="display: flex; gap: 8px;">
            <button class="icon-btn-v3" onclick="toggleTheme()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <span class="material-symbols-outlined light-icon" style="color: var(--text-primary);">dark_mode</span>
                <span class="material-symbols-outlined dark-icon" style="color: var(--text-primary);">light_mode</span>
            </button>
            <button class="icon-btn-v3" onclick="toggleNotifications()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <span class="material-symbols-outlined" style="color: var(--text-primary);">notifications</span>
            </button>
        </div>
    </header>

    <main style="padding: 20px 16px 160px;">
        <?php if (empty($cart_items)): ?>
        <!-- Empty State Hub -->
        <div style="text-align: center; padding: 100px 24px;">
            <div style="width: 140px; height: 140px; background: var(--bg-tile); border-radius: 48px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; border: 2.5px solid var(--border-subtle); box-shadow: var(--shadow-sm);">
                 <span class="material-symbols-outlined" style="font-size: 64px; color: var(--text-muted); opacity: 0.3;">shopping_basket</span>
            </div>
            <h2 style="font-size: 24px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">Basket Pulse: Inactive</h2>
            <p style="color: var(--text-secondary); font-size: 14px; margin: 12px 0 32px; font-weight: 700; line-height: 1.5;">Protocol requires items to proceed. Explore the inventory to add essentials.</p>
            <button onclick="location.href='?page=explore'" style="height: 52px; padding: 0 40px; background: var(--brand-primary); color: #000; border: none; border-radius: 18px; font-weight: 950; font-size: 15px; box-shadow: var(--shadow-md);">Initialize Shopping</button>
        </div>
        <?php else: ?>
        
        <!-- Delivery Incentive Banner -->
        <div style="background: #E8FCF1; border: 1px solid rgba(21, 209, 112, 0.2); border-radius: 18px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; margin-bottom: 24px; box-shadow: var(--shadow-sm);">
             <div style="width: 36px; height: 36px; background: var(--brand-primary); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #fff;">
                 <span class="material-symbols-outlined" style="font-size: 22px;">local_shipping</span>
             </div>
             <div style="flex: 1;">
                 <h4 style="font-size: 13px; font-weight: 850; color: #0A8F4D;">
                     <?= $isEligibleForFreeDelivery ? 'Free Delivery Activated!' : 'Add ₹' . (499 - $subtotal) . ' for Free Delivery' ?>
                 </h4>
                 <p style="font-size: 11px; color: #0A8F4D; font-weight: 700; opacity: 0.8;">Protocol: Save ₹25 on this logistics cycle.</p>
             </div>
        </div>

        <!-- Items Island -->
        <div style="background: var(--bg-tile); border-radius: 28px; padding: 4px; border: 1px solid var(--border-color); box-shadow: var(--shadow-sm); margin-bottom: 24px;">
            <?php foreach ($cart_items as $index => $item): ?>
            <div style="display: flex; align-items: center; gap: 16px; padding: 16px; <?= $index < count($cart_items)-1 ? 'border-bottom: 1px solid var(--border-subtle);' : '' ?>">
                <div style="width: 80px; height: 80px; background: var(--bg-secondary); border-radius: 18px; padding: 10px; display: flex; align-items: center; justify-content: center; position: relative; border: 1px solid var(--border-subtle);">
                    <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                <div style="flex: 1;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <h3 style="font-size: 14px; font-weight: 850; color: var(--text-primary); line-height: 1.3;"><?= $item['name'] ?></h3>
                            <p style="font-size: 11px; color: var(--text-muted); font-weight: 700; margin-top: 2px;"><?= $item['weight'] ?></p>
                        </div>
                        <button onclick="location.href='?action=update_cart&id=<?= $item['id'] ?>&delta=-<?= $item['quantity'] ?>'" style="background: none; border: none; padding: 4px; color: var(--text-muted);">
                            <span class="material-symbols-outlined" style="font-size: 20px;">close</span>
                        </button>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 12px;">
                        <span style="font-size: 16px; font-weight: 950; color: var(--text-primary);">₹<?= $item['price'] * $item['quantity'] ?></span>
                        <div style="display: flex; align-items: center; background: var(--bg-secondary); border-radius: 12px; padding: 4px; gap: 12px; border: 1.5px solid var(--border-subtle);">
                            <button onclick="location.href='?action=update_cart&id=<?= $item['id'] ?>&delta=-1'" style="width: 32px; height: 32px; border: none; background: var(--bg-tile); border-radius: 8px; color: var(--text-primary); font-weight: 900; box-shadow: var(--shadow-sm);">-</button>
                            <span style="font-size: 14px; font-weight: 900; color: var(--text-primary); min-width: 15px; text-align: center;"><?= $item['quantity'] ?></span>
                            <button onclick="location.href='?action=update_cart&id=<?= $item['id'] ?>&delta=1'" style="width: 32px; height: 32px; border: none; background: var(--bg-tile); border-radius: 8px; color: var(--text-primary); font-weight: 900; box-shadow: var(--shadow-sm);">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Bill Details Island -->
        <div style="background: var(--bg-tile); border-radius: 28px; padding: 24px; border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 16px; font-weight: 900; color: var(--text-primary); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <span class="material-symbols-outlined" style="color: var(--brand-primary);">receipt_long</span>
                Bill Details Hub
            </h3>
            <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="display: flex; justify-content: space-between; font-size: 14px; color: var(--text-secondary); font-weight: 700;">
                    <span>Item Total</span>
                    <span style="color: var(--text-primary); font-weight: 850;">₹<?= $subtotal ?></span>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 14px; color: var(--text-secondary); font-weight: 700;">
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span>Delivery Logistics</span>
                        <span class="material-symbols-outlined" style="font-size: 16px; opacity: 0.5;">info</span>
                    </div>
                    <?php if($delivery_fee == 0 && $subtotal > 0): ?>
                        <span style="color: var(--brand-primary); font-weight: 850;">FREE</span>
                    <?php else: ?>
                        <span style="color: var(--text-primary); font-weight: 850;">₹<?= $delivery_fee ?></span>
                    <?php endif; ?>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 14px; color: var(--text-secondary); font-weight: 700;">
                    <span>Handling Protocol</span>
                    <span style="color: var(--text-primary); font-weight: 850;">₹<?= $handling_fee ?></span>
                </div>
                <div style="height: 1.5px; background: var(--border-subtle); margin: 6px 0;"></div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-size: 18px; font-weight: 950; color: var(--text-primary);">Total Payout</span>
                    <span style="font-size: 22px; font-weight: 950; color: var(--brand-primary);">₹<?= $total ?></span>
                </div>
            </div>
        </div>

        <!-- Donation / Micro-Action Area -->
        <div style="background: var(--bg-tile); border-radius: 24px; padding: 18px; border: 1px solid var(--border-color); box-shadow: var(--shadow-sm); margin-top: 20px; display: flex; align-items: center; justify-content: space-between;">
             <div style="display: flex; align-items: center; gap: 12px;">
                 <div style="width: 40px; height: 40px; background: var(--cat-fruits); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">🌳</div>
                 <div>
                     <h4 style="font-size: 13px; font-weight: 900; color: var(--text-primary);">Plant a Tree Hub</h4>
                     <p style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Add ₹1 to your order.</p>
                 </div>
             </div>
             <input type="checkbox" checked style="accent-color: var(--brand-primary); width: 22px; height: 22px;">
        </div>

        <!-- Checkout Action Island -->
        <footer style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); width: calc(100% - 32px); max-width: 400px; background: var(--brand-secondary); border-radius: 28px; padding: 20px 24px; z-index: 1000; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-premium); border: 1.5px solid rgba(255,255,255,0.05);">
            <div style="display: flex; flex-direction: column;">
                <span style="font-size: 22px; font-weight: 950; color: #fff; letter-spacing: -0.01em;">₹<?= $total ?></span>
                <span style="font-size: 10px; font-weight: 850; color: var(--brand-primary); text-transform: uppercase; letter-spacing: 0.08em;">Secure Transmission</span>
            </div>
            <button onclick="location.href='?page=payment'" style="background: var(--brand-primary); color: #000; border: none; border-radius: 18px; padding: 14px 28px; font-size: 14px; font-weight: 950; text-transform: uppercase; display: flex; align-items: center; gap: 10px; box-shadow: 0 8px 32px rgba(21, 209, 112, 0.3);">
                Proceed Hub
                <span class="material-symbols-outlined" style="font-size: 22px; font-weight: 950;">arrow_forward</span>
            </button>
        </footer>
        <?php endif; ?>
    </main>
</div>
