@php
    $reasons = [
      [
        'emoji'       => '🎯',
        'title'       => 'Respect des délais & budgets',
        'description' => 'Planification rigoureuse et suivi pro-actif pour livrer vos projets dans les temps.',
      ],
      [
        'emoji'       => '👥',
        'title'       => 'Accompagnement personnalisé',
        'description' => 'Un interlocuteur dédié et une équipe experte à chaque étape.',
      ],
      [
        'emoji'       => '🔐',
        'title'       => 'Sécurité & fiabilité',
        'description' => 'Meilleures pratiques et audits réguliers pour garantir la robustesse.',
      ],
      [
        'emoji'       => '🚀',
        'title'       => 'Innovation & montée en charge',
        'description' => 'Veille technologique continue et architecture scalable.',
      ],
    ];

    // Décalages verticaux pour effet bento
    $offsets = ['-translate-y-6', 'translate-y-6', '-translate-y-3', 'translate-y-3'];
@endphp

<section id="why-tfa" class="py-16 bg-gray-900 text-[#f8f8f2]">
    <div class="container mx-auto px-4">
        {{-- Intro --}}
        <div class="max-w-2xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-extrabold leading-tight">
                Pourquoi choisir <span class="text-[#ff79c6]">TFA</span> ?<br>
                Votre allié pour des plateformes métier fiables et évolutives
            </h2>
            <p class="mt-4 text-lg text-[#6272a4]">
                Depuis plus de 7 ans, nous concevons des solutions web sur mesure, alliant expertise technique et agilité.
            </p>
        </div>

        {{-- Bento grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($reasons as $i => $r)
                <div class="transform {{ $offsets[$i] }}">
                    <div class="group border-2 border-gray-700 rounded-2xl p-6 text-center
                      transition-colors duration-300
                      group-hover:border-[#ff79c6]">
                        <div class="text-5xl mb-4">{{ $r['emoji'] }}</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $r['title'] }}</h3>
                        <p class="text-[#6272a4] text-sm leading-snug">
                            {{ $r['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
