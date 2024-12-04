<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TFA - The Forge Agency | Agence de Développement Web</title>
    <meta name="description"
          content="Agence de développement web spécialisée en Laravel et PHP. Transformez vos idées en projets numériques concrets avec notre équipe d'experts.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-background text-foreground">

<!-- Navbar -->
<nav class="bg-background shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between py-4">
        <!-- Logo -->
        <a href="#">
            <img src="{{ asset('logo.svg') }}" alt="TFA - The Forge Agency" class="h-8">
        </a>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6 items-center">
            <a href="#about" class="hover:text-primary transition">À propos</a>
            <a href="#services" class="hover:text-primary transition">Services</a>
            <a href="#process" class="hover:text-primary transition">Processus</a>
            <a href="#contact"
               class="bg-primary text-black font-semibold py-2 px-4 rounded-full hover:bg-pink transition-all duration-300 ease-in-out transform hover:scale-105">
                Prendre RDV
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-primary focus:outline-none">
                @svg('fas-bars', 'h-6 w-6')
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-background shadow-md">
        <a href="#about" class="block px-4 py-2 hover:bg-current-line transition">À propos</a>
        <a href="#services" class="block px-4 py-2 hover:bg-current-line transition">Services</a>
        <a href="#process" class="block px-4 py-2 hover:bg-current-line transition">Processus</a>
        <a href="#contact" class="block px-4 py-2 hover:bg-current-line transition">Contact</a>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="bg-background text-foreground py-16">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Branding -->
            <div>
                <img src="{{ asset('logo.svg') }}" alt="TFA - The Forge Agency" class="h-8 mb-4">
                <p class="text-gray-400 mb-4">
                    Transformez vos idées en réalité digitale avec notre expertise en Laravel et PHP.
                </p>
                <p class="text-gray-400">&copy; 2024 Tous droits réservés.</p>
            </div>
            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-semibold text-primary mb-4">Navigation</h4>
                <ul class="space-y-3">
                    <li><a href="#about" class="hover:text-primary transition">À propos</a></li>
                    <li><a href="#services" class="hover:text-primary transition">Services</a></li>
                    <li><a href="#process" class="hover:text-primary transition">Processus</a></li>
                    <li><a href="#contact" class="hover:text-primary transition">Contact</a></li>
                </ul>
            </div>
            <!-- Social Links -->
            <div>
                <h4 class="text-xl font-semibold text-primary mb-4">Suivez-nous</h4>
                <p class="text-gray-400 mb-4">Rejoignez-nous sur les réseaux sociaux :</p>
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/company/the-forge-agency/" class="hover:text-primary transition">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="https://twitter.com/" class="hover:text-primary transition">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="hover:text-primary transition">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Credits -->
        <div class="text-center text-sm text-gray-400 mt-12">
            <p>
                Réalisé avec ❤️ par <a href="#" class="hover:text-primary font-medium">TFA - The Forge Agency</a>.
            </p>
        </div>
    </div>
</footer>

<!-- Cursor Dot -->
<div id="cursor"></div>

<!-- Back to Top -->
<div id="back-to-top">
    @svg('fas-arrow-up', 'h-6 w-6')
</div>

<!-- Scripts -->
<script>
    // Menu mobile
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Back to Top Button
    const backToTop = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
    backToTop.addEventListener('click', () => {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });

    const cursor = document.getElementById('cursor');

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

</script>
</body>
</html>