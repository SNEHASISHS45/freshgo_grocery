<div class="view-enter search-v3" style="background: var(--bg-main); min-height: 100vh;">
    <header class="home-header-v3">
         <div class="stagger-1" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; animation: viewEnter 0.5s ease forwards; opacity: 0;">
             <button class="icon-btn-v3 glass" onclick="history.back()">
                 <span class="material-symbols-outlined">arrow_back_ios</span>
             </button>
             <h1 style="font-size: 20px; font-weight: 800; letter-spacing: -0.01em;">Discovery</h1>
             <div style="width: 44px;"></div>
         </div>
         <form action="index.php" method="GET" class="search-bar-v3 stagger-1" style="animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.1s;">
            <input type="hidden" name="page" value="explore">
            <span class="material-symbols-outlined">search</span>
            <input type="text" name="search" placeholder="Search for groceries, milk, etc." autofocus autocomplete="off">
            <button type="button" onclick="askAI()" style="background: none; border: none; padding: 0; color: var(--primary); display: flex; align-items: center; cursor: pointer;">
                <span class="material-symbols-outlined" style="font-size: 20px;">auto_awesome</span>
            </button>
        </form>
    </header>

    <main style="padding: 0 24px;">
        <!-- Recent Searches Chips -->
        <div class="stagger-2" style="margin: 32px 0; animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.2s;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <p style="font-size: 10px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em;">Recent Vectors</p>
                <button style="border: none; background: none; color: var(--primary); font-size: 11px; font-weight: 950; text-transform: uppercase;">CLEAR</button>
            </div>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                <?php $recent = ['Organic Milk', 'Fresh Mangoes', 'Himalayan Salt', 'Olive Oil']; 
                foreach($recent as $r): ?>
                <a href="?page=explore&search=<?= urlencode($r) ?>" style="text-decoration: none; padding: 12px 20px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 50px; font-size: 13px; font-weight: 800; color: var(--text-primary); display: flex; align-items: center; gap: 8px;">
                    <span class="material-symbols-outlined" style="font-size: 16px; color: var(--text-muted);">history</span>
                    <?= $r ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Trending Bento Grid -->
        <div class="stagger-3" style="animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.3s;">
            <p style="font-size: 10px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">Trending Categories</p>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; height: 180px; margin-bottom: 32px;">
                <div onclick="location.href='?page=explore&category=Dairy'" style="grid-column: span 2; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 28px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                    <span style="font-size: 36px;">🥛</span>
                    <div>
                        <h4 style="font-size: 18px; font-weight: 900; letter-spacing: -0.01em;">Dairy</h4>
                        <p style="font-size: 10px; color: var(--primary); font-weight: 900; text-transform: uppercase;">+12% Trending</p>
                    </div>
                </div>
                <div onclick="location.href='?page=explore&category=Fruits'" style="grid-column: span 2; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 24px; display: flex; align-items: center; justify-content: space-between; padding: 0 24px; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                     <span style="font-weight: 900; font-size: 15px;">Seasonal Picks</span>
                     <span style="font-size: 28px;">🍎</span>
                </div>
                <div onclick="location.href='?page=explore&category=Vegetables'" style="grid-column: span 2; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 24px; display: flex; align-items: center; justify-content: space-between; padding: 0 24px; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                     <span style="font-weight: 900; font-size: 15px;">Fresh Greens</span>
                     <span style="font-size: 28px;">🥬</span>
                </div>
            </div>
        </div>

        <!-- Hot Queries -->
        <div class="stagger-3" style="animation: viewEnter 0.5s ease forwards; opacity: 0; animation-delay: 0.4s; padding-bottom: 60px;">
            <p style="font-size: 10px; font-weight: 900; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 20px;">Hot Search Queries</p>
            <div style="display: flex; flex-direction: column; gap: 10px;">
                 <a href="?page=explore&search=Avocado" style="text-decoration: none; padding: 20px 24px; background: var(--bg-secondary); border-radius: 24px; display: flex; align-items: center; gap: 16px; border: 1px solid var(--border-color); transition: all 0.3s;" onmouseover="this.style.backgroundColor='var(--bg-main)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.backgroundColor='var(--bg-secondary)'; this.style.borderColor='var(--border-color)'">
                      <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary);">
                          <span class="material-symbols-outlined">trending_up</span>
                      </div>
                      <span style="font-size: 15px; font-weight: 800; color: var(--text-primary);">Haas Avocados</span>
                      <span style="margin-left: auto; font-size: 10px; color: var(--red); font-weight: 900; background: rgba(255, 77, 79, 0.1); padding: 4px 10px; border-radius: 50px;">HOT 🔥</span>
                 </a>
                 <a href="?page=explore&search=Kombucha" style="text-decoration: none; padding: 20px 24px; background: var(--bg-secondary); border-radius: 24px; display: flex; align-items: center; gap: 16px; border: 1px solid var(--border-color); transition: all 0.3s;" onmouseover="this.style.backgroundColor='var(--bg-main)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.backgroundColor='var(--bg-secondary)'; this.style.borderColor='var(--border-color)'">
                      <div style="width: 40px; height: 40px; background: var(--bg-main); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary);">
                          <span class="material-symbols-outlined">trending_up</span>
                      </div>
                      <span style="font-size: 15px; font-weight: 800; color: var(--text-primary);">Organic Kombucha</span>
                      <span style="margin-left: auto; font-size: 10px; color: var(--text-muted); font-weight: 900; background: var(--bg-main); padding: 4px 10px; border-radius: 50px;">TOP 10</span>
                 </a>
            </div>
        </div>
    </main>
</div>
