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
                <i data-lucide="chevron-left" style="width: 24px; height: 24px; color: var(--text-primary);"></i>
            </button>
            <div>
                <h1 style="font-size: 20px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">My Basket</h1>
                <p style="font-size: 11px; color: var(--brand-primary); font-weight: 850; text-transform: uppercase; margin-top: 2px;"><?= count($cart_items) ?> Items Hub</p>
            </div>
        </div>
        <div style="display: flex; gap: 8px;">
            <button class="icon-btn-v3" onclick="toggleTheme()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <i data-lucide="moon" class="light-icon" style="width: 22px; height: 22px; color: var(--text-primary);"></i>
                <i data-lucide="sun" class="dark-icon" style="width: 22px; height: 22px; color: var(--text-primary);"></i>
            </button>
            <button class="icon-btn-v3" onclick="toggleNotifications()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <i data-lucide="bell" style="width: 22px; height: 22px; color: var(--text-primary);"></i>
            </button>
        </div>
    </header>

    <main style="padding: 20px 16px 160px;">
        <?php if (empty($cart_items)): ?>
        <!-- Empty State Hub -->
        <div style="text-align: center; padding: 100px 24px;">
            <div style="width: 140px; height: 140px; background: var(--bg-tile); border-radius: 48px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; border: 2.5px solid var(--border-subtle); box-shadow: var(--shadow-sm);">
                 <i data-lucide="shopping-basket" style="width: 64px; height: 64px; color: var(--text-muted); opacity: 0.3;"></i>
            </div>
            <h2 style="font-size: 24px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">Basket Pulse: Inactive</h2>
            <p style="color: var(--text-secondary); font-size: 14px; margin: 12px 0 32px; font-weight: 700; line-height: 1.5;">Protocol requires items to proceed. Explore the inventory to add essentials.</p>
            <button onclick="location.href='?page=explore'" style="height: 52px; padding: 0 40px; background: var(--brand-primary); color: #000; border: none; border-radius: 20px; font-weight: 950; font-size: 15px; box-shadow: var(--shadow-md);">Initialize Shopping</button>
        </div>
        <?php else: ?>
        
        <!-- Delivery Incentive Banner -->
        <div style="background: var(--brand-primary-light); border: 1px solid rgba(21, 209, 112, 0.2); border-radius: 20px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; margin-bottom: 24px; box-shadow: var(--shadow-sm);">
             <div style="width: 36px; height: 36px; background: var(--brand-primary); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #fff;">
                 <i data-lucide="truck" style="width: 22px; height: 22px; fill: #000;"></i>
             </div>
             <div style="flex: 1;">
                 <h4 style="font-size: 13px; font-weight: 850; color: var(--brand-primary-dark);">
                     <?= $isEligibleForFreeDelivery ? 'Free Delivery Activated!' : 'Add ₹' . (499 - $subtotal) . ' for Free Delivery' ?>
                 </h4>
                 <p style="font-size: 11px; color: var(--brand-primary-dark); font-weight: 700; opacity: 0.8;">Protocol: Save ₹25 on this logistics cycle.</p>
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
                            <i data-lucide="trash-2" style="width: 18px; height: 18px;"></i>
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
                <i data-lucide="receipt" style="color: var(--brand-primary); width: 20px; height: 20px;"></i>
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
                        <i data-lucide="info" style="width: 14px; height: 14px; opacity: 0.5;"></i>
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

        <!-- Frequently Bought Together -->
        <div style="margin-top: 32px; padding-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding: 0 4px;">
                <h3 style="font-size: 16px; font-weight: 900; color: var(--text-primary); letter-spacing: -0.01em;">People also added</h3>
                <span style="font-size: 11px; color: var(--brand-primary); font-weight: 850; text-transform: uppercase;">Top Recommendations</span>
            </div>
            <div class="no-scrollbar" style="display: flex; gap: 14px; overflow-x: auto; padding-bottom: 8px;">
                <?php 
                $upsellItems = array_slice($products, 20, 6);
                foreach ($upsellItems as $product): ?>
                <div class="product-card-v3" style="min-width: 130px; max-width: 130px; padding: 10px;">
                    <div class="product-img-v3" style="height: 90px; margin-bottom: 6px;" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 80%; height: 80%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 11px; height: 28px; line-height: 1.2;"><?= $product['name'] ?></div>
                    <button class="add-btn-v3" style="width: 100%; height: 30px; border-radius: 8px; margin-top: 8px; font-size: 11px;" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">ADD ₹<?= $product['price'] ?></button>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Checkout Action Island -->
        <footer style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); width: calc(100% - 32px); max-width: 400px; background: var(--brand-secondary); border-radius: 28px; padding: 20px 24px; z-index: 1000; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-premium); border: 1.5px solid rgba(255,255,255,0.05);">
            <div style="display: flex; flex-direction: column;">
                <span style="font-size: 22px; font-weight: 950; color: #fff; letter-spacing: -0.01em;">₹<?= $total ?></span>
                <span style="font-size: 10px; font-weight: 850; color: var(--brand-primary); text-transform: uppercase; letter-spacing: 0.08em;">Secure Transmission</span>
            </div>
            <button onclick="location.href='?page=payment'" style="background: var(--brand-primary); color: #000; border: none; border-radius: 20px; padding: 14px 28px; font-size: 14px; font-weight: 950; text-transform: uppercase; display: flex; align-items: center; gap: 10px; box-shadow: 0 8px 32px rgba(21, 209, 112, 0.3);">
                Proceed Hub
                <i data-lucide="arrow-right" style="width: 20px; height: 20px; stroke-width: 3;"></i>
            </button>
        </footer>
        <?php endif; ?>
    </main>
</div>
