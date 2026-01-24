<div class="view-enter" style="padding-bottom: 100px;">
    <header class="cart-header">
        <a href="?page=profile" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
        <h1 class="cart-title">Settings</h1>
        <div style="width: 24px;"></div>
    </header>

    <main style="padding: 24px;">
        <!-- Account Section -->
        <div style="margin-bottom: 32px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 16px;">Account</p>
            
            <div style="display: flex; flex-direction: column; gap: 4px;">
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">person</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Edit Profile</span>
                    </div>
                    <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                </div>
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">lock</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Change Password</span>
                    </div>
                    <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                </div>
            </div>
        </div>

        <!-- Notifications Section -->
        <div style="margin-bottom: 32px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 16px;">Notifications</p>
            
            <div style="display: flex; flex-direction: column; gap: 4px;">
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">notifications</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Push Notifications</span>
                    </div>
                    <label style="position: relative; width: 48px; height: 28px;">
                        <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                        <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background: var(--primary); border-radius: 28px; transition: 0.3s;">
                            <span style="position: absolute; content: ''; height: 22px; width: 22px; left: 23px; bottom: 3px; background: white; border-radius: 50%; transition: 0.3s;"></span>
                        </span>
                    </label>
                </div>
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">mail</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Email Updates</span>
                    </div>
                    <label style="position: relative; width: 48px; height: 28px;">
                        <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                        <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background: var(--zinc-700); border-radius: 28px; transition: 0.3s;">
                            <span style="position: absolute; content: ''; height: 22px; width: 22px; left: 3px; bottom: 3px; background: white; border-radius: 50%; transition: 0.3s;"></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Preferences Section -->
        <div style="margin-bottom: 32px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 16px;">Preferences</p>
            
            <div style="display: flex; flex-direction: column; gap: 4px;">
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">translate</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Language</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 12px; color: var(--zinc-500);">English</span>
                        <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                    </div>
                </div>
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">dark_mode</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Dark Mode</span>
                    </div>
                    <label style="position: relative; width: 48px; height: 28px;">
                        <input type="checkbox" checked style="opacity: 0; width: 0; height: 0;">
                        <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background: var(--primary); border-radius: 28px; transition: 0.3s;">
                            <span style="position: absolute; content: ''; height: 22px; width: 22px; left: 23px; bottom: 3px; background: white; border-radius: 50%; transition: 0.3s;"></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div style="margin-bottom: 32px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 16px;">About</p>
            
            <div style="display: flex; flex-direction: column; gap: 4px;">
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">description</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Terms & Conditions</span>
                    </div>
                    <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                </div>
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">privacy_tip</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">Privacy Policy</span>
                    </div>
                    <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                </div>
                <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">info</span>
                        <span style="font-size: 14px; font-weight: 600; color: var(--white);">App Version</span>
                    </div>
                    <span style="font-size: 12px; color: var(--zinc-500);">v2.1.0</span>
                </div>
            </div>
        </div>

        <!-- Logout Button -->
        <button onclick="window.location.href='?page=login'" style="width: 100%; height: 56px; background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 16px; color: #ef4444; font-size: 16px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
            <span class="material-symbols-outlined">logout</span>
            Log Out
        </button>
    </main>
</div>
