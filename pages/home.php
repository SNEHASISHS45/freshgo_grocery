<?php
// Home Page - Bento Premium Redesign & Functional Integration (Indian Localization)

$hour = date('H');
$greeting = "Good Day";
if ($hour < 12) $greeting = "Namaste";
else if ($hour < 17) $greeting = "Good Afternoon";
else $greeting = "Good Evening";

// Filter some "Popular" products for the best sellers section
$bestSellers = array_slice($products, 0, 4); 
$reorderItems = array_slice($products, 12, 4); // Different items for variety
?>
<div class="view-enter home-page-v3">
    <header class="home-header-v3">
        <div class="header-top-row stagger-1">
            <div class="header-user-box" onclick="location.href='?page=profile'" style="cursor: pointer;">
                <div class="profile-img-v3" style="transform: rotate(-3deg); border: 2px solid var(--primary);">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Snehasish" alt="Profile">
                </div>
                <div class="delivery-text-v3">
                    <span style="display: flex; align-items: center; gap: 4px;"><?= $greeting ?>, Snehasish! <span style="font-size: 14px;">👋</span></span>
                    <div style="display: flex; align-items: center; gap: 4px;">
                        <span class="material-symbols-outlined filled" style="font-size: 16px; color: var(--primary);">location_on</span>
                        <h2 style="font-size: 14px; font-weight: 800;">HSR Layout, Sector 2</h2>
                        <span class="material-symbols-outlined" style="font-size: 18px; color: var(--text-muted);">expand_more</span>
                    </div>
                </div>
            </div>
            <div style="display: flex; gap: 12px;">
                <button class="icon-btn-v3 glass theme-toggle-btn" onclick="toggleTheme()" style="position: relative; width: 48px; height: 48px; border-radius: 16px;">
                    <span class="material-symbols-outlined dark-icon" style="display: none;">dark_mode</span>
                    <span class="material-symbols-outlined light-icon">light_mode</span>
                </button>
                <button class="icon-btn-v3 glass" onclick="location.href='?page=notifications'" style="width: 48px; height: 48px; border-radius: 16px;">
                    <span class="material-symbols-outlined">notifications</span>
                    <?php if ($cartCount > 0): ?><div style="position: absolute; top: 10px; right: 10px; width: 8px; height: 8px; background: var(--primary); border-radius: 50%; border: 2px solid var(--bg-main);"></div><?php endif; ?>
                </button>
            </div>
        </div>

        <form action="index.php" method="GET" class="search-bar-v3 stagger-1" style="height: 60px; border-radius: 20px;">
            <input type="hidden" name="page" value="explore">
            <span class="material-symbols-outlined" style="font-size: 24px;">search</span>
            <input type="text" name="search" id="searchInput" placeholder="Search dairy, fruits, organic..." autocomplete="off" style="font-size: 15px; font-weight: 600;">
            <button type="button" onclick="askAI()" style="background: var(--primary-light); border: none; padding: 10px; border-radius: 12px; display: flex; align-items: center; cursor: pointer; color: var(--primary);">
                <span class="material-symbols-outlined" style="font-size: 22px;">auto_awesome</span>
            </button>
        </form>
    </header>

    <main>
        <!-- Delivery Promise -->
        <div class="stagger-1" style="padding: 0 24px; margin-bottom: 20px;">
            <div style="background: var(--bg-secondary); border-radius: 18px; padding: 12px 20px; display: flex; align-items: center; gap: 12px; border: 1px solid var(--border-color);">
                <div style="width: 40px; height: 40px; background: var(--primary-light); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary);">
                    <span class="material-symbols-outlined filled">bolt</span>
                </div>
                <div>
                    <p style="font-size: 12px; font-weight: 800; color: var(--text-primary);">Delivery in 12 Minutes</p>
                    <p style="font-size: 10px; color: var(--primary); font-weight: 700; text-transform: uppercase;">Guaranteed Freshness</p>
                </div>
                <div style="margin-left: auto; height: 30px; width: 1px; background: var(--border-color);"></div>
                <div style="margin-left: auto; text-align: right;">
                    <p style="font-size: 10px; font-weight: 800; color: var(--text-muted); text-transform: uppercase;">Rainy Weather</p>
                    <p style="font-size: 11px; font-weight: 700; color: var(--red);">Priority Dispatch</p>
                </div>
            </div>
        </div>

        <!-- Promo Carousel -->
        <section class="home-carousel no-scrollbar stagger-2" style="padding: 0 24px 24px;">
            <div class="promo-slide" style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1000'); min-width: 320px; height: 180px;">
                <div class="promo-content">
                    <span class="promo-badge" style="background: #fff; color: #000;">Organic Special</span>
                    <h3 style="font-size: 28px; letter-spacing: -0.02em;">Fresh From <br><span style="color: var(--primary);">Village Farms</span></h3>
                    <p style="color: rgba(255,255,255,0.8); font-size: 12px; margin-top: 6px; font-weight: 600;">Harvested this morning</p>
                </div>
            </div>
            <div class="promo-slide" style="background-image: url('https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=1000'); min-width: 320px; height: 180px;">
                <div class="promo-content">
                    <span class="promo-badge">Spice Protocol</span>
                    <h3 style="font-size: 28px; letter-spacing: -0.02em;">Handpicked <br><span style="color: var(--primary);">Masala Blends</span></h3>
                    <p style="color: rgba(255,255,255,0.8); font-size: 12px; margin-top: 6px; font-weight: 600;">Authentic Indian flavors</p>
                </div>
            </div>
        </section>

        <!-- Quick Reorder -->
        <section class="quick-reorder-section stagger-2" style="padding-top: 0;">
            <div class="section-header-v3">
                <h2 class="section-title-v3">Frequently Bought <span class="ai-hint" style="background: var(--primary-light); color: var(--primary); padding: 4px 10px;">SMART PICK</span></h2>
                <button onclick="location.href='?page=orders'" style="color: var(--primary); font-size: 12px; font-weight: 800; border: none; background: none; cursor: pointer; text-transform: uppercase; letter-spacing: 0.05em;">History</button>
            </div>
            <div class="reorder-list-v3 no-scrollbar" style="gap: 16px;">
                <?php foreach ($reorderItems as $item): ?>
                <div class="reorder-card-v3" style="width: 85px;">
                    <div class="reorder-img-v3" onclick="location.href='?page=product&id=<?= $item['id'] ?>'" style="width: 85px; height: 85px; border-radius: 24px; background: var(--bg-secondary); border: 1.5px solid var(--border-color); padding: 14px;">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" style="filter: drop-shadow(0 4px 8px rgba(0,0,0,0.05));" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=200';">
                        <button class="reorder-add-small" onclick="event.stopPropagation(); location.href='?action=add_cart&id=<?= $item['id'] ?>&msg=Quickly added to basket!'" style="width: 30px; height: 30px; border-radius: 10px; bottom: -5px; right: -5px;">
                            <span class="material-symbols-outlined" style="font-size: 18px; font-weight: 800;">add</span>
                        </button>
                    </div>
                    <span style="font-size: 10px; font-weight: 800; text-align: center; color: var(--text-primary); margin-top: 8px; text-transform: uppercase; letter-spacing: 0.02em; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%;"><?= $item['brand'] ?></span>
                </div>
                <?php endforeach; ?>
                <div style="min-width: 8px;"></div>
            </div>
        </section>

        <!-- Bento Explore -->
        <section style="padding: 24px 0;" class="stagger-3">
            <div class="section-header-v3">
                <h2 class="section-title-v3">Shop by Categories</h2>
                <button onclick="location.href='?page=explore'" style="color: var(--primary); font-size: 12px; font-weight: 800; border: none; background: none; cursor: pointer; text-transform: uppercase;">View All</button>
            </div>
            <div class="bento-grid" style="height: auto; grid-template-rows: auto; gap: 16px;">
                <div class="bento-card glass" onclick="location.href='?page=explore&category=Vegetables'" style="grid-column: span 2; padding: 24px; min-height: 160px; display: flex; flex-direction: column; justify-content: space-between; border-radius: 32px;">
                    <div style="z-index: 2;">
                        <h4 class="bento-title" style="font-size: 20px; font-weight: 900;">Fresh<br>Vegetables</h4>
                        <span class="bento-sub" style="font-weight: 850;">Direct from Farms</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1566385101042-1a000c1268c4?q=80&w=400" alt="Veg" style="position: absolute; bottom: -10px; right: -10px; width: 120px; height: 120px; object-fit: contain; transform: rotate(10deg); filter: drop-shadow(0 10px 20px rgba(0,0,0,0.15));">
                </div>
                <div class="bento-card glass" onclick="location.href='?page=explore&category=Fruits'" style="grid-column: span 2; padding: 24px; min-height: 160px; display: flex; flex-direction: column; justify-content: space-between; border-radius: 32px;">
                    <div style="z-index: 2;">
                        <h4 style="font-size: 20px; font-weight: 900;">Seasonal<br>Fruits</h4>
                        <span class="bento-sub" style="font-weight: 850;">Freshly Picked</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1619566636858-adf3ef46400b?q=80&w=400" alt="Fruits" style="position: absolute; bottom: -10px; right: -10px; width: 120px; height: 120px; object-fit: contain; transform: rotate(-5deg); filter: drop-shadow(0 10px 20px rgba(0,0,0,0.15));">
                </div>
                <div class="bento-card glass" onclick="location.href='?page=explore&category=Dairy'" style="grid-column: span 1; padding: 20px; height: 140px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border-radius: 28px;">
                     <div style="width: 50px; height: 50px; background: #EDF7FC; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                        <img src="https://api.dicebear.com/7.x/icons/svg?seed=milk&icon=droplet" style="width: 30px; height: 30px;" alt="Dairy">
                     </div>
                     <span style="font-size: 13px; font-weight: 900;">Dairy</span>
                </div>
                <div class="bento-card glass" onclick="location.href='?page=explore&category=Atta & Flours'" style="grid-column: span 1; padding: 20px; height: 140px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border-radius: 28px;">
                     <div style="width: 50px; height: 50px; background: #FDE8E4; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                        <img src="https://api.dicebear.com/7.x/icons/svg?seed=grain&icon=box" style="width: 30px; height: 30px;" alt="Flour">
                     </div>
                     <span style="font-size: 13px; font-weight: 900;">Atta</span>
                </div>
                <div class="bento-card glass" onclick="location.href='?page=explore&category=Tea & Coffee'" style="grid-column: span 1; padding: 20px; height: 140px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border-radius: 28px;">
                     <div style="width: 50px; height: 50px; background: #FFF6EE; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                        <img src="https://api.dicebear.com/7.x/icons/svg?seed=coffee&icon=coffee" style="width: 30px; height: 30px;" alt="Tea">
                     </div>
                     <span style="font-size: 13px; font-weight: 900;">Brews</span>
                </div>
                <div class="bento-card glass" onclick="location.href='?page=explore&category=Instant Food'" style="grid-column: span 1; padding: 20px; height: 140px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border-radius: 28px;">
                     <div style="width: 50px; height: 50px; background: #FFF9E5; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                        <img src="https://api.dicebear.com/7.x/icons/svg?seed=fastfood&icon=fast-food" style="width: 30px; height: 30px;" alt="FastFood">
                     </div>
                     <span style="font-size: 13px; font-weight: 900;">Snacks</span>
                </div>
            </div>
        </section>

        <!-- Best Sellers -->
        <section style="padding: 16px 0 140px;" class="stagger-4">
            <div class="section-header-v3">
                <h2 class="section-title-v3">Popular Highlights</h2>
                <button onclick="location.href='?page=explore'" style="color: var(--primary); font-size: 12px; font-weight: 800; border: none; background: none; cursor: pointer; text-transform: uppercase;">Discover All</button>
            </div>
            <div class="best-seller-grid-v3" style="gap: 20px;">
                <?php foreach ($bestSellers as $product): ?>
                <?php $isFav = in_array($product['id'], $_SESSION['favorites']); ?>
                <div class="product-card-v3">
                    <div class="product-img-v3 glass" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=400';">
                        <button class="fav-btn-v3 <?= $isFav ? 'active' : '' ?>" onclick="event.stopPropagation(); location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                            <span class="material-symbols-outlined <?= $isFav ? 'filled' : '' ?>" style="font-size: 20px;"><?= $isFav ? 'favorite' : 'favorite' ?></span>
                        </button>
                    </div>
                    <div class="product-meta-v3" style="padding: 8px 4px 0;">
                        <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 4px;">
                            <span style="font-size: 10px; font-weight: 900; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em;"><?= $product['category'] ?></span>
                            <?php if ($product['isOrganic'] ?? false): ?>
                                <span style="font-size: 8px; font-weight: 950; background: var(--primary-light); color: var(--primary); padding: 2px 6px; border-radius: 4px;">ORGANIC</span>
                            <?php endif; ?>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 800; margin-bottom: 8px; line-height: 1.3; height: 40px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"><?= $product['name'] ?></h4>
                        <div class="product-footer-v3">
                            <div style="display: flex; flex-direction: column;">
                                <span class="price" style="font-size: 18px; font-weight: 950; color: var(--text-primary); letter-spacing: -0.01em;">₹<?= $product['price'] ?></span>
                                <span style="font-size: 11px; color: var(--text-muted); font-weight: 850; text-transform: uppercase;"><?= $product['weight'] ?></span>
                            </div>
                            <button class="add-btn-v3" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">
                                <span class="material-symbols-outlined" style="font-weight: 950; font-size: 24px;">shopping_basket</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</div>
