<?php
// Home Page - Blinkit/Zepto Inspired Premium Design
// Select a mix of trending items
$bestSellers = array_slice($products, 0, 10); 
$snackItems = array_values(array_filter($products, function($p) { return $p['category'] === 'Snacks & Munchies'; }));
$beverageItems = array_values(array_filter($products, function($p) { return $p['category'] === 'Cold Drinks & Juices'; }));
?>
<div class="view-enter home-page-v3" style="background: var(--bg-main);">
    <!-- Sticky Neo-Premium Header -->
    <header id="main-header" style="background: var(--bg-header); padding: 16px 16px 24px; position: sticky; top: 0; z-index: 1000; border-radius: 0 0 32px 32px; box-shadow: var(--shadow-lg); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
        <div id="header-top-row" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
            <div class="location-chip-v3" onclick="detectLocation()" style="display: flex; align-items: center; gap: 14px; cursor: pointer;">
                <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                    <i data-lucide="map-pin" style="color: #fff; width: 24px; height: 24px;"></i>
                </div>
                <div>
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <h3 id="location-title" style="font-size: 17px; font-weight: 850; color: #fff; line-height: 1.1; letter-spacing: -0.01em;">HSR Layout</h3>
                        <i data-lucide="chevron-down" style="color: #fff; width: 18px; height: 18px; opacity: 0.8;"></i>
                    </div>
                    <p id="location-subtitle" style="font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.7); margin-top: 3px; letter-spacing: 0.01em;">Bengaluru, KA 560102</p>
                </div>
            </div>
            <div style="display: flex; gap: 10px;">
                <button class="icon-btn-v3" onclick="toggleTheme()" style="background: rgba(255,255,255,0.15); border: none; border-radius: 14px; width: 44px; height: 44px; color: #fff; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                    <i data-lucide="moon" class="light-icon" style="width: 22px; height: 22px;"></i>
                    <i data-lucide="sun" class="dark-icon" style="width: 22px; height: 22px;"></i>
                </button>
                <div style="position: relative;">
                    <button class="icon-btn-v3" onclick="toggleNotifications()" style="background: rgba(255,255,255,0.15); border: none; border-radius: 14px; width: 44px; height: 44px; color: #fff; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                        <i data-lucide="bell" style="width: 22px; height: 22px;"></i>
                    </button>
                    <div style="position: absolute; top: 10px; right: 10px; width: 8px; height: 8px; background: var(--brand-primary); border-radius: 50%; border: 2px solid #8E0E44;"></div>
                </div>
                <button class="icon-btn-v3" onclick="location.href='?page=profile'" style="background: rgba(255,255,255,0.15); border: none; border-radius: 14px; width: 44px; height: 44px; color: #fff; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                    <i data-lucide="user" style="width: 22px; height: 22px;"></i>
                </button>
            </div>
        </div>

        <form action="index.php" method="GET" id="search-container" class="u-search-container" style="transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
            <input type="hidden" name="page" value="explore">
            <div class="u-search-bar">
                <i data-lucide="search" style="color: var(--brand-primary); width: 22px; height: 22px;"></i>
                <input type="text" name="search" placeholder="Search 'Alphonso Mango'" autocomplete="off">
                <div style="width: 1.5px; height: 20px; background: var(--border-subtle);"></div>
                <i data-lucide="mic" style="color: var(--text-muted); width: 22px; height: 22px;"></i>
            </div>
        </form>
    </header>

    <main>
        <!-- Modern Banners -->
        <section class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding: 24px 16px;">
            <div style="min-width: 88%; height: 180px; background: var(--cat-veggies); border-radius: 28px; padding: 24px; display: flex; align-items: center; justify-content: space-between; overflow: hidden; position: relative; border: 1px solid var(--border-subtle); box-shadow: var(--shadow-sm);">
                <div style="z-index: 2;">
                    <div style="background: var(--brand-primary); color: #fff; padding: 4px 12px; border-radius: 8px; font-size: 10px; font-weight: 950; display: inline-block; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.1em;">Direct from Farm</div>
                    <h2 style="font-size: 24px; font-weight: 950; color: var(--text-primary); margin: 0 0 16px; line-height: 1.1; letter-spacing: -0.02em;">Fresh Veggies<br>Starting @ ₹19</h2>
                    <button style="background: var(--text-primary); color: #fff; border: none; border-radius: 12px; padding: 10px 20px; font-size: 12px; font-weight: 900; box-shadow: var(--shadow-md);">SHOP NOW</button>
                </div>
                <img src="assets/fruits_veg_hero.png" style="width: 140px; height: 140px; object-fit: cover; border-radius: 20px; transform: rotate(-8deg); margin-right: -10px; box-shadow: var(--shadow-lg);">
            </div>
            <div style="min-width: 88%; height: 180px; background: var(--cat-fruits); border-radius: 28px; padding: 24px; display: flex; align-items: center; justify-content: space-between; overflow: hidden; position: relative; border: 1px solid var(--border-subtle); box-shadow: var(--shadow-sm);">
                <div style="z-index: 2;">
                    <div style="background: var(--brand-accent); color: #fff; padding: 4px 12px; border-radius: 8px; font-size: 10px; font-weight: 950; display: inline-block; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.1em;">Weekend Sale</div>
                    <h2 style="font-size: 24px; font-weight: 950; color: var(--text-primary); margin: 0 0 16px; line-height: 1.1; letter-spacing: -0.02em;">Super Fruits<br>Up to 40% Off</h2>
                    <button style="background: var(--brand-accent); color: #fff; border: none; border-radius: 12px; padding: 10px 20px; font-size: 12px; font-weight: 900; box-shadow: var(--shadow-md);">CLAIM OFFER</button>
                </div>
                <img src="assets/exotic_fruits.png" style="width: 140px; height: 140px; object-fit: cover; border-radius: 20px; transform: rotate(12deg); margin-right: -10px; box-shadow: var(--shadow-lg);">
            </div>
        </section>

        <!-- Dynamic Category Grid -->
        <section style="padding: 0 16px 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Shop by Category</h2>
                <div style="width: 40px; height: 4px; background: var(--brand-primary); border-radius: 10px; opacity: 0.3;"></div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px 14px;">
                <?php
                $categories_all = [
                    ['n' => 'Dairy & Bread', 'i' => '🥛', 'bg' => 'var(--cat-dairy)', 'id' => 'Dairy & Bread'],
                    ['n' => 'Fruits & Veg', 'i' => '🍎', 'bg' => 'var(--cat-fruits)', 'id' => 'Fruits & Vegetables'],
                    ['n' => 'Atta & Rice', 'i' => '🌾', 'bg' => 'var(--cat-atta)', 'id' => 'Atta, Rice & Dal'],
                    ['n' => 'Snacks', 'i' => '🍪', 'bg' => 'var(--cat-snacks)', 'id' => 'Snacks & Munchies'],
                    ['n' => 'Drinks', 'i' => '🧃', 'bg' => 'var(--cat-frozen)', 'id' => 'Cold Drinks & Juices'],
                    ['n' => 'Instant', 'i' => '🍜', 'bg' => 'var(--cat-atta)', 'id' => 'Breakfast & Instant Food'],
                    ['n' => 'Tea / Coffee', 'i' => '☕', 'bg' => 'var(--cat-tea)', 'id' => 'Tea & Coffee'],
                    ['n' => 'Care', 'i' => '🧴', 'bg' => 'var(--cat-more)', 'id' => 'Personal Care']
                ];
                foreach ($categories_all as $c): ?>
                <div class="stagger-item" onclick="location.href='?page=explore&category=<?= urlencode($c['id'] ?? $c['n']) ?>'" style="display: flex; flex-direction: column; align-items: center; gap: 10px; cursor: pointer;">
                    <div class="category-tile" style="width: 100%; aspect-ratio: 1; background: <?= $c['bg'] ?>; border-radius: 22px; display: flex; align-items: center; justify-content: center; font-size: 34px; box-shadow: var(--shadow-sm); border: 1.5px solid var(--bg-main); transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <?= $c['i'] ?>
                    </div>
                    <span style="font-size: 11px; font-weight: 800; color: var(--text-primary); text-align: center; line-height: 1.2;"><?= $c['n'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Neo-Highlights Section -->
        <section style="background: var(--bg-secondary); padding: 32px 16px; border-radius: 40px 40px 0 0; border-top: 1px solid var(--border-subtle);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <div>
                    <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Trending Now</h2>
                    <p style="font-size: 11px; color: var(--brand-primary); font-weight: 800; text-transform: uppercase; margin-top: 2px;">Fresh from the hub</p>
                </div>
                <button onclick="location.href='?page=explore'" style="background: var(--bg-tile); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: 12px; padding: 8px 16px; font-size: 12px; font-weight: 850; box-shadow: var(--shadow-sm);">See All</button>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                <?php foreach ($bestSellers as $product): ?>
                <?php 
                    $isFav = in_array($product['id'], $_SESSION['favorites']); 
                    $deliveryTime = rand(8, 15) . " MINS";
                ?>
                <div class="product-card-v3">
                    <div class="delivery-time-badge">
                        <i data-lucide="timer" style="width: 12px; height: 12px; margin-right: 4px;"></i>
                        <?= $deliveryTime ?>
                    </div>
                    <button class="fav-btn-v3 <?= $isFav ? 'active' : '' ?>" onclick="location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                        <i data-lucide="heart" style="width: 16px; height: 16px; <?= $isFav ? 'fill: currentColor;' : '' ?>"></i>
                    </button>
                    <div class="product-img-v3" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    </div>
                    <div class="product-title-v3"><?= $product['name'] ?></div>
                    <div class="product-weight-v3"><?= $product['weight'] ?></div>
                    <div class="product-footer-v3">
                        <div class="price-container-v3">
                            <span class="price-current">₹<?= $product['price'] ?></span>
                            <?php if (isset($product['oldPrice'])): ?>
                                <span class="price-old">₹<?= $product['oldPrice'] ?></span>
                            <?php endif; ?>
                        </div>
                        <button class="add-btn-v3" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">ADD</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Breakfast Specials Section -->
        <section style="padding: 24px 16px; background: rgba(59, 113, 254, 0.03);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <div>
                    <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Breakfast Specials</h2>
                    <p style="font-size: 11px; color: #3B71FE; font-weight: 800; text-transform: uppercase; margin-top: 2px;">Start your protocol fresh</p>
                </div>
                <button onclick="location.href='?page=explore&category=<?= urlencode('Dairy & Bread') ?>'" style="background: var(--bg-tile); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: 12px; padding: 8px 16px; font-size: 12px; font-weight: 850; box-shadow: var(--shadow-sm);">View All</button>
            </div>
            
            <div class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding-bottom: 8px;">
                <?php 
                $breakfastItems = array_values(array_filter($products, function($p) {
                    return in_array($p['category'], ['Dairy & Bread', 'Tea & Coffee', 'Breakfast & Instant Food']);
                }));
                foreach (array_slice($breakfastItems, 0, 8) as $product): ?>
                <div class="product-card-v3 stagger-item" style="min-width: 140px; max-width: 140px; padding: 12px;">
                    <div class="product-img-v3" style="height: 100px; margin-bottom: 8px;" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 80%; height: 80%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 12px; height: 32px; overflow: hidden; margin-bottom: 4px;"><?= $product['name'] ?></div>
                    <div class="product-footer-v3">
                        <span class="price-current" style="font-size: 13px;">₹<?= $product['price'] ?></span>
                        <button class="add-btn-v3" style="width: 28px; height: 28px; border-radius: 8px;" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">+</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Snacks & Beverages Section -->
        <section style="padding: 24px 16px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <div>
                    <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Munchies & Sips</h2>
                    <p style="font-size: 11px; color: var(--brand-accent); font-weight: 800; text-transform: uppercase; margin-top: 2px;">Party Essentials</p>
                </div>
                <button onclick="location.href='?page=explore&category=<?= urlencode('Snacks & Munchies') ?>'" style="background: var(--bg-tile); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: 12px; padding: 8px 16px; font-size: 12px; font-weight: 850; box-shadow: var(--shadow-sm);">See More</button>
            </div>
            
            <div class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding-bottom: 8px;">
                <?php foreach (array_merge(array_slice($snackItems, 0, 5), array_slice($beverageItems, 0, 5)) as $product): ?>
                <?php 
                    $isFav = in_array($product['id'], $_SESSION['favorites']); 
                ?>
                <div class="product-card-v3" style="min-width: 140px; max-width: 140px; padding: 10px;">
                    <button class="fav-btn-v3 <?= $isFav ? 'active' : '' ?>" style="top: 8px; right: 8px; width: 28px; height: 28px;" onclick="location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                        <i data-lucide="heart" style="width: 12px; height: 12px; <?= $isFav ? 'fill: currentColor;' : '' ?>"></i>
                    </button>
                    <div class="product-img-v3" style="height: 100px; margin-bottom: 8px;" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 80%; height: 80%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 12px; height: 32px; overflow: hidden; margin-bottom: 4px;"><?= $product['name'] ?></div>
                    <div class="product-footer-v3">
                        <span class="price-current" style="font-size: 13px;">₹<?= $product['price'] ?></span>
                        <button class="add-btn-v3" style="width: 28px; height: 28px; border-radius: 8px;" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">+</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Banner - Coupon Style -->
        <section style="padding: 24px 16px;">
            <div style="background: linear-gradient(90deg, #6200EA 0%, #B388FF 100%); border-radius: 20px; padding: 20px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 25px rgba(98, 0, 234, 0.2);">
                <div>
                    <h3 style="color: #fff; font-size: 18px; font-weight: 850;">FreshGo Pass</h3>
                    <p style="color: rgba(255,255,255,0.8); font-size: 12px; font-weight: 600; margin-top: 4px;">Save ₹50 on every order</p>
                </div>
                <button style="background: #fff; color: #6200EA; border: none; border-radius: 10px; padding: 10px 20px; font-size: 12px; font-weight: 800;">ACTIVATE</button>
            </div>
        </section>

        <!-- Buy it Again (Simulation) -->
        <?php if (!empty($_SESSION['cart'])): ?>
        <section style="padding: 24px 16px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Buy it Again</h2>
                <div style="width: 40px; height: 4px; background: var(--brand-primary); border-radius: 10px; opacity: 0.3;"></div>
            </div>
            <div class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding-bottom: 8px;">
                <?php foreach (array_slice($_SESSION['cart'], 0, 4) as $item): ?>
                <div class="product-card-v3" style="min-width: 120px; max-width: 120px; padding: 10px;">
                    <div class="product-img-v3" style="height: 80px; margin-bottom: 8px;">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" style="width: 80%; height: 80%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 11px; height: 28px; line-height: 1.2;"><?= $item['name'] ?></div>
                    <button class="add-btn-v3" style="width: 100%; height: 28px; border-radius: 8px; margin-top: 6px;" onclick="location.href='?action=add_cart&id=<?= $item['id'] ?>'"><?= $item['price'] ?> +</button>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- Organic Selection Section -->
        <section style="padding: 24px 16px; background: rgba(18, 185, 95, 0.03);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <div>
                    <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Organic & Farm Fresh</h2>
                    <p style="font-size: 11px; color: #4CAF50; font-weight: 800; text-transform: uppercase; margin-top: 2px;">No Chemicals. Pure Nature.</p>
                </div>
                <div style="width: 40px; height: 4px; background: #4CAF50; border-radius: 10px; opacity: 0.3;"></div>
            </div>
            
            <div class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding-bottom: 8px;">
                <?php 
                $organicItems = array_values(array_filter($products, function($p) { return isset($p['isOrganic']) && $p['isOrganic']; }));
                foreach ($organicItems as $product): ?>
                <div class="product-card-v3" style="min-width: 140px; max-width: 140px; padding: 12px; border-color: rgba(76, 175, 80, 0.2);">
                    <div style="position: absolute; top: 8px; left: 8px; background: #4CAF50; color: white; padding: 2px 6px; border-radius: 4px; font-size: 8px; font-weight: 900; z-index: 10;">ORGANIC</div>
                    <div class="product-img-v3" style="height: 100px; margin-bottom: 8px;" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 80%; height: 80%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 12px; height: 32px; overflow: hidden; margin-bottom: 4px;"><?= $product['name'] ?></div>
                    <div class="product-footer-v3">
                        <span class="price-current" style="font-size: 13px;">₹<?= $product['price'] ?></span>
                        <button class="add-btn-v3" style="width: 28px; height: 28px; border-radius: 8px; border-color: #4CAF50; color: #4CAF50;" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">+</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Exotic & Premium Section -->
        <section style="padding: 24px 16px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 0 4px;">
                <div>
                    <h2 style="font-size: 20px; font-weight: 850; color: var(--text-primary); letter-spacing: -0.01em;">Exotic & Premium</h2>
                    <p style="font-size: 11px; color: var(--brand-primary); font-weight: 800; text-transform: uppercase; margin-top: 2px;">Global Taste, Local Delivery</p>
                </div>
                <button onclick="location.href='?page=explore'" style="background: var(--bg-tile); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: 12px; padding: 8px 16px; font-size: 12px; font-weight: 850; box-shadow: var(--shadow-sm);">Explore All</button>
            </div>
            
            <div class="no-scrollbar" style="display: flex; gap: 16px; overflow-x: auto; padding-bottom: 8px;">
                <?php 
                $premiumItems = array_values(array_filter($products, function($p) { return isset($p['isPremium']) && $p['isPremium']; }));
                foreach ($premiumItems as $product): ?>
                <div class="product-card-v3 u-card-shine" style="min-width: 160px; max-width: 160px; padding: 12px; background: linear-gradient(145deg, var(--bg-tile), var(--bg-secondary)); border-color: var(--brand-primary);">
                    <div style="position: absolute; top: 8px; left: 8px; background: var(--brand-primary); color: white; padding: 2px 6px; border-radius: 4px; font-size: 8px; font-weight: 900; z-index: 10;">PREMIUM</div>
                    <div class="product-img-v3" style="height: 120px; margin-bottom: 8px;" onclick="location.href='?page=product&id=<?= $product['id'] ?>'">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 85%; height: 85%;">
                    </div>
                    <div class="product-title-v3" style="font-size: 13px; height: 34px; line-height: 1.3; margin-bottom: 4px;"><?= $product['name'] ?></div>
                    <div class="product-footer-v3">
                        <span class="price-current" style="font-size: 14px;">₹<?= $product['price'] ?></span>
                        <button class="add-btn-v3" style="width: 32px; height: 32px; border-radius: 10px;" onclick="location.href='?action=add_cart&id=<?= $product['id'] ?>'">ADD</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</div>

