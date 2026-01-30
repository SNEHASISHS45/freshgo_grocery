<div class="view-enter orders-v3" style="background: var(--bg-secondary); min-height: 100vh; padding-bottom: 120px;">
    <!-- Neo-Premium Orders Header -->
    <header style="background: var(--bg-main); padding: 16px 16px 20px; position: sticky; top: 0; z-index: 1000; box-shadow: var(--shadow-sm); border-bottom: 1px solid var(--border-subtle);">
         <div style="display: flex; align-items: center; justify-content: space-between;">
             <div style="display: flex; align-items: center; gap: 14px;">
                <button class="icon-btn-v3" onclick="history.back()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                    <span class="material-symbols-outlined" style="color: var(--text-primary); font-size: 24px;">chevron_left</span>
                </button>
                <h1 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Order History</h1>
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
         </div>
    </header>

    <main style="padding: 20px 16px;">
        <!-- Filter Hub -->
        <div class="no-scrollbar" style="display: flex; gap: 10px; margin-bottom: 24px; overflow-x: auto; padding-bottom: 4px;">
            <div style="background: var(--brand-primary); color: #000; padding: 10px 24px; border-radius: 14px; font-size: 13px; font-weight: 950; white-space: nowrap; box-shadow: var(--shadow-sm);">Active Protocol</div>
            <div style="background: var(--bg-tile); color: var(--text-secondary); padding: 10px 24px; border-radius: 14px; font-size: 13px; font-weight: 850; white-space: nowrap; border: 1px solid var(--border-color);">Past Orders</div>
            <div style="background: var(--bg-tile); color: var(--text-secondary); padding: 10px 24px; border-radius: 14px; font-size: 13px; font-weight: 850; white-space: nowrap; border: 1px solid var(--border-color);">Returns</div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 18px;">
            <!-- Premium Active Shipment -->
            <div style="background: var(--bg-tile); border-radius: 28px; border: 2px solid var(--brand-primary); padding: 24px; box-shadow: var(--shadow-premium); position: relative; overflow: hidden;">
                <div style="position: absolute; top: -10px; right: -10px; width: 80px; height: 80px; background: var(--brand-primary); border-radius: 50%; opacity: 0.05; filter: blur(30px);"></div>
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; position: relative; z-index: 2;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 8px; background: var(--brand-primary-light); padding: 4px 10px; border-radius: 6px; width: fit-content;">
                            <span style="width: 6px; height: 6px; background: var(--brand-primary); border-radius: 50%; animation: pulse 1.5s infinite;"></span>
                            <span style="font-size: 10px; font-weight: 950; color: var(--brand-primary); text-transform: uppercase; letter-spacing: 0.05em;">Live Tracking Active</span>
                        </div>
                        <h3 style="font-size: 16px; font-weight: 950; color: var(--text-primary); margin-top: 8px;">Order #FG-8291</h3>
                    </div>
                    <span style="font-size: 16px; font-weight: 950; color: var(--text-primary);">₹452.00</span>
                </div>
                
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 24px; background: var(--bg-secondary); padding: 14px; border-radius: 16px; border: 1px solid var(--border-subtle);">
                    <div style="width: 32px; height: 32px; background: var(--brand-primary); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fff;">
                        <span class="material-symbols-outlined" style="font-size: 18px;">timer</span>
                    </div>
                    <div>
                        <p style="font-size: 13px; font-weight: 850; color: var(--text-primary);">ETA: 10 Minutes</p>
                        <p style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Rider is navigating final approach</p>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; position: relative; z-index: 2;">
                    <button onclick="location.href='?page=tracking'" style="flex: 1; height: 50px; background: var(--brand-primary); color: #000; border: none; border-radius: 16px; font-size: 14px; font-weight: 950; text-transform: uppercase; box-shadow: 0 8px 24px rgba(21, 209, 112, 0.3);">Track Live Pro</button>
                    <button style="width: 50px; height: 50px; background: var(--bg-secondary); border: 1.5px solid var(--border-subtle); border-radius: 16px; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="color: var(--text-primary); font-weight: 800;">chevron_right</span>
                    </button>
                </div>
            </div>

            <!-- Past Order Archive -->
            <div style="background: var(--bg-tile); border-radius: 28px; border: 1px solid var(--border-color); padding: 24px; box-shadow: var(--shadow-sm);">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div>
                        <p style="font-size: 11px; font-weight: 850; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">24 Jan 2024 • 05:30 PM</p>
                        <h3 style="font-size: 16px; font-weight: 950; color: var(--text-primary); margin-top: 4px;">Order #FG-8290</h3>
                    </div>
                    <span style="font-size: 16px; font-weight: 950; color: var(--text-primary);">₹820.00</span>
                </div>
                
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 20px;">
                    <div style="width: 24px; height: 24px; background: var(--brand-primary-light); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined filled" style="color: var(--brand-primary); font-size: 16px;">check_circle</span>
                    </div>
                    <span style="font-size: 12px; font-weight: 850; color: var(--text-secondary);">Delivered to Hub Zero</span>
                </div>

                <div style="display: flex; gap: 10px; margin-bottom: 24px;">
                    <div style="width: 48px; height: 48px; background: var(--bg-secondary); border-radius: 12px; border: 1px solid var(--border-subtle); padding: 8px;">
                        <img src="https://images.unsplash.com/photo-1550583724-1255818c09d3?q=80&w=100" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <div style="width: 48px; height: 48px; background: var(--bg-secondary); border-radius: 12px; border: 1px solid var(--border-subtle); padding: 8px;">
                        <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?q=80&w=100" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <div style="width: 48px; height: 48px; border-radius: 12px; border: 1.5px dashed var(--border-color); display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 950; color: var(--text-muted);">+3</div>
                </div>

                <div style="display: flex; gap: 12px;">
                    <button style="flex: 1; height: 44px; background: var(--bg-tile); color: var(--brand-primary); border: 2px solid var(--brand-primary); border-radius: 14px; font-size: 13px; font-weight: 950; text-transform: uppercase;">Reorder Hub</button>
                    <button style="flex: 1; height: 44px; background: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: 14px; font-size: 13px; font-weight: 900;">View Details</button>
                </div>
            </div>
        </div>
    </main>
</div>

