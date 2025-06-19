<!-- 1. Section Contact (formulaire élargi) -->
<section id="contact" class="bg-gray-900 py-20 px-4">
    <div class="container mx-auto max-w-3xl">
        <h2 class="text-4xl font-bold text-center text-white mb-12">Rencontrons-nous !</h2>

        @session('success')
        <div class="text-pink p-4 rounded-lg mb-6">
            <p class="text-lg font-semibold">Merci pour votre message !</p>
            <p>Nous vous répondrons dans les plus brefs délais.</p>
        </div>
        @endsession

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" name="first_name" placeholder="Prénom*" required
                       class="w-full bg-transparent placeholder-gray-500 text-white rounded-lg px-5 py-4 border-b-2 border-[#44475a] focus:border-[#ff79c6] transition"/>
                <input type="text" name="last_name" placeholder="Nom*" required
                       class="w-full bg-transparent placeholder-gray-500 text-white rounded-lg px-5 py-4 border-b-2 border-[#44475a] focus:border-[#ff79c6] transition"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="email" name="email" placeholder="Email*" required
                       class="w-full bg-transparent placeholder-gray-500 text-white rounded-lg px-5 py-4 border-b-2 border-[#44475a] focus:border-[#ff79c6] transition"/>
                <input type="tel" name="phone" placeholder="Téléphone*" required
                       class="w-full bg-transparent placeholder-gray-500 text-white rounded-lg px-5 py-4 border-b-2 border-[#44475a] focus:border-[#ff79c6] transition"/>
            </div>

            <input type="text" name="company" placeholder="Société"
                   class="w-full bg-transparent placeholder-gray-500 text-white rounded-lg px-5 py-4 border-b-2 border-[#44475a] focus:border-[#ff79c6] transition"/>

            <textarea name="message" rows="5" placeholder="Décrivez votre projet..." required
                      class="w-full bg-transparent placeholder-gray-500 text-white rounded-lg px-5 py-4 border-b-2 border-[#44475a] focus:border-[#ff79c6] transition"></textarea>

            <button type="submit"
                    class="w-full bg-[#ff79c6] text-[#282a36] font-semibold py-4 rounded-full hover:bg-[#ff79c6]/90 transition">
                Envoyer ma demande
            </button>
        </form>
    </div>
</section>

<section id="newsletter" class="relative bg-gradient-to-r from-[#ff79c6] to-[#bd93f9] py-16 px-4 overflow-hidden">
    <!-- Décor abstrait -->
    <svg class="absolute top-0 left-0 w-48 h-48 opacity-20" viewBox="0 0 100 100" fill="none">
        <circle cx="50" cy="50" r="50" fill="white"/>
    </svg>
    <svg class="absolute bottom-0 right-0 w-64 h-64 opacity-20" viewBox="0 0 100 100" fill="none">
        <rect width="100" height="100" fill="white"/>
    </svg>

    <div class="relative container mx-auto max-w-2xl text-center">
        <h3 class="text-3xl font-bold text-white mb-4">Rejoignez notre newsletter</h3>
        <p class="text-[#f8f8f2] mb-8">Un mail par mois pour ne rien manquer de nos actualités et astuces.</p>

        @session('newsletter_success')
        <div class="text-green-500 p-4 rounded-lg mb-6">
            <p class="text-lg font-semibold">Merci pour votre inscription !</p>
            <p>Vous recevrez bientôt nos actualités.</p>
        </div>
        @endsession

        <form action="{{ route('newsletter.submit') }}" method="POST"
              class="flex flex-col sm:flex-row gap-4 justify-center">
            @csrf
            <input type="email" name="email" placeholder="Votre email*" required
                   class="w-full sm:flex-1 bg-white bg-opacity-20 placeholder-white placeholder-opacity-70 text-white rounded-full px-6 py-3 focus:bg-opacity-40 focus:outline-none transition"/>
            <button type="submit"
                    class="bg-white text-[#ff79c6] font-semibold rounded-full px-8 py-3 hover:bg-white/90 transition">
                S’abonner
            </button>
        </form>
    </div>
</section>
