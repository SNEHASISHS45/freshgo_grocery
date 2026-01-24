<div class="view-enter forgot-v3" style="background: var(--bg-main); min-height: 100vh; display: flex; flex-direction: column;">
    <header style="padding: 32px 24px 20px;">
        <button class="icon-btn-v3 glass" onclick="location.href='?page=login'">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </button>
    </header>

    <main style="flex: 1; padding: 0 24px 24px; display: flex; flex-direction: column; align-items: center; text-align: center;">
        <div style="width: 100px; height: 100px; background: var(--bg-secondary); border-radius: 32px; display: flex; align-items: center; justify-content: center; margin: 40px auto 32px; box-shadow: var(--shadow-sm); border: 1px solid var(--border-color);">
            <span class="material-symbols-outlined" style="color: var(--primary); font-size: 48px; font-weight: 800;">key_visualizer</span>
        </div>

        <h1 style="font-size: 32px; font-weight: 900; margin-bottom: 12px; letter-spacing: -0.02em;">Account Recovery</h1>
        <p style="font-size: 15px; color: var(--text-muted); font-weight: 600; line-height: 1.6; max-width: 300px; margin-bottom: 40px;">
            Enter your authenticated email and we'll transmit a secure reset vector.
        </p>

        <form onsubmit="event.preventDefault(); showResetSuccess();" style="width: 100%; display: flex; flex-direction: column; gap: 24px;">
            <div class="input-group-v3" style="text-align: left;">
                <label style="display: block; font-size: 11px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 10px; margin-left: 4px;">Primary Email</label>
                <div style="position: relative;">
                    <span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: var(--primary); size: 20px;">alternate_email</span>
                    <input type="email" placeholder="alex@vault.com" style="width: 100%; height: 64px; padding: 0 24px 0 56px; border-radius: 20px; background: var(--bg-secondary); border: 1px solid var(--border-color); color: var(--text-primary); font-size: 15px; font-weight: 600; outline: none; transition: all 0.3s; box-shadow: var(--shadow-sm);" onfocus="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--neon-shadow)'" onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='var(--shadow-sm)'">
                </div>
            </div>

            <button type="submit" class="neon-btn" style="width: 100%; height: 64px; background: var(--primary); color: #000; border: none; border-radius: 20px; font-size: 18px; font-weight: 900; cursor: pointer; margin-top: 8px;">
                Request Reset
            </button>
        </form>

        <!-- Success Message -->
        <div id="resetSuccess" style="display: none; margin-top: 32px; width: 100%; padding: 24px; background: var(--primary-light); border: 1px solid var(--primary); border-radius: 24px; box-shadow: var(--neon-shadow);">
            <div style="display: flex; align-items: center; gap: 12px; justify-content: center; margin-bottom: 12px;">
                 <span class="material-symbols-outlined filled" style="color: var(--primary); font-size: 24px;">verified</span>
                 <h3 style="font-size: 16px; font-weight: 800; color: var(--primary);">Link Transmitted</h3>
            </div>
            <p style="font-size: 13px; color: var(--text-muted); font-weight: 700; line-height: 1.5;">Check your secure inbox for instructions. Verification link expires in 15m.</p>
        </div>

        <div style="margin-top: auto; padding-top: 40px; padding-bottom: 40px;">
             <p style="font-size: 14px; color: var(--text-muted); font-weight: 700;">Didn't get the secure link?</p>
             <button onclick="showResetSuccess()" style="background: none; border: none; color: var(--primary); font-size: 14px; font-weight: 900; cursor: pointer; margin-top: 8px;">Protocol: Resend Link</button>
        </div>
    </main>
</div>

<script>
function showResetSuccess() {
    document.getElementById('resetSuccess').style.display = 'block';
    if(typeof showToast === 'function') showToast('Reset link sent!');
}
</script>
