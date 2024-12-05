<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta Charset -->
    <meta charset="utf-8">

    <!-- Title -->
    <title>TFA - The Forge Agency | Experts en Développement Web & Solutions Digitales</title>

    <!-- Meta Description -->
    <meta name="description"
          content="TFA - The Forge Agency accompagne startups, TPE et grandes entreprises dans la transformation digitale. Développement Laravel, sites vitrines, SaaS, scraping : transformez vos idées en outils sur mesure avec nos experts."/>

    <!-- Viewport for Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags (For Social Sharing) -->
    <meta property="og:title" content="TFA - The Forge Agency | Experts en Développement Web & Solutions Digitales"/>
    <meta property="og:description"
          content="Transformez vos idées en outils numériques puissants avec TFA - The Forge Agency. Spécialistes en Laravel, SaaS, et scraping, nous réalisons vos projets avec passion et expertise."/>
    <meta property="og:image" content="{{ asset('images/tfa-og-image.jpg') }}"/>
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:type" content="website"/>

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="TFA - The Forge Agency | Experts en Développement Web & Solutions Digitales"/>
    <meta name="twitter:description"
          content="Transformez vos idées en outils numériques puissants avec TFA - The Forge Agency. Spécialistes en Laravel, SaaS, et scraping, nous réalisons vos projets avec passion et expertise."/>
    <meta name="twitter:image" content="{{ asset('images/tfa-og-image.jpg') }}"/>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}"/>
    <meta name="apple-mobile-web-app-title" content="TFA - The Forge Agency"/>
    <link rel="manifest" href="{{ asset('site.webmanifest') }}"/>

    <!-- External Stylesheet -->
    @vite('resources/css/app.css')

    <!-- Schema.org for Google -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "The Forge Agency",
            "url": "{{ url('/') }}",
        "description": "Agence de développement web spécialisée en Laravel et PHP. Transformez vos idées en projets numériques concrets avec notre équipe d'experts."
    }
    </script>
    @production
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-87YYVT0698"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-87YYVT0698');
        </script>
    @endproduction
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
            <a href="#expertise" class="hover:text-primary transition">Expertise</a>
            <a href="#process" class="hover:text-primary transition">Processus</a>
            <a href="#contact"
               class="bg-primary text-black font-semibold py-2 px-4 rounded-full shadow-lg hover:bg-pink transition-all duration-300 ease-in-out transform hover:scale-105">
                Lancez votre projet
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
                <p class="text-gray-400">&copy; {{ date('Y') }} Tous droits réservés.</p>
            </div>
            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-semibold text-primary mb-4">Navigation</h4>
                <ul class="space-y-3">
                    <li><a href="#about" class="hover:text-primary transition">À propos</a></li>
                    <li><a href="#services" class="hover:text-primary transition">Services</a></li>
                    <li><a href="#expertise" class="hover:text-primary transition">Expertise</a></li>
                    <li><a href="#process" class="hover:text-primary transition">Processus</a></li>
                    <li><a href="#contact" class="hover:text-primary transition">Contact</a></li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div>
                <h4 class="text-xl font-semibold text-primary mb-4">Contact</h4>
                <ul class="space-y-3 text-gray-400">
                    <li>
                        <a href="mailto:vassili@the-forge.agency" class="hover:text-primary transition">
                            <i class="fas fa-envelope mr-2 text-primary"></i> vassili@the-forge.agency
                        </a>
                    </li>
                    <li>
                        <a href="tel:+33760487334" class="hover:text-primary transition">
                            <i class="fas fa-phone mr-2 text-primary"></i> (+33) 07 60 48 73 34
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Social Links -->
        <div class="mt-8 text-center">
            <h4 class="text-xl font-semibold text-primary mb-4">Suivez-nous</h4>
            <div class="flex justify-center space-x-4">
                <a href="https://www.linkedin.com/company/the-forge-agency/" target="_blank"
                   class="hover:text-blue-500 transition">
                    @svg('fab-linkedin', 'h-6 w-6')
                </a>
                <a href="https://www.instagram.com/the.forge.agency" target="_blank"
                   class="hover:text-pink transition">
                    @svg('fab-instagram', 'h-6 w-6')
                </a>
                <a href="https://siteeclair.fr" target="_blank"
                   class="hover:text-yellow transition">
                    @svg('fas-bolt', 'h-6 w-6')
                </a>
            </div>
        </div>
        <!-- Credits -->
        <div class="text-center text-sm text-gray-400 mt-12">
            <p>
                Réalisé avec ❤️ par <a href="{{ config('app.url') }}" class="hover:text-primary font-medium">TFA - The
                    Forge Agency</a>.
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