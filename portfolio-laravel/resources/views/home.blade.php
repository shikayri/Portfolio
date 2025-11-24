<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dery Putra - IT Portfolio</title>
  <meta name="description" content="Portfolio of Dery Putra, an IT professional specializing in cloud, cybersecurity, and web development.">
  <link rel="icon" type="image/svg+xml" href="{{ asset('svgs/Dery_Putra_Favicon.svg') }}">

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD1SNDT1EN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-BD1SNDT1EN');
  </script>

  <!-- 🪄 Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

  <style>
    /* Variables for Theme */
    :root {
      --bg-color: #ffffff;
      --text-color: #333333;
      --accent-color: #1e3a8a;
      --secondary-bg: #f4f4f4;
      --border-color: #e0e0e0;
    }
    [data-theme="dark"] {
      --bg-color: #121212;
      --text-color: #ffffff;
      --accent-color: lightblue;
      --secondary-bg: #1e1e1e;
      --border-color: #333333;
    }

    /* Global */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Nunito', sans-serif;
      line-height: 1.7;
      color: var(--text-color);
      background-color: var(--bg-color);
      transition: background-color 0.3s, color 0.3s;
    }
    a { color: var(--accent-color); text-decoration: none; }
    a:hover { text-decoration: underline; color: #0f2a5e; }
    section { padding: 60px 20px; max-width: 1200px; margin: 0 auto; }

    h1, h2, h3 {
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20px;
    }
    h1 { font-size: 2.7rem; letter-spacing: 1px; }
    h2 { font-size: 2rem; color: var(--accent-color); }
    h3 { font-size: 1.5rem; }

    p { margin-bottom: 15px; font-size: 1.05rem; }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: var(--accent-color);
      color: white;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.2s;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
    .btn:hover {
      background-color: #0f2a5e;
      color: white;
      transform: translateY(-2px);
    }

    /* Header */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: var(--bg-color);
      border-bottom: 1px solid var(--border-color);
      z-index: 1000;
      padding: 10px 20px;
      display: flex;
      align-items: center;
    }
    .logo { width: 90px; height: 40px; flex: 0 0 auto; }
    nav { flex: 1; display: flex; justify-content: center; }
    nav ul { list-style: none; display: flex; }
    nav ul li { margin: 0 15px; }
    nav ul li a { font-weight: 700; font-family: 'Poppins', sans-serif; }
    /* Portfolio Image Styles */
    .portfolio-image {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .menu-toggle { display: none; cursor: pointer; }
    .theme-toggle, .lang-toggle {
      cursor: pointer;
      font-size: 1.5rem;
      position: relative;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 0 0 auto;
    }
    .theme-icon {
      position: absolute;
      top: 0;
      left: 0;
      transition: opacity 0.5s ease;
    }
    .theme-toggle.animating .theme-icon { animation: warp 0.5s ease; }
    .sun { opacity: 1; }
    .moon { opacity: 0; }
        [data-theme="dark"] .sun { opacity: 0; }
        [data-theme="dark"] .moon { opacity: 1; }
        [data-theme="dark"] .social-media svg { fill: white; }
    @keyframes warp {
      0% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(0.5) rotate(180deg); }
      100% { transform: scale(1) rotate(360deg); }
    }

    .lang-icon {
      position: absolute;
      top: 0;
      left: 0;
      transition: opacity 0.5s ease;
      font-weight: bold;
    }
    .en { opacity: 1; }
    .id { opacity: 0; }
    [data-lang="id"] .en { opacity: 0; }
    [data-lang="id"] .id { opacity: 1; }

    /* Hero */
    #hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      background-color: var(--secondary-bg);
      padding: 0 20px;
    }
    #hero .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
  background-image: url('{{ asset('images/Circular_Frame_Image.png') }}');
      background-size: cover;
      background-position: center;
    }

    /* ✨ Flowing Gradient Name */
    #hero h1 {
      background: linear-gradient(90deg, #1e3a8a, #00bcd4, #1e3a8a);
      background-size: 200%;
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: slowFlow 5s linear infinite;
    }

    @keyframes slowFlow {
      0% { background-position: 0% 50%; }
      100% { background-position: 200% 50%; }
    }
    @keyframes fastFlow {
      0% { background-position: 0% 50%; }
      100% { background-position: 200% 50%; }
    }

    /* Grid / Cards */
    .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
    .card {
      background-color: var(--secondary-bg);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }
    .card:hover { transform: translateY(-5px); }
    .skill-bar { background-color: var(--border-color); height: 10px; border-radius: 5px; margin: 10px 0; }
    .skill-fill { height: 100%; background-color: var(--accent-color); border-radius: 5px; }
    .cert-image {
      width: 100%;
      height: 200px;
      border-radius: 5px;
      margin-bottom: 10px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* Social Media */
    .social-media { display: flex; justify-content: center; gap: 15px; margin-bottom: 30px; }
    .social-media a { width: 40px; height: 40px; }
    .social-media svg { width: 100%; height: 100%; fill: var(--accent-color); }

    /* Fun Social Icon Animations */
    .social-icon {
      display: inline-block;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    .social-icon:hover {
      transform: scale(1.2) rotate(5deg);
      box-shadow: 0 0 20px rgba(30, 58, 138, 0.5);
      animation: bounce 0.6s ease;
    }
    .social-icon:active {
      animation: spin 0.5s ease;
    }
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: scale(1.2) rotate(5deg); }
      40% { transform: scale(1.2) rotate(5deg); }
      60% { transform: scale(1.2) rotate(5deg); }
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Mobile Adjustments */
    @media (max-width: 768px) {
      .social-icon:hover { transform: scale(1.1); animation: none; } /* Reduce on touch */
    }

    /* Contact */
    form { max-width: 500px; margin: 0 auto; }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid var(--border-color);
      border-radius: 5px;
      font-family: 'Nunito', sans-serif;
    }
    button { width: 100%; }




    /* Custom Notification */
    .notification {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: var(--accent-color);
      color: white;
      padding: 15px 20px;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
      z-index: 10000;
      opacity: 0;
      transform: translateY(-20px);
      transition: opacity 0.3s, transform 0.3s;
      font-weight: 600;
    }
    .notification.show {
      opacity: 1;
      transform: translateY(0);
    }
    .notification.error {
      background-color: #e74c3c;
    }



    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-10px); }
      to { opacity: 1; transform: translateX(0); }
    }
    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(10px); }
      to { opacity: 1; transform: translateX(0); }
    }
    .animate.visible { animation: fadeIn 1s ease-out; }
    .technical-skills { animation: slideInLeft 2s ease-out; }
    .soft-skills { animation: slideInRight 2s ease-out; }
    .certifications { animation: slideInLeft 2s ease-out; }

    /* Responsive */
    @media (max-width: 768px) {
      nav ul {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: var(--bg-color);
      }
      nav ul.show { display: flex; }
      .menu-toggle { display: block; }
      #hero { flex-direction: column; }
    }
  </style>
</head>
<body data-theme="light">

  <header>
    <img src="{{ asset('images/Dery_Putra_Favicon_Square _Format_NBG.png') }}" alt="Dery Putra Logo" class="logo" oncontextmenu="return false;">
    <nav>
      <ul id="nav-menu">
        <li><a href="#hero">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </nav>
    <div class="lang-toggle" onclick="toggleLanguage()">
      <span class="lang-icon en">EN</span>
      <span class="lang-icon id">ID</span>
    </div>
    <div class="theme-toggle" onclick="toggleTheme()">
      <span class="theme-icon sun">🌞</span>
      <span class="theme-icon moon">🌙</span>
    </div>
  </header>

  <section id="hero">
    <div class="profile-image"></div>
    <h1>Dery Putra</h1>
    <p>Software Engineer</p>
    <p>Building Secure, Scalable Software</p>
    <div style="display: flex; justify-content: center; gap: 20px;">
      <a href="#skills" class="btn">Explore My Work</a>
      <a href="#contact" class="btn">Get In Touch</a>
    </div>
  </section>

<section id="portfolio" class="animate" style="text-align:center;">
  <h2>Portfolio</h2>
  <div class="portfolio-container">
    <video id="portfolio-video" class="portfolio-image" muted playsinline>
  <source src="{{ asset('videos/PortfolioWebRelatedWhite-ezgif.com-gif-to-webm-converter.webm') }}" type="video/webm">
      <source src="{{ asset('PortfolioWebRelated-ezgif.com-gif-to-webm-converter.gif') }}" type="image/gif">
    </video>
  </div>
</section>

  <section id="skills" class="animate" data-typed="false" style="text-align:center;">
    <h2>Skills & Certifications</h2>
    <div class="grid">
      <div class="card technical-skills">
        <h3>Technical Skills</h3>
        <p>Python: <div class="skill-bar"><div class="skill-fill" style="width: 90%;"></div></div></p>
        <p>JavaScript: <div class="skill-bar"><div class="skill-fill" style="width: 85%;"></div></div></p>
        <p>HTML: <div class="skill-bar"><div class="skill-fill" style="width: 85%;"></div></div></p>
        <p>PHP: <div class="skill-bar"><div class="skill-fill" style="width: 85%;"></div></div></p>
      </div>
      <div class="card soft-skills">
        <h3>Soft Skills</h3>
        <ul>
          <li>Problem-Solving</li>
          <li>Teamwork</li>
          <li>Management Skills</li>
          <li>Creative Design</li>
          <li>Adaptability</li>
          <li>Languages: Indonesian (Native), English (Fluent)</li>
        </ul>
        <br>
        <h3>Other Skills</h3>
        <ul>
          <li>Microsoft 365</li>
          <li>Video Production & Editing</li>
          <li>Audio Editing</li>
          <li>Graphic Design</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="contact" class="animate" style="text-align:center;">
    <h2>Contact</h2>
    <div class="social-media">
      <!-- LinkedIn -->
      <a href="https://www.linkedin.com/in/dery-putra/" target="_blank" aria-label="LinkedIn" class="social-icon">
        <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
      </a>
      <!-- GitHub -->
      <a href="https://github.com/shikayri" target="_blank" aria-label="GitHub" class="social-icon">
        <svg viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
      </a>
      <!-- Instagram -->
      <a href="https://www.instagram.com/shikayri.exe/" target="_blank" aria-label="Instagram" class="social-icon">
        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
      </a>
      <!-- YouTube -->
      <a href="https://www.youtube.com/@shikayri" target="_blank" aria-label="YouTube" class="social-icon">
        <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
      </a>
    </div>

    <form action="https://formspree.io/f/movkbbpz" method="POST">
      <input type="text" name="name" placeholder="Your name" required>
      <input type="email" name="email" placeholder="Your email" required>
      <textarea name="message" placeholder="Your message" required></textarea>
      <button type="submit" class="btn">Send</button>
    </form>
  </section>

  <footer style="background-color: var(--secondary-bg); padding: 20px 20px; text-align: center; border-top: 1px solid var(--border-color);">
    <p>&copy; 2023 Dery Putra. All rights reserved.</p>
    <p><a href="#hero" style="color: var(--accent-color); text-decoration: none;">Back to Top</a></p>
  </footer>

  <script>
    const translations = {
      en: {
        home: "Home",
        portfolio: "Portfolio",
        skills: "Skills",
        contact: "Contact",
        skillsCertifications: "Skills & Certifications",
        technicalSkills: "Technical Skills",
        softSkills: "Soft Skills",
        otherSkills: "Other Skills",
        certifications: "Certifications",
        exploreMyWork: "Explore My Work",
        getInTouch: "Get In Touch",
        sendMessage: "Send Message",
        backToTop: "Back to Top",
        yourName: "Your Name",
        yourEmail: "Your Email",
        yourMessage: "Your Message",
        softwareEngineer: "Software Engineer",
        buildingSecure: "Building Secure, Scalable Software",
        copyright: "&copy; 2023 Dery Putra. All rights reserved."
      },
      id: {
        home: "Beranda",
        portfolio: "Portofolio",
        skills: "Keterampilan",
        contact: "Kontak",
        skillsCertifications: "Keterampilan & Sertifikasi",
        technicalSkills: "Keterampilan Teknis",
        softSkills: "Keterampilan Lunak",
        otherSkills: "Keterampilan Lain",
        certifications: "Sertifikasi",
        exploreMyWork: "Jelajahi Karya Saya",
        getInTouch: "Hubungi Saya",
        sendMessage: "Kirim Pesan",
        backToTop: "Kembali ke Atas",
        yourName: "Nama Anda",
        yourEmail: "Email Anda",
        yourMessage: "Pesan Anda",
        softwareEngineer: "Insinyur Perangkat Lunak",
        buildingSecure: "Membangun Perangkat Lunak Aman dan Skalabel",
        copyright: "&copy; 2023 Dery Putra. Hak cipta dilindungi."
      }
    };

    function toggleTheme() {
      const body = document.body;
      const themeToggle = document.querySelector('.theme-toggle');
      const video = document.getElementById('portfolio-video');
      const isDark = body.getAttribute('data-theme') === 'dark';
      const newTheme = isDark ? 'light' : 'dark';
      body.setAttribute('data-theme', newTheme);
      if (video) {
        const newSrc = newTheme === 'dark'
    ? '{{ asset('videos/PortfolioWebRelated-ezgif.com-gif-to-webm-converter.webm') }}'
    : '{{ asset('videos/PortfolioWebRelatedWhite-ezgif.com-gif-to-webm-converter.webm') }}';
        video.querySelector('source').setAttribute('src', newSrc);
        video.load();
        video.play(); // Play the video when theme is switched
        hasPlayed = true; // Mark as played since it's now playing
      }
      themeToggle.classList.add('animating');
      setTimeout(() => themeToggle.classList.remove('animating'), 500);
    }

    function toggleLanguage() {
      const body = document.body;
      const currentLang = body.getAttribute('data-lang') || 'en';
      const newLang = currentLang === 'en' ? 'id' : 'en';
      body.setAttribute('data-lang', newLang);
      localStorage.setItem('lang', newLang);
      updateLanguage(newLang);
    }

    function updateLanguage(lang) {
      const t = translations[lang];
      // Short texts: instant
      document.querySelector('a[href="#hero"]').textContent = t.home;
      document.querySelector('a[href="#portfolio"]').textContent = t.portfolio;
      document.querySelector('a[href="#skills"]').textContent = t.skills;
      document.querySelector('a[href="#contact"]').textContent = t.contact;
      document.querySelector('#skills h2').textContent = t.skillsCertifications;
      document.querySelectorAll('#skills h3')[0].textContent = t.technicalSkills;
      document.querySelectorAll('#skills h3')[1].textContent = t.softSkills;
      document.querySelectorAll('#skills h3')[2].textContent = t.otherSkills;
      document.querySelectorAll('#skills h3')[3].textContent = t.certifications;
      document.querySelector('a[href="#skills"]').textContent = t.exploreMyWork;
      document.querySelector('a[href="#contact"]').textContent = t.getInTouch;
      document.querySelector('#contact h2').textContent = t.contact;
      document.querySelector('#contact form button[type="submit"]').textContent = t.sendMessage;
      document.querySelector('#contact form input[name="name"]').placeholder = t.yourName;
      document.querySelector('#contact form input[name="email"]').placeholder = t.yourEmail;
      document.querySelector('#contact form textarea[name="message"]').placeholder = t.yourMessage;
      document.querySelector('a[href="#hero"]:last-of-type').textContent = t.backToTop;
      // Hero section
      const heroPs = document.querySelectorAll('#hero p');
      heroPs[0].textContent = t.softwareEngineer;
      heroPs[1].textContent = t.buildingSecure;
      // Footer
      document.querySelector('footer p').innerHTML = t.copyright;
    }

    function toggleMenu() {
      document.getElementById('nav-menu').classList.toggle('show');
    }

    function showNotification(message, isError = false) {
      const notification = document.createElement('div');
      notification.className = 'notification';
      if (isError) notification.classList.add('error');
      notification.textContent = message;
      document.body.appendChild(notification);
      setTimeout(() => notification.classList.add('show'), 10);
      setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => document.body.removeChild(notification), 300);
      }, 3000);
    }

    // Handle form submission with AJAX to prevent redirect
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      fetch(this.action, {
        method: this.method,
        body: formData,
        headers: {
          'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          showNotification('Thank you for your message!');
          this.reset();
        } else {
          showNotification('Oops! There was a problem submitting your form', true);
        }
      }).catch(error => {
        showNotification('Oops! There was a problem submitting your form', true);
      });
    });

    const video = document.getElementById('portfolio-video');
    let hasPlayed = false;

    // Function to handle play/pause based on visibility
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          video.play();
        } else {
          video.pause();
        }
      });
    }, { threshold: 0.6 }); // 60% of video must be visible

    observer.observe(video);

    document.addEventListener('DOMContentLoaded', () => {
      // Scroll to top on page refresh
      window.scrollTo(0, 0);

      const savedLang = localStorage.getItem('lang') || 'en';
      document.body.setAttribute('data-lang', savedLang);
      updateLanguage(savedLang);

      // Prevent right-click on logo to disable download via context menu
      const logo = document.querySelector('.logo');
      if (logo) {
        logo.addEventListener('contextmenu', (e) => {
          e.preventDefault();
        });
        logo.oncontextmenu = () => false;
      }

    });
  </script>
</body>
</html>
