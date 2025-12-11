<x-layout>

<x-nav/>

<!-- Hero -->
<section class="pt-40 pb-20 bg-[radial-gradient(circle_at_20%_30%,_#4f46e5_0%,_#312e81_40%,_#0f172a_90%)] text-center">
    <div class="max-w-3xl mx-auto px-6 animate-fadeUp">
        <h1 class="text-5xl font-bold mb-4 text-white">CONTACT US</h1>
        <p class="text-gray-300 text-lg">Heb je een idee, project of vraag? Laten we samen de eerste stap zetten.</p>
    </div>


<!-- Contact Form Section -->
<div id="contact" class="relative py-24 ">
    <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- Contact Info -->
        <div class="animate-fadeUp">
            <h2 class="text-3xl font-bold mb-6 text-white">Laten we samenwerken</h2>
            <p class="text-gray-300 mb-8">
                Vul het formulier in of stuur ons direct een bericht.
                We reageren meestal binnen 1 werkdag.
            </p>

            <ul class="space-y-4 text-gray-400 text-sm">
                <li>📍 Berlicum, Nederland</li>
                <li>📞 +31 6 37552815</li>
                <li>✉️ info@zdmarketing.nl</li>
            </ul>
        </div>

        <!-- Contact Form -->
        <form action="https://formspree.io/f/mldqonkw" method="POST" class="space-y-6 animate-fadeUp text-white">
            <div>
                <input type="text" id="name" name="name" placeholder="Naam" required
                       class="w-full px-4 py-3 rounded-xl bg-white/5 border border-indigo-800/50 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 outline-none transition">
            </div>

            <div>
                <input type="email" id="email" name="email" placeholder="Email" required
                       class="w-full px-4 py-3 rounded-xl bg-white/5 border border-indigo-800/50 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 outline-none transition">
            </div>

            <div>
                <input type="tel" id="phone" name="phone" placeholder="Telefoonnummer" required
                       class="w-full px-4 py-3 rounded-xl bg-white/5 border border-indigo-800/50 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 outline-none transition">
            </div>

            <div>
                <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" placeholder="Bedrijfsnaam" required
                       class="w-full px-4 py-3 rounded-xl bg-white/5 border border-indigo-800/50 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 outline-none transition">
            </div>

            <div>
                <textarea id="message" name="message" rows="5" placeholder="Je bericht" required
                          class="w-full px-4 py-3 rounded-xl bg-white/5 border border-indigo-800/50 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 outline-none transition"></textarea>
            </div>

            <button type="submit"
                    class="relative inline-block bg-white text-black font-semibold text-lg px-8 py-4 rounded-full
                     transition-all duration-300 ease-out
                     hover:-translate-y-1 hover:scale-105 hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white
                     hover:shadow-lg hover:shadow-indigo-500/30">
                Verstuur bericht
            </button>
        </form>
    </div>
</div>


</section>

    <section class="py-24  text-center bg-[#111827]">
        <h3 class="text-3xl font-semibold mb-4 animate-fadeUp text-white">Bezoek ons kantoor</h3>
        <p class="text-gray-300 mb-10 animate-fadeUp">We verwelkomen je graag voor een kop koffie in Berlicum.</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.746729613859!2d4.895168415799046!3d52.37021597978657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609e672b8b0b9%3A0x4a0b3d4d5b1ff0!2sBerlicum!5e0!3m2!1sen!2snl!4v1616161616161!5m2!1sen!2snl"
            class="mx-auto w-[70%] h-[350px] rounded-2xl border-0 shadow-lg"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>

<!-- Map or extra CTA -->


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

    // Jaar automatisch updaten
    document.getElementById('year').textContent = new Date().getFullYear();
</script>

</x-layout>
