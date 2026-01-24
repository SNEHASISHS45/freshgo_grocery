# 🥬 FreshGo Premium - Grocery Delivery App

A premium, production-ready Indian grocery delivery app built with PHP. Features a sleek dark theme with neon green accents and 12-minute delivery promise.

![FreshGo Preview](https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=800)

## 🚀 Quick Start

### Using PHP Built-in Server
```bash
cd freshgo_grocery
php -S localhost:8080
```

### Using XAMPP
```bash
C:\xampp\php\php.exe -S localhost:8080
```

Then open **http://localhost:8080** in your browser.

---

## 📱 Features

### ✅ Complete E-Commerce Flow
- 🏠 **Home** - Products, categories, promos, flash deals
- 🔍 **Search** - AI-powered search with suggestions
- 🛒 **Cart** - Add/remove items, quantity controls
- 💳 **Checkout** - Payment selection, order summary
- 📦 **Tracking** - Live order tracking with animations
- ⭐ **Rewards** - Loyalty coins and redeemable offers

### ✅ User Account
- 👤 Profile management
- 📍 Saved addresses
- 💳 Payment methods
- 🔔 Notifications
- ❤️ Favorites list
- ⚙️ Settings

### ✅ Authentication
- 🔐 Login / Sign up
- 🔄 Password reset
- 🎉 Onboarding welcome screen

---

## 📂 Project Structure

```
freshgo_grocery/
├── index.php          # Main router & actions handler
├── app.js             # Client-side JavaScript
├── manifest.json      # PWA manifest
├── styles.css         # Primary styles (imports others)
├── styles2.css        # Cart & product detail styles
├── styles3.css        # Explore, profile, rewards styles
├── styles4.css        # Checkout, tracking styles
├── pages/
│   ├── home.php       # Home page with products
│   ├── explore.php    # Category browsing
│   ├── cart.php       # Shopping cart
│   ├── product.php    # Product detail
│   ├── checkout.php   # Payment flow
│   ├── tracking.php   # Order tracking
│   ├── profile.php    # User profile
│   ├── orders.php     # Order history
│   ├── addresses.php  # Saved addresses
│   ├── payment.php    # Payment methods
│   ├── rewards.php    # Loyalty rewards
│   ├── favorites.php  # Saved favorites
│   ├── notifications.php
│   ├── settings.php
│   ├── support.php    # Help center
│   ├── search.php     # Search page
│   ├── login.php      # Login
│   ├── signup.php     # Registration
│   ├── forgot.php     # Password reset
│   └── welcome.php    # Onboarding
└── README.md
```

---

## 🎨 Design System

| Element | Value |
|---------|-------|
| **Primary Color** | `#39FF14` (Neon Green) |
| **Background** | `#050505` (Deep Black) |
| **Card BG** | `#1A1A1A` |
| **Font** | Plus Jakarta Sans |
| **Icons** | Material Symbols Outlined |
| **Border Radius** | 16-24px |

---

## 🔧 URL Actions

| Action | URL | Description |
|--------|-----|-------------|
| Add to Cart | `?action=add_cart&id=1` | Add product to cart |
| Update Qty | `?action=update_cart&id=1&delta=1` | Change quantity |
| Toggle Favorite | `?action=toggle_favorite&id=1` | Save/unsave item |
| Place Order | `?action=place_order` | Complete purchase |
| Clear Cart | `?action=clear_cart` | Empty basket |

---

## 📊 Products Data

**16 Products** across **8 Categories**:
- 🥛 Dairy (Amul Milk, Paneer, Butter, Cheese)
- 🌾 Atta & Flours (Aashirvaad)
- 🍎 Fruits (Mangoes, Apples, Bananas)
- 🥬 Vegetables (Broccoli, Spinach, Tomatoes)
- ☕ Tea & Coffee (Tata Tea, Nescafe)
- 🍜 Instant Food (Maggi)
- 🌶️ Masala & Spices (Turmeric, Garam Masala)

---

## 🌐 Production Deployment

### Option 1: Shared Hosting
1. Upload all files to `public_html`
2. Ensure PHP 7.4+ is available
3. Access via your domain

### Option 2: VPS/Cloud
```bash
# Install PHP
sudo apt install php-fpm

# Start server
php -S 0.0.0.0:80
```

### Option 3: Docker
```dockerfile
FROM php:8.1-apache
COPY . /var/www/html/
EXPOSE 80
```

---

## 📱 PWA Support

The app includes:
- ✅ Web App Manifest
- ✅ Theme color meta tags
- ✅ Apple touch icon
- ✅ Standalone display mode
- ✅ Mobile-first responsive design

---

## 🔒 Security Notes

For production:
1. Enable HTTPS
2. Add CSRF tokens to forms
3. Sanitize all user inputs (already done with `htmlspecialchars`)
4. Use prepared statements for database queries
5. Set secure session cookies

---

## 📝 License

MIT License - Free for personal and commercial use.

---

**Made with 💚 for Indian Grocery Lovers**
