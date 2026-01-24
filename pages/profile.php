<div class="view-enter profile-page-v3" style="background: var(--bg-main);">
    <header class="home-header-v3" style="padding-top: 64px;">
        <div class="stagger-1" style="display: flex; align-items: center; gap: 24px;">
            <div style="width: 88px; height: 88px; border-radius: 32px; background: var(--primary-light); overflow: hidden; border: 2.3px solid var(--primary); transform: rotate(-3deg); box-shadow: var(--shadow-md);">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Snehasish" alt="Profile" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="flex: 1;">
                <h2 style="font-size: 26px; font-weight: 950; letter-spacing: -0.03em;">Snehasish S.</h2>
                <div style="display: flex; align-items: center; gap: 8px; color: var(--text-muted); font-size: 13px; font-weight: 950; margin-top: 6px; text-transform: uppercase; letter-spacing: 0.1em;">
                    <span class="material-symbols-outlined filled" style="font-size: 16px; color: var(--primary);">verified</span>
                    <span>ELITE PROTOCOL MEMBER</span>
                </div>
            </div>
            <div style="display: flex; gap: 12px;">
                <button class="icon-btn-v3 glass theme-toggle-btn" onclick="toggleTheme()" style="border-radius: 16px; width: 48px; height: 48px;">
                    <span class="material-symbols-outlined dark-icon" style="display: none;">dark_mode</span>
                    <span class="material-symbols-outlined light-icon">light_mode</span>
                </button>
            </div>
        </div>
    </header>

    <main style="padding: 32px 24px;">
        <!-- Account Bento -->
        <div class="stagger-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 36px;">
            <a href="?page=orders" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 32px; padding: 28px; text-decoration: none; color: inherit; transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);" class="bento-card">
                <div style="width: 48px; height: 48px; background: var(--bg-main); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; border: 1px solid var(--border-color);">
                    <span class="material-symbols-outlined" style="color: var(--primary); font-size: 26px;">shopping_bag</span>
                </div>
                <p style="font-size: 16px; font-weight: 900; letter-spacing: -0.01em;">My Orders</p>
                <p style="font-size: 12px; color: var(--text-muted); font-weight: 700; margin-top: 6px; text-transform: uppercase;">1 Transmission</p>
            </a>
            <a href="?page=favorites" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 32px; padding: 28px; text-decoration: none; color: inherit; transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);" class="bento-card">
                <div style="width: 48px; height: 48px; background: var(--bg-main); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; border: 1px solid var(--border-color);">
                    <span class="material-symbols-outlined" style="color: var(--red); font-size: 26px;">favorite</span>
                </div>
                <p style="font-size: 16px; font-weight: 900; letter-spacing: -0.01em;">Favorites</p>
                <p style="font-size: 12px; color: var(--text-muted); font-weight: 700; margin-top: 6px; text-transform: uppercase;">12 Archived</p>
            </a>
        </div>

        <!-- List Menu -->
        <div class="stagger-3" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 40px; overflow: hidden; box-shadow: var(--shadow-sm);">
            <a href="?page=payment" class="profile-menu-v2" style="padding: 24px 28px;">
                <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">
                    <span class="material-symbols-outlined" style="font-size: 22px;">credit_card</span>
                </div>
                <span style="font-weight: 900; font-size: 16px; letter-spacing: -0.01em;">Wallet & Fiscal Hub</span>
                <span class="material-symbols-outlined" style="font-size: 20px;">chevron_right</span>
            </a>
            <a href="?page=addresses" class="profile-menu-v2" style="border-top: 1.5px solid var(--border-color); padding: 24px 28px;">
                <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">
                    <span class="material-symbols-outlined" style="font-size: 22px;">location_on</span>
                </div>
                <span style="font-weight: 900; font-size: 16px; letter-spacing: -0.01em;">Saved Locations</span>
                <span class="material-symbols-outlined" style="font-size: 20px;">chevron_right</span>
            </a>
            <a href="?page=rewards" class="profile-menu-v2" style="border-top: 1.5px solid var(--border-color); padding: 24px 28px;">
                <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">
                    <span class="material-symbols-outlined" style="font-size: 22px; color: gold;">stars</span>
                </div>
                <span style="font-weight: 900; font-size: 16px; letter-spacing: -0.01em;">Loyalty & Coins</span>
                <span class="material-symbols-outlined" style="font-size: 20px;">chevron_right</span>
            </a>
            <a href="?page=support" class="profile-menu-v2" style="border-top: 1.5px solid var(--border-color); padding: 24px 28px;">
                <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">
                    <span class="material-symbols-outlined" style="font-size: 22px;">flag</span>
                </div>
                <span style="font-weight: 900; font-size: 16px; letter-spacing: -0.01em;">Concierge Support</span>
                <span class="material-symbols-outlined" style="font-size: 20px;">chevron_right</span>
            </a>
        </div>

        <!-- Logout Section -->
        <div class="stagger-4" style="margin-top: 60px; text-align: center; padding-bottom: 120px;">
            <a href="?page=welcome" class="logout-link" style="justify-content: center; background: rgba(255, 77, 79, 0.08); padding: 22px; border-radius: 28px; border: 1.5px solid rgba(255, 77, 79, 0.15); margin: 0 10px; text-decoration: none;">
                <span class="material-symbols-outlined" style="font-weight: 950; color: var(--red);">logout</span>
                <span style="letter-spacing: 0.05em; font-weight: 950; color: var(--red); text-transform: uppercase; font-size: 13px;">TERMINATE PROTOCOL</span>
            </a>
            <div style="margin-top: 40px;">
                 <p style="font-size: 12px; color: var(--text-muted); font-weight: 900; text-transform: uppercase; letter-spacing: 0.2em;">FreshGo Cloud v3.4.2</p>
                 <p style="font-size: 10px; color: var(--primary); font-weight: 950; margin-top: 6px; text-transform: uppercase;">Quantum Encrypted Session</p>
            </div>
        </div>
    </main>
</div>
