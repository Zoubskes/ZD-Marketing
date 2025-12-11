
<x-layout>
<x-nav/>

<section class="relative min-h-screen flex flex-col md:flex-row items-center justify-center text-white
bg-[radial-gradient(circle_at_25%_30%,_#4f46e5_0%,_#312e81_40%,_#0f172a_90%)] overflow-hidden">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- Hero content -->
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between max-w-7xl mx-auto px-6 py-24 w-full">

        <!-- Tekst -->
        <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0 opacity-0 animate-fadeUp" style="animation-delay: 0.2s;">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Digitale <strong>dominantie</strong> voor groeiende bedrijven
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8">
                Van idee tot impact: wij ontwerpen en bouwen websites die bezoekers veranderen in klanten.
            </p>
            <div class="flex justify-center md:justify-start gap-4">
                <a href="/contact"
                   class="relative bg-white text-black font-semibold px-6 py-3 rounded-full
          transition-all duration-300 ease-out
          hover:-translate-y-1 hover:scale-105 hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white
          hover:shadow-lg hover:shadow-indigo-500/30
          before:absolute before:inset-0 before:rounded-full before:bg-white/10 before:opacity-0 before:transition-opacity before:duration-300 hover:before:opacity-100 overflow-hidden">
                    <span class="relative z-10">Start jouw project</span>
                </a>

            </div>
        </div>

        <!-- Afbeelding -->
        <div class="md:w-1/2 flex justify-center relative opacity-0 animate-fadeUp" style="animation-delay: 0.5s;">
            <img
                src="/images/hero-illustration.png"
                alt="ZD Marketing webdesign hero afbeelding"
                class="w-3/4 md:w-full max-w-md drop-shadow-2xl select-none"
            >
        </div>
    </div>

    <!-- Wave Divider -->
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


<x-services/>
<x-testimonial/>
    <x-start>Neem contact op</x-start>
<x-footer/>

<script>
    // Scroll animatie voor Services + CTA
    const revealElements = document.querySelectorAll('.reveal-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                entry.target.style.animationDelay = `${index * 0.15}s`;
                entry.target.classList.add('animate-fadeUp');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        observer.observe(el);
    });
</script>

<script>
    // Automatisch jaartal
    document.getElementById('year').textContent = new Date().getFullYear();
</script>


</x-layout>
