<div class="view-enter" style="min-height: 100vh; display: flex; flex-direction: column;">
    <!-- Background Decoration -->
    <div style="position: absolute; top: 0; right: 0; width: 200px; height: 200px; background: rgba(57, 255, 20, 0.1); border-radius: 50%; filter: blur(80px); pointer-events: none;"></div>
    
    <header style="padding: 48px 24px 24px; text-align: center;">
        <div style="width: 64px; height: 64px; background: rgba(57, 255, 20, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px;">
            <span class="material-symbols-outlined" style="color: var(--primary); font-size: 32px;">eco</span>
        </div>
        <h1 style="font-size: 28px; font-weight: 900; margin-bottom: 8px;">Welcome Back</h1>
        <p style="font-size: 14px; color: var(--zinc-500);">Freshness awaits you</p>
    </header>

    <main style="flex: 1; padding: 24px;">
        <form onsubmit="event.preventDefault(); window.location.href='?page=home';" style="display: flex; flex-direction: column; gap: 20px;">
            <!-- Email -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Email Address</label>
                <input type="email" placeholder="Enter your email" style="width: 100%; height: 56px; padding: 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
            </div>

            <!-- Password -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Password</label>
                <div style="position: relative;">
                    <input type="password" id="loginPassword" placeholder="Enter your password" style="width: 100%; height: 56px; padding: 0 48px 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;">
                    <button type="button" onclick="togglePassword('loginPassword')" style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); background: none; border: none; color: var(--zinc-500); cursor: pointer;">
                        <span class="material-symbols-outlined">visibility</span>
                    </button>
                </div>
            </div>

            <!-- Forgot Password -->
            <div style="text-align: right;">
                <a href="?page=forgot" style="font-size: 14px; color: var(--primary); font-weight: 700; text-decoration: none;">Forgot Password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit" style="width: 100%; height: 56px; background: var(--primary); color: #000; border: none; border-radius: 16px; font-size: 16px; font-weight: 800; cursor: pointer; margin-top: 8px;">
                Login
            </button>

            <!-- Divider -->
            <div style="display: flex; align-items: center; gap: 16px; margin: 16px 0;">
                <div style="flex: 1; height: 1px; background: rgba(255,255,255,0.1);"></div>
                <span style="font-size: 12px; color: var(--zinc-500);">Or continue with</span>
                <div style="flex: 1; height: 1px; background: rgba(255,255,255,0.1);"></div>
            </div>

            <!-- Social Login -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                <button type="button" style="height: 56px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; color: var(--white); font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <span style="font-size: 20px;">G</span> Google
                </button>
                <button type="button" style="height: 56px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; color: var(--white); font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <span class="material-symbols-outlined">phone_iphone</span> Apple
                </button>
            </div>
        </form>
    </main>

    <!-- Sign Up Footer -->
    <footer style="padding: 24px; text-align: center;">
        <p style="font-size: 14px; color: var(--zinc-500);">
            Don't have an account? 
            <a href="?page=signup" style="color: var(--primary); font-weight: 700; text-decoration: none;">Sign Up</a>
        </p>
    </footer>
</div>

<script>
function togglePassword(id) {
    const input = document.getElementById(id);
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>
