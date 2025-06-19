@php
    $services = [
      [
        'title' => 'Conseil & Audit Technique',
        'desc'  => 'Des recommandations stratégiques pour sécuriser vos choix dès le lancement.',
        'img'   => asset('audit.png'),
      ],
      [
        'title' => 'Automatisation & Scraping',
        'desc'  => 'Des robots sur-mesure (Apify, Puppeteer) pour extraire et traiter vos données.',
        'img'   => asset('scrape.png'),
      ],
      [
        'title' => 'Développement Forfait & Régie',
        'desc'  => 'Engagez une équipe dédiée ou optez pour un forfait agile, en cycle en V ou Scrum.',
        'img'   => asset('dev.png'),
      ],
      [
        'title' => 'Maintenance & Évolution',
        'desc'  => 'Support 24/7, monitoring pro-actif et mises à jour pour pérenniser votre application.',
        'img'   => asset('maintenance.png'),
      ],
    ];
@endphp

<section id="services" class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <!-- Titre impactant -->
        <h3 class="text-4xl font-extrabold text-center mb-14 leading-tight">
            Un accompagnement <span class="text-primary-500">sur-mesure</span><br>
            à chaque étape de votre projet
        </h3>

        <!-- Grille responsive -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
            @foreach($services as $s)
                <div class="group relative flex flex-col items-center text-center space-y-6 p-4
                    transition-transform duration-500 ease-out
                    hover:-translate-y-3">
                    <!-- Image plus grande + animation futuriste -->
                    <div class="w-32 h-32">
                        <img
                                src="{{ $s['img'] }}"
                                alt="{{ $s['title'] }}"
                                class="w-full h-full object-contain transition-transform duration-700
                     group-hover:scale-110 group-hover:rotate-6"
                        />
                    </div>

                    <!-- Titre -->
                    <h3 class="text-xl font-semibold transition-colors duration-300 group-hover:text-primary-500">
                        {{ $s['title'] }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-400 text-sm leading-relaxed">
                        {{ $s['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
