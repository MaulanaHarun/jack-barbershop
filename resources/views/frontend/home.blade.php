<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jack Barbershop</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

html{
  scroll-behavior:smooth;
}

body{
  font-family:'Poppins',sans-serif;
  background:#000;
  color:#fff;
  overflow-x:hidden;
  animation:pageSlide .8s ease;
}
.reveal{
  opacity:0;
  transform:translateY(60px);
  transition:all .9s ease;
}

.reveal.active{
  opacity:1;
  transform:translateY(0);
}
/* ===== PAGE SLIDE ===== */
@keyframes pageSlide{
  from{
    opacity:0;
    transform:translateX(80px);
  }
  to{
    opacity:1;
    transform:translateX(0);
  }
  html{
  scroll-behavior: smooth;
}
}

/* ================= HEADER STYLE REVISED ================= */
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 5%;
  z-index: 1000;
  background: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid #FFC628;
  transition: 0.3s;
}

/* --- LOGO FIX (Agar tidak gepeng) --- */
.header-logo {
  width: 80px;  /* Ukuran disesuaikan agar proporsional di header 100px */
  height: 80px;
  background: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px;
  box-shadow: 0 0 15px rgba(255,198,40,0.6);
  
  /* PENTING: Mencegah logo tergencet flexbox */
  flex-shrink: 0; 
}

.header-logo img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  border-radius: 50%;
}

<<<<<<< Updated upstream
/* --- NAV MENU (DESKTOP) --- */
.nav-menu {
  display: flex;
  gap: 40px; /* Jarak antar menu */
=======
/* NAV */
.nav-menu{
  display:flex;
  gap:100px;
  position:relative;

   position:absolute;
  top:60px;
  left:78%;
  transform:translateX(-50%);
>>>>>>> Stashed changes
}

.nav-menu a {
  font-size: 18px;
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  position: relative;
  transition: 0.3s;
}

.nav-menu a:hover,
.nav-menu a.active {
  color: #FFC628;
}

/* Garis bawah animasi saat hover */
.nav-menu a::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #FFC628;
  transition: 0.3s;
}

.nav-menu a:hover::after {
  width: 100%;
}

/* --- HAMBURGER MENU (MOBILE TOGGLE) --- */
.hamburger {
  display: none; /* Sembunyi di Laptop */
  cursor: pointer;
}

.bar {
  display: block;
  width: 25px;
  height: 3px;
  margin: 5px auto;
  transition: all 0.3s ease-in-out;
  background-color: #FFC628; /* Warna Emas */
}

/* ================= RESPONSIVE MOBILE (Layar Kecil) ================= */
@media (max-width: 900px) {
  
  /* Munculkan Tombol Hamburger */
  .hamburger {
    display: block;
  }

  /* Animasi Hamburger jadi 'X' saat aktif */
  .hamburger.active .bar:nth-child(2) {
    opacity: 0;
  }
  .hamburger.active .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
  }
  .hamburger.active .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
  }

  /* Menu Navigasi Jadi Sidebar/Dropdown */
  .nav-menu {
    position: fixed;
    left: -100%; /* Sembunyi di kiri layar */
    top: 100px; /* Muncul tepat di bawah header */
    gap: 0;
    flex-direction: column;
    background-color: rgba(0, 0, 0, 0.95); /* Hitam pekat */
    width: 100%;
    text-align: center;
    transition: 0.3s;
    border-bottom: 1px solid #FFC628;
    padding-bottom: 20px;
  }

  /* Class tambahan via JS untuk memunculkan menu */
  .nav-menu.active {
    left: 0; 
  }

  .nav-menu a {
    margin: 16px 0;
    font-size: 20px;
    display: block; /* Agar area klik luas */
  }
}
/* ================= HERO ================= */
.hero{
  min-height:100vh;
  background:url('/bground7.jpeg') center/cover no-repeat;
  display:flex;
  align-items:center;
  justify-content:center;
  position:relative;
}

.hero::before{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(
    to right,
    rgba(0,0,0,.8),
    rgba(0,0,0,.55),
    rgba(0,0,0,.35)
  );
}

.hero-content{
  position:relative;
  z-index:2;
  max-width:900px;
  text-align:center;
}

.hero-title{
  font-family:'Playfair Display',serif;
  font-size:68px;
  margin-bottom:25px;
}

.hero-style{
  color:#9BCF8F;
  font-style:italic;
}

.hero-desc{
  font-size:18px;
  line-height:1.8;
  margin-bottom:45px;
}

.hero-btn{
  border:2px solid #fff;
  padding:16px 46px;
  color:#fff;
  text-decoration:none;
  letter-spacing:3px;
  transition:.3s;
}

.hero-btn:hover{
  background:#fff;
  color:#000;
}

.hero-logo{
  width:200px;
  height:200px;
  background:#fff;
  border-radius:50%;
  padding:18px;
  box-shadow:0 0 30px rgba(255,198,40,.8);

  position:absolute;
  top:40px;
  left:70px;
  margin:0;
}

.hero-logo img{
  width:100%;
  height:100%;
  object-fit:contain;
}

/*=========HERO-2==========*/
.hero-2 {
  position: relative;
  height: 100vh;
  background: url("/babout.png") center / cover no-repeat;
  overflow: hidden;
}

/* overlay gelap */
.hero-2::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  z-index: 1;
}

/* ===================== */
/* LABEL ATAS */
/* ===================== */
.hero2-label {
  position: absolute;
  top: 0px;
  left: 0px;
  padding: 18px 42px;
  background: #c7c86d;
  clip-path: polygon(0 0,150% 0,100% 0%, 80% 100%, 0 100%);
  z-index: 3;
}

.hero2-label h3 {
  font-size: 20px;
  font-weight: 600;
  color: #111;
  margin-bottom: 4px;
}

.hero2-label span {
  font-size: 18px;
  color: #111;
}

/* ===================== */
/* KONTEN KIRI */
/* ===================== */
.hero2-left {
  position: absolute;
  top: 50%;
  left: 200px;
  transform: translateY(-50%);
  max-width: 650px;
  color: #d8d8d8;
  z-index: 3;
}

.hero2-left h1 {
  font-size: 45px;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 24px;
}

.hero2-left p {
  font-size: 20px;
  line-height: 1.75;
  color: #cfcfcf;
  margin-bottom: 30px;
}

/* BUTTON */
.hero2-btn {
  display: inline-block;
  padding: 14px 32px;
  background: rgba(255, 255, 255, 0.08);
  color: #fff;
  text-decoration: none;
  font-size: 14px;
  border: 1px solid rgba(255, 255, 255, 0.15);
  transition: 0.3s ease;
}

.hero2-btn:hover {
  background: rgba(255, 255, 255, 0.18);
}

/* ===================== */
/* KONTEN KANAN */
/* ===================== */
.hero2-right {
  position: absolute;
  top: 30%;
  right: 400px;
  transform: translateY(-50%);
  max-width: 300px;
  color: #ffffff;
  z-index: 3;
}

.hero2-right h4 {
  font-size: 30px;
  font-weight: 600;
  margin-bottom: 14px;
}

.hero2-right p {
  font-size: 20px;
  line-height: 1.65;
  opacity: 0.95;
}

/* =================  ABOUT  ================= */
.about{
  min-height:100vh;
  padding:120px 8%;
  background:url('/kayu.png') center/cover no-repeat;
}

/* ================= HEADER ================= */
.about-header{
  max-width:900px;
  margin-bottom:70px;
}

.about-header h1{
  font-size:38px;
  margin-bottom:20px;
}

.about-header p{
  line-height:1.9;
  color:#ddd;
}

/* ================= VALUES ================= */
.values{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:30px;
  margin-bottom:90px;
}

.value-card{
  background:#fff;
  color:#000;
  padding:30px;
  border-radius:22px;
  text-align:center;
  box-shadow:0 25px 50px rgba(0,0,0,.4);
  transition:.4s;
}

.value-card:hover{
  transform:translateY(-10px);
}

.value-card img{
  width:70px;
  margin-bottom:18px;
}

.value-card h3{
  font-size:30px;
}

/* ================= VISION BOARD ================= */
.vision{
  background:#fff;
  color:#000;
  padding:60px;
  border-radius:28px;
  max-width:1000px;
  margin:auto;
  text-align:center;
  box-shadow:0 35px 70px rgba(0,0,0,.45);
}

.vision h2{
  margin-bottom:20px;
}

.vision p{
  line-height:1.9;
}

/* ================= BUTTON ================= */
.about-actions{
  display:flex;
  justify-content:center;
  gap:40px;
  margin-top:70px;
}

.about-actions a{
  padding:14px 36px;
  border-radius:28px;
  text-decoration:none;
  border:2px solid #fff;
  color:#fff;
  transition:.3s;
}

.about-actions a:hover{
  background:#fff;
  color:#000;
}

<<<<<<< Updated upstream
.reveal{
  opacity:0;
  transform:translateY(80px) scale(.98);
  transition:1s ease;
}

.reveal.active{
  opacity:1;
  transform:translateY(0) scale(1);
}

/* RESPONSIVE */
@media(max-width:900px){
  .values{
    grid-template-columns:1fr;
  }
}
/* ================= SERVICE SECTION REVISED ================= */
.service {
  min-height: 100vh;
  background:
    linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)),
    repeating-linear-gradient(
      -45deg,
      #1a0d07,
      #1a0d07 10px,
      #2b1408 20px
    );
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 100px 5%; /* Padding kiri kanan 5% agar tidak mepet */
  overflow: hidden;
}

/* CONTAINER GRID YANG RAPI */
.service-container {
  width: 100%;
  max-width: 1200px; /* Batasi lebar maksimal agar tidak terlalu melebar di layar besar */
  margin: 0 auto;
  display: grid;
  /* Kiri 1 bagian, Tengah otomatis (sesuai gambar), Kanan 1 bagian */
  grid-template-columns: 1fr auto 1fr; 
  align-items: center;
  gap: 40px; /* Gap diperkecil dari 120px jadi 40px agar muat di laptop kecil */
}

/* CENTER IMAGE (LINGKARAN) */
.service-center {
  position: relative;
  width: 350px; /* Ukuran lingkaran fixed tapi proporsional */
  height: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

.service-center::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: rgba(0,0,0,0.5); /* Lingkaran transparan gelap */
  border: 1px solid #FFC628; /* Tambah border emas tipis biar elegan */
  box-shadow: 0 0 30px rgba(255, 198, 40, 0.1);
  z-index: 1;
}

.service-center img {
  width: 280px; /* Gambar gunting di dalam lingkaran */
  opacity: 0.8;
  position: relative;
  z-index: 2;
  transition: 0.3s;
}

.service-center:hover img {
  transform: scale(1.1) rotate(5deg); /* Efek animasi saat hover */
  opacity: 1;
}

/* SERVICE ITEM (TEXT) */
.service-item {
  margin-bottom: 30px;
}

.service-item h3 {
  font-size: 22px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 5px;
  text-transform: uppercase;
}

/* GARIS PEMBATAS (YANG BIKIN ERROR SEBELUMNYA) */
.service-item .line {
  height: 2px;
  background: #FFC628;
  margin: 8px 0;
  
  /* PERBAIKAN UTAMA: */
  width: 100px; /* Jangan 400px, cukup 100px atau gunakan persentase */
  max-width: 100%; /* Agar tidak menabrak layar kecil */
}

.service-item p {
  font-size: 14px;
  color: #ccc;
  line-height: 1.5;
  margin-bottom: 5px;
}

.service-item small {
  display: block;
  font-size: 15px;
  margin-top: 5px;
}

/* ALIGNMENT (KIRI & KANAN) */
.left {
  text-align: right; /* Teks kiri rata kanan (menghadap gambar) */
}
.left .service-item .line {
  margin-left: auto; /* Garis geser ke kanan */
}

.right {
  text-align: left; /* Teks kanan rata kiri (menghadap gambar) */
}
.right .service-item .line {
  margin-right: auto; /* Garis geser ke kiri */
}

/* TOMBOL RESERVASI */
.service-btn {
  position: absolute;
  bottom: 30px; /* Tempel di bawah section */
  left: 50%;
  transform: translateX(-50%);
  padding: 12px 35px;
  border: 1px solid #FFC628;
  color: #FFC628;
  text-decoration: none;
  font-weight: bold;
  letter-spacing: 2px;
  transition: 0.3s;
  background: rgba(0,0,0,0.8);
  border-radius: 50px;
}

.service-btn:hover {
  background: #FFC628;
  color: #000;
  box-shadow: 0 0 15px rgba(255, 198, 40, 0.6);
}

/* BADGE DI POJOK KIRI ATAS */
.service-badge {
  position: absolute;
  top: 0;
  left: 0;
  background: #FFC628;
  color: #000;
  padding: 15px 40px 15px 20px;
  font-weight: 800;
  font-size: 14px;
  clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
  z-index: 10;
}

/* ================= RESPONSIVE (HP & TABLET) ================= */
@media (max-width: 900px) {
  .service {
    padding: 80px 5%;
    height: auto; /* Tinggi otomatis menyesuaikan konten */
  }

  .service-container {
    grid-template-columns: 1fr; /* Ubah jadi 1 kolom tumpuk ke bawah */
    gap: 30px;
    text-align: center; /* Semua rata tengah */
  }

  .service-center {
    order: -1; /* Gambar pindah ke paling atas */
    width: 200px;
    height: 200px;
    margin-bottom: 20px;
  }
  
  .service-center img {
    width: 160px;
  }

  /* Reset Text Align di HP */
  .left, .right {
    text-align: center;
  }

  .left .service-item .line,
  .right .service-item .line {
    margin: 8px auto; /* Garis rata tengah */
  }

  .service-btn {
    position: relative; /* Tombol tidak nempel bawah lagi */
    bottom: auto;
    left: auto;
    transform: none;
    display: inline-block;
    margin-top: 30px;
  }
}
=======
/* ================= SERVICE ================= */
.service-section {
  position: relative;
  min-height: 100vh;
  background: url('/kayu4.png') center / cover no-repeat;
  padding: 120px 80px;
  overflow: hidden;
}


/* overlay */
.service-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: none;
  z-index: 1;
}

/* ===================== */
/* LABEL */
/* ===================== */
.service-label {
  position: absolute;
  top: 0px;
  right: 0px;
  background: #c7c86d;
  padding: 18px 120px;
  clip-path: polygon(0% 0, 100% 0, 100% 100%, 20% 100%, 0 0%);
  z-index: 3;
  text-align: right;
}

.service-label h3 {
  font-size: 20px;
  color: #111;
}

.service-label span {
  font-size: 18px;
  color: #111;
}

/* ===================== */
/* ICON TENGAH */
/* ===================== */
.service-icon {
  position: absolute;
  inset: 0;
  background: url("/scissors.png") center / 420px no-repeat;
  opacity: 0.18;
  z-index: 2;
}

/* ===================== */
/* LIST */
/* ===================== */
.service-list {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 320px;
  z-index: 3;
}

.service-list.left {
  left: 100px;
}

.service-list.right {
  right: 100px;
  text-align: right;
}

/* ITEM */
.service-item {
  margin-bottom: 48px;
}

.service-item h4 {
  font-size: 35px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 6px;
  position: relative;
}

/* garis tipis */
.service-item h4::after {
  content: "";
  display: block;
  width: 320px;
  height: 1px;
  background: rgba(255,255,255,0.5);
  margin-top: 6px;
}

.service-list.right h4::after {
  margin-left: auto;
}

.service-item p {
  font-size: 25px;
  line-height: 1.5;
  color: #d5d5d5;
}

/* ===================== */
/* BUTTON */
/* ===================== */
.service-btn {
  position: absolute;
  bottom: 50px;
  left: 50%;
  transform: translateX(-50%);
  padding: 16px 44px;
  background: rgba(255,255,255,0.15);
  color: #fff;
  font-size: 25px;
  text-decoration: none;
  border: 1px solid rgba(255,255,255,0.25);
  z-index: 3;
  transition: 0.3s ease;
}

.service-btn:hover {
  background: rgba(255,255,255,0.3);
}

>>>>>>> Stashed changes
/* =================  CONTACT  ================= */
.contact{
  padding:80px 8%;
  background:#000;
}

.contact-container{
  display:grid;
  grid-template-columns:1.3fr 1fr 1fr 1fr;
  gap:60px;
  align-items:flex-start;
}

/* LOGO */
.contact-logo{
  width:120px;
  height:120px;
  background:#fff;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  padding:10px;
  margin-bottom:20px;
}

.contact-logo img{
  width:100%;
}

.contact-tagline{
  font-size:16px;
  margin-bottom:5px;
}

.contact-sub{
  font-size:14px;
  color:#aaa;
}

/* TITLE */
.contact-title{
  font-size:18px;
  margin-bottom:20px;
  position:relative;
  display:inline-block;
}

.contact-title::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
  width:100px;
  height:2px;
  background:#aaa;
}

/* TEXT */
.contact-text{
  font-size:14px;
  line-height:1.7;
  color:#ddd;
}

/* ICON LIST */
.contact-list{
  list-style:none;
  margin-top:15px;
}

.contact-list li{
  display:flex;
  align-items:center;
  gap:12px;
  margin-bottom:15px;
  font-size:14px;
}

.icon{
  width:28px;
  height:28px;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:14px;
}

.wa{
  background:#25D366;
  color:#000;
}

.mail{
  background:#2ecc71;
  color:#000;
}

/* FOOTER */
.contact-footer{
  text-align:left;
  margin-top:50px;
  font-size:13px;
  color:#aaa;
}

/* RESPONSIVE */
@media(max-width:900px){
  .contact-container{
    grid-template-columns:1fr;
    gap:40px;
  }
}

/* ================= RESERVASI ================= */
.reservasi{
   min-height:100vh;
  position:relative;
  z-index: 5;
  background:url('/kayu.png') center/cover no-repeat;
  display:flex;
  flex-direction:column; 
  justify-content:center;
}
.form-card{
  background:rgba(175,165,160,0.9);
  backdrop-filter:blur(6px);
  position: relative;
  z-index: 10;
}

.reservasi-content{
  position:relative;
  z-index:2;
  text-align:center;
}

.reservasi-content h1{
  font-size:38px;
  margin-bottom:30px;
}

.form-card{
  width:420px;
  background:#a9a3a0;
  border-radius:30px;
  padding:40px 35px;
  margin:auto;
}

.form-card h2{
  margin-bottom:30px;
}

.form-group{
  margin-bottom:18px;
}

.form-group input,
.form-group select{
  width:100%;
  padding:14px;
  border-radius:20px;
  border:none;
}

.btn-submit{
  width:100%;
  padding:14px;
  border-radius:25px;
  border:2px solid #000;
  background:transparent;
  font-weight:600;
  cursor:pointer;
}
/* ================= RESERVASI INFO TEXT ================= */
.reservasi-info{
  margin-top:120px;
  transform:translateY(40px);
  color:#eee;
}

.reservasi-info h3{
  font-size:20px;
  margin-bottom:12px;
  font-weight:600;
}

.reservasi-info p{
  font-size:14px;
  line-height:1.8;
  color:#ddd;
  max-width:520px;
  margin:auto;
}

/* ================= FOOTER ================= */
footer{
  text-align:center;
  padding:20px;
  color:#777;
}
</style>
</head>

<body>

<header>
<<<<<<< Updated upstream
  <div class="header-logo">
    <img src="{{ asset('logo2.png') }}" alt="Logo">
  </div>

  <div class="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>

=======
>>>>>>> Stashed changes
  <nav class="nav-menu">
    <a href="{{ url('/home') }}">Home</a>
    
    <a href="{{ url('/about') }}">About</a> 
    
    <a href="#service">Services</a>
    <a href="#contact">Contact</a>
      
    <a href="{{ url('/reservasi') }}">Reservasi</a>
</nav>
</header>

<section id="home" class="hero">
  <div class="hero-logo">
    <img src="logo2.png" alt="Jack Barbershop">
  </div>
  <div class="hero-content reveal">
    <h1 class="hero-title">
      Your Hair, Your<br>
      <span class="hero-style">Style</span>, Our Craft
    </h1>
    <p class="hero-desc">
      Butuh gaya baru? Come in, sit back, and let<br>
      Jack Barbershop do the magic
    </p>
    <a href="#reservasi" class="hero-btn">MAKE AN APPOINTMENT</a>
  </div>
</section>

<section class="hero-2">
  <!-- LABEL ATAS -->
  <div class="hero2-label">
    <h3>Life Starts Fresh With a Sharp Cut —</h3>
    <span>Jack Barbershop</span>
  </div>

  <!-- KONTEN KIRI -->
  <div class="hero2-left">
    <h1>PELAYANAN YANG TULUS DAN BERKELAS</h1>
    <p>
      Tempat ini dibuat untuk pria yang ingin tampil rapi tanpa ribet.<br>
      Kami percaya potongan rambut yang bagus bisa bikin hari kamu lebih pede,<br>
      lebih segar, dan lebih “kamu”.<br>
      Dengan gaya yang pas dan sentuhan barber berpengalaman, kami bantu<br>
      kamu tampil keren dengan cara yang sederhana dan nyaman.
    </p>

    <a href="#about" class="hero2-btn">BACA TENTANG KAMI</a>
  </div>

  <!-- KONTEN KANAN -->
  <div class="hero2-right">
    <h4>Location</h4>
    <p>
      R742+48C, Jl. K.H. Hasyim Ashari, Rw. 1,<br>
      Dalpenang, Kec. Sampang, Kabupaten<br>
      Sampang, Jawa Timur 69216
    </p>
  </div>
</section>

<section id="service" class="service-section reveal">
  <!-- LABEL KANAN ATAS -->
  <div class="service-label">
    <h3>Service & Price</h3>
    <span>All Store Wide</span>
  </div>

  <!-- ICON TENGAH -->
  <div class="service-icon"></div>

  <!-- LIST KIRI -->
  <div class="service-list left">
    <div class="service-item">
      <h4>Styling</h4>
      <p>Blow dry, wax, atau pomade untuk tampilan rapi.</p>
    </div>

    <div class="service-item">
      <h4>Beard / Shave</h4>
      <p>Cukur, rapikan jenggot dan kumis.</p>
    </div>

    <div class="service-item">
      <h4>Hair Wash & Treatment</h4>
      <p>Cuci rambut dan perawatan kulit kepala.</p>
    </div>
  </div>

  <!-- LIST KANAN -->
  <div class="service-list right">
    <div class="service-item">
      <h4>Haircut</h4>
      <p>Potong rambut sesuai gaya dan tren.</p>
    </div>

    <div class="service-item">
      <h4>Hot Towel / Relaxation</h4>
      <p>Handuk hangat dan pijat ringan untuk pengalaman premium.</p>
    </div>

    <div class="service-item">
      <h4>Haircut</h4>
      <p>Potong rambut sesuai gaya dan tren.</p>
    </div>
  </div>

  <!-- BUTTON -->
  <a href="#reservasi" class="service-btn">RESERVASI SEKARANG</a>

</section>

<section id="about" class="about">
<section class="about reveal">
    <h1>KAMI MEMBAWA GAYA TERBAIK UNTUKMU</h1>
    <p>
      Di Jack Barbershop, setiap potongan rambut dibuat dengan perhatian penuh akan detail
      dan kenyamanan pelanggan. Kami mengutamakan kebersihan, presisi, serta suasana santai
      agar setiap kunjungan menjadi pengalaman yang berkesan.
    </p>
  </div>

  <!-- VALUE CARDS -->
  <div class="values">
    <div class="value-card reveal">
      <img src="/precision.jpeg" alt="Precision">
      <h3>Precision</h3>
    </div>

    <div class="value-card reveal">
      <img src="/hygiene.jpeg" alt="Hygiene First">
      <h3>Hygiene First</h3>
    </div>

    <div class="value-card reveal">
      <img src="/comfort.jpeg" alt="Comfort">
      <h3>Comfort</h3>
    </div>
  </div>

  <!-- VISION -->
  <div class="vision reveal">
    <h2>Vision Board</h2>
    <p>
      Menjadi barbershop terpercaya dan pilihan utama masyarakat dengan menghadirkan
      pengalaman grooming premium, barber profesional, dan layanan terbaik yang konsisten.
    </p>
  </div>

  <!-- ACTION -->
  <div class="about-actions reveal">
    <a href="#services">LIHAT LAYANAN</a>
    <a href="#reservasi">BOOKING SEKARANG</a>
    <a href="#reservasi" class="about-btn">MAKE AN APPOINTMENT</a>
  </div>
<<<<<<< Updated upstream

</section>
<section class="service" id="service">

  <div class="service-badge">
    Service & Price<br>All Store Wide
  </div>

  <div class="service-container">

    {{-- LOGIKA PEMBAGI DATA: Membagi layanan menjadi 2 kolom (Kiri & Kanan) --}}
    @php
        // Hitung setengah dari total data untuk pembagian kolom
        $half = ceil($layanan->count() / 2);
        $chunks = $layanan->chunk($half);
        
        // Data untuk kolom Kiri (Chunk pertama)
        $leftLayanan = $chunks->get(0);
        
        // Data untuk kolom Kanan (Chunk kedua - cek jika ada)
        $rightLayanan = $chunks->get(1);
    @endphp

    <div class="left">
      @if($leftLayanan)
        @foreach($leftLayanan as $item)
          <div class="service-item">
            <h3>{{ $item->nama }}</h3>
            <div class="line"></div>
            <p>{{ $item->deskripsi }}</p>
            {{-- Menampilkan Harga Format Rupiah --}}
            <small style="color: #FFC628; font-weight: bold; letter-spacing: 1px;">
              Rp {{ number_format($item->harga, 0, ',', '.') }}
            </small>
          </div>
        @endforeach
      @endif
    </div>

    <div class="service-center">
      {{-- Pastikan file gunting.png ada di folder public --}}
      <img src="{{ asset('gunting.png') }}" alt="Barber Tools">
    </div>

    <div class="right">
      @if($rightLayanan)
        @foreach($rightLayanan as $item)
          <div class="service-item">
            <h3>{{ $item->nama }}</h3>
            <div class="line"></div>
            <p>{{ $item->deskripsi }}</p>
            {{-- Menampilkan Harga Format Rupiah --}}
            <small style="color: #FFC628; font-weight: bold; letter-spacing: 1px;">
              Rp {{ number_format($item->harga, 0, ',', '.') }}
            </small>
          </div>
        @endforeach
      @endif
    </div>

  </div>

  <a href="#reservasi" class="service-btn">RESERVASI SEKARANG</a>

=======
>>>>>>> Stashed changes
</section>

<section id="reservasi" class="reservasi">
  <div class="reservasi-content ">
    <h1>Booking Sekarang & Nikmati Perawatan Premium</h1>

    <div class="form-card">
      <h2>Form Reservasi</h2>

      <div class="form-group">
        <input type="text" placeholder="Nama">
      </div>

      <div class="form-group">
        <input type="text" placeholder="No Hp">
      </div>

      <div class="form-group">
        <select>
          <option>Pilih Layanan</option>
          <option>Haircut</option>
          <option>Haircut + Wash</option>
          <option>Premium Treatment</option>
        </select>
      </div>

      <div class="form-group">
        <input type="date">
      </div>

      <button class="btn-submit">Booking Sekarang</button>
    </div>
       <div class="reservasi-info">
    <h3>Mengapa Pilih Jack Barbershop?</h3>
    <p>
      Potongan rapi, pengalaman nyaman, dan layanan premium.
      Tim barber profesional siap membantu kamu tampil percaya diri.
    </p>
  </div>
</section>

<section id="contact" class="contact reveal">

  <div class="contact-container">
    <!-- COLUMN 1 -->
    <div>
      <div class="contact-logo">
        <img src="/logo2.png" alt="Jack Barbershop">
      </div>

      <p class="contact-tagline">
        Tampilan Boleh Baru, Confidence Harus Baru
      </p>
      <p class="contact-sub">
        Fresh Cut, Fresh Life.
      </p>
    </div>

    <!-- COLUMN 2 -->
    <div>
      <h3 class="contact-title">Alamat</h3>
      <p class="contact-text">
        R742+48C, Jl. K.H. Hasyim Ashari, RW. 1,<br>
        Dalpenang, Kec. Sampang, Kabupaten<br>
        Sampang, Jawa Timur 69216
      </p>
    </div>

    <!-- COLUMN 3 -->
    <div>
      <h3 class="contact-title">Hubungi kami</h3>
      <ul class="contact-list">
        <li><span class="icon wa">☎</span>0821234567890</li>
        <li><span class="icon wa">☎</span>0821234567890</li>
        <li><span class="icon mail">@</span>info@jackbarbershop.com</li>
      </ul>
    </div>

    <!-- COLUMN 4 -->
    <div>
      <h3 class="contact-title">Alamat</h3>
      <p class="contact-text">
        R742+48C, Jl. K.H. Hasyim Ashari,<br>
        Sampang, Jawa Timur
      </p>
    </div>
  </div>

  <div class="contact-footer">
    © 2025 Jack Barbershop. All rights reserved.
  </div>

</section>

<footer>
  © 2025 Jack Barbershop. All rights reserved.
</footer>

<script>
  // ================= 1. SCRIPT HAMBURGER MENU =================
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  // Saat tombol burger diklik
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
  });

  // Saat salah satu link menu diklik (Menu nutup otomatis)
  document.querySelectorAll(".nav-menu a").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  }));

  // ================= 2. SCRIPT SCROLL ANIMATION =================
  const reveals = document.querySelectorAll('.reveal');

  window.addEventListener('scroll', () => {
    reveals.forEach(el => {
      const top = el.getBoundingClientRect().top;
      // Jika elemen sudah masuk viewport (layar), tambahkan class active
      if(top < window.innerHeight - 120){
        el.classList.add('active');
      }
    });
  });
</script>

</body>
</html>
