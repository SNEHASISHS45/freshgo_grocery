<div class="view-enter" style="min-height: 100vh; display: flex; flex-direction: column; position: relative; overflow: hidden;">
    <!-- Hero Image -->
    <div style="height: 55vh; position: relative;">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=800" alt="Fresh vegetables" style="width: 100%; height: 100%; object-fit: cover;">
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 30%, rgba(5,5,5,0.8) 70%, var(--bg-deep) 100%);"></div>
    </div>

    <!-- Content -->
    <div style="flex: 1; padding: 0 32px 48px; margin-top: -80px; position: relative; z-index: 10;">
        <h1 style="font-size: 36px; font-weight: 900; line-height: 1.1; margin-bottom: 16px; text-align: center;">
            Freshness at your <br><span style="color: var(--primary); font-style: italic;">doorstep</span>
        </h1>
        <p style="font-size: 15px; color: var(--zinc-400); text-align: center; line-height: 1.6; margin-bottom: 40px;">
            Premium organic produce and essentials. Hand-picked and delivered in under 30 minutes.
        </p>

        <!-- Dots Indicator -->
        <div style="display: flex; justify-content: center; gap: 8px; margin-bottom: 48px;">
            <div style="width: 24px; height: 6px; background: var(--primary); border-radius: 50px; box-shadow: 0 0 10px rgba(57, 255, 20, 0.5);"></div>
            <div style="width: 6px; height: 6px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
            <div style="width: 6px; height: 6px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
        </div>

        <!-- Get Started Button -->
        <a href="?page=signup" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; height: 56px; background: var(--primary); color: #000; border-radius: 16px; font-size: 16px; font-weight: 800; text-decoration: none; box-shadow: 0 10px 30px rgba(57, 255, 20, 0.2);">
            Get Started
            <span class="material-symbols-outlined" style="font-size: 20px;">arrow_forward</span>
        </a>

        <!-- Sign In Link -->
        <p style="text-align: center; margin-top: 24px; font-size: 14px; color: var(--zinc-500);">
            Already have an account? <a href="?page=login" style="color: var(--primary); font-weight: 700; text-decoration: none;">Sign In</a>
        </p>
    </div>

    <!-- Skip Button -->
    <div style="position: absolute; top: 24px; right: 24px; z-index: 20;">
        <a href="?page=home" style="font-size: 14px; color: rgba(255,255,255,0.5); text-decoration: none; font-weight: 700;">SKIP</a>
    </div>
</div>
