<div class="view-enter" style="min-height: 100vh; display: flex; flex-direction: column;">
    <header style="padding: 32px 24px 24px;">
        <a href="?page=login" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
    </header>

    <main style="flex: 1; padding: 0 24px 24px; display: flex; flex-direction: column;">
        <!-- Icon -->
        <div style="text-align: center; padding: 32px 0;">
            <div style="width: 80px; height: 80px; background: rgba(57, 255, 20, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                <span class="material-symbols-outlined" style="color: var(--primary); font-size: 40px;">lock_reset</span>
            </div>
        </div>

        <h1 style="font-size: 32px; font-weight: 900; text-align: center; margin-bottom: 12px;">Forgot Password?</h1>
        <p style="font-size: 14px; color: var(--zinc-500); text-align: center; margin-bottom: 40px; max-width: 280px; margin-left: auto; margin-right: auto; line-height: 1.6;">
            Enter your email address and we'll send you a link to reset your password.
        </p>

        <form onsubmit="event.preventDefault(); showResetSuccess();" style="display: flex; flex-direction: column; gap: 20px;">
            <!-- Email -->
            <div>
                <label style="display: block; font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 8px; margin-left: 4px;">Email Address</label>
                <input type="email" placeholder="e.g. name@email.com" style="width: 100%; height: 56px; padding: 0 16px; border-radius: 16px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: var(--white); font-size: 14px; outline: none;">
            </div>

            <!-- Send Button -->
            <button type="submit" style="width: 100%; height: 56px; background: var(--primary); color: #000; border: none; border-radius: 16px; font-size: 16px; font-weight: 800; cursor: pointer; margin-top: 8px;">
                Send Reset Link
            </button>
        </form>

        <!-- Success Message (hidden by default) -->
        <div id="resetSuccess" style="display: none; margin-top: 24px; padding: 24px; background: rgba(57, 255, 20, 0.05); border: 1px solid rgba(57, 255, 20, 0.2); border-radius: 16px; text-align: center;">
            <span class="material-symbols-outlined" style="color: var(--primary); font-size: 32px; margin-bottom: 12px;">check_circle</span>
            <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 8px;">Link Sent!</h3>
            <p style="font-size: 13px; color: var(--zinc-500);">Please check your email inbox (and spam folder) for instructions.</p>
        </div>

        <!-- Footer Link -->
        <div style="margin-top: auto; padding-top: 40px; text-align: center;">
            <p style="font-size: 13px; color: var(--zinc-500); margin-bottom: 16px;">Didn't receive the email?</p>
            <button onclick="showResetSuccess()" style="background: none; border: none; color: var(--primary); font-size: 14px; font-weight: 700; cursor: pointer;">Resend link</button>
        </div>
    </main>

    <!-- Back to Login -->
    <footer style="padding: 24px; text-align: center;">
        <a href="?page=login" style="font-size: 14px; color: var(--white); font-weight: 700; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 4px;">
            <span class="material-symbols-outlined" style="font-size: 18px;">arrow_back</span>
            Back to Sign In
        </a>
    </footer>
</div>

<script>
function showResetSuccess() {
    document.getElementById('resetSuccess').style.display = 'block';
    showToast('Reset link sent!');
}
</script>
