<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sanjid (MD Sanged Hasan) - Full-Stack Developer & Flutter Specialist Portfolio. Specialized in Flutter, Laravel, FastAPI, and responsive UI.">
    <title>@yield('title', 'Sanjid | Full-Stack Developer & Flutter Specialist')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- CDN Styles for immediate preview & standalone compatibility -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            500: '#3b82f6',
                            600: '#2563eb',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.9/dist/lenis.css">

    <!-- Vite Assets -->
    @if(file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #030712; color: #f3f4f6; }
        h1, h2, h3, h4, .font-heading { font-family: 'Outfit', sans-serif; }
        .glass-nav { background: rgba(3, 7, 18, 0.8); backdrop-filter: blur(16px); border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
        .glass-card { background: rgba(17, 24, 39, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); }
        .gradient-text { background: linear-gradient(135deg, #38bdf8 0%, #818cf8 50%, #c084fc 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="bg-gray-950 text-gray-100 antialiased selection:bg-cyan-500 selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center font-bold text-white text-xl shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform">
                        S
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-tight text-white font-heading block">Sanjid</span>
                        <span class="text-xs text-cyan-400 font-medium block">Full-Stack Developer</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
                    <a href="#about" class="text-gray-300 hover:text-cyan-400 transition-colors">About</a>
                    <a href="#skills" class="text-gray-300 hover:text-cyan-400 transition-colors">Skills</a>
                    <a href="#projects" class="text-gray-300 hover:text-cyan-400 transition-colors">Projects</a>
                    <a href="#experience" class="text-gray-300 hover:text-cyan-400 transition-colors">Experience</a>
                    <a href="#contact" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold hover:shadow-lg hover:shadow-cyan-500/25 transition-all duration-300 hover:-translate-y-0.5">
                        Get in Touch
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-400 hover:text-white p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-gray-900/95 backdrop-blur-xl border-b border-gray-800 px-4 pt-4 pb-6 space-y-3">
            <a href="#about" @click="mobileMenuOpen = false" class="block text-gray-300 hover:text-cyan-400 font-medium py-2">About</a>
            <a href="#skills" @click="mobileMenuOpen = false" class="block text-gray-300 hover:text-cyan-400 font-medium py-2">Skills</a>
            <a href="#projects" @click="mobileMenuOpen = false" class="block text-gray-300 hover:text-cyan-400 font-medium py-2">Projects</a>
            <a href="#experience" @click="mobileMenuOpen = false" class="block text-gray-300 hover:text-cyan-400 font-medium py-2">Experience</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block w-full text-center py-3 rounded-xl bg-cyan-500 text-white font-semibold">Get in Touch</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-800/80 bg-gray-950 py-12 text-sm text-gray-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <p>© {{ date('Y') }} Sanjid (MD Sanged Hasan). All rights reserved.</p>
            </div>
            <div class="flex items-center space-x-6">
                <a href="https://github.com/Sanjid121" target="_blank" class="hover:text-cyan-400 transition-colors">GitHub</a>
                <a href="https://play.google.com/store/apps/details?id=com.fulbaria.sheba" target="_blank" class="hover:text-cyan-400 transition-colors">Play Store</a>
                <a href="mailto:sanjid.dev@example.com" class="hover:text-cyan-400 transition-colors">Contact</a>
            </div>
        </div>
    </footer>

    <!-- CDN JS Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.9/dist/lenis.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Lenis Smooth Scroll
            if (typeof Lenis !== 'undefined') {
                const lenis = new Lenis({ duration: 1.2, smoothWheel: true });
                function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
                requestAnimationFrame(raf);
            }
            // AOS Init
            if (typeof AOS !== 'undefined') {
                AOS.init({ duration: 800, once: true });
            }
            // Typed.js Init
            if (document.querySelector('#typed-text') && typeof Typed !== 'undefined') {
                new Typed('#typed-text', {
                    strings: [
                        'Flutter & Mobile Specialist',
                        'Laravel & FastAPI Backend Engineer',
                        'Full-Stack Solution Architect',
                        'Figma-to-Code Specialist'
                    ],
                    typeSpeed: 50,
                    backSpeed: 30,
                    backDelay: 2000,
                    loop: true,
                });
            }
            // GSAP Animations
            if (typeof gsap !== 'undefined') {
                gsap.from('.gsap-hero-title', { opacity: 0, y: 30, duration: 1, stagger: 0.2, ease: 'power3.out' });
            }
        });
    </script>
</body>
</html>
