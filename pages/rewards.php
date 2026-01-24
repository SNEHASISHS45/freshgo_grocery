<div class="view-enter rewards-v3" style="background: var(--bg-main); min-height: 100vh;">
    <!-- Premium Header Area -->
    <div class="stagger-1" style="background: var(--primary); padding: 80px 24px 80px; position: relative; border-radius: 0 0 56px 56px; box-shadow: var(--neon-shadow); overflow: hidden;">
        <!-- Abstract Decoration -->
        <div style="position: absolute; top: -60px; right: -60px; width: 260px; height: 260px; background: rgba(0,0,0,0.08); border-radius: 50%;"></div>
        <div style="position: absolute; bottom: -40px; left: -40px; width: 160px; height: 160px; background: rgba(255,255,255,0.15); border-radius: 48px; transform: rotate(15deg);"></div>
        
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 40px; position: relative; z-index: 10;">
            <button class="icon-btn-v3 glass" style="background: rgba(0,0,0,0.08); border: 1.5px solid rgba(0,0,0,0.05); color: #000;" onclick="history.back()">
                <span class="material-symbols-outlined" style="font-weight: 900;">arrow_back_ios</span>
            </button>
            <h1 style="font-size: 14px; font-weight: 950; color: #000; text-transform: uppercase; letter-spacing: 0.2em;">Currency Protocol</h1>
            <div style="width: 44px;"></div>
        </div>

        <div style="text-align: center; position: relative; z-index: 10;">
             <p style="font-size: 11px; font-weight: 950; color: #000; text-transform: uppercase; letter-spacing: 0.25em; opacity: 0.8; margin-bottom: 12px;">Active Coin Balance</p>
             <div style="display: flex; align-items: center; justify-content: center; gap: 12px;">
                 <h2 style="font-size: 72px; font-weight: 950; color: #000; letter-spacing: -0.05em;">1,820</h2>
                 <span style="font-size: 12px; font-weight: 950; color: #000; background: rgba(0,0,0,0.1); padding: 6px 18px; border-radius: 50px; margin-top: 14px; border: 1.5px solid rgba(0,0,0,0.05);">COINS</span>
             </div>
             <div style="inline-flex; align-items: center; gap: 8px; background: rgba(0,0,0,0.08); padding: 10px 24px; border-radius: 50px; margin-top: 28px; border: 1px solid rgba(0,0,0,0.05); display: inline-flex;">
                  <span class="material-symbols-outlined filled" style="font-size: 18px; color: #000;">stars</span>
                  <p style="font-size: 13px; font-weight: 950; color: #000; letter-spacing: 0.02em;">ELITE TIER ARCHIVE</p>
             </div>
        </div>
    </div>

    <main style="padding: 0 24px; margin-top: -40px; position: relative; z-index: 20;">
        <!-- Platinum Goal Card -->
        <div class="stagger-2" style="background: var(--bg-secondary); border: 2.3px solid var(--primary); border-radius: 40px; padding: 32px; box-shadow: var(--shadow-md); margin-bottom: 40px;">
             <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 24px;">
                 <div>
                     <h4 style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.2em;">NEXT CLEARANCE: PLATINUM</h4>
                     <p style="font-size: 17px; color: var(--text-primary); font-weight: 900; margin-top: 8px; letter-spacing: -0.01em;">Earn 180 coins for level up</p>
                 </div>
                 <div style="width: 52px; height: 52px; background: var(--bg-main); border-radius: 16px; display: flex; align-items: center; justify-content: center; border: 1.5px solid var(--border-color); box-shadow: var(--shadow-sm);">
                     <span class="material-symbols-outlined" style="color: var(--primary); font-size: 28px; font-weight: 900;">workspace_premium</span>
                 </div>
             </div>
             <div style="height: 14px; background: var(--bg-main); border-radius: 50px; overflow: hidden; margin-bottom: 16px; position: relative; border: 1px solid var(--border-color);">
                 <div style="height: 100%; width: 91%; background: var(--primary); border-radius: 50px; box-shadow: var(--neon-shadow);"></div>
             </div>
             <div style="display: flex; justify-content: space-between; font-size: 12px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">
                 <span style="color: var(--primary);">1,820</span>
                 <span>2,000 Milestone</span>
             </div>
        </div>

        <!-- Offers Title -->
        <div class="stagger-3" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
            <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.2em;">PROTOCOL REDEMPTIONS</p>
            <span style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em;">ARCHIVE</span>
        </div>

        <!-- Offers Grid -->
        <div class="stagger-3" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; padding-bottom: 140px;">
            <?php 
            $offers = [
                ['name' => 'Free Transmission', 'coins' => '200', 'icon' => 'local_shipping'],
                ['name' => '₹50 Liquid Credit', 'coins' => '500', 'icon' => 'account_balance_wallet'],
                ['name' => 'Mystery Archive', 'coins' => '300', 'icon' => 'inventory_2'],
                ['name' => 'Priority Clearance', 'coins' => '400', 'icon' => 'verified_user'],
            ];
            foreach($offers as $o): ?>
            <div class="bento-card" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 36px; padding: 32px; text-align: center; transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1); position: relative;">
                <div style="width: 60px; height: 60px; background: var(--bg-main); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; border: 1.5px solid var(--border-color); box-shadow: var(--shadow-sm);">
                    <span class="material-symbols-outlined" style="color: var(--primary); font-size: 28px; font-weight: 900;"><?= $o['icon'] ?></span>
                </div>
                <h4 style="font-size: 15px; font-weight: 900; margin-bottom: 8px; line-height: 1.3; color: var(--text-primary);"><?= $o['name'] ?></h4>
                <p style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; margin-bottom: 24px; letter-spacing: 0.1em;"><?= $o['coins'] ?> Coins</p>
                <button class="neon-btn" style="width: 100%; height: 48px; background: var(--primary); border: none; border-radius: 16px; font-size: 12px; font-weight: 950; color: #000; cursor: pointer; text-transform: uppercase; letter-spacing: 0.05em; box-shadow: var(--shadow-sm);">Claim</button>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</div>
