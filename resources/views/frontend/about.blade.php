<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Jack Barbershop</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
/* ================= GLOBAL RESET (SAMA DENGAN HOME) ================= */
* { margin:0; padding:0; box-sizing:border-box; }
html { scroll-behavior:smooth; }

body {
  font-family: 'Poppins', sans-serif;
  background: #000;
  color: #fff;
  overflow-x: hidden;
  animation: pageSlide .8s ease;
}

@keyframes pageSlide{
  from{ opacity:0; transform:translateX(80px); }
  to{ opacity:1; transform:translateX(0); }
}

/* ================= HEADER STYLE (COPY DARI HOME) ================= */
header {
  position: fixed;
  top: 0; left: 0; width: 100%; height: 100px;
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 5%; z-index: 1000;
  background: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid #FFC628;
  transition: 0.3s;
}

.header-logo {
  width: 80px; height: 80px;
  background: #fff; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  padding: 5px; box-shadow: 0 0 15px rgba(255,198,40,0.6);
  flex-shrink: 0; 
}
.header-logo img { width: 100%; height: 100%; object-fit: contain; border-radius: 50%; }

/* Nav Menu */
.nav-menu { display: flex; gap: 40px; }
.nav-menu a {
  font-size: 18px; color: #fff; text-decoration: none;
  font-weight: 500; position: relative; transition: 0.3s;
}
.nav-menu a:hover, .nav-menu a.active { color: #FFC628; }
.nav-menu a::after {
  content: ""; position: absolute; bottom: -5px; left: 0;
  width: 0%; height: 2px; background: #FFC628; transition: 0.3s;
}
.nav-menu a:hover::after { width: 100%; }

/* Hamburger */
.hamburger { display: none; cursor: pointer; }
.bar { display: block; width: 25px; height: 3px; margin: 5px auto; transition: 0.3s; background-color: #FFC628; }

/* ================= PAGE HERO (MODIFIKASI DARI HOME) ================= */
.page-hero {
  height: 60vh; /* Lebih pendek dari home */
  /* GUNAKAN BACKGROUND YANG SAMA */
  background: url('{{ asset("bground7.jpeg") }}') center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  text-align: center;
}

/* Overlay Gelap */
.page-hero::before {
  content:""; position:absolute; inset:0;
  background: linear-gradient(to right, rgba(0,0,0,.8), rgba(0,0,0,.6));
}

.hero-content { position: relative; z-index: 2; max-width: 800px; }

.page-title {
  font-family: 'Playfair Display', serif;
  font-size: 50px;
  color: #fff;
  margin-bottom: 10px;
}
.page-subtitle {
  color: #FFC628; font-size: 18px; letter-spacing: 2px; text-transform: uppercase;
}

/* ================= STORY SECTION ================= */
.story-section {
  padding: 100px 8%;
  background: #050505;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
  align-items: center;
}

.story-text h2 {
  font-family: 'Playfair Display', serif; font-size: 36px;
  color: #FFC628; margin-bottom: 20px;
}
.story-text p {
  line-height: 1.8; color: #ccc; margin-bottom: 20px; font-size: 15px;
}
.story-img img {
  width: 100%; border-radius: 20px;
  border: 1px solid #333;
  filter: grayscale(30%); transition: 0.5s;
}
.story-img:hover img { filter: grayscale(0%); border-color: #FFC628; }

/* ================= VALUES (CARD STYLE) ================= */
.values-section {
  padding: 100px 8%;
  background: #111; /* Sedikit lebih terang dari hitam pekat */
  text-align: center;
}

.values-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;
}

.value-card {
  background: #000; padding: 40px 20px; border-radius: 20px;
  border: 1px solid #333; transition: 0.3s;
}
.value-card:hover {
  transform: translateY(-10px); border-color: #FFC628;
  box-shadow: 0 10px 30px rgba(255, 198, 40, 0.2);
}

.value-icon { font-size: 40px; color: #FFC628; margin-bottom: 20px; }
.value-card h3 { font-size: 20px; margin-bottom: 15px; color: #fff; }
.value-card p { font-size: 14px; color: #aaa; line-height: 1.6; }

/* ================= VISION ================= */
.vision-section {
  padding: 100px 8%;
  text-align: center;
  background: url('{{ asset("bground7.jpeg") }}') center/cover fixed;
  position: relative;
}
.vision-section::before {
  content:""; position:absolute; inset:0; background: rgba(0,0,0,0.85);
}

.vision-box {
  position: relative; z-index: 2;
  border: 2px solid #FFC628; padding: 50px;
  max-width: 900px; margin: 0 auto;
}

.vision-box h2 {
  font-family: 'Playfair Display', serif; color: #FFC628; font-size: 36px; margin-bottom: 20px;
}
.vision-box p { font-size: 18px; font-style: italic; line-height: 1.8; }

/* ================= FOOTER ================= */
footer {
  background: #000; padding: 30px; text-align: center;
  border-top: 1px solid #222; color: #777;
}

/* ================= ANIMATION & RESPONSIVE ================= */
.reveal { opacity: 0; transform: translateY(50px); transition: 1s ease; }
.reveal.active { opacity: 1; transform: translateY(0); }

@media (max-width: 900px) {
  /* Hamburger Logic CSS */
  .hamburger { display: block; }
  .hamburger.active .bar:nth-child(2) { opacity: 0; }
  .hamburger.active .bar:nth-child(1) { transform: translateY(8px) rotate(45deg); }
  .hamburger.active .bar:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

  .nav-menu {
    position: fixed; left: -100%; top: 100px;
    flex-direction: column; background: rgba(0,0,0,0.95);
    width: 100%; padding: 30px 0; gap: 0;
    transition: 0.3s; border-bottom: 1px solid #FFC628;
  }
  .nav-menu.active { left: 0; }
  .nav-menu a { padding: 15px; width: 100%; display: block; text-align: center; margin: 0; }

  /* Layout */
  .story-section, .values-grid { grid-template-columns: 1fr; }
  .page-title { font-size: 36px; }
  .vision-box { padding: 30px 20px; }
}
</style>
</head>
<body>

<header>
  <div class="header-logo">
    <img src="{{ asset('logo2.png') }}" alt="Logo">
  </div>

  <div class="hamburger">
    <span class="bar"></span><span class="bar"></span><span class="bar"></span>
  </div>

  <nav class="nav-menu">
        <a href="{{ url('/home') }}">Home</a>
        
        <a href="{{ url('/about') }}" class="active">About</a> 
        
        <a href="{{ url('/home') }}#service">Services</a>
        <a href="{{ url('/home') }}#contact">Contact</a>
        
        <a href="{{ url('/reservasi') }}">Reservasi</a>
    </nav>
</header>

<section class="page-hero">
  <div class="hero-content reveal">
    <div class="page-subtitle">Welcome To Jack Barbershop</div>
    <h1 class="page-title">Who We Are</h1>
  </div>
</section>

<section class="story-section">
  <div class="story-text reveal">
    <h2>Our Story</h2>
    <p>
      Di Jack Barbershop, setiap potongan rambut dibuat dengan perhatian penuh akan detail 
      dan kenyamanan pelanggan. Kami mengutamakan kebersihan, presisi, serta suasana santai 
      agar setiap kunjungan menjadi pengalaman yang berkesan.
    </p>
    <p>
      Berdiri sejak 2020, kami percaya bahwa gaya rambut bukan sekadar tren, melainkan cerminan kepribadian. 
      Professional barber kami siap memberikan konsultasi terbaik untuk menemukan style yang paling cocok untuk Anda.
    </p>
  </div>
  <div class="story-img reveal">
    <img src="{{ asset('bground7.jpeg') }}" alt="Interior">
  </div>
</section>

<section class="values-section">
  <div class="reveal">
    <h2 style="font-family:'Playfair Display'; font-size:36px; color:#fff; margin-bottom:10px;">Our Values</h2>
    <div style="width:80px; height:3px; background:#FFC628; margin:0 auto;"></div>
  </div>

  <div class="values-grid">
    <div class="value-card reveal">
      <div class="value-icon"><i class="fas fa-cut"></i></div>
      <h3>Precision</h3>
      <p>Teknik potong rambut presisi tinggi untuk hasil yang tajam dan rapi sesuai struktur wajah Anda.</p>
    </div>

    <div class="value-card reveal">
      <div class="value-icon"><i class="fas fa-hand-sparkles"></i></div>
      <h3>Hygiene First</h3>
      <p>Peralatan steril dan protokol kebersihan ketat demi kenyamanan dan keamanan pelanggan.</p>
    </div>

    <div class="value-card reveal">
      <div class="value-icon"><i class="fas fa-chair"></i></div>
      <h3>Comfort</h3>
      <p>Suasana premium dengan musik santai, membuat pengalaman grooming Anda lebih rileks.</p>
    </div>
  </div>
</section>

<section class="vision-section">
  <div class="vision-box reveal">
    <h2>Vision Board</h2>
    <p>
      "Menjadi barbershop terpercaya dan pilihan utama masyarakat dengan menghadirkan
      pengalaman grooming premium, barber profesional, dan layanan terbaik yang konsisten.
      Kami ingin setiap pria keluar dari Jack Barbershop dengan rasa percaya diri yang baru."
    </p>
  </div>
</section>

<footer>
  © 2025 Jack Barbershop. All rights reserved.
</footer>

<script>
  // Hamburger
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
  });

  // Reveal Animation
  const reveals = document.querySelectorAll('.reveal');
  window.addEventListener('scroll', () => {
    reveals.forEach(el => {
      const top = el.getBoundingClientRect().top;
      if(top < window.innerHeight - 100){
        el.classList.add('active');
      }
    });
  });

  // Trigger saat load
  window.addEventListener('load', () => {
     reveals.forEach(el => {
      const top = el.getBoundingClientRect().top;
      if(top < window.innerHeight - 100){
        el.classList.add('active');
      }
    });
  });
</script>

</body>
</html>