<div class="view-enter" style="height: 100vh; display: flex; flex-direction: column; background: var(--bg-main); overflow: hidden;">
    <!-- Premium Image Layer -->
    <div style="flex: 1.5; position: relative; overflow: hidden; border-radius: 0 0 var(--radius-xl) var(--radius-xl);">
        <img src="https://images.unsplash.com/photo-1610832958506-aa56338406cd?q=80&w=1200" alt="Fresh Produce" style="width: 100%; height: 100%; object-fit: cover;">
        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, var(--bg-main) 100%);"></div>
        
        <!-- Floating Logo/Icon Area -->
        <div style="position: absolute; top: 60px; left: 50%; transform: translateX(-50%); width: 80px; height: 80px; background: rgba(57, 255, 20, 0.2); backdrop-filter: blur(20px); border-radius: 24px; border: 1px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-md);">
            <span class="material-symbols-outlined" style="font-size: 40px; color: white;">local_mell</span>
        </div>
    </div>

    <!-- Info/CTA Area -->
    <div style="flex: 1; padding: 40px 32px; display: flex; flex-direction: column; align-items: center; text-align: center;">
        <span style="font-size: 10px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.25em; margin-bottom: 16px;">Namaste! Welcome to FreshGo</span>
        <h1 style="font-size: 34px; font-weight: 900; line-height: 1.1; margin-bottom: 16px; letter-spacing: -0.02em;">
            India's Freshest <br><span style="color: var(--primary);">Quick Commerce</span>
        </h1>
        <p style="font-size: 15px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 40px; max-width: 320px; font-weight: 600;">
            Daily essentials and farm-picked produce delivered to your doorstep in 10 minutes.
        </p>

        <!-- Premium Button -->
        <a href="?page=home" class="neon-btn" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 64px; background: var(--primary); color: #000; border-radius: 20px; font-size: 18px; font-weight: 900; text-decoration: none; margin-bottom: 24px; box-shadow: var(--neon-shadow);">
            Get Started
        </a>

        <a href="?page=login" style="font-size: 14px; color: var(--text-primary); font-weight: 800; text-decoration: none; opacity: 0.8; letter-spacing: 0.02em;">
            Sign in to your account
        </a>
    </div>

    <!-- Theme Toggle -->
    <div style="position: absolute; top: 24px; left: 24px; z-index: 20;">
        <button class="icon-btn-v3 glass theme-toggle-btn" onclick="toggleTheme()" style="background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 50px; padding: 0 16px; width: auto; height: 40px; display: flex; align-items: center; gap: 8px;">
            <span class="material-symbols-outlined dark-icon" style="display: none; font-size: 18px;">dark_mode</span>
            <span class="material-symbols-outlined light-icon" style="font-size: 18px;">light_mode</span>
            <span style="font-size: 11px; font-weight: 900; text-transform: uppercase;">Theme</span>
        </button>
    </div>

    <!-- Skip Button -->
    <div style="position: absolute; top: 24px; right: 24px; z-index: 20;">
        <a href="?page=home" style="font-size: 11px; color: white; text-decoration: none; font-weight: 900; text-transform: uppercase; background: rgba(0,0,0,0.4); padding: 10px 20px; border-radius: 50px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15);">Skip</a>
    </div>
</div>
