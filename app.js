// Language Toggle
let currentLang = 'en';

function toggleLanguage() {
  currentLang = currentLang === 'en' ? 'id' : 'en';
  document.body.setAttribute('data-lang', currentLang);
  localStorage.setItem('lang', currentLang);

  // Update button text
  const langText = document.getElementById('lang-text');
  if (langText) langText.textContent = currentLang.toUpperCase();

  const elements = document.querySelectorAll('[data-en], [data-id]');
  elements.forEach(el => {
    const text = el.getAttribute(`data-${currentLang}`);
    if (text) {
      el.textContent = text;
    }
  });
}

// Theme Toggle
function toggleTheme() {
  const body = document.body;
  const themeToggle = document.querySelector('.theme-toggle');
  const isDark = body.getAttribute('data-theme') === 'dark';
  const newTheme = isDark ? 'light' : 'dark';
  body.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);
  if (themeToggle) {
    themeToggle.classList.add('animating');
    setTimeout(() => themeToggle.classList.remove('animating'), 500);
  }
}

// Menu Toggle
function toggleMenu() {
  const navMenu = document.getElementById('nav-menu');
  if (navMenu) navMenu.classList.toggle('show');
}

// Form Submission
function initForm() {
  const form = document.querySelector('form');
  if (form) {
    form.addEventListener('submit', function(e) {
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
  }
}

// Notification
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

// Video Handling
function initVideos() {
  const lightVideo = document.getElementById('portfolio-video-light');
  const darkVideo = document.getElementById('portfolio-video-dark');

  if (lightVideo && darkVideo) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const video = entry.target;
        if (getComputedStyle(video).display === 'none') return;
        if (entry.isIntersecting) {
          video.currentTime = 0;
          video.play();
        } else {
          video.pause();
        }
      });
    }, { threshold: 0.6 });

    observer.observe(lightVideo);
    observer.observe(darkVideo);

    lightVideo.addEventListener('ended', () => lightVideo.pause());
    darkVideo.addEventListener('ended', () => darkVideo.pause());
  }
}

// Initialize on DOM load
document.addEventListener('DOMContentLoaded', () => {
  // Scroll to top
  window.scrollTo(0, 0);

  // Load saved theme
  const savedTheme = localStorage.getItem('theme') || 'light';
  document.body.setAttribute('data-theme', savedTheme);

  // Load saved language
  const savedLang = localStorage.getItem('lang') || 'en';
  currentLang = savedLang;
  document.body.setAttribute('data-lang', currentLang);
  const langText = document.getElementById('lang-text');
  if (langText) langText.textContent = currentLang.toUpperCase();

  const elements = document.querySelectorAll('[data-en], [data-id]');
  elements.forEach(el => {
    const text = el.getAttribute(`data-${currentLang}`);
    if (text) {
      el.textContent = text;
    }
  });

  // Prevent right-click on logo
  const logo = document.querySelector('.logo');
  if (logo) {
    logo.addEventListener('contextmenu', (e) => e.preventDefault());
    logo.oncontextmenu = () => false;
  }

  // Init functions
  initForm();
  initVideos();

  // Animation on scroll
  const animateElements = document.querySelectorAll('.animate');
  const checkVisibility = () => {
    animateElements.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        el.classList.add('visible');
      }
    });
  };
  window.addEventListener('scroll', checkVisibility);
  checkVisibility(); // Initial check
});

// Global functions
window.toggleTheme = toggleTheme;
window.toggleLanguage = toggleLanguage;
window.toggleMenu = toggleMenu;
