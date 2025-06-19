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
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags (For Social Sharing) -->
    <meta property="og:title" content="TFA - The Forge Agency | Experts en Développement Web & Solutions Digitales"/>
    <meta property="og:description"
          content="Transformez vos idées en outils numériques puissants avec TFA - The Forge Agency. Spécialistes en Laravel, SaaS, et scraping, nous réalisons vos projets avec passion et expertise."/>
    <meta property="og:image" content="{{ asset('banner.jpeg') }}"/>
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image:alt" content="The Forge Agency - bannière"/>


    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="TFA - The Forge Agency | Experts en Développement Web & Solutions Digitales"/>
    <meta name="twitter:description"
          content="Transformez vos idées en outils numériques puissants avec TFA - The Forge Agency. Spécialistes en Laravel, SaaS, et scraping, nous réalisons vos projets avec passion et expertise."/>
    <meta name="twitter:image" content="{{ asset('banner.jpeg') }}"/>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}"/>
    <meta name="apple-mobile-web-app-title" content="TFA - The Forge Agency"/>
    <link rel="manifest" href="{{ asset('site.webmanifest') }}"/>

    <!-- Schema.org for Google -->
    <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "The Forge Agency",
  "url": "http://the-forge.agency.test",
  "logo": "http://the-forge.agency.test/logo.svg",
  "sameAs": [
    "https://www.linkedin.com/company/tfa-the-forge-agency/",
  ]
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

    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .font-fira {
            font-family: 'Fira Code', monospace;
        }
    </style>

    <style>
        /* Dracula Theme Colors */
        :root {
            --dracula-background: #282a36;
            --dracula-current: #44475a;
            --dracula-foreground: #f8f8f2;
            --dracula-comment: #6272a4;
            --dracula-cyan: #8be9fd;
            --dracula-green: #50fa7b;
            --dracula-orange: #ffb86c;
            --dracula-pink: #ff79c6;
            --dracula-purple: #bd93f9;
            --dracula-red: #ff5555;
            --dracula-yellow: #f1fa8c;
        }
    </style>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @stack('styles')
</head>

<body class="min-h-screen bg-gray-900 text-white overflow-x-hidden">

@include('partials.header')

@yield('content')

@include('partials.footer')

@stack('scripts')
</body>
</html>
