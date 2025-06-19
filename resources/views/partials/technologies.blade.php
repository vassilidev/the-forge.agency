@php
    $filters = [
        ['id' => 'back-end',        'label' => 'Back-end'],
        ['id' => 'apis',            'label' => 'APIs'],
        ['id' => 'front-end',       'label' => 'Front-end'],
        ['id' => 'base-de-donnees', 'label' => 'Base de données'],
        ['id' => 'e-commerce',      'label' => 'E-commerce'],
        ['id' => 'no-code',         'label' => 'No-Code'],
        ['id' => 'ia',              'label' => 'Intelligence Artificielle'],
        ['id' => 'mobile',          'label' => 'Mobile & PWA'],
        ['id' => 'serveurs',        'label' => 'Serveurs & DevOps'],
    ];

    $technologies = [
        'front-end' => [
            'label'       => 'Front-end',
            'description' => "L’expérience utilisateur est au cœur de chaque interaction en ligne. Les technologies front-end façonnent ce que nous voyons et comment nous interagissons avec chaque contenu. Elles permettent à votre navigateur d’afficher tout ce que vous voyez sur votre écran et de le dynamiser.",
            'items' => [
                ['name'=>'React',     'logo'=> asset('img/techno/frontend/react.svg'),      'url'=> null],
                ['name'=>'Vue.js',    'logo'=> asset('img/techno/frontend/vue.svg'),        'url'=> null],
                ['name'=>'Angular',   'logo'=> asset('img/techno/frontend/angular.svg'),    'url'=>null],
                ['name'=>'Next.js',   'logo'=> asset('img/techno/frontend/nextjs.png'),     'url'=>null],
                ['name'=>'Laravel Nova',   'logo'=> asset('img/techno/frontend/nova.png'),     'url'=>null],
                ['name'=>'Laravel Filament',   'logo'=> asset('img/techno/frontend/filament.png'),     'url'=>null],
            ],
        ],
        'apis' => [
            'label'       => 'APIs',
            'description' => "Création d'APIs REST et GraphQL performantes avec Node.js, Express, NestJS et Apollo.",
            'items' => [
                ['name'=>'Rest',     'logo'=> asset('img/techno/api/rest.png'),     'url'=> null],
                ['name'=>'GraphQL',     'logo'=> asset('img/techno/api/graphql.svg'),     'url'=> null],
                ['name'=>'FastAPI',     'logo'=> asset('img/techno/api/fastapi.png'),     'url'=> null],
            ],
        ],
        'back-end' => [
            'label'       => 'Back-end',
            'description' => "Des serveurs robustes avec Node.js, Python, Ruby on Rails et PHP.",
            'items' => [
                ['name'=>'Laravel',    'logo'=> asset('img/techno/back/laravel.svg'),    'url'=> null],
                ['name'=>'Symfony',     'logo'=> asset('img/techno/back/symfony.png'),     'url'=> null],
                ['name'=>'PHP',       'logo'=> asset('img/techno/back/php.svg'),        'url'=> null],
                ['name'=>'Node.js',   'logo'=> asset('img/techno/back/nodejs.svg'),     'url'=> null],
            ],
        ],
        'base-de-donnees' => [
            'label'       => 'Base de données',
            'description' => "Gestion des données avec MongoDB, PostgreSQL, MySQL et Redis.",
            'items' => [
                ['name'=>'MongoDB',   'logo'=> asset('img/techno/db/mongodb.svg'),   'url'=> null],
                ['name'=>'PostgreSQL', 'logo'=> asset('img/techno/db/postgresql.png'), 'url'=> null],
                ['name'=>'MySQL',     'logo'=> asset('img/techno/db/mysql.svg'),     'url'=> null],
                ['name'=>'Redis',     'logo'=> asset('img/techno/db/redis.webp'),     'url'=> null],
                ['name'=>'SQLite',    'logo'=> asset('img/techno/db/sqlite.png'),    'url'=> null],
                ['name'=>'ElasticSearch', 'logo'=> asset('img/techno/db/elasticsearch.svg'), 'url'=> null],
                ['name'=>'Cassandra',  'logo'=> asset('img/techno/db/cassandra.png'),  'url'=> null],
                ['name'=>'Oracle',   'logo'=> asset('img/techno/db/oracledb.svg'),   'url'=> null],
                ['name'=>'SqlServer',   'logo'=> asset('img/techno/db/sqlserver.svg'),   'url'=> null],
                ['name'=>'NoSQL',   'logo'=> asset('img/techno/db/nosql.png'),   'url'=> null],
                ['name'=>'Memcached',   'logo'=> asset('img/techno/db/memcached.png'),   'url'=> null],
            ],
        ],
        'serveurs' => [
            'label'       => 'Serveurs',
            'description' => "Déploiement et gestion des serveurs avec Docker, Kubernetes, AWS et Azure.",
            'items' => [
                ['name'=>'Docker',     'logo'=> asset('img/techno/server/docker.png'),     'url'=> null],
                ['name'=>'Kubernetes', 'logo'=> asset('img/techno/server/kubernetes.png'), 'url'=> null],
                ['name'=>'AWS',        'logo'=> asset('img/techno/server/aws.svg'),        'url'=> null],
                ['name'=>'Azure',      'logo'=> asset('img/techno/server/azure.svg'),      'url'=> null],
                ['name'=>'Google Cloud', 'logo'=> asset('img/techno/server/googlecloud.png'), 'url'=> null],
                ['name'=>'Forge',      'logo'=> asset('img/techno/server/forge.webp'),      'url'=> null],
                ['name'=>'OVH',        'logo'=> asset('img/techno/server/ovh.png'),        'url'=> null],
            ],
        ],
        'mobile' => [
            'description' => "Applications mobiles et Progressive Web Apps avec React Native, Flutter et Ionic.",
            'items' => [
                ['name'=>'React Native', 'logo'=> asset('img/techno/mobile/reactnative.svg'), 'url'=> null],
                ['name'=>'Flutter',      'logo'=> asset('img/techno/mobile/flutter.svg'),      'url'=> null],
                ['name'=>'PWA',          'logo'=> asset('img/techno/mobile/pwa.png'),          'url'=> null],
                ['name'=>'Flutter Flow',    'logo'=> asset('img/techno/mobile/flutterflow.svg'),    'url'=> null],
                ['name'=>'Swift',    'logo'=> asset('img/techno/mobile/swift.png'),    'url'=> null],
            ],
        ],
        'e-commerce' => [
            'label'       => 'E-commerce',
            'description' => "Solutions e-commerce avec Shopify, WooCommerce et Magento.",
            'items' => [
                ['name'=>'Shopify',    'logo'=>asset('img/techno/ecom/shopify.png'),     'url'=> null],
                ['name'=>'WooCommerce', 'logo'=> asset('img/techno/ecom/woocommerce.png'), 'url'=> null],
                ['name'=>'Magento',    'logo'=> asset('img/techno/ecom/magento.png'),     'url'=> null],
            ],
        ],
        'no-code' => [
            'label'       => 'No-Code',
            'description' => "Création rapide d'applications avec Bubble, Webflow et Airtable.",
            'items' => [
                ['name'=>'Bubble',     'logo'=>asset('img/techno/nocode/bubble.svg'),      'url'=> null],
                ['name'=>'Webflow',    'logo'=>asset('img/techno/nocode/webflow.svg'),     'url'=> null],
                ['name'=>'Airtable',   'logo'=>asset('img/techno/nocode/airtable.svg'),    'url'=> null],
                ['name'=>'Make',       'logo'=>asset('img/techno/nocode/make.webp'),        'url'=> null],
                ['name'=>'n8n',        'logo'=>asset('img/techno/nocode/n8n.png'),         'url'=> null],
                ['name'=>'Zapier',     'logo'=>asset('img/techno/nocode/zapier.png'),      'url'=> null],
                ['name'=>'Wordpress',     'logo'=>asset('img/techno/nocode/wordpress.png'),      'url'=> null],
            ],
        ],
        'ia' => [
            'label'       => 'Intelligence Artificielle',
            'description' => "Intégration de l'IA avec OpenAI",
            'items' => [
                ['name'=>'OpenAI',     'logo'=> asset('img/techno/ia/openai.png'),      'url'=> null],
            ],
        ],
    ];
@endphp

<section
        id="technos"
        class="py-20 px-4 bg-gray-900 text-white"
        x-data='{
    active: "{{ $filters[0]['id'] }}",
    tech: @json($technologies)
  }'
>
    <div class="container mx-auto lg:px-0">
        <!-- Titre -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold">
                Nos <span class="text-[#ff79c6]">technologies</span> clés
            </h2>
            <p class="mt-2 text-lg text-gray-400">
                Des solutions techniques adaptées à chaque enjeu, de la startup au grand compte.
            </p>
        </div>

        <!-- Filtres -->
        <nav aria-label="Filtrer par domaine" class="flex flex-wrap justify-center gap-3 mb-10">
            @foreach($filters as $filter)
                <button
                        @click="active = '{{ $filter['id'] }}'"
                        :class="active === '{{ $filter['id'] }}'
            ? 'bg-[#ff79c6] text-[#1e1f29]'
            : 'bg-gray-700 text-gray-300 hover:bg-[#ff79c6]/20'"
                        class="px-4 py-2 rounded-full font-medium transition"
                >
                    {{ $filter['label'] }}
                </button>
            @endforeach
        </nav>

        <!-- Contenu -->
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Description -->
            <div class="space-y-4">
                <h3 class="text-2xl font-semibold" x-text="tech[active].label"></h3>
                <p class="text-gray-400" x-text="tech[active].description"></p>
            </div>

            <!-- Logos -->
            <div class="lg:col-span-2 grid grid-cols-2 sm:grid-cols-3 gap-6">
                <template x-for="item in tech[active].items" :key="item.name">
                    <a
                            :href="item.url ?? '#'"
                            :title="item.name"
                            class="group flex flex-col items-center bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition"
                    >
                        <img
                                :src="item.logo"
                                :alt="item.name"
                                class="h-12 mb-3 object-contain transition-transform group-hover:scale-105"
                        />
                    </a>
                </template>
            </div>
        </div>
    </div>
</section>

<script src="//unpkg.com/alpinejs" defer></script>

