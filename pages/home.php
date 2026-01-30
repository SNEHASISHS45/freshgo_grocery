<?php
// Home Page - Blinkit/Zepto Inspired Premium Design
$bestSellers = array_slice($products, 0, 6); 
$reorderItems = array_slice($products, 12, 4);
?>
<div class="view-enter home-page-v3" style="background: var(--bg-main);">
    <!-- Sticky Neo-Premium Header -->
    <header style="background: var(--bg-header); padding: 16px 16px 24px; position: sticky; top: 0; z-index: 1000; border-radius: 0 0 32px 32px; box-shadow: var(--shadow-lg);">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
            <div class="location-chip-v3" onclick="detectLocation()" style="display: flex; align-items: center; gap: 14px; cursor: pointer;">
                <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                    <span class="material-symbols-outlined" style="color: #fff; font-size: 26px;">location_on</span>
                </div>
                <div>
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <h3 id="location-title" style="font-size: 17px; font-weight: 850; color: #fff; line-height: 1.1; letter-spacing: -0.01em;">HSR Layout</h3>
                        <span class="material-symbols-outlined" style="color: #fff; font-size: 20px; opacity: 0.8;">keyboard_arrow_down</span>
                    </div>
                    <p id="location-subtitle" style="font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.7); margin-top: 3px; letter-spacing: 0.01em;">Bengaluru, KA 560102</p>
                </div>
            </div>
            <div style="display: flex; gap: 10px;">
                <button class="icon-btn-v3" onclick="toggleTheme()" style="background: rgba(255,255,255,0.15); border: none; border-radius: 14px; width: 44px; height: 44px; color: #fff; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                    <span class="material-symbols-outlined light-icon" style="font-size: 22px;">dark_mode</span>
                    <span class="material-symbols-outlined dark-icon" style="font-size: 22px;">light_mode</span>
                </button>
                <div style="position: relative;">
                    <button class="icon-btn-v3" onclick="toggleNotifications()" style="background: rgba(255,255,255,0.15); border: none; border-radius: 14px; width: 44px; height: 44px; color: #fff; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                        <span class="material-symbols-outlined" style="font-size: 22px;">notifications</span>
                    </button>
                    <div style="position: absolute; top: 10px; right: 10px; width: 8px; height: 8px; background: var(--brand-primary); border-radius: 50%; border: 2px solid #8E0E44;"></div>
                </div>
                <button class="icon-btn-v3" onclick="location.href='?page=profile'" style="background: rgba(255,255,255,0.15); border: none; border-radius: 14px; width: 44px; height: 44px; color: #fff; backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                    <span class="material-symbols-outlined" style="font-size: 22px;">person</span>
                </button>
            </div>
        </div>

        <form action="index.php" method="GET" style="position: relative;">
            <input type="hidden" name="page" value="explore">
            <div class="search-bar-v3" style="background: var(--bg-tile); border: none; border-radius: 18px; height: 54px; padding: 0 18px; display: flex; align-items: center; gap: 14px; box-shadow: var(--shadow-premium);">
                <span class="material-symbols-outlined" style="color: var(--brand-primary); font-size: 24px;">search</span>
                <input type="text" name="search" placeholder="Search 'Alphonso Mango'" style="flex: 1; border: none; background: none; outline: none; font-size: 15px; font-weight: 700; color: var(--text-primary);">
                <div style="width: 1.5px; height: 20px; background: var(--border-subtle);"></div>
                <span class="material-symbols-outlined" style="color: var(--text-muted); font-size: 24px;">mic</span>
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
                <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?q=80&w=300" style="width: 140px; height: 140px; object-fit: cover; border-radius: 20px; transform: rotate(-8deg); margin-right: -10px; box-shadow: var(--shadow-lg);">
            </div>
            <div style="min-width: 88%; height: 180px; background: var(--cat-fruits); border-radius: 28px; padding: 24px; display: flex; align-items: center; justify-content: space-between; overflow: hidden; position: relative; border: 1px solid var(--border-subtle); box-shadow: var(--shadow-sm);">
                <div style="z-index: 2;">
                    <div style="background: var(--brand-accent); color: #fff; padding: 4px 12px; border-radius: 8px; font-size: 10px; font-weight: 950; display: inline-block; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.1em;">Weekend Sale</div>
                    <h2 style="font-size: 24px; font-weight: 950; color: var(--text-primary); margin: 0 0 16px; line-height: 1.1; letter-spacing: -0.02em;">Super Fruits<br>Up to 40% Off</h2>
                    <button style="background: var(--brand-accent); color: #fff; border: none; border-radius: 12px; padding: 10px 20px; font-size: 12px; font-weight: 900; box-shadow: var(--shadow-md);">CLAIM OFFER</button>
                </div>
                <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=300" style="width: 140px; height: 140px; object-fit: cover; border-radius: 20px; transform: rotate(12deg); margin-right: -10px; box-shadow: var(--shadow-lg);">
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
                    ['n' => 'Dairy', 'i' => '🥛', 'bg' => 'var(--cat-dairy)'],
                    ['n' => 'Fruits', 'i' => '🍎', 'bg' => 'var(--cat-fruits)'],
                    ['n' => 'Veggies', 'i' => '🥦', 'bg' => 'var(--cat-veggies)'],
                    ['n' => 'Snacks', 'i' => '🍪', 'bg' => 'var(--cat-snacks)'],
                    ['n' => 'Atta', 'i' => '🌾', 'bg' => 'var(--cat-atta)'],
                    ['n' => 'Tea', 'i' => '☕', 'bg' => 'var(--cat-tea)'],
                    ['n' => 'Frozen', 'i' => '🧊', 'bg' => 'var(--cat-frozen)'],
                    ['n' => 'More', 'i' => '✨', 'bg' => 'var(--cat-more)']
                ];
                foreach ($categories_all as $c): ?>
                <div onclick="location.href='?page=explore&category=<?= urlencode($c['n']) ?>'" style="display: flex; flex-direction: column; align-items: center; gap: 10px; cursor: pointer;">
                    <div style="width: 100%; aspect-ratio: 1; background: <?= $c['bg'] ?>; border-radius: 22px; display: flex; align-items: center; justify-content: center; font-size: 34px; box-shadow: var(--shadow-sm); border: 1.5px solid var(--bg-main); transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
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
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">timer</span>
                        <?= $deliveryTime ?>
                    </div>
                    <button class="fav-btn-v3 <?= $isFav ? 'active' : '' ?>" onclick="location.href='?action=toggle_favorite&id=<?= $product['id'] ?>'">
                        <span class="material-symbols-outlined <?= $isFav ? 'filled' : '' ?>" style="font-size: 18px;">favorite</span>
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

        <div style="height: 120px;"></div>
    </main>
</div>

