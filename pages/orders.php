<div class="view-enter orders-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between; animation: viewEnter 0.5s ease forwards; opacity: 0;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 850; letter-spacing: -0.01em;">Operation Hub</h1>
             <div style="width: 44px;"></div>
         </div>
    </header>

    <main style="padding: 0 24px;">
        <div class="stagger-1" style="display: flex; gap: 12px; margin-bottom: 32px; overflow-x: auto; padding-bottom: 8px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.1s;" class="no-scrollbar">
            <div class="glass-pill-badge" style="background: var(--primary); color: #000; font-weight: 950; padding: 10px 24px; border-radius: 50px;">ALL ARCHIVES</div>
            <div class="glass-pill-badge" style="background: var(--bg-secondary); color: var(--text-muted); font-weight: 850; padding: 10px 24px; border-radius: 50px; border: 1px solid var(--border-color);">ACTIVE</div>
            <div class="glass-pill-badge" style="background: var(--bg-secondary); color: var(--text-muted); font-weight: 850; padding: 10px 24px; border-radius: 50px; border: 1px solid var(--border-color);">CANCELLED</div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px; padding-bottom: 140px;">
            <!-- Active Order -->
            <div class="stagger-2" style="background: var(--bg-secondary); border: 2.3px solid var(--primary); border-radius: 40px; padding: 28px; box-shadow: var(--neon-shadow); animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.2s;">
                 <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                     <div>
                         <p style="font-size: 11px; font-weight: 950; color: var(--primary); text-transform: uppercase; letter-spacing: 0.2em; display: flex; align-items: center; gap: 6px;">
                             <span style="width: 8px; height: 8px; background: var(--primary); border-radius: 50%; display: inline-block; animation: pulse 2s infinite;"></span>
                             LIVE TRANSMISSION
                         </p>
                         <h3 style="font-size: 18px; font-weight: 950; margin-top: 8px; letter-spacing: -0.01em;">MISSION #FG-8291</h3>
                     </div>
                     <span style="font-size: 11px; font-weight: 950; color: var(--primary); background: var(--primary-light); padding: 4px 12px; border-radius: 50px;">ELITE</span>
                 </div>
                 <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 24px;">
                     <div style="flex: 1; height: 6px; background: var(--bg-main); border-radius: 10px; overflow: hidden; border: 1px solid var(--border-color);">
                         <div style="width: 65%; height: 100%; background: var(--primary); border-radius: 10px; box-shadow: 0 0 10px var(--primary);"></div>
                     </div>
                     <span style="font-size: 13px; font-weight: 950; color: var(--primary);">12 MINS</span>
                 </div>
                 <div style="display: flex; justify-content: space-between; align-items: center;">
                       <p style="font-size: 18px; font-weight: 950;">₹452.00</p>
                       <button onclick="location.href='?page=tracking'" class="neon-btn" style="background: var(--primary); color: #000; border: none; padding: 14px 28px; border-radius: 16px; font-size: 13px; font-weight: 950; cursor: pointer; text-transform: uppercase;">TRACK LIVE</button>
                 </div>
            </div>

            <!-- Past Order -->
            <div class="stagger-3" style="background: var(--bg-secondary); border: 1.5px solid var(--border-color); border-radius: 40px; padding: 28px; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
                 <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                     <div>
                         <p style="font-size: 11px; font-weight: 950; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em;">Archive • JAN 24</p>
                         <h3 style="font-size: 17px; font-weight: 900; margin-top: 6px; color: var(--text-primary);">ARCHIVE #FG-8290</h3>
                     </div>
                     <span class="material-symbols-outlined filled" style="color: var(--primary); font-size: 24px;">verified</span>
                 </div>
                 <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 28px;">
                     <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 14px; padding: 8px; border: 1px solid var(--border-color);"><img src="https://images.unsplash.com/photo-1550583724-1255818c09d3?q=80&w=100" style="width: 100%; height: 100%; object-fit: contain;" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=100';"></div>
                     <div style="width: 44px; height: 44px; background: var(--bg-main); border-radius: 14px; padding: 8px; border: 1px solid var(--border-color);"><img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?q=80&w=100" style="width: 100%; height: 100%; object-fit: contain;" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=100';"></div>
                     <p style="font-size: 13px; font-weight: 850; color: var(--text-muted); letter-spacing: 0.02em;">+ 3 PREMIUM ITEMS</p>
                 </div>
                 <div style="display: flex; justify-content: space-between; align-items: center;">
                       <p style="font-size: 18px; font-weight: 950;">₹820.00</p>
                       <button class="neon-btn" style="background: var(--bg-main); color: var(--primary); border: 2px solid var(--primary); padding: 12px 24px; border-radius: 14px; font-size: 13px; font-weight: 950; text-transform: uppercase;">REACQUIRE</button>
                 </div>
            </div>
        </div>
    </main>
</div>
