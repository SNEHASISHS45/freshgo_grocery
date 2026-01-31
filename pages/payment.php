<div class="view-enter payment-v3" style="background: var(--bg-secondary); min-height: 100vh; padding-bottom: 24px;">
    <!-- Neo-Premium Payment Header -->
    <header style="background: var(--bg-main); padding: 16px 16px 20px; position: sticky; top: 0; z-index: 1000; box-shadow: var(--shadow-sm); border-bottom: 1px solid var(--border-subtle);">
         <div style="display: flex; align-items: center; justify-content: space-between;">
             <div style="display: flex; align-items: center; gap: 14px;">
                <button class="icon-btn-v3" onclick="history.back()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="chevron-left" style="width: 24px; height: 24px; color: var(--text-primary);"></i>
                </button>
                <div>
                   <h1 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Secure Checkout</h1>
                   <p style="font-size: 11px; color: var(--brand-primary); font-weight: 850; text-transform: uppercase; margin-top: 2px;">PO #<?= rand(100000, 999999) ?></p>
                </div>
             </div>
             <button class="icon-btn-v3" onclick="toggleTheme()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <i data-lucide="moon" class="light-icon" style="width: 22px; height: 22px; color: var(--text-primary);"></i>
                <i data-lucide="sun" class="dark-icon" style="width: 22px; height: 22px; color: var(--text-primary);"></i>
             </button>
         </div>
    </header>

    <main style="padding: 24px 16px;">
        <!-- Order Summary Card -->
        <div style="background: var(--brand-secondary); border-radius: 32px; padding: 24px; margin-bottom: 32px; color: #fff; box-shadow: var(--shadow-lg); position: relative; overflow: hidden;">
            <div style="position: absolute; top: -20px; right: -20px; width: 120px; height: 120px; background: var(--brand-primary); border-radius: 50%; opacity: 0.1; filter: blur(40px);"></div>
            <div style="position: relative; z-index: 2;">
                <p style="font-size: 11px; font-weight: 800; color: var(--brand-primary); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px;">Payable Amount</p>
                <h2 style="font-size: 32px; font-weight: 950; letter-spacing: -0.02em;">₹<?= $total ?></h2>
                <div style="height: 1px; background: rgba(255,255,255,0.1); margin: 16px 0;"></div>
                <div style="display: flex; align-items: center; gap: 8px;">
                     <i data-lucide="shield-check" style="width: 18px; height: 18px; color: var(--brand-primary);"></i>
                     <span style="font-size: 12px; font-weight: 700; color: rgba(255,255,255,0.7);">Protected by FreshGo SecurePay</span>
                </div>
            </div>
        </div>

        <!-- UPI Islands -->
        <h3 style="font-size: 14px; font-weight: 850; color: var(--text-primary); margin: 0 0 16px 8px; letter-spacing: -0.01em;">UPI Payments</h3>
        <div style="background: var(--bg-tile); border-radius: 28px; border: 1px solid var(--border-color); padding: 8px; margin-bottom: 32px; box-shadow: var(--shadow-sm);">
            <div onclick="location.href='?page=tracking'" style="display: flex; align-items: center; gap: 16px; padding: 16px; cursor: pointer; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 52px; height: 52px; background: var(--bg-secondary); border: 1px solid var(--border-subtle); border-radius: 16px; display: flex; align-items: center; justify-content: center; padding: 12px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Google_Pay_Logo.svg" style="width: 100%; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.05));">
                </div>
                <div style="flex: 1;">
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--text-primary);">Google Pay</h4>
                    <p style="font-size: 11px; color: var(--text-secondary); font-weight: 700;">Fast & Secure</p>
                </div>
                <i data-lucide="chevron-right" style="width: 20px; height: 20px; color: var(--text-muted);"></i>
            </div>
            <div onclick="location.href='?page=tracking'" style="display: flex; align-items: center; gap: 16px; padding: 16px; cursor: pointer;">
                <div style="width: 52px; height: 52px; background: var(--bg-secondary); border: 1px solid var(--border-subtle); border-radius: 16px; display: flex; align-items: center; justify-content: center; padding: 8px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/PhonePe_Logo.svg" style="width: 100%; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.05));">
                </div>
                <div style="flex: 1;">
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--text-primary);">PhonePe</h4>
                    <p style="font-size: 11px; color: var(--text-secondary); font-weight: 700;">Direct Bank Transfer</p>
                </div>
                <i data-lucide="chevron-right" style="width: 20px; height: 20px; color: var(--text-muted);"></i>
            </div>
        </div>

        <!-- Cards & More -->
        <h3 style="font-size: 14px; font-weight: 850; color: var(--text-primary); margin: 0 0 16px 8px; letter-spacing: -0.01em;">Cards & Other</h3>
        <div style="background: var(--bg-tile); border-radius: 28px; border: 1px solid var(--border-color); padding: 8px; margin-bottom: 32px; box-shadow: var(--shadow-sm);">
            <div onclick="location.href='?page=tracking'" style="display: flex; align-items: center; gap: 16px; padding: 16px; cursor: pointer; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 52px; height: 52px; background: var(--cat-dairy); border-radius: 16px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="credit-card" style="width: 24px; height: 24px; color: #3B71FE;"></i>
                </div>
                <div style="flex: 1;">
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--text-primary);">Credit / Debit Cards</h4>
                    <p style="font-size: 11px; color: var(--text-secondary); font-weight: 700;">Visa, Mastercard, RuPay & more</p>
                </div>
                <i data-lucide="chevron-right" style="width: 20px; height: 20px; color: var(--text-muted);"></i>
            </div>
            <div onclick="location.href='?page=tracking'" style="display: flex; align-items: center; gap: 16px; padding: 16px; cursor: pointer;">
                <div style="width: 52px; height: 52px; background: var(--cat-snacks); border-radius: 16px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="wallet" style="width: 24px; height: 24px; color: #F8912D;"></i>
                </div>
                <div style="flex: 1;">
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--text-primary);">Wallets</h4>
                    <p style="font-size: 11px; color: var(--text-secondary); font-weight: 700;">Paytm, Amazon Pay, MobiKwik</p>
                </div>
                <i data-lucide="chevron-right" style="width: 20px; height: 20px; color: var(--text-muted);"></i>
            </div>
        </div>

        <!-- COD Island -->
        <div onclick="location.href='?page=tracking'" style="background: var(--bg-tile); border-radius: 28px; border: 2px solid var(--brand-primary); padding: 20px; display: flex; align-items: center; gap: 16px; cursor: pointer; box-shadow: var(--shadow-premium); position: relative; overflow: hidden;">
            <div style="position: absolute; top: -10px; left: -10px; width: 60px; height: 60px; background: var(--brand-primary); border-radius: 50%; opacity: 0.05; filter: blur(20px);"></div>
            <div style="width: 52px; height: 52px; background: var(--brand-primary-light); border-radius: 18px; display: flex; align-items: center; justify-content: center; position: relative; z-index: 2;">
                <i data-lucide="banknote" style="width: 28px; height: 28px; color: var(--brand-primary);"></i>
            </div>
            <div style="flex: 1; position: relative; z-index: 2;">
                <h4 style="font-size: 16px; font-weight: 900; color: var(--text-primary);">Cash on Delivery</h4>
                <p style="font-size: 12px; color: var(--text-secondary); font-weight: 700;">Pay with cash or QR at delivery</p>
            </div>
            <i data-lucide="check-circle" style="width: 24px; height: 24px; color: var(--brand-primary);"></i>
        </div>

        <div style="text-align: center; margin-top: 64px; padding-bottom: 40px;">
            <div style="display: inline-flex; align-items: center; gap: 8px; background: var(--bg-tile); border: 1px solid var(--border-color); padding: 10px 20px; border-radius: 100px; margin-bottom: 20px; box-shadow: var(--shadow-sm);">
                <i data-lucide="lock" style="width: 18px; height: 18px; color: var(--brand-primary);"></i>
                <span style="font-size: 11px; font-weight: 900; color: var(--text-primary); text-transform: uppercase; letter-spacing: 0.05em;">100% Encrypted Transactions</span>
            </div>
            <p style="font-size: 12px; color: var(--text-muted); font-weight: 700; line-height: 1.6; padding: 0 24px;">Your payment security is our priority. We use world-class encryption to keep your details safe.</p>
        </div>
    </main>
</div>

