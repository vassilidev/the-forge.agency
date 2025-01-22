@extends('layouts.default')

@section('content')
    <section id="hero" class="relative h-screen text-white flex flex-col">
        <div class="absolute inset-0">
            <img
                    src="{{ asset('banner.jpeg') }}"
                    alt="Bannière Hero"
                    class="absolute inset-0 w-full h-full object-cover blur-sm brightness-90"
                    loading="eager">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-background"></div>
        </div>
        <div class="relative z-10 flex flex-col items-center justify-center flex-grow text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                Votre partenaire pour des
                <span class="relative inline-block">
                <span class="text-primary">solutions digitales innovantes.</span>
                <div class="absolute -bottom-2 left-0 w-full h-[5px] bg-primary rotate-[-2deg] rounded-md"></div>
            </span>
            </h1>
            <p class="text-lg sm:text-xl md:text-2xl text-current leading-relaxed mb-8">
                Faites passer votre entreprise au niveau supérieur avec notre <span class="text-primary font-bold">expertise numérique</span>
                et des résultats sur-mesure.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact"
                   class="bg-primary hover:bg-pink text-black font-bold py-3 px-6 rounded-full shadow-lg text-base sm:text-lg transform transition-transform hover:scale-105">
                    Transformons vos idées en succès 🚀
                </a>
                <a href="#services"
                   class="bg-current-line text-white font-bold py-3 px-6 rounded-full shadow-lg text-base sm:text-lg transform transition-transform hover:scale-105">
                    Découvrez nos services
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white text-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Title and Introduction -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold">
                    À propos de <span class="text-primary">notre agence</span>
                </h2>
                <p class="text-lg text-gray-600 mt-4">
                    Derrière chaque projet, une passion : concevoir des solutions numériques sur mesure qui transforment
                    vos idées en succès concrets.
                </p>
            </div>
            <!-- Content Grid -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Image -->
                <div class="relative">
                    <img src="{{ asset('agency.jpeg') }}" alt="À propos de TFA" class="rounded-lg shadow-lg">
                </div>
                <!-- Text Content -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6">
                        Plus qu'une agence, une vision pour l'innovation
                    </h3>
                    <p class="text-gray-700 mb-6">
                        TFA - The Forge Agency est née d’un désir de faire évoluer le statut classique de freelance vers
                        une structure capable de
                        répondre à des besoins variés avec <span class="font-bold text-primary">rigueur</span> et <span
                                class="font-bold text-primary">créativité</span>.
                        Fondée par des passionnés du numérique, l'agence se spécialise dans la conception et le
                        développement d’outils sur mesure, propulsés par des technologies
                        comme <strong>Laravel</strong>.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Avec une approche centrée sur la <span
                                class="font-bold text-primary">transformation digitale</span>, nous accompagnons nos
                        clients dans des projets ambitieux :
                        de la création d’applications SaaS à la gestion de plateformes en marque blanche. Nous croyons
                        fermement en la puissance de la <strong>collaboration</strong>, et c'est pourquoi
                        nous avons également investi dans l’<span class="font-bold text-primary">open source</span> pour
                        contribuer à la communauté tech.
                    </p>
                    <p class="text-gray-700">
                        Notre mission ? Devenir un partenaire clé pour nos clients, qu'il s'agisse de startups, de TPE
                        ou de grandes entreprises, en offrant
                        des solutions adaptées et évolutives qui répondent à leurs défis uniques.
                    </p>
                </div>
            </div>
            <!-- Additional Callout -->
            <div class="mt-16 bg-current-line text-white py-8 px-6 rounded-lg shadow-lg">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">
                        Pourquoi avoir lancé TFA - The Forge Agency ?
                    </h3>
                    <p class="text-lg text-gray-300">
                        TFA a été créée pour aller au-delà des limites du freelancing individuel, en offrant une
                        approche professionnelle et collective à chaque projet.
                        Que ce soit en accompagnant des entreprises dans leur <span class="text-primary font-bold">transition numérique</span>,
                        en construisant des outils uniques,
                        ou en assurant une maintenance à long terme, nous avons pour ambition de donner à chaque projet
                        les ressources qu'il mérite.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-gradient-to-b from-background to-black text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-10">
                Nos services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (\App\Enums\Service::cases() as $service)
                    <div class="rounded-lg p-6 text-center shadow-lg transform transition-transform duration-300 hover:scale-105 bg-current-line">
                        <div class="flex items-center justify-center h-16 w-16 bg-gradient-to-br from-primary to-pink text-white rounded-full mx-auto mb-4">
                            @svg($service->icon(), 'w-8 h-8')
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            {{ $service->value }}
                        </h3>
                        <p class="text-gray-300">
                            {{ $service->description() }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="site-vitrine" class="py-20 bg-black text-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Titre principal -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold">
                    Découvrez notre offre
                    <span class="relative inline-block text-[#9c6d1f]">
                    Site Éclair ⚡
                    <div class="absolute -bottom-2 left-0 w-full h-[5px] bg-[#9c6d1f] rotate-[-2deg] rounded-md"></div>
                </span>
                </h2>
                <p class="text-lg text-gray-300 mt-4">
                    Une solution rapide et professionnelle pour créer votre site vitrine en seulement
                    <span class="text-[#9c6d1f] font-bold">5 jours</span>. Idéal pour les <strong>TPE</strong>, <strong>PME</strong>
                    et <strong>entrepreneurs</strong>.
                </p>
            </div>
            <!-- Contenu de la section -->
            <div class="grid md:grid-cols-2 items-center gap-12">
                <!-- Image -->
                <div class="relative group">
                    <a href="https://siteeclair.fr" target="_blank"
                       class="block overflow-hidden rounded-lg shadow-lg transform transition-transform hover:scale-105">
                        <img src="{{ asset('siteeclair.png') }}" alt="Site Éclair Screenshot" class="w-full h-auto">
                    </a>
                </div>
                <!-- Texte -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        Lancez votre site vitrine avec <span class="text-[#9c6d1f] font-bold">Site Éclair ⚡</span>
                    </h3>
                    <p class="text-gray-300 mb-6">
                        Profitez d’une solution clé en main, alliant performance, design et simplicité :
                    </p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>Design moderne et personnalisé pour refléter votre identité</li>
                        <li>Hébergement et nom de domaine inclus pour plus de simplicité</li>
                        <li>Livraison express en seulement <span class="text-[#9c6d1f] font-bold">5 jours</span></li>
                        <li>Modifications illimitées après la mise en ligne</li>
                    </ul>
                    <div class="mt-6">
                        <a href="https://siteeclair.fr" target="_blank"
                           class="bg-[#9c6d1f] hover:bg-[#b07e26] text-black font-bold py-3 px-6 rounded-full shadow-lg transform transition-transform hover:scale-105">
                            Découvrir Site Éclair ⚡
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="py-20 bg-gradient-to-b from-black to-background text-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    Une <span class="text-primary">expertise reconnue</span> au service de vos projets
                </h2>
                <p class="mt-4 text-lg md:text-xl text-gray-300">
                    Avec <span class="font-bold text-primary">+7 ans d'expérience</span> et <span
                            class="font-bold text-primary">100 missions</span> réalisées,
                    nous transformons vos idées en succès concrets.
                </p>
            </div>
            <!-- Expertise Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Expertise Card 1 -->
                <div class="bg-current-line hover:bg-primary/90 transition-transform transform hover:scale-105 rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        @svg('fas-briefcase', 'w-16 h-16 text-primary mr-4')
                        <h3 class="text-2xl font-semibold">+7 ans d'Expérience</h3>
                    </div>
                    <p class="text-gray-300">
                        Développement web, gestion de projets, création d'outils SaaS : nous savons relever les défis
                        complexes.
                    </p>
                </div>
                <!-- Expertise Card 2 -->
                <div class="bg-current-line hover:bg-primary/90 transition-transform transform hover:scale-105 rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        @svg('fas-trophy', 'w-16 h-16 text-primary mr-4')
                        <h3 class="text-2xl font-semibold">Super Malter</h3>
                    </div>
                    <p class="text-gray-300">
                        Reconnus pour notre excellence, avec une note de 5/5 sur les plateformes professionnelles.
                    </p>
                </div>
                <!-- Expertise Card 3 -->
                <div class="bg-current-line hover:bg-primary/90 transition-transform transform hover:scale-105 rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        @svg('fas-project-diagram', 'w-16 h-16 text-primary mr-4')
                        <h3 class="text-2xl font-semibold">+100 Projets Réalisés</h3>
                    </div>
                    <p class="text-gray-300">
                        Collaborations réussies avec startups, PME et grandes entreprises : votre projet, notre
                        priorité.
                    </p>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="https://www.malt.fr/profile/vassilijoffroy" target="_blank"
                   class="bg-primary hover:bg-pink text-black font-bold py-3 px-6 rounded-full shadow-lg text-lg transform transition-transform hover:scale-105">
                    Voir le profil sur Malt
                </a>
            </div>
        </div>
    </section>

    <section id="process" class="py-20 bg-gradient-to-b from-background to-current-line text-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Title -->
            <h2 class="text-center text-4xl md:text-5xl font-extrabold mb-6">
                Notre <span class="text-primary">processus simplifié</span>
            </h2>
            <p class="text-center mb-10 text-lg text-gray-300">
                Une méthode structurée et agile pour mener votre projet à son succès.
            </p>

            <!-- Timeline Container -->
            <div class="relative max-w-4xl mx-auto">
                <!-- Vertical Line -->
                <div class="absolute left-8 top-0 bottom-0 w-px bg-gradient-to-b from-primary to-pink hidden md:block"></div>

                <!-- Steps -->
                <div class="space-y-12 md:pl-16">
                    @foreach (\App\Enums\Process::cases() as $step)
                        <div class="relative flex items-start group">
                            <!-- Icon -->
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-primary to-pink text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                                    @svg($step->icon(), 'w-6 h-6')
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="ml-8">
                                <h3 class="text-2xl font-bold text-white group-hover:text-primary transition-colors duration-300">
                                    {{ $step->title() }}
                                </h3>
                                <p class="mt-2 text-gray-300 group-hover:text-gray-100 transition-colors duration-300">
                                    {{ $step->description() }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-gradient-to-b from-current-line to-background text-white">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-4xl md:text-5xl font-extrabold mb-8">
                Transformons vos idées en <span class="text-primary">projets d'exception</span>
            </h2>
            <!-- Subtitle -->
            <p class="text-lg md:text-xl text-gray-300 mb-10">
                Faites le premier pas vers une solution digitale innovante. <br> Parlez-en avec notre équipe d'experts.
            </p>
            <!-- Call to Action -->
            <a href="https://calendly.com/vassili-joffroy/30min" target="_blank"
               class="bg-primary hover:bg-pink text-black font-bold py-4 px-10 rounded-full shadow-lg text-lg md:text-xl transform transition-all duration-300 ease-in-out hover:scale-110">
                Réservez un appel gratuit maintenant 🚀
            </a>
            <!-- Supporting Text -->
            <p class="mt-6 text-gray-400 text-sm md:text-base">
                Disponible à votre convenance pour une consultation sans engagement.
            </p>
        </div>
    </section>
@endsection
