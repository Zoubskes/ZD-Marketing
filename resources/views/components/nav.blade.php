<!-- Navbar -->
<header class="fixed top-0 left-0 w-full z-50 bg-transparent backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-white text-2xl font-bold tracking-tight">
            ZD<span class="text-indigo-400">Marketing</span>
        </a>

        <!-- Navigation links -->
        <nav class="hidden md:flex space-x-8 text-white text-sm font-medium">
            <a href="/#services" class="hover:text-indigo-300 transition">Diensten</a>
            <a href="/over-ons" class="hover:text-indigo-300 transition">Over ons</a>
            <a href="/werkenbij" class="hover:text-indigo-300 transition">Werken bij</a>
            <a href="/contact" class="hover:text-indigo-300 transition">Contact</a>

        </nav>

        <!-- CTA button -->
        <a href="/contact"
           class="relative hidden md:inline-block bg-white text-black font-semibold px-4 py-2 rounded-full
          transition-all duration-300 ease-out
          hover:-translate-y-1 hover:scale-105 hover:bg-gradient-to-r hover:from-indigo-400 hover:to-purple-500 hover:text-white
          hover:shadow-lg hover:shadow-indigo-500/30
          before:absolute before:inset-0 before:rounded-full before:bg-white/10 before:opacity-0 before:transition-opacity before:duration-300 hover:before:opacity-100 overflow-hidden "
           style="animation-delay:0.3s;">
            <span class="relative z-10">Offerte aanvragen</span>
        </a>

        <!-- Mobile menu button -->
        <button id="menuBtn" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#0f172a]/90 backdrop-blur-lg text-white text-center space-y-4 py-6">
        <a href="services" class="block hover:text-indigo-300 transition">Diensten</a>
        <a href="over-ons" class="block hover:text-indigo-300 transition">Over ons</a>
        <a href="werkenbij" class="block hover:text-indigo-300 transition">Werken bij</a>
        <a href="contact" class="block hover:text-indigo-300 transition">Contact</a>
        <a href="contact" class="inline-block bg-white text-black px-4 py-2 rounded-full font-semibold hover:bg-gray-200 transition">
            Offerte aanvragen
        </a>
    </div>
</header>

<script>
    // Simpele toggle voor mobiel menu
    document.getElementById('menuBtn').addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>
