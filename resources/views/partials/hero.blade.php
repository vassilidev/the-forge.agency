{{-- resources/views/hero-editor.blade.php --}}

<section class="py-20 px-4 bg-gray-900 text-white">
    <div class="container mx-auto flex flex-col lg:flex-row items-start gap-12">

        {{-- Texte Hero --}}
        <div class="w-full lg:w-1/2 space-y-6 text-center lg:text-left">
            <h1 class="text-4xl sm:text-5xl lg:text-5xl font-extrabold leading-tight">
                Expert en création de <span class="text-[#ff79c6]">plateformes métier</span> et solutions web sur mesure
            </h1>
            <p class="text-lg text-slate-50 max-w-lg mx-auto lg:mx-0">
                Gagnez en productivité avec des applications taillées pour vos besoins.
            </p>
            <a href="#contact"
               class="inline-block bg-[#ff79c6] text-[#1e1f29] font-semibold px-8 py-3 rounded-lg hover:scale-105 transition">
                Consultation gratuite
            </a>
        </div>

        {{-- Snippet de code à droite (LG and up) --}}
        <div class="w-full lg:w-1/2 hidden lg:flex justify-end items-start relative code-container z-50">
            <div id="code-window" class="code-window bg-transparent">

                {{-- Barre de fenêtre --}}
                <div id="window-header"
                     class="flex items-center gap-3 bg-[#282a36] px-4 py-2 rounded-t-lg shadow-inner cursor-grab">
                    <button type="button" id="close-btn" title="Fermer"
                            class="w-3 h-3 rounded-full bg-[#ff605c] hover:bg-red-600"></button>
                    <button type="button" id="min-btn" title="Réduire"
                            class="w-3 h-3 rounded-full bg-[#ffbd44] hover:bg-yellow-600"></button>
                    <button type="button" id="max-btn" title="Plein écran"
                            class="w-3 h-3 rounded-full bg-[#00ca56] hover:bg-green-600"></button>
                    <span class="ml-4 text-sm text-[#6272a4]">routes/api.php</span>
                </div>

                {{-- Éditeur ACE --}}
                <div id="editor" class="bg-[#282a36] rounded-b-lg overflow-hidden"></div>

            </div>
        </div>

    </div>
</section>

@push('styles')
    <style>
        /* Boutons Mac-like */
        #window-header button {
            cursor: pointer;
            transition: background-color .2s;
        }

        /* Code window */
        .code-window {
            position: relative;
            width: 32rem;
            height: 22rem;
            resize: both;
            overflow: auto;
            margin-top: 1rem;
        }

        #editor {
            width: 100%;
            height: calc(100% - 2.5rem);
        }

        /* Hide native scrollbars in ACE */
        #editor .ace_scrollbar {
            display: none !important;
        }

        #editor {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        #editor::-webkit-scrollbar {
            display: none;
        }

        /* Minimized */
        .code-window.collapsed {
            height: auto;
            resize: none;
        }

        .code-window.collapsed #editor {
            display: none;
        }
    </style>
@endpush



@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.14/ace.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const win = document.getElementById('code-window');
            const header = document.getElementById('window-header');
            const closeBtn = document.getElementById('close-btn');
            const minBtn = document.getElementById('min-btn');
            const maxBtn = document.getElementById('max-btn');

            // --- Initialisation ACE ---
            const editor = ace.edit('editor');
            editor.setTheme('ace/theme/dracula');
            editor.session.setMode('ace/mode/php');
            editor.setOptions({
                fontFamily: 'Fira Code, monospace',
                fontSize: 14,
                wrap: true,
                tabSize: 2,
                useSoftTabs: true,
            });
            // Exemple de code à afficher
            const codeSample = `<\?php
require 'vendor/autoload.php';

use OpenAI\\OpenAI;

$client = OpenAI::client(getenv('OPENAI_API_KEY'));
$response = $client->chat()->create([
    'model'    => 'gpt-3.5-turbo',
    'messages' => [['role'=>'user','content'=>'Bonjour, comment ça va ?']]
]);

echo $response->choices[0]->message->content;`;
            editor.setValue(codeSample, -1);

            // Réagencer l’éditeur après chaque redimensionnement
            new ResizeObserver(() => editor.resize()).observe(win);

            // --- Drag & Drop fonctionnel ---
            let dragging = false;
            let startX = 0, startY = 0;
            let origLeft = 0, origTop = 0;
            let parentRect;

            header.addEventListener('mousedown', e => {
                if (e.target.tagName === 'BUTTON') return;
                dragging = true;
                parentRect = win.offsetParent.getBoundingClientRect();
                const rect = win.getBoundingClientRect();
                startX = e.clientX;
                startY = e.clientY;
                origLeft = rect.left - parentRect.left;
                origTop = rect.top - parentRect.top;
                win.style.position = 'absolute';
                document.body.style.userSelect = 'none';
            });

            document.addEventListener('mousemove', e => {
                if (!dragging) return;
                const dx = e.clientX - startX;
                const dy = e.clientY - startY;
                win.style.left = `${origLeft + dx}px`;
                win.style.top = `${origTop + dy}px`;
            });

            document.addEventListener('mouseup', () => {
                if (!dragging) return;
                dragging = false;
                document.body.style.userSelect = '';
            });

            // --- Gestion des boutons ---
            closeBtn.addEventListener('click', () => win.remove());
            minBtn.addEventListener('click', () => win.classList.toggle('collapsed'));

            // Désactiver le bouton plein écran
            maxBtn.disabled = true;
            maxBtn.title = 'Plein écran (désactivé)';
            maxBtn.style.opacity = '0.5';
            maxBtn.style.cursor = 'not-allowed';
            // plus de listener pour maxBtn
        });
    </script>
@endpush
