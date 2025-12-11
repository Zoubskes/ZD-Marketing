<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Over ons | ZD Marketing</title>

    <style>
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeUp {
            animation: fadeUp 1.2s ease-out forwards;
        }
    </style>
</head>

<body class="bg-[#0f172a] text-white overflow-x-hidden">

<x-nav/>

<!-- Hero -->
<section class="pt-40 pb-24 bg-[radial-gradient(circle_at_25%_30%,_#4f46e5_0%,_#312e81_40%,_#0f172a_90%)] min-h-screen text-center">
    <div class="max-w-3xl mx-auto px-6 animate-fadeUp">
        <h1 class="text-5xl font-bold mb-4">Over <span class="text-indigo-400">ZD Marketing</span></h1>
        <p class="text-gray-300 text-lg">
            Wij bouwen merken die groeien — met strategie, design en technologie.
        </p>
    </div>


<!-- Missie & Visie -->
<div class="py-24 ">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 px-6 items-center ">
        <div class="animate-fadeUp">
            <h2 class="text-3xl font-bold mb-6">Onze missie</h2>
            <p class="text-gray-300 leading-relaxed">
                Onze missie is simpel: bedrijven digitaal laten groeien met strategieën die werken.
                Geen loze beloftes, maar tastbare resultaten.
                We combineren data, design en performance om merken te bouwen die relevant blijven in een snel veranderende wereld.
            </p>
            <h2 class="mt-10 text-3xl font-bold mb-6">Onze visie</h2>
            <p class="text-gray-300 leading-relaxed">
                Wij geloven dat elk merk — groot of klein — de kans verdient om online te excelleren.
                Daarom werken we aan duurzame marketingstrategieën en websites die niet alleen mooi zijn, maar vooral presteren.
            </p>
        </div>

        <img src="https://plus.unsplash.com/premium_vector-1752854478900-98d24251f370?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTg5fHxwdXJwbGUlMjBjb2RlfGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=500"
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

<!-- Team -->
<section class="py-24 bg-[#0f172a] text-center border-b border-indigo-900/40">
    <div class="max-w-5xl mx-auto px-6 mb-16 animate-fadeUp">
        <h2 class="text-4xl font-bold mb-4">Maak kennis met ons team</h2>
        <p class="text-gray-300 max-w-2xl mx-auto">
            Een team van creatieve denkers, strategische doeners en technische experts.
            Samen brengen we ideeën tot leven.
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid gap-10 sm:grid-cols-2 md:grid-cols-3 px-6">
        <!-- Teamlid 1 -->
        <div class="animate-fadeUp bg-white/5 p-8 rounded-2xl border border-indigo-800/40 hover:border-indigo-400/60 transition backdrop-blur-md">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Team member" class="mx-auto w-24 h-24 rounded-full mb-4 border-2 border-indigo-400">
            <h3 class="text-xl font-semibold">Laura Jansen</h3>
            <p class="text-gray-400 text-sm">Creative Director</p>
        </div>

        <!-- Teamlid 2 -->
        <div class="animate-fadeUp bg-white/5 p-8 rounded-2xl border border-indigo-800/40 hover:border-indigo-400/60 transition backdrop-blur-md">
            <img src="https://randomuser.me/api/portraits/men/31.jpg" alt="Team member" class="mx-auto w-24 h-24 rounded-full mb-4 border-2 border-indigo-400">
            <h3 class="text-xl font-semibold">Sven Bakker</h3>
            <p class="text-gray-400 text-sm">Lead Developer</p>
        </div>

        <!-- Teamlid 3 -->
        <div class="animate-fadeUp bg-white/5 p-8 rounded-2xl border border-indigo-800/40 hover:border-indigo-400/60 transition backdrop-blur-md">
            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Team member" class="mx-auto w-24 h-24 rounded-full mb-4 border-2 border-indigo-400">
            <h3 class="text-xl font-semibold">Noa de Vries</h3>
            <p class="text-gray-400 text-sm">Digital Marketeer</p>
        </div>
    </div>
</section>

<!-- Kernwaarden -->
<section class="py-28 bg-[#0f172a]">
    <div class="max-w-6xl mx-auto px-6 text-center mb-16 animate-fadeUp">
        <h2 class="text-4xl font-bold mb-4">Onze kernwaarden</h2>
        <p class="text-gray-300 max-w-2xl mx-auto">
            De basis van alles wat we doen — wie we zijn, hoe we werken en waar we voor staan.
        </p>
    </div>

    <div class="max-w-5xl mx-auto grid gap-8 sm:grid-cols-2 lg:grid-cols-3 px-6">
        <div class="animate-fadeUp p-8 rounded-2xl bg-white/5 border border-indigo-800/40">
            <h3 class="text-xl font-semibold mb-2 text-indigo-300">1. Transparantie</h3>
            <p class="text-gray-300 text-sm">We geloven in open communicatie, eerlijke resultaten en heldere samenwerking.</p>
        </div>

        <div class="animate-fadeUp p-8 rounded-2xl bg-white/5 border border-indigo-800/40">
            <h3 class="text-xl font-semibold mb-2 text-indigo-300">2. Innovatie</h3>
            <p class="text-gray-300 text-sm">We omarmen verandering en blijven continu leren om de beste oplossingen te bieden.</p>
        </div>

        <div class="animate-fadeUp p-8 rounded-2xl bg-white/5 border border-indigo-800/40">
            <h3 class="text-xl font-semibold mb-2 text-indigo-300">3. Groei</h3>
            <p class="text-gray-300 text-sm">Niet alleen voor onze klanten, maar ook voor ons team — persoonlijk en professioneel.</p>
        </div>
    </div>
</section>

<x-start>Neem contact op</x-start>

<x-footer/>

<script>
    // Scroll animatie
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

</body>
</html>
