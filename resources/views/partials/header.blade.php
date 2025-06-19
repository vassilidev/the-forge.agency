<header
        x-data="{ scrolled: false, open: false }"
        x-init="window.addEventListener('scroll', () => scrolled = window.pageYOffset > 20)"
        :class="scrolled
    ? 'bg-gray-900 bg-opacity-90 backdrop-blur-lg shadow-md py-3'
    : 'bg-gray-900 bg-opacity-50 backdrop-blur-sm py-12'"
        class="sticky top-0 z-[90] w-full transition-all duration-300"
>
    <div class="container mx-auto px-4 flex items-center justify-between transition-all duration-300">
        <!-- Logo -->
        <a href="/"
           class="flex-shrink-0 transition-all duration-300"
           :class="scrolled
     ? 'h-10'
     : 'md:h-24 h-12'"
        >
            <img src="{{ asset('logo.svg') }}" alt="TFA Logo" class="h-full w-auto" />
        </a>


        <!-- Desktop Nav + CTA -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="#services"     class="text-white hover:text-[#ff79c6] transition-colors">Services</a>
            <a href="#why-tfa"      class="text-white hover:text-[#ff79c6] transition-colors">Pourquoi TFA ?</a>
            <a href="#technos" class="text-white hover:text-[#ff79c6] transition-colors">Technologies</a>
            <a href="#contact"
               class="bg-[#ff79c6] text-white font-extrabold rounded-lg transition-all duration-300"
               :class="scrolled ? 'px-4 py-2 text-sm' : 'px-6 py-3 text-base hover:scale-105'">
                Contact
            </a>
        </nav>

        <!-- Mobile Hamburger -->
        <button
                class="md:hidden text-white focus:outline-none"
                @click="open = !open"
                aria-label="Toggle menu"
        >
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <nav
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden bg-gray-900 bg-opacity-95 backdrop-blur-sm shadow-inner"
    >
        <div class="px-4 py-4 space-y-2">
            <a href="#services"     class="block text-white px-2 py-2 rounded hover:bg-gray-800">Services</a>
            <a href="#why-tfa"      class="block text-white px-2 py-2 rounded hover:bg-gray-800">Pourquoi TFA ?</a>
            <a href="#technos" class="block text-white px-2 py-2 rounded hover:bg-gray-800">Technologies</a>
            <a href="#contact"
               class="block bg-[#ff79c6] text-white font-extrabold text-center rounded-lg px-4 py-2 hover:bg-[#ff92d0] transition">
                Contact
            </a>
        </div>
    </nav>
</header>

<script src="//unpkg.com/alpinejs" defer></script>
