<div class="view-enter addresses-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between; animation: viewEnter 0.5s ease forwards; opacity: 0;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 800; letter-spacing: -0.01em;">Saved Addresses</h1>
             <button class="icon-btn-v3 glass">
                 <span class="material-symbols-outlined">add_location_alt</span>
             </button>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <!-- Primary Address -->
        <div class="stagger-2" style="margin-bottom: 32px; animation: viewEnter 0.5s ease forwards; opacity: 0;">
            <p style="font-size: 10px; font-weight: 900; color: var(--primary); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 16px;">Primary Destination</p>
            
            <div style="background: var(--bg-secondary); border: 2.3px solid var(--primary); border-radius: 32px; padding: 24px; box-shadow: var(--neon-shadow);">
                <div style="display: flex; align-items: flex-start; gap: 20px;">
                    <div style="width: 56px; height: 56px; background: var(--primary-light); border-radius: 18px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span class="material-symbols-outlined filled" style="color: var(--primary); font-size: 28px;">home</span>
                    </div>
                    <div style="flex: 1;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                            <h3 style="font-size: 16px; font-weight: 900;">Home</h3>
                            <span class="glass-pill-badge" style="background: var(--primary); color: #000; padding: 2px 10px; font-weight: 900;">ACTIVE</span>
                        </div>
                        <p style="font-size: 14px; color: var(--text-muted); line-height: 1.5; font-weight: 700;">Sector 2, HSR Layout, Bangalore - 560102, Karnataka</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Addresses -->
        <div class="stagger-3" style="animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
            <p style="font-size: 10px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 16px;">Alternative Outposts</p>
            
            <div style="display: flex; flex-direction: column; gap: 16px; padding-bottom: 140px;">
                <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 28px; padding: 24px; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                    <div style="display: flex; align-items: flex-start; gap: 18px;">
                        <div style="width: 48px; height: 48px; background: var(--bg-main); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span class="material-symbols-outlined" style="color: var(--text-muted); font-size: 22px;">work</span>
                        </div>
                        <div style="flex: 1;">
                            <h4 style="font-size: 15px; font-weight: 900; margin-bottom: 4px;">Office (Wework)</h4>
                            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.5; font-weight: 700;">RMZ Ecoworld, Outer Ring Rd, Bellandur, Bangalore</p>
                        </div>
                        <button class="icon-btn-v3 glass" style="width: 36px; height: 36px; border-radius: 12px;">
                            <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
                        </button>
                    </div>
                </div>

                <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 28px; padding: 24px; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                    <div style="display: flex; align-items: flex-start; gap: 18px;">
                        <div style="width: 48px; height: 48px; background: var(--bg-main); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span class="material-symbols-outlined" style="color: var(--text-muted); font-size: 22px;">apartment</span>
                        </div>
                        <div style="flex: 1;">
                            <h4 style="font-size: 15px; font-weight: 900; margin-bottom: 4px;">Gym Outpost</h4>
                            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.5; font-weight: 700;">Cult.fit, 27th Main Rd, Sector 2, HSR Layout</p>
                        </div>
                        <button class="icon-btn-v3 glass" style="width: 36px; height: 36px; border-radius: 12px;">
                            <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Floating Action Button -->
    <footer style="position: fixed; bottom: 32px; left: 50%; transform: translateX(-50%); width: 100%; max-width: 430px; padding: 0 24px; z-index: 100;">
        <button class="neon-btn" style="width: 100%; height: 64px; background: var(--primary); color: #000; border: none; border-radius: 20px; font-size: 16px; font-weight: 950; display: flex; align-items: center; justify-content: center; gap: 12px; box-shadow: var(--neon-shadow);">
            <span class="material-symbols-outlined" style="font-weight: 900;">add_location_alt</span>
            PIN NEW LOCATION
        </button>
    </footer>
</div>
