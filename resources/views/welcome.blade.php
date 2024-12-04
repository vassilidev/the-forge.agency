<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TFA - The Forge Agency | Agence de Développement Web</title>
    <meta name="description"
          content="Agence de développement web spécialisée en Laravel et PHP. Transformez vos idées en projets numériques concrets avec notre équipe d'experts.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Polices Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles personnalisés -->
    <style>
        /* Couleurs personnalisées */
        :root {
            --primary-color: #FF79C6;
            --background-color: #F8F8F2;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background-color);
            color: #2D2D2D;
        }

        .bg-primary {
            background-color: var(--primary-color);
        }

        .text-primary {
            color: var(--primary-color);
        }

        .hover\:text-primary:hover {
            color: var(--primary-color);
        }

        .hover\:bg-primary:hover {
            background-color: var(--primary-color);
        }

        /* Héros */
        #hero {
            background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100vh;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(40, 40, 40, 0.6);
            backdrop-filter: blur(3px);
        }

        #hero-content {
            position: relative;
            z-index: 1;
        }

        /* Logo */
        #logo {
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center py-4">
            <a href="#" id="logo"><span class="text-primary">&lt;tfa.&gt;</span></a>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#about" class="text-gray-700 hover:text-primary">À propos</a>
                <a href="#services" class="text-gray-700 hover:text-primary">Services</a>
                <a href="#process" class="text-gray-700 hover:text-primary">Processus</a>
                <a href="#portfolio" class="text-gray-700 hover:text-primary">Portfolio</a>
                <a href="#expert" class="text-gray-700 hover:text-primary">Notre Expert</a>
                <a href="#testimonials" class="text-gray-700 hover:text-primary">Témoignages</a>
                <a href="#contact"
                   class="bg-primary text-white font-semibold py-2 px-4 rounded-full hover:bg-pink-500 transition duration-300">Prendre
                    RDV</a>
            </div>
            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-700 focus:outline-none">
                    <!-- Icône du menu hamburger -->
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <a href="#about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">À propos</a>
        <a href="#services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a>
        <a href="#process" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Processus</a>
        <a href="#portfolio" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Portfolio</a>
        <a href="#expert" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Notre Expert</a>
        <a href="#testimonials" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Témoignages</a>
        <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
    </div>
</nav>

<!-- Section Hero -->
<section id="hero" class="flex items-center justify-center text-center px-6">
    <div id="hero-content" class="max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
            Votre Partenaire pour des Solutions Digitales Innovantes
        </h1>
        <p class="text-lg md:text-2xl text-white mb-8">
            Transformez vos idées en réalité digitale avec <span class="text-primary">TFA - The Forge Agency</span>
        </p>
        <a href="#contact"
           class="bg-primary text-white font-semibold py-3 px-6 rounded-full hover:bg-pink-500 transition duration-300">
            Prenez rendez-vous dès maintenant
        </a>
    </div>
</section>


<!-- À propos de nous -->
<section id="about" class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                À propos de nous
            </h2>
            <p class="text-lg text-gray-700">
                TFA - The Forge Agency est née de la passion pour le développement web et l'innovation digitale.
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Nos Racines</h3>
                <p class="text-gray-700 mb-4">
                    Fondée par des experts du web, notre agence s'est construite sur la volonté de fournir des solutions
                    digitales sur mesure, adaptées aux besoins spécifiques de chaque client.
                </p>
                <p class="text-gray-700">
                    Nous croyons en l'innovation, la qualité et la transparence pour bâtir des relations durables avec
                    nos partenaires.
                </p>
            </div>
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Notre Mission</h3>
                <p class="text-gray-700 mb-4">
                    Accompagner les entreprises dans leur transformation digitale en proposant des solutions
                    technologiques innovantes qui révolutionnent leur quotidien.
                </p>
                <p class="text-gray-700">
                    Nous visons à optimiser vos processus, augmenter votre productivité et propulser votre croissance.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-10">
            Pourquoi Choisir
            <span class="relative inline-block text-white">
                TFA - The Forge Agency
                <span class="absolute -bottom-1 left-0 w-full h-1 bg-primary rotate-[-2deg]"></span>
            </span>
            ?
        </h2>
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="bg-gray-800 rounded-lg p-6 text-center shadow-lg transform transition-transform duration-300 hover:scale-105">
                <!-- Icon -->
                <div class="flex items-center justify-center h-16 w-16 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full mx-auto mb-4">
                    <!-- Icône personnalisée -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <!-- Icône de code -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>
                    </svg>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-semibold text-gray-100 mb-3">
                    Développement Web sur Mesure
                </h3>
                <!-- Description -->
                <p class="text-gray-300">
                    Création de sites web personnalisés répondant précisément à vos besoins.
                </p>
            </div>
            <!-- Service 2 -->
            <div class="bg-gray-800 rounded-lg p-6 text-center shadow-lg transform transition-transform duration-300 hover:scale-105">
                <!-- Icon -->
                <div class="flex items-center justify-center h-16 w-16 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full mx-auto mb-4">
                    <!-- Icône de base de données -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <!-- Icône de base de données -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 20c4.418 0 8-1.79 8-4V8c0-2.21-3.582-4-8-4S4 5.79 4 8v8c0 2.21 3.582 4 8 4z"/>
                    </svg>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-semibold text-gray-100 mb-3">
                    Scraping & Automatisation
                </h3>
                <!-- Description -->
                <p class="text-gray-300">
                    Optimisez vos processus avec nos solutions de scraping et d'automatisation.
                </p>
            </div>
            <!-- Service 3 -->
            <div class="bg-gray-800 rounded-lg p-6 text-center shadow-lg transform transition-transform duration-300 hover:scale-105">
                <!-- Icon -->
                <div class="flex items-center justify-center h-16 w-16 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full mx-auto mb-4">
                    <!-- Icône de transformation -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <!-- Icône de transformation -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-semibold text-gray-100 mb-3">
                    Transformation Digitale
                </h3>
                <!-- Description -->
                <p class="text-gray-300">
                    Accompagnement sur mesure pour votre transition numérique.
                </p>
            </div>
            <!-- Service 4 -->
            <div class="bg-gray-800 rounded-lg p-6 text-center shadow-lg transform transition-transform duration-300 hover:scale-105">
                <!-- Icon -->
                <div class="flex items-center justify-center h-16 w-16 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full mx-auto mb-4">
                    <!-- Icône de support -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <!-- Icône de support -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M18.364 5.636l-1.414 1.414a9 9 0 11-1.414-1.414l1.414-1.414a11 11 0 101.414 1.414z"/>
                    </svg>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-semibold text-gray-100 mb-3">
                    Maintenance & Support
                </h3>
                <!-- Description -->
                <p class="text-gray-300">
                    Un support réactif et une maintenance continue pour vos applications.
                </p>
            </div>
            <!-- Vous pouvez ajouter d'autres services en suivant le même format -->
        </div>
    </div>
</section>

<section id="process" class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-6">
            Notre <span class="text-primary">Processus Simplifié</span>
        </h2>
        <p class="text-center mb-10 text-lg text-gray-700">
            De l'idée à la livraison, nous vous accompagnons à chaque étape.
        </p>
        <!-- Steps -->
        <div class="relative max-w-4xl mx-auto">
            <!-- Vertical Line -->
            <div class="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-primary to-pink-500 hidden md:block"></div>
            <div class="space-y-12 md:pl-16">
                <!-- Step 1 -->
                <div class="flex items-start group">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 10h.01M12 14h.01M16 10h.01M9 16h6M9 20h6M4 6h16M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2h-3l-3 3-3-3H6a2 2 0 01-2-2V6z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-primary transition-colors duration-300">
                            Prise de contact
                        </h3>
                        <p class="text-gray-700">
                            Réservez un appel ou envoyez un message pour lancer votre projet.
                        </p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="flex items-start group">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 17l-5-5m0 0l5-5m-5 5h12"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-primary transition-colors duration-300">
                            Analyse des besoins
                        </h3>
                        <p class="text-gray-700">
                            Nous identifions vos besoins et proposons une solution sur mesure.
                        </p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="flex items-start group">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9.75 17L6 10.25L9.75 3.5H14.25L18 10.25L14.25 17H9.75Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-primary transition-colors duration-300">
                            Conception & Validation
                        </h3>
                        <p class="text-gray-700">
                            Nous créons des maquettes interactives et affinons le design selon vos retours.
                        </p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="flex items-start group">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-primary transition-colors duration-300">
                            Développement & Tests
                        </h3>
                        <p class="text-gray-700">
                            Nous développons votre projet tout en réalisant des tests rigoureux pour garantir la
                            qualité.
                        </p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="flex items-start group">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-pink-500 text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-primary transition-colors duration-300">
                            Livraison & Assistance
                        </h3>
                        <p class="text-gray-700">
                            Livraison clé en main avec support continu pour garantir votre satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="expert" class="py-20 px-6 bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Notre Expertise à Votre Service
            </h2>
            <p class="text-lg text-gray-700">
                Avec une expertise cumulée en développement web et gestion de projets, nous mettons à votre disposition
                des talents chevronnés pour répondre à vos besoins.
            </p>
        </div>
        <div class="flex flex-col md:flex-row items-center">
            <!-- Profil de Vassili -->
            <div class="md:w-1/3 text-center">
                <img src="https://ui-avatars.com/api/?name=Vassili+Joffroy&background=FF79C6&color=ffffff&size=256"
                     alt="Vassili Joffroy" class="rounded-full mx-auto mb-6 md:mb-0 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Vassili Joffroy</h3>
                <p class="text-gray-700 mb-4">
                    Co-fondateur & Lead Developer
                </p>
                <a href="https://www.malt.fr/profile/vassilijoffroy" target="_blank"
                   class="text-primary font-semibold hover:underline">Voir son profil Malt</a>
            </div>
            <!-- Description de l'agence -->
            <div class="md:w-2/3 md:pl-12">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">L'Expertise Collective de TFA</h3>
                <p class="text-lg text-gray-700 mb-4">
                    TFA - The Forge Agency regroupe des experts en développement web avec une vaste expérience, alliant
                    créativité et rigueur technique.
                </p>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>Plus de 7 ans d'expérience en développement web et mobile</li>
                    <li>Projets réalisés pour des startups, grands comptes, et agences</li>
                    <li>Spécialisation en Laravel, PHP et solutions sur mesure</li>
                    <li>Une approche centrée sur le client, avec une gestion agile et proactive</li>
                </ul>
                <p class="text-lg text-gray-700">
                    Que ce soit pour des missions freelances, des collaborations en CDI, ou des partenariats long terme,
                    notre équipe dispose des compétences et de l'expérience nécessaires pour transformer vos idées en
                    succès numérique.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Site Éclair -->
<section id="site-eclair" class="py-20 bg-black text-white">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-6">
            Découvrez <span class="text-[#9c6d1f]">Site Éclair ⚡</span>
        </h2>
        <p class="text-center mb-10 text-lg">
            Lancez votre site en un temps record avec notre solution clé en main.
        </p>

        <!-- Highlights -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mb-12">
            <div class="p-6 bg-[#282A36] rounded-lg shadow-lg">
                <h3 class="text-xl font-bold text-[#9c6d1f] mb-3">💎 Design 100% sur Mesure</h3>
                <p class="text-gray-300">Un design unique et personnalisé pour votre projet.</p>
            </div>
            <div class="p-6 bg-[#282A36] rounded-lg shadow-lg">
                <h3 class="text-xl font-bold text-[#9c6d1f] mb-3">🌐 Domaine & Hébergement Inclus</h3>
                <p class="text-gray-300">Nous gérons votre domaine et hébergement, tout inclus.</p>
            </div>
            <div class="p-6 bg-[#282A36] rounded-lg shadow-lg">
                <h3 class="text-xl font-bold text-[#9c6d1f] mb-3">🔄 Modifications Illimitées</h3>
                <p class="text-gray-300">Apportez toutes les modifications nécessaires, sans frais.</p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <a href="https://siteeclair.fr" target="_blank"
               class="bg-[#9c6d1f] text-black font-semibold py-3 px-6 rounded-full hover:bg-white hover:text-black transition duration-300">
                En savoir plus
            </a>
        </div>
    </div>
</section>

<section id="testimonials" class="py-20 bg-gray-100 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Ils nous font confiance
            </h2>
            <p class="text-lg text-gray-700">
                Découvrez ce que nos clients disent de nous.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Témoignage 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic mb-4">
                    "Parfait, je recommande Vassili pour sa qualité et son sérieux. Très professionnel !"
                </p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Diag+Power&background=2ECC71&color=ffffff&size=64"
                         alt="Diag Power" class="rounded-full h-12 w-12 mr-4">
                    <div>
                        <p class="text-gray-900 font-semibold">Diag Power</p>
                        <p class="text-gray-600 text-sm">DIAG POWER</p>
                    </div>
                </div>
            </div>
            <!-- Témoignage 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic mb-4">
                    "Vassili est une personne de confiance et efficace offrant toujours un service de qualité. Je le
                    recommande fortement pour tous vos projets."
                </p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Morine+Mallet&background=3498DB&color=ffffff&size=64"
                         alt="Morine Mallet" class="rounded-full h-12 w-12 mr-4">
                    <div>
                        <p class="text-gray-900 font-semibold">Morine Mallet</p>
                        <p class="text-gray-600 text-sm">Entrepreneure</p>
                    </div>
                </div>
            </div>
            <!-- Témoignage 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic mb-4">
                    "Je recommande vivement Vassili en tant que développeur Full Stack Laravel. Son expertise technique
                    exceptionnelle fait de lui un atout précieux."
                </p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Valentin+Giraud&background=E74C3C&color=ffffff&size=64"
                         alt="Valentin Giraud" class="rounded-full h-12 w-12 mr-4">
                    <div>
                        <p class="text-gray-900 font-semibold">Valentin Giraud</p>
                        <p class="text-gray-600 text-sm">Client Satisfait</p>
                    </div>
                </div>
            </div>
            <!-- Vous pouvez ajouter d'autres témoignages en suivant le même format -->
        </div>
    </div>
</section>

<!-- Appel à l'action principal -->
<section id="contact" class="py-20 bg-gray-100 px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
            Prêt à lancer votre projet ?
        </h2>
        <p class="text-lg text-gray-700 mb-6">
            Prenez rendez-vous avec nous dès maintenant pour discuter de vos idées et commencer votre transformation
            digitale.
        </p>
        <a href="https://calendly.com/votre_calendly" target="_blank"
           class="bg-primary text-white font-semibold py-3 px-6 rounded-full hover:bg-pink-500 transition duration-300">
            Prendre RDV sur Calendly
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Colonne 1 -->
            <div class="mb-6 md:mb-0">
                <h3 class="text-2xl font-bold">TFA - The Forge Agency</h3>
                <p class="text-gray-400">&copy; 2024 Tous droits réservés.</p>
            </div>
            <!-- Colonne 2 -->
            <div class="flex flex-col md:flex-row md:space-x-12">
                <div class="mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-3">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="hover:text-primary">À propos</a></li>
                        <li><a href="#services" class="hover:text-primary">Services</a></li>
                        <li><a href="#process" class="hover:text-primary">Processus</a></li>
                        <li><a href="#portfolio" class="hover:text-primary">Portfolio</a></li>
                        <li><a href="#expert" class="hover:text-primary">Notre Expert</a></li>
                        <li><a href="#testimonials" class="hover:text-primary">Témoignages</a></li>
                        <li><a href="#contact" class="hover:text-primary">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-3">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/company/the-forge-agency/" class="hover:text-primary"
                           aria-label="LinkedIn">
                            <!-- Icône LinkedIn -->
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V149.02h92.88zm-46.44-338C24.38 110 0 85.62 0 56.52 0 27.43 24.38 3 53.84 3s53.84 24.43 53.84 53.52c0 29.1-24.38 53.48-53.84 53.48zM447.9 448h-92.68V302.4c0-34.7-.7-79.3-48.3-79.3-48.4 0-55.7 37.8-55.7 76.8V448H158.4V149h89v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/>
                            </svg>
                        </a>
                        <!-- Vous pouvez ajouter d'autres icônes de réseaux sociaux ici -->
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-400 mt-8">
            <p>
                Réalisé avec ❤️ par <a href="#" class="hover:text-primary font-medium">TFA - The Forge Agency</a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script>
    // Menu mobile
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
