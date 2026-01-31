<div class="view-enter profile-page-v3" style="background: var(--bg-secondary); min-height: 100vh; padding-bottom: 120px;">
    <!-- Neo-Premium profile Header -->
     <header style="background: var(--bg-main); padding: 24px 20px; border-bottom: 2px solid var(--border-subtle); display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
          <div style="display: flex; align-items: center; gap: 16px;">
              <div style="width: 56px; height: 56px; background: var(--brand-primary-light); border-radius: 18px; display: flex; align-items: center; justify-content: center; border: 1.5px solid var(--brand-primary);">
                  <i data-lucide="user" style="color: var(--brand-primary); width: 32px; height: 32px;"></i>
              </div>
              <div>
                 <h1 style="font-size: 22px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.02em;">Snehasish S.</h1>
                 <p style="font-size: 13px; color: var(--text-secondary); font-weight: 750; margin-top: 2px; opacity: 0.8;">Protocol: +91 98XXX XXX00</p>
              </div>
          </div>
          <div style="display: flex; gap: 8px;">
             <button class="icon-btn-v3" onclick="toggleTheme()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                 <i data-lucide="moon" class="light-icon" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
                 <i data-lucide="sun" class="dark-icon" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
             </button>
             <button class="icon-btn-v3" onclick="location.href='?page=settings'" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                 <i data-lucide="settings" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
             </button>
          </div>
     </header>

    <main style="padding: 24px 16px;">
        <!-- Orders & Payments Island -->
        <h3 style="font-size: 13px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.08em; margin: 0 0 14px 12px;">Commerce Hub</h3>
        <div style="background: var(--bg-tile); border-radius: 28px; border: 1px solid var(--border-color); overflow: hidden; margin-bottom: 28px; box-shadow: var(--shadow-sm);">
            <a href="?page=orders" style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; text-decoration: none; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 44px; height: 44px; background: var(--cat-dairy); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="receipt" style="color: #3B71FE; width: 22px; height: 22px;"></i>
                </div>
                <div style="flex: 1;">
                    <span style="font-size: 15px; font-weight: 850; color: var(--text-primary); display: block;">Your Orders</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">History & Tracking Protocol</span>
                </div>
                <i data-lucide="chevron-right" style="color: var(--text-muted); width: 20px; height: 20px;"></i>
            </a>
            <a href="?page=payment" style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; text-decoration: none; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 44px; height: 44px; background: var(--cat-snacks); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="wallet" style="color: #F8912D; width: 22px; height: 22px;"></i>
                </div>
                <div style="flex: 1;">
                    <span style="font-size: 15px; font-weight: 850; color: var(--text-primary); display: block;">Payment Vault</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">UPI, Cards & Credits Hub</span>
                </div>
                <i data-lucide="chevron-right" style="color: var(--text-muted); width: 20px; height: 20px;"></i>
            </a>
            <a href="?page=addresses" style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; text-decoration: none;">
                <div style="width: 44px; height: 44px; background: var(--cat-veggies); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="map-pin" style="color: var(--brand-primary); width: 22px; height: 22px;"></i>
                </div>
                <div style="flex: 1;">
                    <span style="font-size: 15px; font-weight: 850; color: var(--text-primary); display: block;">Delivery Nodes</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Manage Geolocation Points</span>
                </div>
                <i data-lucide="chevron-right" style="color: var(--text-muted); width: 20px; height: 20px;"></i>
            </a>
        </div>

        <!-- Support & Legal Island -->
        <h3 style="font-size: 13px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.08em; margin: 0 0 14px 12px;">System Assistance</h3>
        <div style="background: var(--bg-tile); border-radius: 28px; border: 1px solid var(--border-color); overflow: hidden; margin-bottom: 28px; box-shadow: var(--shadow-sm);">
            <a href="?page=support" style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; text-decoration: none; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 44px; height: 44px; background: var(--bg-secondary); border-radius: 14px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-subtle);">
                    <i data-lucide="headset" style="color: var(--text-secondary); width: 22px; height: 22px;"></i>
                </div>
                <div style="flex: 1;">
                    <span style="font-size: 15px; font-weight: 850; color: var(--text-primary); display: block;">Support Terminal</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">24/7 Live Assistance Hub</span>
                </div>
                <i data-lucide="chevron-right" style="color: var(--text-muted); width: 20px; height: 20px;"></i>
            </a>
            <a href="?page=about" style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; text-decoration: none;">
                <div style="width: 44px; height: 44px; background: var(--bg-secondary); border-radius: 14px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-subtle);">
                    <i data-lucide="info" style="color: var(--text-secondary); width: 22px; height: 22px;"></i>
                </div>
                <div style="flex: 1;">
                    <span style="font-size: 15px; font-weight: 850; color: var(--text-primary); display: block;">About Protocol</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">System Version 4.0.0 Stable</span>
                </div>
                <i data-lucide="chevron-right" style="color: var(--text-muted); width: 20px; height: 20px;"></i>
            </a>
        </div>

        <button onclick="location.href='?page=welcome'" style="width: 100%; height: 58px; background: rgba(255, 59, 137, 0.06); border: 1.5px solid rgba(255, 59, 137, 0.2); border-radius: 18px; color: var(--brand-accent); font-size: 15px; font-weight: 950; display: flex; align-items: center; justify-content: center; gap: 10px; margin-top: 12px; box-shadow: var(--shadow-sm);">
            <i data-lucide="log-out" style="width: 22px; height: 22px;"></i>
            TERMINATE SESSION
        </button>

        <div style="text-align: center; margin-top: 48px; padding-bottom: 40px;">
            <div style="display: inline-flex; align-items: center; gap: 8px; background: var(--bg-tile); border: 1px solid var(--border-color); padding: 8px 16px; border-radius: 100px; box-shadow: var(--shadow-sm);">
                <div style="width: 6px; height: 6px; background: var(--brand-primary); border-radius: 50%;"></div>
                <span style="font-size: 10px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Proudly Made for Speed Hub</span>
            </div>
        </div>
    </main>
</div>

