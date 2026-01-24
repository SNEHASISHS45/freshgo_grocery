<?php
// Checkout Page - Indian Localization
$subtotal = 0;
foreach ($_SESSION['cart'] as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}
$delivery_fee = ($subtotal > 0 && $subtotal < 499) ? 25 : 0;
$handling_fee = $subtotal > 0 ? 5 : 0;
$total = $subtotal + $delivery_fee + $handling_fee;
?>
<div class="view-enter checkout-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 850; letter-spacing: -0.01em;">Gateway Check</h1>
             <div style="width: 44px;"></div>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <!-- Address Module -->
        <div class="stagger-1" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 40px; overflow: hidden; margin-bottom: 28px; box-shadow: var(--shadow-sm);">
            <div style="height: 140px; background: #e0eed4; position: relative;">
                  <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?q=80&w=800" alt="Map" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; filter: grayscale(0.5) contrast(1.1);">
                  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent, rgba(0,0,0,0.1));"></div>
                  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                      <div style="width: 48px; height: 48px; background: var(--primary); border-radius: 14px; display: flex; align-items: center; justify-content: center; box-shadow: var(--neon-shadow); border: 3px solid white;">
                        <span class="material-symbols-outlined filled" style="font-size: 24px; color: #000;">location_on</span>
                      </div>
                  </div>
            </div>
            <div style="padding: 24px; display: flex; justify-content: space-between; align-items: center;">
                 <div>
                     <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                        <p style="font-size: 16px; font-weight: 900;">Sector 2 Outpost</p>
                        <span style="font-size: 10px; font-weight: 950; background: var(--primary); color: #000; padding: 2px 10px; border-radius: 50px;">PRIMARY</span>
                     </div>
                     <p style="font-size: 13px; color: var(--text-muted); font-weight: 700; line-height: 1.4;">HSR Layout, 27th Main, Bangalore - 560102</p>
                 </div>
                 <button onclick="location.href='?page=addresses'" style="width: 48px; height: 48px; background: var(--bg-main); border: 1px solid var(--border-color); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: var(--primary); cursor: pointer;">
                     <span class="material-symbols-outlined" style="font-size: 20px;">edit_location_alt</span>
                 </button>
            </div>
        </div>

        <!-- Section: Delivery Time -->
        <div class="stagger-2" style="margin-bottom: 32px;">
            <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 20px;">Transmission Protocol</p>
            <div style="display: flex; gap: 16px;">
                <div style="flex: 1; padding: 20px; border-radius: 28px; background: var(--bg-secondary); border: 2.3px solid var(--primary); text-align: center; position: relative; box-shadow: var(--neon-shadow);">
                    <p style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.1em;">INSTANT</p>
                    <p style="font-size: 16px; font-weight: 950; margin-top: 6px;">12 Mins</p>
                    <div style="position: absolute; top: -12px; right: 12px; background: var(--primary); color: #000; font-size: 10px; font-weight: 950; padding: 4px 12px; border-radius: 50px;">ELITE</div>
                </div>
                <div style="flex: 1; padding: 20px; border-radius: 28px; background: var(--bg-secondary); border: 1.5px solid var(--border-color); text-align: center; opacity: 0.7;">
                    <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em;">SCHEDULE</p>
                    <p style="font-size: 16px; font-weight: 950; margin-top: 6px;">Later Today</p>
                </div>
            </div>
        </div>

        <!-- Section: UPI/Payment -->
        <div class="stagger-3" style="margin-bottom: 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em;">Clearance Method</p>
                <button onclick="location.href='?page=payment'" style="color: var(--primary); font-size: 11px; font-weight: 950; border: none; background: none; cursor: pointer; text-transform: uppercase;">MORE</button>
            </div>
            <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="background: var(--bg-secondary); border: 2.3px solid var(--primary); border-radius: 32px; padding: 24px; display: flex; align-items: center; gap: 20px; border: 2.3px solid var(--primary); box-shadow: var(--shadow-sm);">
                    <div style="width: 48px; height: 48px; background: #fff; border-radius: 14px; display: flex; align-items: center; justify-content: center; border: 1px solid #eee; flex-shrink: 0;">
                         <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/UPI-Logo-vector.svg" alt="UPI" style="width: 30px;">
                    </div>
                    <div style="flex: 1;">
                        <h4 style="font-size: 15px; font-weight: 900;">UPI Neural (GPay/PhonePe)</h4>
                        <p style="font-size: 11px; color: var(--primary); font-weight: 950; text-transform: uppercase; margin-top: 2px;">SECURE BY DEFAULT</p>
                    </div>
                    <span class="material-symbols-outlined filled" style="color: var(--primary); font-size: 28px;">verified</span>
                </div>
                <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 32px; padding: 24px; display: flex; align-items: center; gap: 20px; opacity: 0.8; cursor: pointer;">
                    <div style="width: 48px; height: 48px; background: var(--bg-main); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                         <span class="material-symbols-outlined" style="font-size: 24px; color: var(--text-muted);">payments</span>
                    </div>
                    <div style="flex: 1;">
                        <h4 style="font-size: 15px; font-weight: 900; color: var(--text-primary);">Cash Protocol</h4>
                        <p style="font-size: 11px; color: var(--text-muted); font-weight: 800; text-transform: uppercase; margin-top: 2px;">₹5 HANDLING COST</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Pay Bar -->
        <div class="stagger-4" style="margin: 40px 0 60px; background: var(--bg-secondary); border: 1.5px solid var(--primary); border-radius: 36px; padding: 28px; box-shadow: var(--shadow-md);">
             <div style="display: flex; justify-content: space-between; align-items: center;">
                  <div>
                      <p style="font-size: 11px; color: var(--text-muted); font-weight: 950; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 4px;">Net Payable</p>
                      <p style="font-size: 26px; font-weight: 950; letter-spacing: -0.02em;">₹<?= $total ?></p>
                  </div>
                  <a href="?action=place_order" class="neon-btn" style="height: 60px; background: var(--primary); color: #000; border-radius: 18px; padding: 0 40px; display: flex; align-items: center; font-weight: 950; text-decoration: none; box-shadow: var(--neon-shadow); text-transform: uppercase; font-size: 14px;">
                      AUTHORIZE
                  </a>
             </div>
        </div>
        <p class="stagger-4" style="text-align: center; color: var(--text-muted); font-size: 11px; font-weight: 950; margin-top: 0; padding-bottom: 60px; text-transform: uppercase; letter-spacing: 0.1em; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.5s;">
             PROCESSED VIA SECURE QUANTUM GATEWAY
        </p>
    </main>
</div>
