<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Shopping Bag · SECOND STORY Curated Thriftwear</title>
<meta name="description" content="Keranjang belanja Anda di SECOND STORY — Tinjau item preloved pilihan Anda sebelum melakukan checkout.">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%230f172a'/%3E%3Ctext x='16' y='23' font-family='sans-serif' font-size='20' font-weight='700' fill='%23ffffff' text-anchor='middle'%3ES%3C/text%3E%3C/svg%3E">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Syne:wght@700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>

<style>
:root {
  --bg-light: #f8fafc;
  --glass-bg: rgba(255, 255, 255, 0.65);
  --glass-bg-hover: rgba(255, 255, 255, 0.85);
  --glass-card: rgba(255, 255, 255, 0.6);
  --glass-border: rgba(255, 255, 255, 0.85);
  --glass-border-dark: rgba(15, 23, 42, 0.08);
  --glass-border-hover: rgba(15, 23, 42, 0.2);
  --glass-glow: rgba(255, 255, 255, 0.9);
  --glass-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.07), inset 0 1px 2px 0 rgba(255, 255, 255, 0.95);
  --accent-slate: #0f172a;
  --accent-blue: #2563eb;
  --text-main: #0f172a;
  --text-muted: #64748b;
  --blur-amount: blur(20px) saturate(180%);
  --nav: 86px;
}

* { margin: 0; padding: 0; box-sizing: border-box; }
html { overflow-x: clip; scroll-behavior: smooth; scroll-padding-top: 110px; }
section[id], header[id] { scroll-margin-top: 110px; }
body {
  background: var(--bg-light);
  color: var(--text-main);
  overflow-x: clip;
  font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
  -webkit-font-smoothing: antialiased;
  position: relative;
}

/* ── Ambient Glow Background Orbs ────────────────────────────── */
body::before, body::after {
  content: ''; position: fixed; border-radius: 50%; pointer-events: none; z-index: -1;
}
body::before {
  width: 650px; height: 650px; top: -100px; left: -150px;
  background: radial-gradient(circle, rgba(147, 197, 253, 0.35) 0%, rgba(221, 214, 254, 0.25) 50%, transparent 70%);
  filter: blur(90px); animation: floatOrb 18s ease-in-out infinite alternate;
}
body::after {
  width: 700px; height: 700px; bottom: 10%; right: -200px;
  background: radial-gradient(circle, rgba(251, 207, 232, 0.3) 0%, rgba(199, 210, 254, 0.25) 50%, transparent 70%);
  filter: blur(100px); animation: floatOrb 22s ease-in-out infinite alternate-reverse;
}

@keyframes floatOrb {
  0% { transform: translate(0, 0) scale(1); }
  50% { transform: translate(60px, 80px) scale(1.08); }
  100% { transform: translate(-40px, 120px) scale(0.95); }
}

img { display: block; max-width: 100%; }
a { color: inherit; text-decoration: none; }
.wrap { max-width: 1440px; margin: 0 auto; padding: 0 clamp(20px, 4vw, 56px); }

.font-syne { font-family: 'Syne', sans-serif; }
.glass-panel {
  background: var(--glass-card);
  backdrop-filter: var(--blur-amount);
  -webkit-backdrop-filter: var(--blur-amount);
  border: 1px solid var(--glass-border);
  box-shadow: var(--glass-shadow);
  border-radius: 24px;
}

.lbl {
  font-size: 11px; font-weight: 700; letter-spacing: 0.26em; text-transform: uppercase;
  color: var(--accent-blue);
}

/* ── Announcement Bar ────────────────────────────────────────────── */
.ann {
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid var(--glass-border-dark);
  color: var(--text-main); overflow: hidden;
}
.ann .row { display: flex; width: max-content; }
.ann .tk {
  display: flex; align-items: center; flex: 0 0 auto; gap: 48px; padding-right: 48px;
  animation: tick 28s linear infinite; font-size: 11px; font-weight: 700;
  letter-spacing: 0.2em; text-transform: uppercase; padding-top: 10px; padding-bottom: 10px;
}
@keyframes tick { from { transform: translateX(0); } to { transform: translateX(-100%); } }
.ann:hover .tk { animation-play-state: paused; }
.ann .tk i { font-style: normal; color: var(--accent-blue); }

/* ── Navigation (Tata Letak 3-Kolom Floating Glass Asli) ───────────────────────── */
nav {
  position: sticky; top: 12px; z-index: 60;
  margin: 0 auto; max-width: calc(100% - 32px);
  background: rgba(255, 255, 255, 0.65);
  backdrop-filter: var(--blur-amount);
  -webkit-backdrop-filter: var(--blur-amount);
  border: 1px solid var(--glass-border);
  border-radius: 30px;
  box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05), inset 0 1px 2px rgba(255, 255, 255, 0.9);
}
nav .bar {
  display: grid; grid-template-columns: minmax(0, 1fr) auto minmax(0, 1fr); align-items: center; gap: 24px;
  min-height: calc(var(--nav) - 12px); padding: 0 30px;
}
nav ul { display: flex; align-items: center; gap: clamp(12px, 1.35vw, 22px); list-style: none; min-width: 0; padding: 0; margin: 0; }
nav .mk { text-decoration: none; }
nav .search-link { color: var(--text-muted); transition: color .3s; }
nav .search-link:hover { color: var(--text-main); }
nav ul a {
  display: inline-block; white-space: nowrap; font-size: 10px; font-weight: 700; letter-spacing: 0.11em; text-transform: uppercase;
  position: relative; padding: 9px 0; color: var(--text-muted); transition: color 0.3s;
}
nav ul a:hover, nav ul a.active { color: var(--text-main); }
nav ul a::after {
  content: ''; position: absolute; left: 0; right: 0; bottom: 0; height: 2px;
  background: var(--text-main);
  transform: scaleX(0); transform-origin: right; transition: transform .4s cubic-bezier(.6,0,.2,1);
  border-radius: 2px;
}
nav ul a:hover::after, nav ul a.active::after { transform: scaleX(1); transform-origin: left; }
nav .mk {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(18px, 1.6vw, 24px);
  letter-spacing: 0.10em; text-align: center; text-transform: uppercase; white-space: nowrap;
  color: var(--text-main);
}
nav .util {
  display: flex; gap: 16px; justify-content: flex-end; align-items: center;
  font-size: 10px; font-weight: 700; letter-spacing: 0.10em; text-transform: uppercase; white-space: nowrap;
}
nav .util a { color: var(--text-muted); cursor: pointer; transition: color 0.3s; }
nav .util a:hover { color: var(--text-main); }
nav .bag-btn {
  display: inline-flex; align-items: center; justify-content: center;
  background: rgba(15, 23, 42, 0.05);
  border: 1px solid var(--glass-border-dark); backdrop-filter: blur(8px);
  padding: 10px 17px; border-radius: 30px; color: var(--text-main) !important; transition: all 0.3s;
}
nav .bag-btn.active, nav .bag-btn:hover {
  background: var(--text-main); color: #fff !important;
  box-shadow: 0 6px 20px rgba(15, 23, 42, 0.15); transform: translateY(-1px);
}
@media (max-width: 1100px) {
  nav .bar { gap: 14px; padding: 0 20px; }
  nav ul { gap: 10px; }
  nav ul a { font-size: 8px; letter-spacing: .06em; }
  nav .util { gap: 10px; font-size: 9px; }
}
@media (max-width: 760px) {
  nav { top: 8px; max-width: calc(100% - 20px); border-radius: 22px; }
  nav .bar { display: grid; grid-template-columns: 1fr auto; gap: 0 12px; min-height: auto; padding: 13px 16px 10px; }
  nav .mk { grid-column: 1; grid-row: 1; font-size: clamp(16px, 4vw, 21px); letter-spacing: .07em; text-align: left; }
  nav .util { grid-column: 2; grid-row: 1; margin-left: auto; }
  nav .search-link { display: none; }
  nav .bag-btn { padding: 9px 13px; font-size: 9px; letter-spacing: .06em; }
  nav ul { grid-column: 1 / -1; grid-row: 2; display: flex; overflow-x: auto; gap: 20px; padding-top: 9px; margin-top: 9px; border-top: 1px solid var(--glass-border); scrollbar-width: none; }
  nav ul::-webkit-scrollbar { display: none; }
  nav ul li { flex: 0 0 auto; }
  nav ul a { font-size: 9px; padding: 5px 0; }
}
@media (max-width: 360px) {
  nav .mk { font-size: 14px; }
  nav .bar { padding: 0 12px; }
  nav .bag-btn { padding: 8px 10px; }
}

/* ── BAG HERO BANNER ─────────────────────────────────────────────── */
.bag-hero {
  margin-top: 24px;
  padding: clamp(32px, 5vh, 50px) clamp(24px, 4vw, 60px);
  text-align: center;
}
.bag-hero h1 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(32px, 4.5vw, 60px); line-height: 1; margin-top: 10px; margin-bottom: 12px;
}
.bag-hero p {
  color: var(--text-muted); font-size: 14px; max-width: 50ch; margin: 0 auto; line-height: 1.6;
}

/* ── BAG LAYOUT GRID ─────────────────────────────────────────────── */
#bag-section { padding: clamp(30px, 4vh, 60px) 0 80px; }
.bag-grid {
  display: grid; grid-template-columns: 1.5fr 0.9fr; gap: clamp(24px, 3.5vw, 44px); align-items: start;
}

/* Cart Items Container */
.items-card {
  padding: clamp(24px, 3.5vw, 40px); border-radius: 28px;
}
.items-header {
  display: flex; justify-content: space-between; align-items: center;
  padding-bottom: 20px; border-bottom: 1px solid var(--glass-border-dark); margin-bottom: 24px;
}
.items-header h2 {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 22px; color: var(--text-main);
}
.clear-btn {
  font-size: 11px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--text-muted); background: none; border: none; cursor: pointer; transition: color 0.3s;
}
.clear-btn:hover { color: #e11d48; }

/* Single Item Row */
.cart-item {
  display: grid; grid-template-columns: auto 1fr auto; gap: 20px; align-items: center;
  padding-bottom: 24px; margin-bottom: 24px; border-bottom: 1px solid var(--glass-border-dark);
}
.cart-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.item-thumb {
  width: 90px; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden;
  border: 1px solid var(--glass-border-dark); background: rgba(241, 245, 249, 0.8);
}
.item-thumb img { width: 100%; height: 100%; object-fit: cover; }

.item-info .item-title {
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: 16px; color: var(--text-main); margin-bottom: 4px;
}
.item-info .item-spec {
  font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-muted); margin-bottom: 8px;
}
.item-info .item-tag {
  display: inline-block; font-size: 9px; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;
  padding: 4px 10px; border-radius: 20px; background: rgba(37, 99, 235, 0.1); color: var(--accent-blue);
}

.item-price-col {
  text-align: right; display: flex; flex-direction: column; justify-content: space-between; align-items: flex-end; gap: 16px;
}
.item-price {
  font-size: 16px; font-weight: 800; color: var(--text-main);
}
.remove-item-btn {
  background: none; border: none; color: var(--text-muted); cursor: pointer; transition: color 0.3s;
  display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; text-transform: uppercase;
}
.remove-item-btn:hover { color: #e11d48; }

/* Empty Cart State */
.empty-bag {
  text-align: center; padding: 60px 20px; display: none;
}
.empty-bag svg {
  width: 54px; height: 54px; stroke: var(--text-muted); fill: none; stroke-width: 1.5; margin: 0 auto 16px;
}
.empty-bag h3 {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 22px; margin-bottom: 8px;
}
.empty-bag p {
  font-size: 14px; color: var(--text-muted); margin-bottom: 24px;
}

/* Order Summary Card */
.summary-card {
  padding: clamp(24px, 3.5vw, 36px); border-radius: 28px; position: sticky; top: 110px;
}
.summary-card h3 {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 20px; margin-bottom: 20px;
  padding-bottom: 16px; border-bottom: 1px solid var(--glass-border-dark);
}
.summary-row {
  display: flex; justify-content: space-between; font-size: 13px; color: var(--text-muted); margin-bottom: 14px;
}
.summary-row.total {
  font-size: 18px; font-weight: 800; color: var(--text-main);
  padding-top: 16px; border-top: 1px solid var(--glass-border-dark); margin-top: 16px; margin-bottom: 24px;
}
.promo-box {
  display: flex; gap: 10px; margin-bottom: 20px;
}
.promo-box input {
  flex: 1; padding: 12px 18px; border-radius: 30px; border: 1px solid var(--glass-border-dark);
  background: rgba(255, 255, 255, 0.85); font-size: 12px; outline: none; transition: border-color 0.3s;
}
.promo-box input:focus { border-color: var(--text-main); }
.promo-btn {
  padding: 12px 20px; border-radius: 30px; border: 1px solid var(--glass-border-dark);
  background: rgba(15, 23, 42, 0.05); font-size: 11px; font-weight: 800; letter-spacing: 0.1em;
  text-transform: uppercase; cursor: pointer; transition: all 0.3s;
}
.promo-btn:hover { background: var(--text-main); color: #fff; }

@media(max-width: 900px){
  .bag-grid { grid-template-columns: 1fr; }
  .summary-card { position: static; }
}

/* BUTTONS GLASS */
.btn-glass-primary {
  display: inline-flex; align-items: center; justify-content: center;
  background: var(--text-main); color: #fff; font-weight: 700; width: 100%;
  padding: 18px 36px; border-radius: 40px; font-size: 12px; letter-spacing: 0.22em;
  text-transform: uppercase; box-shadow: 0 10px 25px rgba(15, 23, 42, 0.18);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); border: none; cursor: pointer; text-align: center;
}
.btn-glass-primary:hover {
  transform: translateY(-3px) scale(1.01); background: #1e293b;
  box-shadow: 0 16px 32px rgba(15, 23, 42, 0.25);
}

/* ── FOOTER ─────────────────────────────────────────────── */
footer { padding: clamp(50px, 8vh, 80px) 0 36px; margin-top: 60px; }
footer .cols { display: grid; grid-template-columns: 1.6fr 1fr 1fr 1fr; gap: clamp(24px, 4vw, 52px); margin-bottom: 50px; }
footer h4 { font-size: 11px; font-weight: 800; letter-spacing: 0.24em; text-transform: uppercase; color: var(--text-main); margin-bottom: 20px; }
footer a { display: block; padding: 6px 0; font-size: 14px; color: var(--text-muted); transition: color 0.3s; }
footer a:hover { color: var(--text-main); }
footer .mk { font-family: 'Syne', sans-serif; font-weight: 800; font-size: 32px; letter-spacing: 0.2em; margin-bottom: 16px; color: var(--text-main); }
footer address { font-style: normal; font-size: 13px; line-height: 1.9; color: var(--text-muted); }
footer .legal { border-top: 1px solid var(--glass-border-dark); padding-top: 28px; display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap; font-size: 12px; color: var(--text-muted); }
@media(max-width:820px){ footer .cols { grid-template-columns: 1fr 1fr; } }

/* Reveal Animations */
.rv { opacity: 0; transform: translateY(30px); transition: opacity .9s cubic-bezier(.16,1,.3,1), transform .9s cubic-bezier(.16,1,.3,1); }
.rv.in { opacity: 1; transform: none; }
</style>
</head>
<body>

<!-- Announcement Bar -->
<div class="ann" aria-hidden="true">
  <div class="row">
    <div class="tk"><span>Gratis Ongkir untuk Pesanan Tertentu</span><i>◆</i><span>Curated Thriftwear Drop</span><i>◆</i><span>Preloved Pilihan, Harga Bersahabat</span><i>◆</i><span>New Finds Setiap Minggu</span><i>◆</i></div>
    <div class="tk"><span>Gratis Ongkir untuk Pesanan Tertentu</span><i>◆</i><span>Curated Thriftwear Drop</span><i>◆</i><span>Preloved Pilihan, Harga Bersahabat</span><i>◆</i><span>New Finds Setiap Minggu</span><i>◆</i></div>
  </div>
</div>

<!-- Floating White Glass Navigation (Struktur Asli CSS) -->
<nav>
  <div class="bar">
    <ul class="nav-links" aria-label="Navigasi utama">
      <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
      <li><a href="{{ url('/kategori') }}" class="{{ request()->is('kategori') ? 'active' : '' }}">Kategori</a></li>
      <li><a href="{{ url('/koleksi') }}" class="{{ request()->is('koleksi') ? 'active' : '' }}">Koleksi</a></li>
      <li><a href="{{ url('/style-journal') }}" class="{{ request()->is('style-journal') ? 'active' : '' }}">Style Journal</a></li>
      <li><a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
      <li><a href="{{ url('/kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
    </ul>

    <a class="mk" href="{{ url('/#hero') }}" aria-label="SECOND STORY — Beranda">SECOND STORY</a>

    <div class="util">
      <a href="{{ url('/#shop') }}" class="search-link">Cari Item</a>
      <a href="{{ url('/bag') }}" class="bag-btn">Bag (<span id="bagn">0</span>)</a>
    </div>
  </div>
</nav>

<!-- 1 · BAG HERO BANNER -->
<header id="bag-hero" class="wrap">
  <div class="glass-panel bag-hero rv">
    <div class="lbl">Your Selection</div>
    <h1>Shopping <span style="color:var(--accent-blue)">Bag</span></h1>
    <p>Setiap produk thriftwear hanya ada 1 unit. Amankan pesananmu sebelum diambil pembeli lain.</p>
  </div>
</header>

<!-- 2 · CART ITEMS & ORDER SUMMARY -->
<section id="bag-section" class="wrap">
  <div class="bag-grid">

    <!-- Items List Card -->
    <div class="glass-panel items-card rv">
      <div class="items-header">
        <h2>Daftar Item (<span id="cart-count">2</span>)</h2>
        <button class="clear-btn" onclick="clearCart()">Kosongkan Bag</button>
      </div>

      <!-- Items Container -->
      <div id="cart-items-container">
        <!-- Item 1 -->
        <div class="cart-item" id="item-1">
          <div class="item-thumb">
            <img src="https://images.unsplash.com/photo-1551537482-f2075a1d41f2?auto=format&fit=crop&w=600&q=85" alt="Vintage Denim Jacket">
          </div>
          <div class="item-info">
            <div class="item-title">Vintage Denim Jacket</div>
            <div class="item-spec">Jaket · Size M (P: 68cm, LD: 108cm)</div>
            <span class="item-tag">1 of 1 Unique</span>
          </div>
          <div class="item-price-col">
            <div class="item-price">Rp 129.000</div>
            <button class="remove-item-btn" onclick="removeItem(1, 129000)">
              <i>✕</i> Hapus
            </button>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="cart-item" id="item-2">
          <div class="item-thumb">
            <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?auto=format&fit=crop&w=600&q=85" alt="Knit Sweater Classic">
          </div>
          <div class="item-info">
            <div class="item-title">Knit Sweater Classic</div>
            <div class="item-spec">Sweater · Size M (P: 65cm, LD: 104cm)</div>
            <span class="item-tag">1 of 1 Unique</span>
          </div>
          <div class="item-price-col">
            <div class="item-price">Rp 89.000</div>
            <button class="remove-item-btn" onclick="removeItem(2, 89000)">
              <i>✕</i> Hapus
            </button>
          </div>
        </div>
      </div>

      <!-- Empty Cart Message -->
      <div class="empty-bag" id="empty-state">
        <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
        <h3>Bag Kamu Masih Kosong</h3>
        <p>Belum ada item thrift pilihan yang ditambahkan.</p>
        <a href="{{ url('/koleksi') }}" class="btn-glass-primary" style="display:inline-flex; width:auto; padding:14px 32px;">Eksplor Koleksi</a>
      </div>
    </div>

    <!-- Order Summary Card -->
    <div class="glass-panel summary-card rv">
      <h3>Ringkasan Pesanan</h3>

      <div class="summary-row">
        <span>Subtotal</span>
        <span id="subtotal-val">Rp 218.000</span>
      </div>

      <div class="summary-row">
        <span>Estimasi Ongkir</span>
        <span id="shipping-val">Rp 15.000</span>
      </div>

      <div class="summary-row" id="discount-row" style="display:none; color:var(--accent-blue);">
        <span>Diskon Promo</span>
        <span id="discount-val">-Rp 0</span>
      </div>

      <div class="promo-box">
        <input type="text" id="promoInput" placeholder="Kode Promo (misal: THRIFT10)">
        <button class="promo-btn" onclick="applyPromo()">Gunakan</button>
      </div>

      <div class="summary-row total">
        <span>Total Akhir</span>
        <span id="total-val">Rp 233.000</span>
      </div>

      <a href="#" class="btn-glass-primary" id="checkout-btn" onclick="proceedCheckout(event)">Lanjut Ke Checkout</a>

      <div style="margin-top:16px; text-align:center; font-size:11px; color:var(--text-muted); display:flex; align-items:center; justify-content:center; gap:6px;">
        <span>🔒 Pembayaran Aman & Garansi Item Sesuai Foto</span>
      </div>
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer class="wrap">
  <div class="glass-panel" style="padding: clamp(30px, 5vh, 50px);">
    <div class="cols">
      <div>
        <div class="mk">SECOND STORY</div>
        <address>
          Thrift Finds · Curated with Care<br>Indonesia<br><br>
          hello@secondstory.store
        </address>
      </div>
      <div>
        <h4>Belanja</h4>
        <a href="{{ url('/koleksi') }}">Jackets</a>
        <a href="{{ url('/koleksi') }}">Sweaters</a>
        <a href="{{ url('/koleksi') }}">Vintage Picks</a>
        <a href="{{ url('/koleksi') }}">Private Thrift Picks</a>
      </div>
      <div>
        <h4>Bantuan</h4>
        <a href="#">Panduan Ukuran</a>
        <a href="#">Pengiriman</a>
        <a href="#">Kebijakan Pembelian</a>
        <a href="#">Perawatan Pakaian</a>
      </div>
      <div>
        <h4>Tentang Kami</h4>
        <a href="#">Kurasi Item</a>
        <a href="#">Lokasi</a>
        <a href="{{ url('/style-journal') }}">Style Journal</a>
        <a href="{{ url('/kontak') }}">Hubungi Kami</a>
      </div>
    </div>
    <div class="legal">
      <span>© 2026 SECOND STORY · THRIFTWEAR CURATED</span>
      <span>PRELOVED · VINTAGE · EVERYDAY STYLE</span>
    </div>
  </div>
</footer>

<script>
/* ── Cart Interactive State Management ──────────────────────────── */
let cart = [
  { id: 1, price: 129000 },
  { id: 2, price: 89000 }
];
let shipping = 15000;
let discount = 0;

function updateCalculations() {
  const subtotal = cart.reduce((sum, item) => sum + item.price, 0);
  const total = Math.max(0, subtotal + (cart.length > 0 ? shipping : 0) - discount);

  document.getElementById('cart-count').textContent = cart.length;
  document.getElementById('bagn').textContent = cart.length;

  document.getElementById('subtotal-val').textContent = 'Rp ' + subtotal.toLocaleString('id-ID');
  document.getElementById('shipping-val').textContent = cart.length > 0 ? 'Rp ' + shipping.toLocaleString('id-ID') : 'Rp 0';
  document.getElementById('total-val').textContent = 'Rp ' + total.toLocaleString('id-ID');

  if (cart.length === 0) {
    document.getElementById('cart-items-container').style.display = 'none';
    document.getElementById('empty-state').style.display = 'block';
    document.getElementById('checkout-btn').style.opacity = '0.5';
    document.getElementById('checkout-btn').style.pointerEvents = 'none';
  }
}

function removeItem(id, price) {
  const itemEl = document.getElementById('item-' + id);
  if (itemEl) {
    itemEl.style.opacity = '0';
    itemEl.style.transform = 'translateX(-20px)';
    itemEl.style.transition = 'all 0.3s';
    setTimeout(() => {
      itemEl.remove();
      cart = cart.filter(i => i.id !== id);
      updateCalculations();
    }, 300);
  }
}

function clearCart() {
  cart = [];
  document.getElementById('cart-items-container').innerHTML = '';
  updateCalculations();
}

function applyPromo() {
  const code = document.getElementById('promoInput').value.trim().toUpperCase();
  if (code === 'THRIFT10') {
    const subtotal = cart.reduce((sum, item) => sum + item.price, 0);
    discount = subtotal * 0.1;
    document.getElementById('discount-row').style.display = 'flex';
    document.getElementById('discount-val').textContent = '-Rp ' + discount.toLocaleString('id-ID');
    alert('Kode promo THRIFT10 (Diskon 10%) berhasil dipasang!');
    updateCalculations();
  } else if (code === '') {
    alert('Masukkan kode promo terlebih dahulu.');
  } else {
    alert('Kode promo tidak valid.');
  }
}

function proceedCheckout(e) {
  e.preventDefault();
  if (cart.length === 0) return;
  alert('Melanjutkan ke halaman pembayaran...');
}

/* ── Scroll Reveal Intersection Observer ──────────────────────── */
const pending = new Set(document.querySelectorAll('.rv'));
const io = new IntersectionObserver(es => {
  es.forEach(e => { if(e.isIntersecting || e.boundingClientRect.top < 0) show(e.target); });
}, {threshold:.1, rootMargin:'0px 0px -50px 0px'});

function show(el){ el.classList.add('in'); pending.delete(el); io.unobserve(el); }
[...pending].forEach((el, i) => { el.style.transitionDelay = (i % 4) * 80 + 'ms'; io.observe(el); });
</script>
</body>
</html>
