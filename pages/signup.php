<div class="view-enter" style="min-height: 100vh; display: flex; flex-direction: column;">
    <!-- Background Decoration -->
    <div style="position: absolute; top: 0; right: 0; width: 200px; height: 200px; background: rgba(57, 255, 20, 0.1); border-radius: 50%; filter: blur(80px); pointer-events: none;"></div>
    
    <header style="padding: 32px 24px 24px;">
        <a href="?page=login" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
    </header>

    <main style="flex: 1; padding: 0 24px 24px;">
        <h1 style="font-size: 32px; font-weight: 900; margin-bottom: 8px;">Create Account</h1>
        <p style="font-size: 14px; color: var(--zinc-500); margin-bottom: 32px;">Join FreshGo for farm-fresh groceries</p>

        <form onsubmit="event.preventDefault(); window.location.href='?page=home';" style="display: flex; flex-direction: column; gap: 20px;">
            <!-- Name -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Full Name</label>
                <input type="text" placeholder="Enter your name" style="width: 100%; height: 56px; padding: 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;">
            </div>

            <!-- Email -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Email Address</label>
                <input type="email" placeholder="Enter your email" style="width: 100%; height: 56px; padding: 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;">
            </div>

            <!-- Phone -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Phone Number</label>
                <input type="tel" placeholder="+91 00000 00000" style="width: 100%; height: 56px; padding: 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;">
            </div>

            <!-- Password -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Password</label>
                <input type="password" placeholder="Create a password" style="width: 100%; height: 56px; padding: 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;">
            </div>

            <!-- Terms -->
            <div style="display: flex; align-items: flex-start; gap: 12px;">
                <input type="checkbox" id="terms" style="width: 20px; height: 20px; accent-color: var(--primary); margin-top: 2px;">
                <label for="terms" style="font-size: 13px; color: var(--zinc-400); line-height: 1.5;">
                    I agree to the <a href="#" style="color: var(--primary); text-decoration: none;">Terms of Service</a> and <a href="#" style="color: var(--primary); text-decoration: none;">Privacy Policy</a>
                </label>
            </div>

            <!-- Sign Up Button -->
            <button type="submit" style="width: 100%; height: 56px; background: var(--primary); color: #000; border: none; border-radius: 16px; font-size: 16px; font-weight: 800; cursor: pointer; margin-top: 8px;">
                Create Account
            </button>
        </form>
    </main>

    <!-- Login Footer -->
    <footer style="padding: 24px; text-align: center;">
        <p style="font-size: 14px; color: var(--zinc-500);">
            Already have an account? 
            <a href="?page=login" style="color: var(--primary); font-weight: 700; text-decoration: none;">Login</a>
        </p>
    </footer>
</div>
