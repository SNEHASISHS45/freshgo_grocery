<div class="view-enter support-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between; animation: none;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <i data-lucide="arrow-left" style="width: 24px; height: 24px;"></i>
             </button>
             <h1 style="font-size: 20px; font-weight: 850; letter-spacing: -0.01em;">Concierge Hub</h1>
             <div style="width: 44px;"></div>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <p class="stagger-1" style="font-size: 11px; font-weight: 950; color: var(--brand-primary); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 28px; text-align: center;">Operational Assistance Required?</p>
        
        <!-- Search Help -->
        <div class="search-bar-v3 stagger-1" style="margin-bottom: 36px; box-shadow: var(--shadow-sm); height: 64px; border-radius: 20px;">
            <i data-lucide="search" style="color: var(--brand-primary); width: 24px; height: 24px;"></i>
            <input type="text" placeholder="Scan knowledge archive..." style="font-size: 15px; font-weight: 700;">
        </div>

        <!-- FAQ Sections -->
        <div class="stagger-2" style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 44px;">
            <?php 
            $faqs = [
                ['t' => 'Transmission Logistics', 'i' => 'truck'],
                ['t' => 'Fiscal Clearances', 'i' => 'receipt'],
                ['t' => 'Protocol Assurance', 'i' => 'shield-check'],
                ['t' => 'Elite Membership', 'i' => 'award'],
            ];
            foreach($faqs as $f): ?>
            <div class="profile-menu-v2" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 24px; padding: 22px 28px; display: flex; align-items: center; justify-content: space-between;">
                <div style="display: flex; align-items: center; gap: 20px;">
                    <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--brand-primary); border: 1px solid var(--border-color);">
                        <i data-lucide="<?= $f['i'] ?>" style="width: 22px; height: 22px;"></i>
                    </div>
                    <span style="font-weight: 900; font-size: 16px; letter-spacing: -0.01em;"><?= $f['t'] ?></span>
                </div>
                <i data-lucide="chevron-right" style="color: var(--text-muted); width: 20px; height: 20px;"></i>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Contact Bento -->
        <div class="stagger-3" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; padding-bottom: 140px;">
             <div class="bento-card" style="background: var(--bg-secondary); border: 2.3px solid var(--brand-primary); border-radius: 36px; padding: 32px; text-align: center; box-shadow: var(--neon-shadow);">
                 <div style="width: 56px; height: 56px; background: var(--bg-main); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; border: 1.5px solid var(--brand-primary);">
                    <i data-lucide="messages-square" style="color: var(--brand-primary); width: 32px; height: 32px;"></i>
                 </div>
                 <h4 style="font-size: 15px; font-weight: 900; letter-spacing: -0.02em;">Live Intel</h4>
                 <p style="font-size: 11px; color: var(--brand-primary); font-weight: 950; margin-top: 6px; text-transform: uppercase;">2 Min Latency</p>
                 <button class="neon-btn" style="width: 100%; height: 48px; background: var(--brand-primary); color: #000; border: none; border-radius: 16px; margin-top: 24px; font-size: 12px; font-weight: 950; text-transform: uppercase;">Ignite Chat</button>
             </div>
             <div class="bento-card" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 36px; padding: 32px; text-align: center;">
                 <div style="width: 56px; height: 56px; background: var(--bg-main); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; border: 1.5px solid var(--border-color);">
                    <i data-lucide="mail" style="color: var(--text-muted); width: 32px; height: 32px;"></i>
                 </div>
                 <h4 style="font-size: 15px; font-weight: 900; letter-spacing: -0.02em;">Data Ticket</h4>
                 <p style="font-size: 11px; color: var(--text-muted); font-weight: 950; margin-top: 6px; text-transform: uppercase;">2H Response</p>
                 <button style="width: 100%; height: 48px; background: var(--bg-main); color: var(--text-primary); border: 1.5px solid var(--border-color); border-radius: 16px; margin-top: 24px; font-size: 12px; font-weight: 950; text-transform: uppercase;">Transmit Mail</button>
             </div>
        </div>
    </main>
</div>
