@extends('layouts.default')

@section('content')
    <section id="hero" class="relative h-screen text-white flex flex-col">
        <div class="absolute inset-0">
            <img
                    src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Bannière Hero"
                    class="absolute inset-0 w-full h-full object-cover blur-sm brightness-90"
                    loading="eager">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-background"></div>
        </div>
        <div class="relative z-10 flex flex-col items-center justify-center flex-grow text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                Votre partenaire pour des
                <span class="relative inline-block">
                <span class="text-primary">solutions digitales innovantes</span>
                <div class="absolute -bottom-2 left-0 w-full h-[5px] bg-primary rotate-[-2deg] rounded-md"></div>
            </span>
            </h1>
            <p class="text-lg sm:text-xl md:text-2xl text-current leading-relaxed mb-8">
                Transformez vos idées en réalité digitale grâce à notre <span class="text-primary">expertise</span>.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact"
                   class="bg-primary hover:bg-pink text-black font-bold py-3 px-6 rounded-full shadow-lg text-base sm:text-lg transform transition-transform hover:scale-105">
                    Prenez rendez-vous dès maintenant
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
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold">
                    À propos de <span class="text-primary">l'agence</span>
                </h2>
                <p class="text-lg text-gray-600 mt-4">
                    Nous sommes des artisans numériques passionnés, prêts à transformer vos idées en succès.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&fit=crop&w=800&h=600"
                         alt="À propos de TFA"
                         class="rounded-lg shadow-lg">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-6">
                        Une histoire de passion et d'innovation
                    </h3>
                    <p class="text-gray-700 mb-6">
                        Fondée par des experts ayant plus de 7 ans d'expérience, TFA offre des solutions digitales
                        innovantes et sur mesure.
                    </p>
                    <p class="text-gray-700">
                        Nous nous engageons à offrir des produits qui allient <span
                                class="text-primary">performance</span>,
                        <span class="text-primary">design</span> et <span class="text-primary">qualité</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-background text-white">
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

    <section id="portfolio" class="py-20 bg-current-line text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-10">
                Nos réalisations
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative group">
                    <img src="https://plus.unsplash.com/premium_photo-1681566925294-7ff6eba5a9c2?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         alt="Projet 1" class="rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-bold">Projet 1</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://plus.unsplash.com/premium_photo-1681566925294-7ff6eba5a9c2?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         alt="Projet 2" class="rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-bold">Projet 2</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://plus.unsplash.com/premium_photo-1681566925294-7ff6eba5a9c2?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         alt="Projet 3" class="rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-bold">Projet 3</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://plus.unsplash.com/premium_photo-1681566925294-7ff6eba5a9c2?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         alt="Projet 4" class="rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-bold">Projet 4</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="py-20 bg-background text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    <span class="text-primary">Une expertise</span> de premier plan
                </h2>
                <p class="mt-4 text-lg md:text-xl text-gray-300">
                    Plus de <span class="font-bold">7 ans</span> d'expérience, <span
                            class="font-bold">100 missions</span> réussies.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-current-line hover:bg-primary/90 transition-transform transform hover:scale-105 rounded-lg shadow-lg p-6">
                    @svg('fas-briefcase', 'w-16 h-16 text-primary mb-4')
                    <h3 class="text-2xl font-semibold">+7 ans d'Expérience</h3>
                    <p class="mt-2 text-gray-300">
                        Une expertise éprouvée dans le développement web et la gestion de projets complexes.
                    </p>
                </div>
                <div class="bg-current-line hover:bg-primary/90 transition-transform transform hover:scale-105 rounded-lg shadow-lg p-6">
                    @svg('fas-trophy', 'w-16 h-16 text-primary mb-4')
                    <h3 class="text-2xl font-semibold">Super Malter</h3>
                    <p class="mt-2 text-gray-300">
                        Noté 5/5 pour la qualité sur les plateformes de freelancing.
                    </p>
                </div>
                <div class="bg-current-line hover:bg-primary/90 transition-transform transform hover:scale-105 rounded-lg shadow-lg p-6">
                    @svg('fas-project-diagram', 'w-16 h-16 text-primary mb-4')
                    <h3 class="text-2xl font-semibold">+100 Projets Réalisés</h3>
                    <p class="mt-2 text-gray-300">
                        Startups, grandes entreprises : vos idées transformées en succès numériques.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="method" class="py-20 bg-current-line text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-4xl font-bold mb-6">
                Notre <span class="text-primary">processus simplifié</span>
            </h2>
            <p class="text-center mb-10 text-lg text-foreground">
                Une méthode claire pour vous accompagner à chaque étape.
            </p>
            <div class="relative max-w-3xl mx-auto">
                <div class="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-primary to-pink hidden md:block"></div>
                <div class="space-y-12 md:pl-16">
                    @foreach (\App\Enums\Process::cases() as $step)
                        <div class="relative flex items-start group">
                            <!-- Icon -->
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-pink text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                                    @svg($step->icon(), 'w-6 h-6')
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="ml-6">
                                <h3 class="text-xl font-semibold text-gray-200 group-hover:text-primary transition-colors duration-300">
                                    {{ $step->title() }}
                                </h3>
                                <p class="text-gray-400">
                                    {{ $step->description() }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-background/10 text-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">
                Prêt à transformer vos idées en réalité ?
            </h2>
            <p class="text-lg text-gray-300 mb-6">
                Réservez dès maintenant un appel avec notre équipe d'experts pour discuter de votre projet digital.
            </p>
            <a href="https://calendly.com/vassili-joffroy/30min" target="_blank"
               class="bg-primary hover:bg-pink text-black font-bold py-4 px-8 rounded-full shadow-lg text-lg md:text-xl transition-all duration-300 ease-in-out transform hover:scale-105">
                Planifiez votre appel gratuit 🚀
            </a>
        </div>
    </section>
@endsection
