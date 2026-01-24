<div class="view-enter settings-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between; animation: viewEnter 0.5s ease forwards; opacity: 0;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 800; letter-spacing: -0.01em;">Settings</h1>
             <div style="width: 44px;"></div>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <!-- Account Bento Item -->
        <div class="stagger-2" style="margin-bottom: 32px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.1s;">
            <p style="font-size: 10px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">Identity & Access</p>
            <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 32px; overflow: hidden; box-shadow: var(--shadow-sm);">
                <div class="profile-menu-v2">
                    <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">person</span>
                    </div>
                    <span style="font-weight: 800; font-size: 15px;">Profile Protocol</span>
                    <span class="material-symbols-outlined" style="font-size: 18px;">chevron_right</span>
                </div>
                <div class="profile-menu-v2" style="border-top: 1px solid var(--border-color);">
                    <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">security</span>
                    </div>
                    <span style="font-weight: 800; font-size: 15px;">Encryption & Privacy</span>
                    <span class="material-symbols-outlined" style="font-size: 18px;">chevron_right</span>
                </div>
            </div>
        </div>

        <!-- Preferences -->
        <div class="stagger-3" style="margin-bottom: 32px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.2s;">
            <p style="font-size: 10px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">Environmental Prefs</p>
            <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 32px; overflow: hidden; box-shadow: var(--shadow-sm);">
                <div style="padding: 24px; border-bottom: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">notifications_active</span>
                        </div>
                        <span style="font-weight: 800; font-size: 15px;">Intel Updates</span>
                    </div>
                    <label class="switch-v3">
                        <input type="checkbox" checked>
                        <span class="slider-v3"></span>
                    </label>
                </div>
                <div style="padding: 24px; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">dark_mode</span>
                        </div>
                        <span style="font-weight: 800; font-size: 15px;">Neural Dark Mode</span>
                    </div>
                    <label class="switch-v3">
                        <input type="checkbox" id="darkModeSwitch">
                        <span class="slider-v3"></span>
                    </label>
                </div>
            </div>
        </div>

        <!-- App Info -->
        <div class="stagger-3" style="margin-bottom: 32px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
            <p style="font-size: 10px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">System Core</p>
            <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 32px; overflow: hidden; box-shadow: var(--shadow-sm);">
                <div class="profile-menu-v2">
                    <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">translate</span>
                    </div>
                    <span style="font-weight: 800; font-size: 15px;">Language Matrix</span>
                    <span style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; background: var(--primary-light); padding: 4px 10px; border-radius: 50px;">English</span>
                </div>
                <div class="profile-menu-v2" style="border-top: 1px solid var(--border-color);">
                    <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="color: var(--primary); font-size: 20px;">hub</span>
                    </div>
                    <span style="font-weight: 800; font-size: 15px;">Regional Hub</span>
                    <span style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase;">Bangalore #2</span>
                </div>
            </div>
        </div>

        <div style="padding: 20px 0 100px; text-align: center;">
             <p style="font-size: 12px; color: var(--text-muted); font-weight: 850; text-transform: uppercase; letter-spacing: 0.1em;">FreshGo Cloud v3.4.2</p>
             <p style="font-size: 10px; color: var(--border-color); font-weight: 900; margin-top: 4px;">SECURE CONNECTION VERIFIED</p>
        </div>
    </main>
</div>

<style>
.switch-v3 {
  position: relative;
  display: inline-block;
  width: 44px;
  height: 24px;
}
.switch-v3 input { 
  opacity: 0;
  width: 0;
  height: 0;
}
.slider-v3 {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: var(--border-color);
  transition: .4s;
  border-radius: 34px;
}
.slider-v3:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}
input:checked + .slider-v3 {
  background-color: var(--primary);
}
input:checked + .slider-v3:before {
  transform: translateX(20px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sw = document.getElementById('darkModeSwitch');
    if(sw) {
        sw.checked = document.documentElement.getAttribute('data-theme') === 'dark';
        sw.addEventListener('change', () => {
             if(typeof toggleTheme === 'function') toggleTheme();
        });
    }
});
</script>
