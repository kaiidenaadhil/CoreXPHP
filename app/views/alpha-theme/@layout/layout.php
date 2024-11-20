<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoreXPHP - Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f8fa;
            color: #24292f;
            overflow-x: hidden;
            transition: background-color 0.3s, color 0.3s;
            scroll-behavior: smooth;
        }
        body.dark-theme {
            background-color: #181818;
            color: #d1d5da;
        }
        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #24292f;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            transition: background-color 0.3s;
        }
        body.dark-theme header {
            background-color: #000;
        }
        .logo {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }
        /* Navbar and Hamburger Menu */
        nav {
            display: flex;
            align-items: center;
        }
        nav ul {
            list-style-type: none;
            display: flex;
            gap: 1.5rem;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 3px;
            transition: all 0.3s ease;
        }
        /* Cross Icon when menu is open */
        .hamburger.open div:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .hamburger.open div:nth-child(2) {
            opacity: 0;
        }
        .hamburger.open div:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }
        .mobile-nav {
            display: none;
            position: absolute;
            top: 60px;
            right: 0;
            background-color: #24292f;
            padding: 1rem;
            border-radius: 5px;
            width: 200px;
        }
        .mobile-nav ul {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            list-style-type: none;
        }
        .mobile-nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .mobile-nav.active {
            display: block;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #24292f;
            color: #fff;
            transition: background-color 0.3s;
        }
        body.dark-theme footer {
            background-color: #000;
        }
        /* Media Queries */
        @media (max-width: 768px) {
            .intro, .why-choose .row {
                flex-direction: column;
                text-align: center;
            }
            .hamburger {
                display: flex;
            }
            nav ul {
                display: none;
            }
            .mobile-nav ul {
                flex-direction: column;
            }
            .mobile-nav.active {
                display: block;
            }
        }
        /* Keyframes */
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        // Theme Toggle Functionality
        window.onload = function() {
            const themeToggle = document.querySelector('.theme-toggle');
            const body = document.body;
            const icon = themeToggle.querySelector('i');
            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-theme');
                icon.classList.toggle('fa-sun');
                icon.classList.toggle('fa-moon');
            });
            // Smooth Scrolling for Anchor Links
            const links = document.querySelectorAll('a[href^="#"]');
            for (const link of links) {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = document.querySelector(link.getAttribute('href'));
                    target.scrollIntoView({ behavior: 'smooth' });
                });
            }
            // Hamburger Menu Toggle
            const hamburger = document.querySelector('.hamburger');
            const mobileNav = document.querySelector('.mobile-nav');
            hamburger.addEventListener('click', () => {
                mobileNav.classList.toggle('active');
                hamburger.classList.toggle('open');
            });
        };

    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<body>
  <header>
    <div class="logo">CoreXPHP</div>
    <nav>
      <ul>
        <li><a href="#docs">Home</a></li>
        <li><a href="#features">Documentation</a></li>
        <li><a href="#community">Github</a></li>
        <li><a href="#community">About</a></li>
        <li><a href="#" class="theme-toggle"><i class="fas fa-moon"></i></a></li>
      </ul>
      <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="mobile-nav">
        <ul>
          <li><a href="#docs">Docs</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#community">Community</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="circle-animation"></div>
    <div class="hero-content">
      <h1>Welcome to CoreXPHP</h1>
      <p>The ultimate PHP framework for building scalable, modern web applications.</p>
      <a href="#docs" class="btn-primary">Get Started</a>
    </div>
  </section>

  <section id="intro" class="section intro">
    <div class="text-block">
      <h2>What is CoreXPHP?</h2>
      <p>CoreXPHP is a lightweight and powerful PHP framework designed to help developers build modern, scalable web applications with ease.</p>
    </div>
    <div class="image-block">
      <img src="https://picsum.photos/500/300" alt="Random Image">
    </div>
  </section>

  <section id="features" class="section features">
    <h2>Core Features</h2>
    <div class="features-grid">
      <div class="feature">
        <i class="fas fa-route"></i>
        <h3>Routing</h3>
        <p>Advanced routing system to handle HTTP requests effortlessly.</p>
      </div>
      <div class="feature">
        <i class="fas fa-database"></i>
        <h3>Database ORM</h3>
        <p>Seamlessly interact with your database using a powerful ORM and query builder.</p>
      </div>
      <div class="feature">
        <i class="fas fa-shield-alt"></i>
        <h3>Security</h3>
        <p>Built-in features to protect against common vulnerabilities such as CSRF, XSS, SQL Injection.</p>
      </div>
      <div class="feature">
        <i class="fas fa-wrench"></i>
        <h3>Developer Tools</h3>
        <p>Built-in tools like the CoreXBuilder to scaffold and manage your project effortlessly.</p>
      </div>
    </div>
  </section>

  <section id="why-choose" class="section why-choose">
    <h2>Why Choose CoreXPHP?</h2>
    <div class="row">
      <div class="left-block">
        <p>CoreXPHP offers a perfect balance between simplicity and power. Whether you're building a small project or a large-scale application, CoreXPHP provides the tools and flexibility you need to succeed.</p>
      </div>
      <div class="right-block">
        <p>With its developer-friendly approach, powerful features, and robust performance, CoreXPHP stands out as a go-to framework for modern PHP development.</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 CoreXPHP. All rights reserved.</p>
  </footer>
</body>
</html>
