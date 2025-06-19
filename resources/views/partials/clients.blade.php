@php
    $logos = [
      asset('img/compagnies/orange.png'),
      asset('img/compagnies/anj.png'),
      asset('img/compagnies/cfdt.png'),
      asset('img/compagnies/atos.png'),
      asset('img/compagnies/bpce.png'),
      asset('img/compagnies/natixis.png'),
      asset('img/compagnies/centreimex.png'),
      asset('img/compagnies/expana.png'),
      asset('img/compagnies/tribunedelyon.png'),
      asset('img/compagnies/sporteasy.png'),
      asset('img/compagnies/superformaliste.png'),
      asset('img/compagnies/polesocietes.png'),
      asset('img/compagnies/dispr.png'),
      asset('img/compagnies/taxcut.png'),
      asset('img/compagnies/monannoncelegale.png'),
      asset('img/compagnies/geduc.png'),
      asset('img/compagnies/optimisme.png'),
    ];
@endphp

<section class="relative py-16 px-4 bg-gray-900 overflow-hidden hidden md:block">
    <div class="container mx-auto">
        <div class="logo-marquee overflow-hidden">
            <div class="logo-track flex">
                @foreach(array_merge($logos, $logos) as $logo)
                    <div class="logo-item flex-shrink-0 w-44 h-24 flex items-center justify-center p-4 hover:p-9">
                        <img
                                src="{{ $logo }}"
                                alt="Logo client"
                                class="max-h-16 object-contain"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('styles')
    <style>
        /* Animation marquee continue sans pause */
        @keyframes marquee {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        .logo-track {
            animation: marquee 30s linear infinite;
        }

        /* Style par défaut : filtre blanc atténué */
        .logo-item img {
            filter: brightness(0) invert(1);
            opacity: 0.85;
            transition: transform 0.3s ease, filter 0.3s ease, opacity 0.3s ease;
        }

        .logo-item:hover {
            background-color: #ffffff;
            border-radius: 0.5rem;
        }
        .logo-item:hover img {
            filter: none;
            opacity: 1;
            transform: scale(1.3);
        }
    </style>
@endpush
