<footer class="relative bg-gray-900 text-[#f8f8f2] pt-16 pb-8 px-4 overflow-hidden">
    <div class="relative z-10 container mx-auto space-y-12">
        <!-- Logo + Réseaux -->
        <div class="flex flex-col md:flex-row items-center justify-between">
            <img src="{{ asset('logo.svg') }}" alt="TFA Logo" class="h-10"/>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" aria-label="LinkedIn"
                   class="text-[#6272a4] hover:text-[#ff79c6] transition scale-100 hover:scale-110">
                    <svg class="h-5 w-5">
                        <use xlink:href="#icon-linkedin"/>
                    </svg>
                </a>
                <a href="#" aria-label="Twitter"
                   class="text-[#6272a4] hover:text-[#ff79c6] transition scale-100 hover:scale-110">
                    <svg class="h-5 w-5">
                        <use xlink:href="#icon-twitter"/>
                    </svg>
                </a>
                <a href="#" aria-label="GitHub"
                   class="text-[#6272a4] hover:text-[#ff79c6] transition scale-100 hover:scale-110">
                    <svg class="h-5 w-5">
                        <use xlink:href="#icon-github"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Liens principaux -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Menu -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Liens</h4>
                <ul class="space-y-2 text-[#6272a4]">
                    <li><a href="#services" class="hover:text-[#ff79c6] transition">Services</a></li>
                    <li><a href="#why-tfa" class="hover:text-[#ff79c6] transition">Pourquoi TFA ?</a></li>
                    <li><a href="#technos" class="hover:text-[#ff79c6] transition">Technologies</a></li>
                    <li><a href="#contact" class="hover:text-[#ff79c6] transition">Contact</a></li>
                </ul>
            </div>
            <!-- Expertises -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Nos expertises</h4>
                <ul class="space-y-2 text-[#6272a4] text-sm">
                    <li><a href="#" class="hover:text-[#50fa7b] transition">Agence PHP</a></li>
                    <li><a href="#" class="hover:text-[#50fa7b] transition">Laravel</a></li>
                    <li><a href="#" class="hover:text-[#50fa7b] transition">Symfony</a></li>
                    <li><a href="#" class="hover:text-[#50fa7b] transition">LangChain – IA</a></li>
                    <li><a href="#" class="hover:text-[#50fa7b] transition">Vue.js</a></li>
                    <li><a href="#" class="hover:text-[#50fa7b] transition">Node.js</a></li>
                </ul>
            </div>
            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Nos services</h4>
                <ul class="space-y-2 text-[#6272a4] text-sm">
                    <li><a href="#" class="hover:text-[#8be9fd] transition">Conception</a></li>
                    <li><a href="#" class="hover:text-[#8be9fd] transition">UX & Automatisation</a></li>
                    <li><a href="#" class="hover:text-[#8be9fd] transition">Développement</a></li>
                    <li><a href="#" class="hover:text-[#8be9fd] transition">Maintenance</a></li>
                    <li><a href="#" class="hover:text-[#8be9fd] transition">Audit technique</a></li>
                </ul>
            </div>
            <!-- Projets -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Nos projets</h4>
                <ul class="space-y-2 text-[#6272a4] text-sm">
                    <li><a href="#" class="hover:text-[#bd93f9] transition">Applications métier</a></li>
                    <li><a href="#" class="hover:text-[#bd93f9] transition">Plateformes web</a></li>
                    <li><a href="#" class="hover:text-[#bd93f9] transition">Mobiles & PWA</a></li>
                    <li><a href="#" class="hover:text-[#bd93f9] transition">E-commerce</a></li>
                    <li><a href="#" class="hover:text-[#bd93f9] transition">Projet IoT</a></li>
                </ul>
            </div>
        </div>

        <!-- Agences -->
        <div class="pt-8 border-t border-[#44475a] grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Paris -->
            <div class="border-l border-[#44475a] pl-6">
                <h4 class="text-xl font-semibold mb-2">The Forge Agency - Paris</h4>
                <p class="italic text-sm">1 rue de Stockholm, 75008 Paris</p>
                <p class="font-bold mt-4">Contact</p>
                <p class="mt-1">
                    <a href="tel:0760487334" class="hover:text-[#ff79c6] transition">07 60 48 73 34</a><br>
                    <a href="mailto:paris@the-forge.agency" class="hover:text-[#ff79c6] transition">paris@the-forge.agency</a>
                </p>
            </div>
            <!-- Suresnes -->
            <div class="border-l border-[#44475a] pl-6">
                <h4 class="text-xl font-semibold mb-2">The Forge Agency - Suresnes</h4>
                <p class="italic text-sm">8 rue du Tertre, 92150 Suresnes</p>
                <p class="font-bold mt-4">Contact</p>
                <p class="mt-1">
                    <a href="tel:0760487334" class="hover:text-[#ff79c6] transition">07 60 48 73 34</a><br>
                    <a href="mailto:suresnes@the-forge.agency"
                       class="hover:text-[#ff79c6] transition">suresnes@the-forge.agency</a>
                </p>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center text-[#6272a4] text-sm">
        <p>
            &copy; {{ date('Y') }} TFA – The Forge Agency. Tous droits réservés.
            <a href="{{ route('cgu') }}" class="mx-2 hover:text-[#f8f8f2] transition">Mentions légales</a>
        </p>
        <p class="mt-2">Made by us with ❤️ !</p>
    </div>
</footer>
