<div class="view-enter signup-v3" style="background: var(--bg-main); min-height: 100vh; display: flex; flex-direction: column;">
    <header style="padding: 32px 24px 20px; display: flex; align-items: center; justify-content: space-between;">
        <button class="icon-btn-v3 glass" onclick="location.href='?page=login'">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </button>
        <span style="font-size: 14px; font-weight: 800; color: var(--text-muted); opacity: 0.5;">STEP 1 OF 2</span>
        <div style="width: 44px;"></div>
    </header>

    <main style="flex: 1; padding: 0 24px 24px;">
        <h1 style="font-size: 32px; font-weight: 900; margin-bottom: 8px; letter-spacing: -0.02em;">Digital Onboarding</h1>
        <p style="font-size: 15px; color: var(--text-muted); font-weight: 600; margin-bottom: 40px;">Experience the future of farm-fresh delivery</p>

        <form onsubmit="event.preventDefault(); location.href='?page=home';" style="display: flex; flex-direction: column; gap: 24px;">
            <div class="input-group-v3">
                <label style="display: block; font-size: 11px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 10px; margin-left: 4px;">Full Legal Name</label>
                <input type="text" placeholder="Alex Johnson" style="width: 100%; height: 60px; padding: 0 24px; border-radius: 20px; background: var(--bg-secondary); border: 1px solid var(--border-color); color: var(--text-primary); font-size: 15px; font-weight: 600; outline: none; transition: all 0.3s; box-shadow: var(--shadow-sm);" onfocus="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--neon-shadow)'" onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='var(--shadow-sm)'">
            </div>

            <div class="input-group-v3">
                <label style="display: block; font-size: 11px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 10px; margin-left: 4px;">Mobile Identity</label>
                <div style="display: flex; gap: 12px;">
                     <div style="width: 80px; height: 60px; border-radius: 20px; background: var(--bg-secondary); border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 15px;">+1</div>
                     <input type="tel" placeholder="213 000 0000" style="flex: 1; height: 60px; padding: 0 24px; border-radius: 20px; background: var(--bg-secondary); border: 1px solid var(--border-color); color: var(--text-primary); font-size: 15px; font-weight: 600; outline: none; transition: all 0.3s; box-shadow: var(--shadow-sm);" onfocus="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--neon-shadow)'" onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='var(--shadow-sm)'">
                </div>
            </div>

            <div class="input-group-v3">
                <label style="display: block; font-size: 11px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 10px; margin-left: 4px;">Secure Password</label>
                <input type="password" placeholder="Create complex key" style="width: 100%; height: 60px; padding: 0 24px; border-radius: 20px; background: var(--bg-secondary); border: 1px solid var(--border-color); color: var(--text-primary); font-size: 15px; font-weight: 600; outline: none; transition: all 0.3s; box-shadow: var(--shadow-sm);" onfocus="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--neon-shadow)'" onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='var(--shadow-sm)'">
            </div>

            <div style="display: flex; align-items: flex-start; gap: 16px; margin: 8px 0;">
                <input type="checkbox" id="terms" style="width: 20px; height: 20px; accent-color: var(--primary); margin-top: 2px;">
                <label for="terms" style="font-size: 13px; color: var(--text-muted); font-weight: 700; line-height: 1.5;">
                    By continuing, you agree to our <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 900;">Protocols</a> & <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 900;">Privacy Shield</a>.
                </label>
            </div>

            <button type="submit" class="neon-btn" style="width: 100%; height: 64px; background: var(--primary); color: #000; border: none; border-radius: 20px; font-size: 18px; font-weight: 900; cursor: pointer; margin-top: 8px;">
                Create Account
            </button>
        </form>
    </main>

    <footer style="padding: 32px; text-align: center;">
        <p style="font-size: 15px; color: var(--text-muted); font-weight: 700;">
            Already verified? 
            <a href="?page=login" style="color: var(--primary); font-weight: 900; text-decoration: none;">Sign In Instead</a>
        </p>
    </footer>
</div>
