@extends('layouts.app')

@section('title', 'Sanjid - Full-Stack Developer & Flutter Specialist')

@section('content')
<!-- Hero Section -->
<section id="about" class="relative min-h-[90vh] flex items-center justify-center pt-12 pb-20 overflow-hidden">
    <!-- Background Glow Blobs -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-purple-500/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <!-- Live Play Store Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 text-sm font-medium mb-8 gsap-badge shadow-lg shadow-cyan-500/10">
            <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 animate-ping"></span>
            <span>Available for Full-Stack & Flutter Opportunities</span>
        </div>

        <!-- Main Title & Typed Text -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 gsap-hero-title">
            Hi, I'm <span class="gradient-text">Sanjid</span> 👋<br>
            <span id="typed-text" class="text-2xl sm:text-4xl lg:text-5xl text-gray-300 font-bold block mt-3 min-h-[1.5em]"></span>
        </h1>

        <!-- Short Summary -->
        <p class="max-w-3xl mx-auto text-lg sm:text-xl text-gray-400 mb-10 leading-relaxed gsap-hero-title">
            Dynamic Developer with <strong class="text-white">2+ years of expertise</strong> in building scalable Flutter mobile architecture, high-performance backends with <strong class="text-cyan-400">Laravel</strong> and <strong class="text-teal-400">FastAPI</strong>, and translating complex Figma designs into production-ready products.
        </p>

        <!-- CTAs & Links -->
        <div class="flex flex-wrap justify-center items-center gap-4 gsap-hero-title">
            <a href="#projects" class="px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 text-white font-bold text-lg shadow-xl shadow-cyan-500/25 hover:shadow-cyan-500/40 hover:scale-105 transition-all duration-300">
                Explore My Work
            </a>
            <a href="{{ route('portfolio.cv') }}" download class="px-7 py-4 rounded-xl bg-cyan-500/20 border border-cyan-500/50 text-cyan-300 font-bold text-lg hover:bg-cyan-500/30 transition-all duration-300 flex items-center gap-2 shadow-lg shadow-cyan-500/10">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                Download CV
            </a>
            <a href="{{ $profile['github'] ?? 'https://github.com/Sanjid121' }}" target="_blank" class="px-7 py-4 rounded-xl glass-card text-white font-semibold text-lg hover:bg-gray-800/80 hover:border-gray-600 transition-all duration-300 flex items-center gap-2">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                GitHub
            </a>
            <a href="{{ $profile['playStore'] ?? 'https://play.google.com/store/search?q=fulbaria%20sheba&c=apps&hl=fil' }}" target="_blank" class="px-6 py-4 rounded-xl glass-card text-emerald-400 font-semibold text-lg border-emerald-500/30 hover:bg-emerald-950/40 transition-all duration-300 flex items-center gap-2">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.37 2.37 0 0 1-.61-1.614V3.428c0-.623.226-1.196.609-1.614zm11.604 11.604l2.457 2.457-11.83 6.786 9.373-9.243zm0-2.836L5.84 1.339l11.83 6.786-2.457 2.457zm1.884 1.418l3.493 2.002c.866.497.866 1.309 0 1.806l-3.493 2.002-2.316-2.316 2.316-2.316z"/></svg>
                Fulbaria Sheba App
            </a>
        </div>

        <!-- Highlight Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 max-w-4xl mx-auto" data-aos="fade-up">
            <div class="glass-card p-6 rounded-2xl text-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-cyan-400 mb-1">2+ Years</div>
                <div class="text-xs text-gray-400 uppercase tracking-wider">Flutter Experience</div>
            </div>
            <div class="glass-card p-6 rounded-2xl text-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-purple-400 mb-1">Live</div>
                <div class="text-xs text-gray-400 uppercase tracking-wider">Google Play Store</div>
            </div>
            <div class="glass-card p-6 rounded-2xl text-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-blue-400 mb-1">Laravel</div>
                <div class="text-xs text-gray-400 uppercase tracking-wider">REST APIs & Backend</div>
            </div>
            <div class="glass-card p-6 rounded-2xl text-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-teal-400 mb-1">FastAPI</div>
                <div class="text-xs text-gray-400 uppercase tracking-wider">Python Services</div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 relative bg-gray-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                Core Technical <span class="gradient-text">Skills</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Comprehensive expertise in mobile development, backend microservices, database architectures, and cloud deployment.
            </p>
        </div>

        <!-- DaisyUI / Flowbite Tabbed Skills Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mobile Dev Card -->
            <div class="glass-card rounded-2xl p-8 hover:border-cyan-500/50 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-2xl mb-6">📱</div>
                <h3 class="text-xl font-bold text-white mb-4 font-heading">Mobile Development</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="badge badge-lg bg-cyan-950 text-cyan-300 border-cyan-700/50 p-3">Flutter (2+ Years)</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Dart</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">State Management</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">App Publishing</span>
                </div>
            </div>

            <!-- Backend Card -->
            <div class="glass-card rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center text-2xl mb-6">⚙️</div>
                <h3 class="text-xl font-bold text-white mb-4 font-heading">Backend & APIs</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="badge badge-lg bg-blue-950 text-blue-300 border-blue-700/50 p-3">Laravel Framework</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Python FastAPI</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">RESTful APIs</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">JWT Auth</span>
                </div>
            </div>

            <!-- UI/UX & Frontend -->
            <div class="glass-card rounded-2xl p-8 hover:border-purple-500/50 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center text-2xl mb-6">🎨</div>
                <h3 class="text-xl font-bold text-white mb-4 font-heading">UI/UX Implementation</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="badge badge-lg bg-purple-950 text-purple-300 border-purple-700/50 p-3">Figma-to-Flutter</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Figma-to-Web</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Responsive UI</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Animation Design</span>
                </div>
            </div>

            <!-- Database & DevOps -->
            <div class="glass-card rounded-2xl p-8 hover:border-emerald-500/50 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-2xl mb-6">☁️</div>
                <h3 class="text-xl font-bold text-white mb-4 font-heading">Database & DevOps</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="badge badge-lg bg-emerald-950 text-emerald-300 border-emerald-700/50 p-3">MySQL</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">VPS Deployment</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">cPanel Hosting</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Server Configuration</span>
                </div>
            </div>

            <!-- Tools & Workflow -->
            <div class="glass-card rounded-2xl p-8 hover:border-amber-500/50 transition-all duration-300 md:col-span-2 lg:col-span-2" data-aos="fade-up" data-aos-delay="500">
                <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center text-2xl mb-6">🛠️</div>
                <h3 class="text-xl font-bold text-white mb-4 font-heading">Tools & Workflow</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="badge badge-lg bg-amber-950 text-amber-300 border-amber-700/50 p-3">Git & GitHub</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Postman API Testing</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Android Studio</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">VS Code</span>
                    <span class="badge badge-lg bg-slate-800 text-gray-300 border-gray-700 p-3">Agile Methodologies</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                Key <span class="gradient-text">Projects</span> & Portfolio
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Real-world applications delivered with high performance, seamless user experience, and robust backend architecture.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Project 1: Fulbaria Sheba -->
            <div class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between group hover:shadow-2xl hover:shadow-cyan-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                            Live on Play Store 🟢
                        </span>
                        <span class="text-xs text-gray-500">Mobile App</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors font-heading">Fulbaria Sheba</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Architected and deployed a community-centric service application using Flutter, now live on the Google Play Store. Features local service discovery, emergency contact management, and low-latency real-time API data fetching.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-cyan-300 font-medium">Flutter</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-gray-300 font-medium">Android</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-gray-300 font-medium">REST APIs</span>
                    </div>
                </div>
                <div class="p-8 pt-0">
                    <a href="{{ $profile['playStore'] ?? 'https://play.google.com/store/search?q=fulbaria%20sheba&c=apps&hl=fil' }}" target="_blank" class="w-full py-3 px-4 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold text-center block hover:opacity-90 transition-opacity">
                        View on Play Store ↗
                    </a>
                </div>
            </div>

            <!-- Project 2: E-Commerce Ecosystem -->
            <div class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between group hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-blue-500/20 text-blue-400 border border-blue-500/30">
                            Full-Stack Solution 🛒
                        </span>
                        <span class="text-xs text-gray-500">Web & Mobile</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors font-heading">E-Commerce Ecosystem</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Engineered a full-stack e-commerce platform integrating a Laravel-powered backend with a Flutter mobile client. Built RESTful APIs for product catalog management, JWT authentication, and checkout flows deployed on VPS with MySQL.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-blue-300 font-medium">Laravel</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-cyan-300 font-medium">Flutter</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-gray-300 font-medium">MySQL</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-gray-300 font-medium">JWT</span>
                    </div>
                </div>
                <div class="p-8 pt-0">
                    <a href="https://github.com/Sanjid121" target="_blank" class="w-full py-3 px-4 rounded-xl bg-gray-800 hover:bg-gray-700 text-white font-semibold text-center block transition-colors">
                        View Technical Architecture ↗
                    </a>
                </div>
            </div>

            <!-- Project 3: Figma to Production UI -->
            <div class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between group hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-purple-500/20 text-purple-400 border border-purple-500/30">
                            Frontend Showcase 🎨
                        </span>
                        <span class="text-xs text-gray-500">UI/UX</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors font-heading">Figma to Production UI</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Translated complex, high-fidelity Figma prototypes into pixel-perfect, production-ready Flutter and web components. Implemented smooth micro-animations, adaptive layouts, and Material Design compliance.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-purple-300 font-medium">Figma</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-cyan-300 font-medium">Flutter</span>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-gray-800 text-gray-300 font-medium">Animations</span>
                    </div>
                </div>
                <div class="p-8 pt-0">
                    <a href="https://github.com/Sanjid121" target="_blank" class="w-full py-3 px-4 rounded-xl bg-gray-800 hover:bg-gray-700 text-white font-semibold text-center block transition-colors">
                        Explore UI Repository ↗
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience & Education Section -->
<section id="experience" class="py-20 relative bg-gray-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Education -->
            <div data-aos="fade-right">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold text-xl">🎓</div>
                    <h2 class="text-3xl font-bold text-white font-heading">Education</h2>
                </div>
                <div class="glass-card rounded-2xl p-8 border-l-4 border-l-cyan-500">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white font-heading">Diploma in Engineering</h3>
                        <span class="badge badge-accent bg-cyan-500/20 text-cyan-300 border-0">Ongoing (5th Sem)</span>
                    </div>
                    <p class="text-cyan-400 font-medium text-sm mb-4">Computer Science & Technology</p>
                    <p class="text-gray-400 text-sm">Habiganj Polytechnic Institute — Habiganj, Sylhet, Bangladesh</p>
                </div>
            </div>

            <!-- Contact / Location Summary -->
            <div data-aos="fade-left">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center font-bold text-xl">📍</div>
                    <h2 class="text-3xl font-bold text-white font-heading">Contact Details</h2>
                </div>
                <div class="glass-card rounded-2xl p-8 space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center text-cyan-400 text-xl">📞</div>
                        <div>
                            <div class="text-xs text-gray-400 uppercase font-medium">Phone</div>
                            <div class="text-lg font-semibold text-white">01615805076</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center text-purple-400 text-xl">🏡</div>
                        <div>
                            <div class="text-xs text-gray-400 uppercase font-medium">Location</div>
                            <div class="text-lg font-semibold text-white">Habiganj, Sylhet, Bangladesh</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="py-24 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card rounded-3xl p-8 sm:p-12 relative overflow-hidden" data-aos="zoom-in">
            <div class="text-center mb-10">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3 font-heading">Let's Work Together 🚀</h2>
                <p class="text-gray-400 text-sm sm:text-base">
                    Have a project in mind or want to collaborate on Flutter mobile apps or Laravel backend systems? Send a message below.
                </p>
            </div>

            @if(session('success'))
                <div class="p-4 mb-6 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-center text-sm font-medium">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('portfolio.contact') }}" method="POST" class="space-y-6" x-data="{ sending: false }" @submit="sending = true">
                @csrf
                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold uppercase text-gray-400 mb-2">Your Name</label>
                        <input type="text" name="name" required placeholder="MD Sanged Hasan" class="w-full px-4 py-3.5 rounded-xl bg-gray-900/80 border border-gray-800 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase text-gray-400 mb-2">Your Email</label>
                        <input type="email" name="email" required placeholder="sanjid@example.com" class="w-full px-4 py-3.5 rounded-xl bg-gray-900/80 border border-gray-800 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase text-gray-400 mb-2">Message</label>
                    <textarea name="message" rows="5" required placeholder="Tell me about your project or opportunity..." class="w-full px-4 py-3.5 rounded-xl bg-gray-900/80 border border-gray-800 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors"></textarea>
                </div>
                <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 text-white font-bold text-lg shadow-xl shadow-cyan-500/25 hover:shadow-cyan-500/40 transition-all duration-300 flex items-center justify-center gap-2">
                    <span x-show="!sending">Send Message</span>
                    <span x-show="sending" class="loading loading-spinner loading-md"></span>
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
