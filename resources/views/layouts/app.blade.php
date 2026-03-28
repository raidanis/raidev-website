<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests; default-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; script-src 'self' 'unsafe-inline'; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; img-src 'self' data: https:; connect-src 'self' https:;">
    <title>@yield('title') - RAIdev</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Orbitron:wght@400;700;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite(['resources/css/style.css', 'resources/js/main.js'])
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">RAI<span class="ai">dev</span></div>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <ul class="nav-menu">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/about" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="/research" class="nav-link">Research <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/research#publications">Publications</a></li>
                        <li><a href="/research#projects">Projects</a></li>
                        <li><a href="/research#ongoing">Ongoing Work</a></li>
                    </ul>
                </li>
                <li><a href="/portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="/blog" class="nav-link">Blog</a></li>
                <li><a href="/teaching" class="nav-link">Teaching</a></li>
                <li><a href="/cv" class="nav-link">CV</a></li>
                <li><a href="/contact" class="nav-link btn-primary">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>RAIdev</h3>
                    <p>Quantum AI Researcher & Cybersecurity Engineer</p>
                </div>
                <div class="footer-section">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/research">Research</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Connect</h4>
                    <div class="social-links">
                        <a href="https://linkedin.com" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://scholar.google.com" title="Google Scholar"><i class="fas fa-book"></i></a>
                        <a href="mailto:contact@raidev.com" title="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 RAIdev. All rights reserved. | Built with Laravel & <span style="color: #00d4ff;">Quantum</span> passion.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
