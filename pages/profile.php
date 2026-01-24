<div class="view-enter profile-page">
    <header class="profile-header">
        <div class="profile-avatar">
            <div class="profile-avatar-ring">
                <div class="profile-avatar-inner">
                    <img src="https://picsum.photos/seed/alex/200/200" alt="Profile">
                </div>
            </div>
            <button class="profile-edit-btn">
                <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
            </button>
        </div>
        <h2 class="profile-name">Alex Harrison</h2>
        <span class="profile-badge">Gold Member</span>
    </header>

    <main class="profile-menu">
        <a href="?page=orders" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">shopping_bag</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">My Orders</p>
                <p class="profile-menu-sub">Track deliveries</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=addresses" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">location_on</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">Saved Addresses</p>
                <p class="profile-menu-sub">3 saved places</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=support" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">help</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">Help & Support</p>
                <p class="profile-menu-sub">24/7 Assistance</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=payment" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">credit_card</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">Payment Methods</p>
                <p class="profile-menu-sub">Visa •••• 4242</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=notifications" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">notifications</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">Notifications</p>
                <p class="profile-menu-sub">3 new alerts</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=favorites" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">favorite</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">My Favorites</p>
                <p class="profile-menu-sub"><?= count($_SESSION['favorites']) ?> saved items</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=settings" class="profile-menu-item">
            <div class="profile-menu-icon">
                <span class="material-symbols-outlined">settings</span>
            </div>
            <div class="profile-menu-info">
                <p class="profile-menu-label">Settings</p>
                <p class="profile-menu-sub">App preferences</p>
            </div>
            <span class="material-symbols-outlined" style="color: var(--zinc-700);">chevron_right</span>
        </a>

        <a href="?page=login" class="logout-btn">Log Out</a>
    </main>
</div>
