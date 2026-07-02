<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Profile::truncate();
        Skill::truncate();
        Project::truncate();

        Profile::create([
            'name' => 'Sanjid',
            'full_name' => 'MD:Sanjid',
            'title' => 'Full-Stack Developer | Flutter & Mobile Specialist',
            'location' => 'Habiganj, Sylhet, Bangladesh',
            'phone' => '01615805076',
            'email' => 'sanjid@example.com',
            'github_url' => 'https://github.com/Sanjid121',
            'playstore_url' => 'https://play.google.com/store/search?q=fulbaria%20sheba&c=apps&hl=fil',
            'cv_url' => '/CV_Sanjid_Hasan.pdf',
            'experience_years' => '3+',
            'badge_text' => 'Available for Full-Stack & Flutter Opportunities',
            'bio' => 'Dynamic Full-Stack Developer with 3+ years of expertise in Flutter and mobile application architecture. Proficient in building scalable backends using Laravel and FastAPI. Specialized in converting complex Figma designs into pixel-perfect, responsive interfaces. Proven ability to deploy and manage applications on VPS and Cloud environments, with a live product presence on the Google Play Store.',
        ]);

        $skillsData = [
            [
                'category' => 'Mobile Development',
                'icon' => '📱',
                'border_color' => 'cyan',
                'items' => ['Flutter (3+ Years)', 'Dart', 'State Management', 'App Publishing'],
            ],
            [
                'category' => 'Backend & APIs',
                'icon' => '⚙️',
                'border_color' => 'blue',
                'items' => ['Laravel (1.5 years)', 'Python FastAPI (3 Months)', 'RESTful API Development'],
            ],
            [
                'category' => 'UI/UX & Frontend',
                'icon' => '🎨',
                'border_color' => 'purple',
                'items' => ['Figma-to-Flutter', 'Figma-to-Web', 'Responsive UI', 'Animation Design'],
            ],
            [
                'category' => 'Database & DevOps',
                'icon' => '☁️',
                'border_color' => 'emerald',
                'items' => ['MySQL', 'VPS Management & Deployment', 'cPanel', 'Hosting Configuration'],
            ],
            [
                'category' => 'Tools & Workflow',
                'icon' => '🛠️',
                'border_color' => 'amber',
                'items' => ['Git', 'GitHub', 'Postman', 'Android Studio', 'VS Code'],
            ],
        ];

        foreach ($skillsData as $skill) {
            Skill::create($skill);
        }

        $projectsData = [
            [
                'title' => 'Fulbaria Sheba',
                'badge' => 'Live on Play Store 🟢',
                'category' => 'Mobile App',
                'description' => 'Architected and deployed a community-centric service application using Flutter, now live on the Google Play Store. Engineered features for local service discovery, emergency contact management, and real-time data fetching via REST APIs. Optimized app performance and UI rendering to deliver a seamless, low-latency user experience on Android devices.',
                'tech_stack' => ['Flutter', 'Android', 'REST APIs'],
                'playstore_link' => 'https://play.google.com/store/search?q=fulbaria%20sheba&c=apps&hl=fil',
                'github_link' => 'https://github.com/Sanjid121',
                'button_text' => 'View on Play Store ↗',
                'featured' => true,
            ],
            [
                'title' => 'E-Commerce Ecosystem',
                'badge' => 'Full-Stack Solution 🛒',
                'category' => 'Web & Mobile',
                'description' => 'Engineered a full-stack e-commerce platform integrating a Laravel-powered backend with a Flutter mobile client. Architected RESTful APIs for product catalog management, user authentication (JWT), and secure checkout flows. Deployed the application to a VPS environment, configuring MySQL databases, cPanel, and server hosting.',
                'tech_stack' => ['Laravel', 'Flutter', 'MySQL', 'REST APIs'],
                'playstore_link' => null,
                'github_link' => 'https://github.com/Sanjid121',
                'button_text' => 'View GitHub Repository ↗',
                'featured' => true,
            ],
            [
                'title' => 'UI/UX Implementation — Figma to Production',
                'badge' => 'Frontend Showcase 🎨',
                'category' => 'UI/UX',
                'description' => 'Translated complex, high-fidelity Figma prototypes into pixel-perfect, production-ready Flutter code. Implemented advanced animations, custom widgets, and adaptive layouts adhering to Material Design principles. Achieved design accuracy and responsiveness across multiple screen sizes and device densities.',
                'tech_stack' => ['Figma', 'Flutter', 'Dart'],
                'playstore_link' => null,
                'github_link' => 'https://github.com/Sanjid121',
                'button_text' => 'Explore UI Repository ↗',
                'featured' => true,
            ],
        ];

        foreach ($projectsData as $project) {
            Project::create($project);
        }
    }
}
