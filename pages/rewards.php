<div class="view-enter rewards-page">
    <div class="rewards-header">
        <div class="rewards-glow"></div>
        <p class="rewards-label">My FreshGo Coins</p>
        <div class="rewards-coins">
            <span class="rewards-number">1,820</span>
            <span class="rewards-unit">Coins</span>
        </div>
        <span class="rewards-tier">Elite Member</span>
    </div>

    <div class="rewards-goal">
        <div class="rewards-goal-header">
            <div>
                <h4 class="rewards-goal-title">PLATINUM GOAL</h4>
                <p class="rewards-goal-sub">Earn 180 coins for Platinum status</p>
            </div>
            <span class="rewards-unlock">Unlock</span>
        </div>
        <div class="rewards-progress-bar">
            <div class="rewards-progress-fill" style="width: 91%;"></div>
        </div>
        <div class="rewards-progress-labels">
            <span>1,820 COINS</span>
            <span>2,000 COINS</span>
        </div>
    </div>

    <div class="rewards-offers">
        <h3 class="rewards-offers-title">Claim Offers</h3>
        <div class="rewards-offers-grid">
            <div class="reward-card">
                <span class="material-symbols-outlined">local_shipping</span>
                <h4>Free Next Order Delivery</h4>
                <p class="coins">200 COINS</p>
                <button class="claim-btn" onclick="claimReward('Free Delivery', 200)">Claim</button>
            </div>
            <div class="reward-card">
                <span class="material-symbols-outlined">sell</span>
                <h4>₹50 Flat Off</h4>
                <p class="coins">500 COINS</p>
                <button class="claim-btn" onclick="claimReward('₹50 Off', 500)">Claim</button>
            </div>
            <div class="reward-card">
                <span class="material-symbols-outlined">redeem</span>
                <h4>Mystery Box</h4>
                <p class="coins">300 COINS</p>
                <button class="claim-btn" onclick="claimReward('Mystery Box', 300)">Claim</button>
            </div>
            <div class="reward-card">
                <span class="material-symbols-outlined">workspace_premium</span>
                <h4>Premium Trial</h4>
                <p class="coins">400 COINS</p>
                <button class="claim-btn" onclick="claimReward('Premium Trial', 400)">Claim</button>
            </div>
        </div>
    </div>
</div>

<script>
function claimReward(name, coins) {
    if (confirm('Claim ' + name + ' for ' + coins + ' coins?')) {
        showToast('🎉 ' + name + ' claimed successfully!');
    }
}
</script>
