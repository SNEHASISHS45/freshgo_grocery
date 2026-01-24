<div class="view-enter login-v3" style="background: var(--bg-main); min-height: 100vh; display: flex; flex-direction: column; overflow: hidden;">
    <!-- Abstract Decoration -->
    <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: var(--primary-light); border-radius: 50%; filter: blur(80px); pointer-events: none;"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: var(--primary-light); border-radius: 50%; filter: blur(60px); pointer-events: none; opacity: 0.5;"></div>

    <header class="stagger-1" style="padding: 48px 24px 20px; animation: viewEnter 0.5s ease forwards; opacity: 0;">
        <div style="width: 64px; height: 64px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-sm);">
             <span class="material-symbols-outlined filled" style="color: var(--primary); font-size: 32px;">local_mall</span>
        </div>
    </header>

    <main style="flex: 1; padding: 0 24px 24px;">
        <div class="stagger-1" style="margin-bottom: 40px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.1s;">
            <h1 style="font-size: 36px; font-weight: 950; letter-spacing: -0.03em; line-height: 1.1;">Welcome <br><span style="color: var(--primary);">Back Agent.</span></h1>
            <p style="font-size: 15px; color: var(--text-muted); font-weight: 700; margin-top: 12px;">Secure access to your fresh inventory.</p>
        </div>

        <form onsubmit="event.preventDefault(); location.href='?page=home';" style="display: flex; flex-direction: column; gap: 24px;" class="stagger-2">
            <div class="input-group-v3" style="animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.2s;">
                <label style="display: block; font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 12px; margin-left: 4px;">Identity Key</label>
                <div style="position: relative;">
                    <span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: var(--text-muted); font-size: 20px;">alternate_email</span>
                    <input type="email" placeholder="alex@vault.com" style="width: 100%; height: 64px; padding: 0 24px 0 56px; border-radius: 22px; background: var(--bg-secondary); border: 1.5px solid var(--border-color); color: var(--text-primary); font-size: 15px; font-weight: 700; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--neon-shadow)'" onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='none'">
                </div>
            </div>

            <div class="input-group-v3" style="animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
                <label style="display: block; font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 12px; margin-left: 4px;">Passphrase</label>
                <div style="position: relative;">
                    <span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: var(--text-muted); font-size: 20px;">lock</span>
                    <input type="password" placeholder="••••••••" style="width: 100%; height: 64px; padding: 0 24px 0 56px; border-radius: 22px; background: var(--bg-secondary); border: 1.5px solid var(--border-color); color: var(--text-primary); font-size: 15px; font-weight: 700; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--neon-shadow)'" onblur="this.style.borderColor='var(--border-color)'; this.style.boxShadow='none'">
                    <button type="button" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); background: none; border: none; color: var(--text-muted);"><span class="material-symbols-outlined" style="font-size: 20px;">visibility_off</span></button>
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.35s;">
                <a href="?page=forgot" style="font-size: 13px; color: var(--primary); font-weight: 900; text-decoration: none; text-transform: uppercase; letter-spacing: 0.05em;">Lost Key?</a>
            </div>

            <button type="submit" class="neon-btn" style="width: 100%; height: 64px; background: var(--primary); color: #000; border: none; border-radius: 22px; font-size: 18px; font-weight: 950; cursor: pointer; margin-top: 8px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.4s; box-shadow: var(--neon-shadow);">
                AUTHENTICATE
            </button>
        </form>

        <div class="stagger-3" style="margin-top: 40px; text-align: center; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.5s;">
             <p style="font-size: 14px; color: var(--text-muted); font-weight: 700; margin-bottom: 24px;">Or initiate via social protocols</p>
             <div style="display: flex; gap: 16px; justify-content: center;">
                  <button style="width: 64px; height: 64px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" style="width: 24px;">
                  </button>
                  <button style="width: 64px; height: 64px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" style="width: 24px;" class="dark-icon-invert">
                  </button>
             </div>
        </div>
    </main>

    <footer class="stagger-3" style="padding: 32px; text-align: center; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.6s;">
        <p style="font-size: 15px; color: var(--text-muted); font-weight: 700;">
            New to the network? 
            <a href="?page=signup" style="color: var(--primary); font-weight: 950; text-decoration: none;">Join FreshGo</a>
        </p>
    </footer>
</div>
