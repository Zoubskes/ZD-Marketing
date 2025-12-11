<x-layout>

<x-nav/>

<!-- Hero -->
<section class="pt-40 pb-24 bg-[radial-gradient(circle_at_25%_30%,_#4f46e5_0%,_#312e81_40%,_#0f172a_90%)] text-center min-h-screen">
    <div class="max-w-3xl mx-auto px-6 animate-fadeUp">
        <h1 class="text-5xl font-bold mb-4 text-white">Werken bij <span class="text-indigo-400">ZD Marketing</span></h1>
        <p class="text-gray-300 text-lg">
            Bouw mee aan merken die groeien. Groei mee met ons team.
        </p>
    </div>


<!-- Over het team -->
<div class="py-24">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 px-6 items-center">
        <div class="animate-fadeUp">
            <h2 class="text-3xl font-bold mb-6 text-white">Onze cultuur</h2>
            <p class="text-gray-300 mb-6 leading-relaxed">
                Bij ZD Marketing draait alles om creativiteit, samenwerking en resultaat.
                We werken met ambitie, maar zonder ego’s.
                Iedereen krijgt ruimte om te groeien, te leren en impact te maken.
            </p>
            <p class="text-gray-300">
                Of je nu developer, designer of marketeer bent —
                jouw ideeën krijgen hier een podium.
                Want samen bouwen we merken die het verschil maken.
            </p>
            <a href="/contact"
               class="mt-4 relative inline-block bg-white text-black font-semibold text-lg px-6 py-4 rounded-full
       transition-all duration-300 ease-out
       hover:-translate-y-1 hover:scale-105
       hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white
       hover:shadow-lg hover:shadow-indigo-500/30">
                Stuur open sollicitatie
            </a>
        </div>

        <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
             alt="Team samenwerking"
             class="rounded-2xl shadow-xl animate-fadeUp bg-white/5 border border-indigo-800/40 hover:border-indigo-400/60 transition backdrop-blur-md">
    </div>
</div>

    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
        <svg class="relative block w-[calc(140%+1.3px)] h-40 md:h-56" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 200" preserveAspectRatio="none">
            <path
                d="M0,100 C300,200 900,0 1200,100 L1200,200 L0,200 Z"
                fill="#111827"
                opacity="1">
            </path>
        </svg>
    </div>
</section>

<!-- Vacatures -->
<section id="vacatures" class="py-24 bg-[#0f172a]">
    <div class="max-w-6xl mx-auto px-6 text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 text-white">Openstaande vacatures</h2>
        <p class="text-gray-300 max-w-2xl mx-auto">
            Klaar om de volgende stap te zetten in jouw carrière?
            Bekijk onze open posities hieronder.
        </p>
    </div>

    <div class="max-w-5xl mx-auto grid gap-8 md:grid-cols-2 px-6">
        <!-- Vacature 1 -->
        <div class="animate-fadeUp p-8 rounded-2xl bg-white/5 border border-indigo-800/40 hover:border-indigo-400/60 transition backdrop-blur-md">
            <h3 class="text-2xl font-semibold mb-2 text-white">Frontend Developer</h3>
            <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                Bouw websites die snelheid, design en gebruiksgemak combineren.
                Kennis van Tailwind, Vue of React is een pré.
            </p>
            <a href="#solliciteer" class="inline-block bg-white text-black font-semibold px-5 py-2 rounded-full hover:scale-105 hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white transition">
                Bekijk functie
            </a>
        </div>

        <!-- Vacature 2 -->
        <div class="animate-fadeUp p-8 rounded-2xl bg-white/5 border border-indigo-800/40 hover:border-indigo-400/60 transition backdrop-blur-md">
            <h3 class="text-2xl font-semibold mb-2 text-white">Online Marketeer</h3>
            <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                Analyseer, optimaliseer en laat campagnes knallen.
                SEO, SEA of social? Jij weet hoe merken groeien.
            </p>
            <a href="#solliciteer" class="inline-block bg-white text-black font-semibold px-5 py-2 rounded-full hover:scale-105 hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white transition">
                Bekijk functie
            </a>
        </div>
    </div>


<!-- Solliciteer CTA -->
<div id="solliciteer" class="relative py-32 text-center">
    <div class="max-w-3xl mx-auto px-6 animate-fadeUp">
        <h2 class="text-4xl font-bold mb-6 text-white">Solliciteer spontaan</h2>
        <p class="text-gray-300 mb-10">
            Geen passende vacature gezien?
            We leren graag talent kennen dat met ons wil groeien.
        </p>

        <a href="/contact"
           class="relative inline-block bg-white text-black font-semibold text-lg px-8 py-4 rounded-full
       transition-all duration-300 ease-out
       hover:-translate-y-1 hover:scale-105
       hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white
       hover:shadow-lg hover:shadow-indigo-500/30">
            Stuur open sollicitatie
        </a>
    </div>
</div>
</section>

<x-footer/>

<script>
    // Fade-up animatie bij scroll
    const revealElements = document.querySelectorAll('.animate-fadeUp');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });

    // Automatisch jaartal
    document.getElementById('year').textContent = new Date().getFullYear();
</script>

</x-layout>
