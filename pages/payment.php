<div class="view-enter" style="padding-bottom: 120px;">
    <header class="cart-header">
        <a href="?page=profile" style="text-decoration: none; color: var(--white);">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
        <h1 class="cart-title">Payment Methods</h1>
        <div style="width: 24px;"></div>
    </header>

    <main style="padding: 24px;">
        <!-- Wallet Balance -->
        <div style="background: linear-gradient(135deg, var(--primary) 0%, #22c55e 100%); border-radius: 24px; padding: 24px; margin-bottom: 32px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                <div>
                    <p style="font-size: 12px; font-weight: 700; color: rgba(0,0,0,0.6); text-transform: uppercase; letter-spacing: 0.1em;">FreshGo Wallet</p>
                    <p style="font-size: 32px; font-weight: 900; color: #000; margin-top: 4px;">₹450.00</p>
                </div>
                <div style="width: 48px; height: 48px; background: rgba(0,0,0,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center;">
                    <span class="material-symbols-outlined" style="color: #000; font-size: 28px;">account_balance_wallet</span>
                </div>
            </div>
            <button style="background: rgba(0,0,0,0.15); border: none; padding: 12px 24px; border-radius: 12px; color: #000; font-size: 14px; font-weight: 800; cursor: pointer;">+ Add Money</button>
        </div>

        <!-- Saved Cards -->
        <div style="margin-bottom: 24px;">
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 12px;">Saved Cards</p>
            
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div style="background: var(--tile-grey); border: 2px solid var(--primary); border-radius: 20px; padding: 20px;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 56px; height: 40px; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="color: #fff; font-size: 10px; font-weight: 900;">VISA</span>
                        </div>
                        <div style="flex: 1;">
                            <p style="font-size: 14px; font-weight: 700; color: var(--white);">•••• •••• •••• 4242</p>
                            <p style="font-size: 12px; color: var(--zinc-500);">Expires 12/25</p>
                        </div>
                        <span class="material-symbols-outlined" style="color: var(--primary);">check_circle</span>
                    </div>
                </div>

                <div style="background: var(--tile-grey); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; padding: 20px;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 56px; height: 40px; background: linear-gradient(135deg, #eb001b 0%, #f79e1b 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="color: #fff; font-size: 8px; font-weight: 900;">MC</span>
                        </div>
                        <div style="flex: 1;">
                            <p style="font-size: 14px; font-weight: 700; color: var(--white);">•••• •••• •••• 8899</p>
                            <p style="font-size: 12px; color: var(--zinc-500);">Expires 08/24</p>
                        </div>
                        <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- UPI -->
        <div>
            <p style="font-size: 10px; font-weight: 800; color: var(--zinc-500); text-transform: uppercase; letter-spacing: 0.2em; margin-bottom: 12px;">UPI</p>
            
            <div style="background: var(--tile-grey); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; padding: 20px;">
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 48px; height: 48px; background: rgba(57, 255, 20, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="color: var(--primary);">account_balance</span>
                    </div>
                    <div style="flex: 1;">
                        <p style="font-size: 14px; font-weight: 700; color: var(--white);">alex@upi</p>
                        <p style="font-size: 12px; color: var(--zinc-500);">Google Pay</p>
                    </div>
                    <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
                </div>
            </div>
        </div>

        <!-- Security Note -->
        <div style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 32px; padding: 16px; background: rgba(255,255,255,0.02); border-radius: 12px;">
            <span class="material-symbols-outlined" style="color: var(--zinc-600); font-size: 18px;">lock</span>
            <p style="font-size: 12px; color: var(--zinc-600);">Your payment info is securely encrypted</p>
        </div>
    </main>

    <!-- Add New Card Button -->
    <div class="fixed-footer">
        <button class="checkout-btn" style="gap: 8px;">
            <span class="material-symbols-outlined">add_card</span>
            Add New Card
        </button>
    </div>
</div>
