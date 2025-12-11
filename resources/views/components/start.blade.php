<!-- CTA Section -->
<section id="cta" class="relative py-32 bg-[radial-gradient(circle_at_20%_30%,_#4f46e5_0%,_#312e81_40%,_#0f172a_90%)] text-white overflow-hidden">
    <div class="max-w-5xl mx-auto px-6">
        <div
            class="reveal-on-scroll relative p-16 rounded-3xl bg-[url('https://www.transparenttextures.com/patterns/batthern.png')] bg-repeat bg-white/5 border border-indigo-800/40 text-center backdrop-blur-md shadow-xl hover:border-indigo-400 transition">
            <!-- START label -->
            <h2 class="reveal-on-scroll text-7xl md:text-8xl font-extrabold tracking-tight mb-6 text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                START
            </h2>

            <!-- Tekst -->
            <p class="reveal-on-scroll text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
                Een team nodig? Laten we bespreken hoe we het samen kunnen realiseren.
            </p>

            <!-- CTA knop -->
            <a href="/contact"
               class="reveal-on-scroll relative inline-block bg-white text-black font-semibold text-lg px-8 py-4 rounded-full
          transition-all duration-300 ease-out
          hover:-translate-y-1 hover:scale-105
          hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white
          hover:shadow-lg hover:shadow-indigo-500/30
          before:absolute before:inset-0 before:rounded-full before:bg-white/10 before:opacity-0 before:transition-opacity before:duration-300 hover:before:opacity-100 overflow-hidden">
                <span class="relative z-10">{{$slot}}</span>
            </a>
        </div>
    </div>
</section>
