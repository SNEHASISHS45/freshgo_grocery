<div class="view-enter">
    <header class="header">
        <div class="header-top">
            <div class="header-left">
                <div class="avatar">
                    <img src="https://picsum.photos/seed/freshpro/100/100" alt="Profile">
                </div>
                <div class="delivery-info">
                    <span class="delivery-label">Delivering in 12 Mins</span>
                    <div class="address-row">
                        <span class="address-text">HSR Layout, Sector 2</span>
                        <span class="material-symbols-outlined" style="font-size: 14px; color: var(--primary);">expand_more</span>
                    </div>
                </div>
            </div>
            <a href="?page=notifications" class="notification-btn">
                <span class="material-symbols-outlined">notifications</span>
                <span class="notification-dot"></span>
            </a>
        </div>

        <div class="search-container">
            <span class="material-symbols-outlined search-icon">search</span>
            <input type="text" class="search-input" placeholder="Search 'Doodh' or ask for a recipe..." id="searchInput">
            <button class="search-ai-btn" id="aiSearchBtn">
                <span class="material-symbols-outlined">auto_awesome</span>
            </button>
        </div>

        <div class="categories">
            <?php foreach ($categories as $cat): ?>
            <a href="?page=home&category=<?= urlencode($cat) ?>" class="category-btn <?= $category === $cat ? 'active' : '' ?>">
                <?= htmlspecialchars($cat) ?>
            </a>
            <?php endforeach; ?>
        </div>
    </header>

    <!-- AI Response -->
    <div id="aiResponse" class="ai-response" style="display: none; margin: 16px 24px; padding: 24px; background: rgba(57, 255, 20, 0.1); border: 1px solid rgba(57, 255, 20, 0.2); border-radius: 24px;">
        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
            <div style="width: 24px; height: 24px; background: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <span class="material-symbols-outlined" style="font-size: 14px; color: #000;">smart_toy</span>
            </div>
            <span style="font-size: 10px; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 0.1em;">FreshGo AI Guru</span>
        </div>
        <p id="aiMessage" style="font-size: 14px; color: var(--white); font-weight: 600; line-height: 1.5; margin-bottom: 16px;"></p>
        <button onclick="document.getElementById('aiResponse').style.display='none'" style="font-size: 10px; font-weight: 800; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em; background: none; border: none; cursor: pointer;">Dismiss Assistant</button>
    </div>

    <!-- Promo Banners Slider -->
    <div class="promo-slider" style="display: flex; gap: 12px; overflow-x: auto; padding: 0 24px; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
        <div class="promo-banner" style="min-width: 85%; scroll-snap-align: start;">
            <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=600" alt="Promo">
            <div class="promo-overlay">
                <span class="promo-tag">Sabzi Special</span>
                <h3 class="promo-title">Flat 20% Off <br><span>Farm Fresh Vegetables</span></h3>
                <p class="promo-subtitle">Straight from local Indian farms</p>
            </div>
        </div>
        <div class="promo-banner" style="min-width: 85%; scroll-snap-align: start;">
            <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?q=80&w=600" alt="Dairy">
            <div class="promo-overlay">
                <span class="promo-tag" style="background: #fff; color: #000;">Dairy Days</span>
                <h3 class="promo-title">Buy 2 Get 1 Free <br><span>Premium Milk & Paneer</span></h3>
                <p class="promo-subtitle">Fresh from Amul & Mother Dairy</p>
            </div>
        </div>
        <div class="promo-banner" style="min-width: 85%; scroll-snap-align: start;">
            <img src="https://images.unsplash.com/photo-1553279768-865429fa0078?q=80&w=600" alt="Fruits">
            <div class="promo-overlay">
                <span class="promo-tag" style="background: #ff6b35;">🥭 Mango Fest</span>
                <h3 class="promo-title">Alphonso Season <br><span>Starting ₹599/dozen</span></h3>
                <p class="promo-subtitle">Limited time - Order now!</p>
            </div>
        </div>
    </div>

    <!-- Quick Links -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; padding: 20px 24px;">
        <a href="?page=home&category=Dairy" style="text-decoration: none; text-align: center;">
            <div style="width: 56px; height: 56px; background: rgba(57, 255, 20, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <span style="font-size: 28px;">🥛</span>
            </div>
            <span style="font-size: 11px; color: var(--white); font-weight: 600;">Dairy</span>
        </a>
        <a href="?page=home&category=Fruits" style="text-decoration: none; text-align: center;">
            <div style="width: 56px; height: 56px; background: rgba(255, 107, 53, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <span style="font-size: 28px;">🍎</span>
            </div>
            <span style="font-size: 11px; color: var(--white); font-weight: 600;">Fruits</span>
        </a>
        <a href="?page=home&category=Vegetables" style="text-decoration: none; text-align: center;">
            <div style="width: 56px; height: 56px; background: rgba(34, 197, 94, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <span style="font-size: 28px;">🥬</span>
            </div>
            <span style="font-size: 11px; color: var(--white); font-weight: 600;">Veggies</span>
        </a>
        <a href="?page=home&category=Masala+%26+Spices" style="text-decoration: none; text-align: center;">
            <div style="width: 56px; height: 56px; background: rgba(239, 68, 68, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px;">
                <span style="font-size: 28px;">🌶️</span>
            </div>
            <span style="font-size: 11px; color: var(--white); font-weight: 600;">Spices</span>
        </a>
    </div>

    <!-- Flash Deals Section -->
    <section style="padding: 0 24px 24px;">
        <div style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(255, 107, 53, 0.15) 100%); border-radius: 20px; padding: 20px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <span class="material-symbols-outlined" style="color: #ff6b35; font-size: 24px;">bolt</span>
                    <div>
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--white); margin-bottom: 2px;">Flash Deals</h3>
                        <p style="font-size: 11px; color: var(--zinc-400);">Ends in <span id="countdown" style="color: #ff6b35; font-weight: 700;">02:45:30</span></p>
                    </div>
                </div>
                <a href="?page=explore" style="font-size: 11px; color: #ff6b35; font-weight: 700; text-decoration: none;">View All →</a>
            </div>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                <?php 
                $flashDeals = array_filter($products, fn($p) => !empty($p['isOnSale']));
                foreach (array_slice($flashDeals, 0, 2) as $deal): 
                ?>
                <a href="?page=product&id=<?= $deal['id'] ?>" style="background: var(--tile-grey); border-radius: 14px; padding: 12px; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                    <img src="<?= htmlspecialchars($deal['image']) ?>" style="width: 56px; height: 56px; object-fit: cover; border-radius: 10px; flex-shrink: 0;">
                    <div style="min-width: 0;">
                        <p style="font-size: 12px; color: var(--white); font-weight: 600; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= htmlspecialchars($deal['name']) ?></p>
                        <div style="display: flex; align-items: center; gap: 6px;">
                            <span style="font-size: 14px; color: var(--primary); font-weight: 800;">₹<?= $deal['price'] ?></span>
                            <span style="font-size: 10px; color: var(--zinc-500); text-decoration: line-through;">₹<?= $deal['oldPrice'] ?></span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Trending Now Section -->
    <section style="padding: 0 24px 24px;">
        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
            <span class="material-symbols-outlined" style="color: var(--primary);">trending_up</span>
            <h3 style="font-size: 16px; font-weight: 800; color: var(--white);">Trending Now</h3>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
            <a href="?page=home&category=Dairy" style="padding: 14px; background: var(--tile-grey); border-radius: 14px; text-decoration: none; text-align: center;">
                <span style="font-size: 24px; display: block; margin-bottom: 6px;">🧈</span>
                <span style="font-size: 11px; font-weight: 700; color: var(--white); display: block;">Amul Butter</span>
                <span style="font-size: 9px; color: var(--primary); font-weight: 600;">+250%</span>
            </a>
            <a href="?page=home&category=Tea+%26+Coffee" style="padding: 14px; background: var(--tile-grey); border-radius: 14px; text-decoration: none; text-align: center;">
                <span style="font-size: 24px; display: block; margin-bottom: 6px;">☕</span>
                <span style="font-size: 11px; font-weight: 700; color: var(--white); display: block;">Tata Tea</span>
                <span style="font-size: 9px; color: var(--primary); font-weight: 600;">+180%</span>
            </a>
            <a href="?page=product&id=3" style="padding: 14px; background: var(--tile-grey); border-radius: 14px; text-decoration: none; text-align: center;">
                <span style="font-size: 24px; display: block; margin-bottom: 6px;">🥭</span>
                <span style="font-size: 11px; font-weight: 700; color: var(--white); display: block;">Alphonso</span>
                <span style="font-size: 9px; color: var(--primary); font-weight: 600;">+320%</span>
            </a>
        </div>
    </section>

    <!-- Shop by Brand -->
    <section style="padding: 0 24px 24px;">
        <h3 style="font-size: 16px; font-weight: 800; color: var(--white); margin-bottom: 12px;">Shop by Brand</h3>
        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 8px;">
            <a href="?page=home&category=Dairy" style="padding: 12px 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; text-align: center; text-decoration: none;">
                <div style="font-size: 10px; font-weight: 800; color: var(--white);">AMUL</div>
            </a>
            <a href="?page=home&category=Tea+%26+Coffee" style="padding: 12px 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; text-align: center; text-decoration: none;">
                <div style="font-size: 10px; font-weight: 800; color: var(--white);">TATA</div>
            </a>
            <a href="?page=home&category=Atta+%26+Flours" style="padding: 12px 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; text-align: center; text-decoration: none;">
                <div style="font-size: 10px; font-weight: 800; color: var(--white);">ITC</div>
            </a>
            <a href="?page=home&category=Instant+Food" style="padding: 12px 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; text-align: center; text-decoration: none;">
                <div style="font-size: 10px; font-weight: 800; color: var(--white);">NESTLE</div>
            </a>
            <a href="?page=home&category=Masala+%26+Spices" style="padding: 12px 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; text-align: center; text-decoration: none;">
                <div style="font-size: 10px; font-weight: 800; color: var(--white);">MDH</div>
            </a>
        </div>
    </section>

    <!-- Products Section -->
    <section style="padding: 0 0 24px;">
        <div class="section-header">
            <h2 class="section-title">Insta-Deals</h2>
            <a href="?page=explore" class="section-link">Explore All</a>
        </div>

        <div class="products-grid">
            <?php foreach ($filteredProducts as $product): ?>
            <div class="product-card">
                <div class="product-image-container" onclick="window.location.href='?page=product&id=<?= $product['id'] ?>'">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image">
                    <button class="favorite-btn <?= in_array($product['id'], $_SESSION['favorites']) ? 'active' : '' ?>" onclick="event.stopPropagation(); toggleFavorite('<?= $product['id'] ?>')">
                        <span class="material-symbols-outlined <?= in_array($product['id'], $_SESSION['favorites']) ? 'filled' : '' ?>">favorite</span>
                    </button>
                    <?php if (!empty($product['isOnSale'])): ?>
                    <span class="sale-badge">Offer</span>
                    <?php endif; ?>
                </div>
                <div class="product-info">
                    <p class="product-category"><?= htmlspecialchars($product['category']) ?></p>
                    <h4 class="product-name"><?= htmlspecialchars($product['name']) ?></h4>
                    <div class="product-footer">
                        <div class="product-price">
                            <span class="price-current">₹<?= $product['price'] ?></span>
                            <?php if (!empty($product['oldPrice'])): ?>
                            <span class="price-old">₹<?= $product['oldPrice'] ?></span>
                            <?php endif; ?>
                        </div>
                        <button class="add-btn" onclick="addToCart('<?= $product['id'] ?>')">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Free Delivery Banner -->
    <section style="padding: 0 24px 24px;">
        <div style="background: linear-gradient(135deg, rgba(57, 255, 20, 0.1) 0%, rgba(34, 197, 94, 0.1) 100%); border: 1px solid rgba(57, 255, 20, 0.2); border-radius: 20px; padding: 20px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 56px; height: 56px; background: var(--primary); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <span class="material-symbols-outlined" style="color: #000; font-size: 28px;">local_shipping</span>
            </div>
            <div>
                <h4 style="font-size: 15px; font-weight: 800; color: var(--white); margin-bottom: 4px;">Free Delivery on ₹499+</h4>
                <p style="font-size: 12px; color: var(--zinc-400);">Save ₹25 on delivery • No code needed</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section style="padding: 0 24px 120px;">
        <h3 style="font-size: 18px; font-weight: 800; color: var(--white); margin-bottom: 16px;">Why FreshGo?</h3>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
            <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; text-align: center;">
                <span class="material-symbols-outlined" style="font-size: 28px; color: var(--primary); margin-bottom: 8px;">speed</span>
                <p style="font-size: 13px; font-weight: 700; color: var(--white);">12-Min Delivery</p>
                <p style="font-size: 11px; color: var(--zinc-500); margin-top: 4px;">Fastest in Bangalore</p>
            </div>
            <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; text-align: center;">
                <span class="material-symbols-outlined" style="font-size: 28px; color: var(--primary); margin-bottom: 8px;">verified</span>
                <p style="font-size: 13px; font-weight: 700; color: var(--white);">100% Fresh</p>
                <p style="font-size: 11px; color: var(--zinc-500); margin-top: 4px;">Quality guaranteed</p>
            </div>
            <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; text-align: center;">
                <span class="material-symbols-outlined" style="font-size: 28px; color: var(--primary); margin-bottom: 8px;">eco</span>
                <p style="font-size: 13px; font-weight: 700; color: var(--white);">Eco Packaging</p>
                <p style="font-size: 11px; color: var(--zinc-500); margin-top: 4px;">Plastic-free bags</p>
            </div>
            <div style="background: var(--tile-grey); border-radius: 16px; padding: 16px; text-align: center;">
                <span class="material-symbols-outlined" style="font-size: 28px; color: var(--primary); margin-bottom: 8px;">support_agent</span>
                <p style="font-size: 13px; font-weight: 700; color: var(--white);">24/7 Support</p>
                <p style="font-size: 11px; color: var(--zinc-500); margin-top: 4px;">Always here for you</p>
            </div>
        </div>
    </section>
</div>

<script>
// Flash deals countdown timer
function updateCountdown() {
    const countdownEl = document.getElementById('countdown');
    if (!countdownEl) return;
    
    let time = countdownEl.textContent.split(':');
    let hours = parseInt(time[0]);
    let mins = parseInt(time[1]);
    let secs = parseInt(time[2]);
    
    secs--;
    if (secs < 0) { secs = 59; mins--; }
    if (mins < 0) { mins = 59; hours--; }
    if (hours < 0) { hours = 23; mins = 59; secs = 59; }
    
    countdownEl.textContent = 
        String(hours).padStart(2, '0') + ':' + 
        String(mins).padStart(2, '0') + ':' + 
        String(secs).padStart(2, '0');
}
setInterval(updateCountdown, 1000);
</script>
