<div class="view-enter" style="padding-bottom: 120px;">
    <header class="cart-header">
        <a href="?page=profile" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
        <h1 class="cart-title">Saved Addresses</h1>
        <div style="width: 24px;"></div>
    </header>

    <main style="padding: 24px;">
        <!-- Primary Address -->
        <div style="margin-bottom: 24px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 12px;">Primary Address</p>
            
            <div style="background: var(--tile-grey); border: 2px solid var(--primary); border-radius: 24px; padding: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 16px;">
                    <div style="width: 48px; height: 48px; background: rgba(57, 255, 20, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">home</span>
                    </div>
                    <div style="flex: 1;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                            <p style="font-size: 16px; font-weight: 700; color: var(--white);">Home</p>
                            <span style="font-size: 9px; font-weight: 800; background: var(--primary); color: #000; padding: 2px 8px; border-radius: 50px; text-transform: uppercase;">Default</span>
                        </div>
                        <p style="font-size: 14px; color: var(--zinc-400); line-height: 1.5;">HSR Layout, Sector 2, Bangalore, Karnataka 560102</p>
                    </div>
                    <button style="background: none; border: none; color: var(--primary); cursor: pointer;">
                        <span class="material-symbols-outlined">edit</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Other Addresses -->
        <div>
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 12px;">Other Addresses</p>
            
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div style="background: var(--tile-grey); border: 1px solid rgba(255,255,255,0.05); border-radius: 24px; padding: 20px;">
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="width: 48px; height: 48px; background: rgba(57, 255, 20, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span class="material-symbols-outlined" style="color: var(--primary);">work</span>
                        </div>
                        <div style="flex: 1;">
                            <p style="font-size: 16px; font-weight: 700; color: var(--white); margin-bottom: 8px;">Office</p>
                            <p style="font-size: 14px; color: var(--zinc-400); line-height: 1.5;">Koramangala, 5th Block, Bangalore, Karnataka 560095</p>
                        </div>
                        <button style="background: none; border: none; color: var(--zinc-500); cursor: pointer;">
                            <span class="material-symbols-outlined">more_horiz</span>
                        </button>
                    </div>
                </div>

                <div style="background: var(--tile-grey); border: 1px solid rgba(255,255,255,0.05); border-radius: 24px; padding: 20px;">
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="width: 48px; height: 48px; background: rgba(57, 255, 20, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span class="material-symbols-outlined" style="color: var(--primary);">apartment</span>
                        </div>
                        <div style="flex: 1;">
                            <p style="font-size: 16px; font-weight: 700; color: var(--white); margin-bottom: 8px;">Friend's Place</p>
                            <p style="font-size: 14px; color: var(--zinc-400); line-height: 1.5;">Indiranagar, 100 Feet Road, Bangalore, Karnataka 560038</p>
                        </div>
                        <button style="background: none; border: none; color: var(--zinc-500); cursor: pointer;">
                            <span class="material-symbols-outlined">more_horiz</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Add New Address Button -->
    <div class="fixed-footer">
        <button class="checkout-btn" style="gap: 8px;">
            <span class="material-symbols-outlined">add_location</span>
            Add New Address
        </button>
    </div>
</div>
