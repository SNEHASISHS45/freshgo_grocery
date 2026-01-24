<div class="view-enter tracking-v3" style="background: var(--bg-main); min-height: 100vh; display: flex; flex-direction: column;">
    <!-- Map Background Area -->
    <div class="stagger-1" style="flex: 1; position: relative; background: #ccdce1;">
        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1200" alt="Map" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9; filter: contrast(1.1) grayscale(0.2);">
        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.1), transparent 40%, rgba(0,0,0,0.05));"></div>

        <!-- Premium Navigation Header -->
        <header class="home-header-v3" style="background: transparent; position: absolute; width: 100%; border: none; z-index: 20;">
            <div class="header-top-row" style="padding: 0 24px;">
                <button class="icon-btn-v3 glass" onclick="location.href='?page=home'" style="background: rgba(255,255,255,0.8);">
                    <span class="material-symbols-outlined" style="color: #000; font-weight: 850;">close</span>
                </button>
                <div style="background: rgba(255,255,255,0.9); backdrop-filter: blur(16px); padding: 10px 24px; border-radius: 50px; border: 1.5px solid white; box-shadow: var(--shadow-md);">
                    <p style="font-size: 13px; font-weight: 950; color: #000; text-transform: uppercase; letter-spacing: 0.05em;">TRACKING FG-8291</p>
                </div>
                <div style="width: 44px;"></div>
            </div>
        </header>

        <!-- Dynamic Rider Pulse Marker -->
        <div style="position: absolute; top: 45%; left: 52%; transform: translate(-50%, -50%); transition: all 1s ease-in-out;">
            <div style="width: 56px; height: 56px; background: var(--primary); border-radius: 20px; border: 4px solid white; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                <span class="material-symbols-outlined" style="color: #000; font-size: 32px; font-weight: 950;">pedal_bike</span>
            </div>
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 120px; height: 120px; background: var(--primary); border-radius: 50%; opacity: 0.3; animation: riderPing 2s infinite;"></div>
        </div>
        
        <!-- Delivery Goal Marker -->
        <div style="position: absolute; bottom: 20%; left: 20%;">
            <div style="width: 40px; height: 40px; background: #000; border-radius: 50%; border: 3px solid var(--primary); display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">home</span>
            </div>
        </div>
    </div>

    <!-- Live Status Sheet -->
    <div class="stagger-1" style="background: var(--bg-main); border-radius: 48px 48px 0 0; padding: 48px 24px 60px; position: relative; z-index: 10; margin-top: -48px; box-shadow: 0 -20px 60px rgba(0,0,0,0.15);">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 40px;">
            <div>
                 <p style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.25em; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                     <span style="width: 8px; height: 8px; background: var(--primary); border-radius: 50%; display: inline-block; animation: pulse 2s infinite;"></span>
                     LIVE TRANSMISSION
                 </p>
                 <h2 style="font-size: 32px; font-weight: 950; line-height: 1; letter-spacing: -0.04em;">Arriving in <br><span style="color: var(--primary);">8-10 Mins</span></h2>
            </div>
            <button class="neon-btn" style="width: 64px; height: 64px; background: var(--primary); border: none; border-radius: 20px; color: #000; display: flex; align-items: center; justify-content: center; box-shadow: var(--neon-shadow);">
                <span class="material-symbols-outlined" style="font-weight: 950; font-size: 28px;">call</span>
            </button>
        </div>

        <!-- Progress Timeline -->
        <div class="stepper-v3" style="margin-bottom: 48px;">
            <div class="step-v3 completed">
                <div class="step-icon-v3" style="background: var(--primary); color: #000;"><span class="material-symbols-outlined" style="font-size: 14px; font-weight: 950;">check</span></div>
                <div class="step-info-v3">
                    <h4 style="font-size: 16px; font-weight: 950; letter-spacing: -0.01em;">Order Received</h4>
                    <p style="font-size: 13px; color: var(--text-muted); font-weight: 800;">Confirmed at 04:15 PM</p>
                </div>
            </div>
            <div class="step-v3 completed">
                <div class="step-icon-v3" style="background: var(--primary); color: #000;"><span class="material-symbols-outlined" style="font-size: 14px; font-weight: 950;">check</span></div>
                <div class="step-info-v3">
                    <h4 style="font-size: 16px; font-weight: 950; letter-spacing: -0.01em;">Quality Secured</h4>
                    <p style="font-size: 13px; color: var(--text-muted); font-weight: 800;">Verified by Hub Intel #2</p>
                </div>
            </div>
            <div class="step-v3">
                <div class="step-icon-v3 animate-pulse" style="background: var(--primary); border: 4px solid var(--primary-light);"></div>
                <div class="step-info-v3">
                    <h4 style="font-size: 16px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">Transmission In Progress</h4>
                    <p style="font-size: 13px; color: var(--text-muted); font-weight: 800;">Ramesh is navigating on an EV bike</p>
                </div>
            </div>
        </div>

        <!-- Delivery Partner Profile -->
        <div style="display: flex; align-items: center; gap: 20px; background: var(--bg-secondary); border: 2.3px solid var(--primary); border-radius: 36px; padding: 24px; box-shadow: var(--neon-shadow);">
            <div style="width: 60px; height: 60px; border-radius: 18px; overflow: hidden; background: var(--primary-light); border: 1.5px solid var(--primary);">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ramesh" alt="Rider" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="flex: 1;">
                <p style="font-size: 17px; font-weight: 950; color: var(--text-primary);">Ramesh Kumar</p>
                <div style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 900; margin-top: 2px;">
                     <span class="material-symbols-outlined filled" style="font-size: 16px; color: #FFD700;">grade</span>
                     <span style="color: var(--text-muted);">4.9 • Certified Fresh Agent</span>
                </div>
            </div>
            <button class="icon-btn-v3 glass" style="width: 48px; height: 48px; border-radius: 16px;">
                <span class="material-symbols-outlined" style="font-size: 24px; color: var(--primary);">chat_bubble</span>
            </button>
        </div>
    </div>
</div>

<style>
@keyframes riderPing {
  0% { transform: translate(-50%, -50%) scale(0.5); opacity: 0.6; }
  100% { transform: translate(-50%, -50%) scale(1.6); opacity: 0; }
}
</style>
