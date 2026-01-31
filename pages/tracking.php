<div class="view-enter tracking-v3" style="background: var(--bg-main); min-height: 100vh; display: flex; flex-direction: column;">
    <!-- Map Area (Full Screen) -->
    <div style="position: fixed; inset: 0; background: var(--bg-secondary); z-index: 1;">
         <img src="assets/neo_map.png" alt="Map" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; filter: contrast(1.1);">
         
         <header style="position: absolute; top: 0; left: 0; width: 100%; padding: 16px; display: flex; align-items: center; justify-content: space-between; z-index: 10;">
             <button onclick="location.href='?page=home'" style="width: 44px; height: 44px; border-radius: 14px; background: var(--bg-tile); border: 1px solid var(--border-subtle); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-md); backdrop-filter: blur(10px);">
                 <i data-lucide="x" style="color: var(--text-primary); width: 24px; height: 24px;"></i>
             </button>
             <button onclick="toggleTheme()" style="width: 44px; height: 44px; border-radius: 14px; background: var(--bg-tile); border: 1px solid var(--border-subtle); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-md); backdrop-filter: blur(10px);">
                <i data-lucide="moon" class="light-icon" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
                <i data-lucide="sun" class="dark-icon" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
             </button>
         </header>

         <!-- Rider Indicator -->
         <div style="position: absolute; top: 40%; left: 50%; width: 56px; height: 56px; background: var(--brand-primary); border-radius: 20px; border: 3px solid #fff; display: flex; align-items: center; justify-content: center; box-shadow: 0 12px 32px rgba(21, 209, 112, 0.4); transform: translate(-50%, -50%);">
            <i data-lucide="bike" style="color: #000; width: 28px; height: 28px;"></i>
            <div style="position: absolute; inset: -15px; border: 2px solid var(--brand-primary); border-radius: 50%; opacity: 0.5; animation: pulse-ring 2s infinite;"></div>
         </div>
    </div>

    <!-- Neo-Bottom Sheet -->
    <div style="position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); width: 100%; max-width: 430px; background: var(--bg-main); border-radius: 36px 36px 0 0; padding: 24px 20px 48px; z-index: 100; box-shadow: 0 -12px 48px rgba(0,0,0,0.12); border-top: 1px solid var(--border-subtle);">
        <div style="width: 48px; height: 6px; background: var(--border-subtle); border-radius: 3px; margin: 0 auto 28px;"></div>
        
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 28px;">
            <div>
                <h2 style="font-size: 24px; font-weight: 950; color: var(--text-primary); line-height: 1.1; letter-spacing: -0.02em;">Arriving Hub: <span style="color: var(--brand-primary);">8-10 Mins</span></h2>
                <p style="font-size: 13px; color: var(--text-secondary); font-weight: 700; margin-top: 6px;">Protocol active. Ramesh is navigating your route.</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <button class="icon-btn-v3" style="width: 48px; height: 48px; border-radius: 16px; background: var(--bg-secondary); border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="phone" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
                </button>
                 <button class="icon-btn-v3" style="width: 48px; height: 48px; border-radius: 16px; background: var(--bg-secondary); border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="message-square" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
                </button>
            </div>
        </div>

        <!-- Progress Milestones Island -->
        <div style="background: var(--bg-secondary); border-radius: 28px; padding: 20px; border: 1px solid var(--border-subtle); margin-bottom: 28px;">
            <div style="display: flex; gap: 16px; align-items: flex-start; margin-bottom: 20px; position: relative;">
                <div style="width: 28px; height: 28px; border-radius: 50%; background: var(--brand-primary); display: flex; align-items: center; justify-content: center; z-index: 2; box-shadow: 0 4px 12px rgba(21, 209, 112, 0.2);">
                    <i data-lucide="check" style="color: #000; width: 16px; height: 16px;"></i>
                </div>
                <div style="flex: 1;">
                    <p style="font-size: 15px; font-weight: 900; color: var(--text-primary);">Logistics Triggered</p>
                    <p style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Inventory dispatched from Hub Alpha</p>
                </div>
                <!-- Vertical Line Connector -->
                <div style="position: absolute; top: 28px; left: 14px; width: 2px; height: calc(100% + 4px); background: var(--brand-primary); opacity: 1;"></div>
            </div>
            <div style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="width: 28px; height: 28px; border-radius: 50%; background: var(--brand-primary-light); display: flex; align-items: center; justify-content: center; position: relative; z-index: 2;">
                   <div style="width: 10px; height: 10px; background: var(--brand-primary); border-radius: 50%;"></div>
                </div>
                <div style="flex: 1;">
                    <p style="font-size: 15px; font-weight: 900; color: var(--text-primary);">Rider Transmitting</p>
                    <p style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Real-time sync active for final approach</p>
                </div>
                <span style="font-size: 10px; font-weight: 950; color: var(--brand-primary); background: var(--brand-primary-light); padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">Live</span>
            </div>
        </div>

        <!-- Rider Profile Card Island -->
        <div style="background: var(--bg-tile); border-radius: 24px; padding: 18px; display: flex; align-items: center; gap: 16px; border: 1.5px solid var(--border-color); box-shadow: var(--shadow-sm);">
            <div style="width: 54px; height: 54px; background: var(--bg-secondary); border-radius: 16px; overflow: hidden; border: 1px solid var(--border-subtle); padding: 4px;">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ramesh" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="flex: 1;">
                <h4 style="font-size: 16px; font-weight: 900; color: var(--text-primary);">Ramesh Kumar</h4>
                <div style="display: flex; align-items: center; gap: 6px; margin-top: 2px;">
                    <i data-lucide="star" style="color: #FFCC00; width: 15px; height: 15px; fill: #FFCC00;"></i>
                    <span style="font-size: 12px; font-weight: 800; color: var(--text-secondary);">4.9 Hub Rating</span>
                </div>
            </div>
            <div style="text-align: right;">
                 <p style="font-size: 10px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Rider Tip</p>
                 <button style="border: none; background: none; font-size: 14px; font-weight: 950; color: var(--brand-primary); margin-top: 2px;">ADD ₹20</button>
            </div>
        </div>
    </div>
</div>


<style>
@keyframes pulse-ring {
  0% { transform: scale(0.8); opacity: 0.5; }
  100% { transform: scale(1.5); opacity: 0; }
}
</style>

<style>
@keyframes riderPing {
  0% { transform: translate(-50%, -50%) scale(0.5); opacity: 0.6; }
  100% { transform: translate(-50%, -50%) scale(1.6); opacity: 0; }
}
</style>
