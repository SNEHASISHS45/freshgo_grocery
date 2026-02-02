<div class="view-enter about-page-v3" style="background: var(--bg-secondary); min-height: 100vh; padding-bottom: 120px;">
    <!-- Neo-Premium About Header -->
    <header style="background: var(--bg-main); padding: 24px 20px; border-bottom: 2px solid var(--border-subtle); display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm); position: sticky; top: 0; z-index: 1000;">
        <div style="display: flex; align-items: center; gap: 16px;">
            <button class="icon-btn-v3" onclick="history.back()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
                <i data-lucide="chevron-left" style="color: var(--text-primary); width: 24px; height: 24px;"></i>
            </button>
            <div>
                <h1 style="font-size: 20px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">About Protocol</h1>
                <p style="font-size: 11px; color: var(--brand-primary); font-weight: 850; text-transform: uppercase; margin-top: 2px;">Version 4.0.0 Stable</p>
            </div>
        </div>
        <button class="icon-btn-v3" onclick="toggleTheme()" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 14px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="moon" class="light-icon" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
            <i data-lucide="sun" class="dark-icon" style="color: var(--text-primary); width: 22px; height: 22px;"></i>
        </button>
    </header>

    <main style="padding: 32px 20px;">
        <!-- Logo Island -->
        <div style="text-align: center; margin-bottom: 48px;">
            <div style="width: 100px; height: 100px; background: var(--brand-primary); border-radius: 32px; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; box-shadow: var(--shadow-lg); border: 4px solid var(--bg-main);">
                <i data-lucide="zap" style="color: #000; width: 50px; height: 50px; fill: #000;"></i>
            </div>
            <h2 style="font-size: 28px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.03em;">FreshGo Premium</h2>
            <p style="font-size: 14px; color: var(--text-secondary); font-weight: 700; margin-top: 8px;">Redefining Logistics. Re-engineered for Speed.</p>
        </div>

        <!-- Mission Island -->
        <div style="background: var(--bg-tile); border-radius: 28px; padding: 28px; border: 1.5px solid var(--border-color); margin-bottom: 32px; box-shadow: var(--shadow-sm); position: relative; overflow: hidden;">
            <div style="position: absolute; top: -10px; right: -10px; width: 80px; height: 80px; background: var(--brand-primary); border-radius: 50%; opacity: 0.1; filter: blur(30px);"></div>
            <h3 style="font-size: 16px; font-weight: 900; color: var(--text-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                <i data-lucide="target" style="color: var(--brand-primary); width: 20px; height: 20px;"></i>
                The Mission Hub
            </h3>
            <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; font-weight: 600;">
                FreshGo was architected with a singular objective: to bridge the gap between farm-gate quality and doorstep convenience in under 12 minutes. Our neural delivery network ensures that every item is captured at its peak freshness and transmitted to your location with zero latency.
            </p>
        </div>

        <!-- Tech Stack Island -->
        <h3 style="font-size: 13px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin: 0 0 16px 12px;">System Architecture</h3>
        <div style="background: var(--bg-tile); border-radius: 28px; border: 1px solid var(--border-color); overflow: hidden; margin-bottom: 32px; box-shadow: var(--shadow-sm);">
            <div style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 40px; height: 40px; background: var(--cat-dairy); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="activity" style="color: #3B71FE; width: 20px; height: 20px;"></i>
                </div>
                <div>
                    <span style="font-size: 14px; font-weight: 850; color: var(--text-primary); display: block;">GSAP Motion Engine</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Fluid Transitions & Kinetic Feedback</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 16px; padding: 18px 20px; border-bottom: 1px solid var(--border-subtle);">
                <div style="width: 40px; height: 40px; background: var(--cat-fruits); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="database" style="color: #F8912D; width: 20px; height: 20px;"></i>
                </div>
                <div>
                    <span style="font-size: 14px; font-weight: 850; color: var(--text-primary); display: block;">State Synchronization</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Real-time AJAX Inventory Protocol</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 16px; padding: 18px 20px;">
                <div style="width: 40px; height: 40px; background: var(--cat-veggies); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i data-lucide="shield-check" style="color: var(--brand-primary); width: 20px; height: 20px;"></i>
                </div>
                <div>
                    <span style="font-size: 14px; font-weight: 850; color: var(--text-primary); display: block;">Secure Gateways</span>
                    <span style="font-size: 11px; color: var(--text-muted); font-weight: 700;">Encrypted Transaction Clearance</span>
                </div>
            </div>
        </div>

        <!-- Footer Credits -->
        <div style="text-align: center; margin-top: 48px;">
            <p style="font-size: 12px; color: var(--text-muted); font-weight: 700;">Designed with <i data-lucide="heart" style="width: 14px; height: 14px; color: var(--brand-accent); fill: var(--brand-accent); display: inline-block; vertical-align: middle;"></i> for the Future of Commerce Hub.</p>
            <p style="font-size: 11px; color: var(--text-muted); font-weight: 800; text-transform: uppercase; margin-top: 8px; letter-spacing: 0.05em;">&copy; 2026 FreshGo Technologies Ltd.</p>
        </div>
    </main>
</div>
