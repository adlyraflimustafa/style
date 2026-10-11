<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Kontak Kami · SECOND STORY Curated Thriftwear</title>
<meta name="description" content="Hubungi tim SECOND STORY untuk pertanyaan seputar ketersediaan item thriftwear, layanan pelanggan, pemesanan, dan kerja sama.">
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
nav .bag-btn:hover {
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

/* ── CONTACT HERO BANNER ─────────────────────────────────────────── */
.contact-hero {
  margin-top: 24px;
  padding: clamp(36px, 6vh, 60px) clamp(24px, 4vw, 60px);
  text-align: center;
}
.contact-hero h1 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(36px, 5vw, 68px); line-height: 1; margin-top: 10px; margin-bottom: 16px;
}
.contact-hero p {
  color: var(--text-muted); font-size: 15px; max-width: 52ch; margin: 0 auto; line-height: 1.6;
}

/* ── CONTACT GRID SECTION ───────────────────────────────────────── */
#contact-section { padding: clamp(40px, 6vh, 80px) 0; }
.contact-grid {
  display: grid; grid-template-columns: 1.2fr 0.8fr; gap: clamp(28px, 4vw, 48px); align-items: start;
}

/* Form Styling */
.form-card {
  padding: clamp(28px, 4vw, 50px); border-radius: 28px;
}
.form-card h2 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(26px, 3.2vw, 38px); margin-bottom: 8px; color: var(--text-main);
}
.form-card p {
  font-size: 14px; color: var(--text-muted); margin-bottom: 32px; line-height: 1.6;
}
.form-group {
  margin-bottom: 20px;
}
.form-group label {
  display: block; font-size: 11px; font-weight: 800; letter-spacing: 0.18em;
  text-transform: uppercase; color: var(--text-main); margin-bottom: 8px;
}
.form-group input, .form-group select, .form-group textarea {
  width: 100%; padding: 15px 20px; border-radius: 18px;
  border: 1px solid var(--glass-border-dark); background: rgba(255, 255, 255, 0.85);
  font-size: 14px; color: var(--text-main); outline: none; transition: all 0.3s;
  font-family: inherit;
}
.form-group input:focus, .form-group select:focus, .form-group textarea:focus {
  border-color: var(--text-main); box-shadow: 0 0 20px rgba(15, 23, 42, 0.08);
}

/* Info Sidebar */
.info-sidebar {
  display: flex; flex-direction: column; gap: 24px;
}
.info-box {
  padding: clamp(24px, 3.5vw, 36px); border-radius: 24px;
}
.info-item {
  display: flex; gap: 18px; align-items: flex-start; margin-bottom: 24px;
}
.info-item:last-child { margin-bottom: 0; }
.info-icon {
  width: 44px; height: 44px; border-radius: 14px; background: rgba(15, 23, 42, 0.05);
  border: 1px solid var(--glass-border-dark); display: grid; place-items: center;
  flex: 0 0 auto; color: var(--accent-blue);
}
.info-icon svg { width: 20px; height: 20px; fill: none; stroke: currentColor; stroke-width: 2; }
.info-details h4 {
  font-size: 11px; font-weight: 800; letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--text-main); margin-bottom: 4px;
}
.info-details p, .info-details a {
  font-size: 14px; color: var(--text-muted); line-height: 1.6; transition: color 0.3s;
}
.info-details a:hover { color: var(--text-main); }

@media(max-width: 900px){ .contact-grid { grid-template-columns: 1fr; } }

/* ── FAQ ACCORDION SECTION ───────────────────────────────────────── */
#faq-section { padding: clamp(20px, 4vh, 60px) 0 80px; }
.faq-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: clamp(16px, 2vw, 24px); margin-top: 32px;
}
.faq-item {
  padding: 24px 28px; border-radius: 20px; cursor: pointer; transition: all 0.3s;
}
.faq-item:hover {
  background: rgba(255, 255, 255, 0.85); border-color: var(--glass-border-dark);
}
.faq-header {
  display: flex; justify-content: space-between; align-items: center; gap: 16px;
}
.faq-header h4 {
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: 16px; color: var(--text-main);
}
.faq-toggle {
  width: 28px; height: 28px; border-radius: 50%; border: 1px solid var(--glass-border-dark);
  display: grid; place-items: center; font-size: 14px; font-weight: 700; transition: transform 0.3s;
}
.faq-body {
  margin-top: 12px; font-size: 13px; color: var(--text-muted); line-height: 1.6; display: none;
}
.faq-item.active .faq-body { display: block; }
.faq-item.active .faq-toggle { transform: rotate(45deg); background: var(--text-main); color: #fff; }

@media(max-width: 820px){ .faq-grid { grid-template-columns: 1fr; } }

/* BUTTONS GLASS */
.btn-glass-primary {
  display: inline-flex; align-items: center; justify-content: center;
  background: var(--text-main); color: #fff; font-weight: 700; width: 100%;
  padding: 18px 36px; border-radius: 40px; font-size: 12px; letter-spacing: 0.22em;
  text-transform: uppercase; box-shadow: 0 10px 25px rgba(15, 23, 42, 0.18);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); border: none; cursor: pointer;
}
.btn-glass-primary:hover {
  transform: translateY(-3px) scale(1.01); background: #1e293b;
  box-shadow: 0 16px 32px rgba(15, 23, 42, 0.25);
}

.form-status {
  margin-top: 16px; font-size: 12px; font-weight: 700; letter-spacing: 0.15em;
  text-transform: uppercase; color: var(--accent-blue); text-align: center; display: none;
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

<!-- 1 · CONTACT HERO BANNER -->
<header id="contact-hero" class="wrap">
  <div class="glass-panel contact-hero rv">
    <div class="lbl">Get In Touch</div>
    <h1>Hubungi <span style="color:var(--accent-blue)">Kami</span></h1>
    <p>Punya pertanyaan seputar ukuran, detail produk preloved, pengiriman, atau ingin menyapa? Tim SECOND STORY siap membantumu.</p>
  </div>
</header>

<!-- 2 · CONTACT FORM & INFO SIDEBAR -->
<section id="contact-section" class="wrap">
  <div class="contact-grid">

    <!-- Contact Form -->
    <div class="glass-panel form-card rv">
      <h2>Kirim Pesan</h2>
      <p>Isi formulir di bawah ini dan kami akan membalas pesanmu dalam 1x24 jam kerja.</p>

      <form id="contactForm" onsubmit="handleFormSubmit(event)">
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
          <input type="text" id="name" required placeholder="Masukkan nama kamu...">
        </div>

        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="email" id="email" required placeholder="nama@email.com">
        </div>

        <div class="form-group">
          <label for="subject">Topik Pertanyaan</label>
          <select id="subject" required>
            <option value="" disabled selected>Pilih kategori pertanyaan...</option>
            <option value="item">Detail & Ukuran Item Produk</option>
            <option value="shipping">Status Pengiriman & Pesanan</option>
            <option value="return">Kebijakan Pembelian & Penukaran</option>
            <option value="partnership">Kerja Sama & Media</option>
            <option value="other">Lainnya</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Pesan Kamu</label>
          <textarea id="message" rows="5" required placeholder="Tuliskan pertanyaan atau informasi secara jelas..."></textarea>
        </div>

        <button type="submit" class="btn-glass-primary">Kirim Pesan Sekarang</button>
        <div id="formStatus" class="form-status">Pesan berhasil terkirim! Terima kasih telah menghubungi kami.</div>
      </form>
    </div>

    <!-- Contact Info Sidebar -->
    <div class="info-sidebar">

      <div class="glass-panel info-box rv">
        <div class="info-item">
          <div class="info-icon">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          </div>
          <div class="info-details">
            <h4>Customer Care & WhatsApp</h4>
            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener">+62 812-3456-7890</a>
            <p style="font-size:12px; margin-top:2px;">Senin - Sabtu: 09:00 - 18:00 WIB</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <div class="info-details">
            <h4>Email Resmi</h4>
            <a href="mailto:hello@secondstory.store">hello@secondstory.store</a>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">
            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          </div>
          <div class="info-details">
            <h4>Studio & Kurasi</h4>
            <p>SECOND STORY Studio<br>Indonesia</p>
          </div>
        </div>
      </div>

      <div class="glass-panel info-box rv">
        <div class="lbl" style="margin-bottom:8px;">Social Media</div>
        <h4 style="font-family:'Syne',sans-serif; font-weight:700; font-size:18px; margin-bottom:12px;">Ikuti Drop Terbaru</h4>
        <p style="font-size:13px; color:var(--text-muted); margin-bottom:16px;">Dapatkan bocoran koleksi thrift vintage sebelum dirilis di website.</p>
        <div style="display:flex; gap:12px;">
          <a href="#" class="bag-btn" style="padding:8px 16px; font-size:10px;">Instagram</a>
          <a href="#" class="bag-btn" style="padding:8px 16px; font-size:10px;">TikTok</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 3 · FREQUENTLY ASKED QUESTIONS -->
<section id="faq-section" class="wrap">
  <div class="glass-panel" style="padding: clamp(32px, 5vw, 56px);">
    <div class="lbl rv">Pertanyaan Umum</div>
    <h2 class="rv" style="font-family:'Syne',sans-serif; font-weight:800; font-size:clamp(28px, 4vw, 42px); margin-top:6px;">
      Frequently Asked <span style="color:var(--accent-blue)">Questions</span>
    </h2>

    <div class="faq-grid">
      <div class="glass-panel faq-item rv" onclick="toggleFaq(this)">
        <div class="faq-header">
          <h4>Apakah setiap item pakaian hanya ada 1 stok?</h4>
          <span class="faq-toggle">+</span>
        </div>
        <div class="faq-body">
          Ya, karena seluruh koleksi SECOND STORY adalah pakaian preloved dan vintage pilihan, setiap produk bersifat unik dan hanya tersedia 1 pcs untuk 1 ukuran saja.
        </div>
      </div>

      <div class="glass-panel faq-item rv" onclick="toggleFaq(this)">
        <div class="faq-header">
          <h4>Bagaimana cara memastikan ukuran pas di tubuh saya?</h4>
          <span class="faq-toggle">+</span>
        </div>
        <div class="faq-body">
          Setiap detail produk mencantumkan ukuran fisik seperti Panjang (P) dan Lebar Dada (Ld) dalam centimeter. Kamu bisa mengukur pakaian favoritmu dirumah sebagai pembanding.
        </div>
      </div>

      <div class="glass-panel faq-item rv" onclick="toggleFaq(this)">
        <div class="faq-header">
          <h4>Berapa lama proses pengiriman pesanan?</h4>
          <span class="faq-toggle">+</span>
        </div>
        <div class="faq-body">
          Pesanan dikemas dan dikirim dalam 1-2 hari kerja setelah pembayaran terkonfirmasi. Estimasi pengiriman tergantung pada lokasi ekspedisi yang dipilih.
        </div>
      </div>

      <div class="glass-panel faq-item rv" onclick="toggleFaq(this)">
        <div class="faq-header">
          <h4>Apakah pakaian sudah dibersihkan sebelum dikirim?</h4>
          <span class="faq-toggle">+</span>
        </div>
        <div class="faq-body">
          Tentu! Semua pakaian di SECOND STORY telah melalui proses pencucian higienis dan sanitasi khusus sehingga siap dan aman untuk langsung kamu gunakan.
        </div>
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
/* ── Form Handler ────────────────────────────────────────────────── */
function handleFormSubmit(e) {
  e.preventDefault();
  const status = document.getElementById('formStatus');
  status.style.display = 'block';
  document.getElementById('contactForm').reset();
  setTimeout(() => {
    status.style.display = 'none';
  }, 4000);
}

/* ── FAQ Accordion Toggle ────────────────────────────────────────── */
function toggleFaq(element) {
  const isActive = element.classList.contains('active');
  document.querySelectorAll('.faq-item').forEach(item => item.classList.remove('active'));
  if (!isActive) {
    element.classList.add('active');
  }
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
