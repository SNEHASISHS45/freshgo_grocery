<div class="view-enter" style="padding-bottom: 100px;">
    <header class="cart-header">
        <a href="?page=home" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
        <h1 class="cart-title">Search</h1>
        <div style="width: 24px;"></div>
    </header>

    <main style="padding: 16px 24px;">
        <!-- Search Input -->
        <div class="search-container" style="margin-bottom: 0;">
            <span class="material-symbols-outlined search-icon">search</span>
            <input type="text" class="search-input" placeholder="Search for groceries..." id="searchPageInput" autofocus>
            <button class="search-ai-btn" onclick="askAI()">
                <span class="material-symbols-outlined">auto_awesome</span>
            </button>
        </div>

        <!-- Recent Searches -->
        <div style="margin-top: 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em;">Recent Searches</p>
                <button style="background: none; border: none; color: var(--primary); font-size: 12px; font-weight: 700; cursor: pointer;">Clear</button>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                <a href="?page=home&category=Dairy" style="padding: 10px 16px; background: var(--tile-grey); border-radius: 50px; font-size: 13px; color: var(--white); text-decoration: none; display: flex; align-items: center; gap: 6px;">
                    <span class="material-symbols-outlined" style="font-size: 16px; color: var(--zinc-500);">history</span>
                    Milk
                </a>
                <a href="?page=home" style="padding: 10px 16px; background: var(--tile-grey); border-radius: 50px; font-size: 13px; color: var(--white); text-decoration: none; display: flex; align-items: center; gap: 6px;">
                    <span class="material-symbols-outlined" style="font-size: 16px; color: var(--zinc-500);">history</span>
                    Paneer
                </a>
                <a href="?page=home&category=Fruits" style="padding: 10px 16px; background: var(--tile-grey); border-radius: 50px; font-size: 13px; color: var(--white); text-decoration: none; display: flex; align-items: center; gap: 6px;">
                    <span class="material-symbols-outlined" style="font-size: 16px; color: var(--zinc-500);">history</span>
                    Mangoes
                </a>
                <a href="?page=home&category=Atta+%26+Flours" style="padding: 10px 16px; background: var(--tile-grey); border-radius: 50px; font-size: 13px; color: var(--white); text-decoration: none; display: flex; align-items: center; gap: 6px;">
                    <span class="material-symbols-outlined" style="font-size: 16px; color: var(--zinc-500);">history</span>
                    Atta
                </a>
            </div>
        </div>

        <!-- Popular Categories -->
        <div style="margin-top: 32px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 16px;">Popular Categories</p>
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                <a href="?page=home&category=Dairy" style="padding: 20px; background: var(--tile-grey); border-radius: 20px; text-decoration: none; display: flex; align-items: center; gap: 12px; transition: all 0.3s ease;">
                    <span style="font-size: 28px;">🥛</span>
                    <span style="font-size: 14px; font-weight: 700; color: var(--white);">Dairy</span>
                </a>
                <a href="?page=home&category=Fruits" style="padding: 20px; background: var(--tile-grey); border-radius: 20px; text-decoration: none; display: flex; align-items: center; gap: 12px;">
                    <span style="font-size: 28px;">🍎</span>
                    <span style="font-size: 14px; font-weight: 700; color: var(--white);">Fruits</span>
                </a>
                <a href="?page=home&category=Vegetables" style="padding: 20px; background: var(--tile-grey); border-radius: 20px; text-decoration: none; display: flex; align-items: center; gap: 12px;">
                    <span style="font-size: 28px;">🥬</span>
                    <span style="font-size: 14px; font-weight: 700; color: var(--white);">Vegetables</span>
                </a>
                <a href="?page=home&category=Masala+%26+Spices" style="padding: 20px; background: var(--tile-grey); border-radius: 20px; text-decoration: none; display: flex; align-items: center; gap: 12px;">
                    <span style="font-size: 28px;">🌶️</span>
                    <span style="font-size: 14px; font-weight: 700; color: var(--white);">Spices</span>
                </a>
            </div>
        </div>

        <!-- Trending -->
        <div style="margin-top: 32px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 16px;">Trending Now 🔥</p>
            
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <a href="?page=home" style="padding: 16px; background: var(--tile-grey); border-radius: 16px; text-decoration: none; display: flex; align-items: center; gap: 12px;">
                    <span class="material-symbols-outlined" style="color: var(--primary);">trending_up</span>
                    <span style="font-size: 14px; font-weight: 600; color: var(--white);">Organic Vegetables</span>
                    <span style="margin-left: auto; font-size: 11px; color: var(--zinc-500);">+120% searches</span>
                </a>
                <a href="?page=home&category=Dairy" style="padding: 16px; background: var(--tile-grey); border-radius: 16px; text-decoration: none; display: flex; align-items: center; gap: 12px;">
                    <span class="material-symbols-outlined" style="color: var(--primary);">trending_up</span>
                    <span style="font-size: 14px; font-weight: 600; color: var(--white);">Amul Products</span>
                    <span style="margin-left: auto; font-size: 11px; color: var(--zinc-500);">+85% searches</span>
                </a>
            </div>
        </div>
    </main>
</div>
