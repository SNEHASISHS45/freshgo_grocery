<div class="view-enter notifications-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between; animation: viewEnter 0.5s ease forwards; opacity: 0;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 800; letter-spacing: -0.01em;">Notifications</h1>
             <button style="background: none; border: none; color: var(--primary); font-size: 11px; font-weight: 900; text-transform: uppercase;">Clear All</button>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <!-- Today Section -->
        <div class="stagger-2" style="margin-bottom: 32px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.1s;">
            <p style="font-size: 10px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">Priority Intel</p>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div style="background: var(--bg-secondary); border: 1.5px solid var(--primary); border-radius: 32px; padding: 24px; display: flex; gap: 20px; box-shadow: var(--neon-shadow);">
                    <div style="width: 52px; height: 52px; background: var(--primary); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #000; box-shadow: var(--neon-shadow);">
                        <span class="material-symbols-outlined filled" style="font-size: 26px;">pedal_bike</span>
                    </div>
                    <div style="flex: 1;">
                        <h4 style="font-size: 15px; font-weight: 900; margin-bottom: 6px; letter-spacing: -0.01em;">Order Incoming</h4>
                        <p style="font-size: 12px; color: var(--text-muted); font-weight: 700; line-height: 1.5;">Ramesh is 8 mins away with your farm-fresh inventory. Order #FG-8291</p>
                        <div style="display: flex; align-items: center; gap: 6px; margin-top: 10px;">
                             <span style="font-size: 10px; color: var(--primary); font-weight: 900; background: var(--primary-light); padding: 4px 10px; border-radius: 50px;">LIVE TRACKING</span>
                             <span style="font-size: 10px; color: var(--text-muted); font-weight: 800;">JUST NOW</span>
                        </div>
                    </div>
                </div>

                <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 32px; padding: 24px; display: flex; gap: 20px; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                    <div style="width: 52px; height: 52px; background: var(--bg-main); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--primary); border: 1px solid var(--border-color);">
                        <span class="material-symbols-outlined filled" style="font-size: 24px;">rewarded_ads</span>
                    </div>
                    <div style="flex: 1;">
                        <h4 style="font-size: 15px; font-weight: 900; margin-bottom: 6px; letter-spacing: -0.01em;">50 Coins Credited</h4>
                        <p style="font-size: 12px; color: var(--text-muted); font-weight: 700; line-height: 1.5;">FreshGo Coins deposited for your premium purchase. Check rewards vault.</p>
                        <p style="font-size: 10px; color: var(--text-muted); margin-top: 10px; font-weight: 800;">2H AGO</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yesterday Section -->
        <div class="stagger-3" style="margin-bottom: 32px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
            <p style="font-size: 10px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">Past Archives</p>
            <div style="display: flex; flex-direction: column; gap: 16px; padding-bottom: 80px;">
                <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 28px; padding: 20px; display: flex; gap: 16px; opacity: 0.8;">
                    <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--primary);">
                        <span class="material-symbols-outlined" style="font-size: 20px;">task_alt</span>
                    </div>
                    <div style="flex: 1;">
                        <h4 style="font-size: 14px; font-weight: 850; margin-bottom: 4px;">Mission Complete</h4>
                        <p style="font-size: 12px; color: var(--text-muted); font-weight: 700;">Order #FG-8290 successfully delivered at 03:45 PM</p>
                    </div>
                </div>

                <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 28px; padding: 20px; display: flex; gap: 16px; opacity: 0.8;">
                    <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--red);">
                        <span class="material-symbols-outlined" style="font-size: 20px;">priority_high</span>
                    </div>
                    <div style="flex: 1;">
                        <h4 style="font-size: 14px; font-weight: 850; margin-bottom: 4px;">Flash Protocol</h4>
                        <p style="font-size: 12px; color: var(--text-muted); font-weight: 700;">Save 30% on seasonal Indian Mangoes tonight!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
