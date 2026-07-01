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
            'full_name' => 'MD Sanged Hasan',
            'title' => 'Full-Stack Developer & Flutter Specialist',
            'location' => 'Habiganj, Sylhet, Bangladesh',
            'phone' => '01615805076',
            'email' => 'sanjid@example.com',
            'github_url' => 'https://github.com/Sanjid121',
            'playstore_url' => 'https://play.google.com/store/search?q=fulbaria%20sheba&c=apps&hl=fil',
            'cv_url' => '/CV_Sanjid_Hasan.pdf',
            'experience_years' => '3+',
            'badge_text' => 'Available for Full-Stack & Flutter Opportunities',
            'bio' => 'Dynamic Developer with 3+ years of expertise in building scalable Flutter mobile architecture, high-performance backends with Laravel and FastAPI, and translating complex Figma designs into production-ready products.',
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
                'items' => ['Laravel Framework', 'Python FastAPI', 'RESTful APIs', 'JWT Auth'],
            ],
            [
                'category' => 'UI/UX Implementation',
                'icon' => '🎨',
                'border_color' => 'purple',
                'items' => ['Figma-to-Flutter', 'Figma-to-Web', 'Responsive UI', 'Animation Design'],
            ],
            [
                'category' => 'Database & DevOps',
                'icon' => '☁️',
                'border_color' => 'emerald',
                'items' => ['MySQL', 'VPS Deployment', 'cPanel Hosting', 'Server Configuration'],
            ],
            [
                'category' => 'Tools & Workflow',
                'icon' => '🛠️',
                'border_color' => 'amber',
                'items' => ['Git & GitHub', 'Postman API Testing', 'Android Studio', 'Agile Methodologies'],
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
                'description' => 'Architected and deployed a community-centric service application using Flutter, now live on the Google Play Store. Features local service discovery, emergency contact management, and low-latency real-time API data fetching.',
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
                'description' => 'Engineered a full-stack e-commerce platform integrating a Laravel-powered backend with a Flutter mobile client. Built RESTful APIs for product catalog management, JWT authentication, and checkout flows deployed on VPS with MySQL.',
                'tech_stack' => ['Laravel', 'Flutter', 'MySQL', 'JWT'],
                'playstore_link' => null,
                'github_link' => 'https://github.com/Sanjid121',
                'button_text' => 'View GitHub Repository ↗',
                'featured' => true,
            ],
            [
                'title' => 'Figma to Production UI',
                'badge' => 'Frontend Showcase 🎨',
                'category' => 'UI/UX',
                'description' => 'Translated complex, high-fidelity Figma prototypes into pixel-perfect, production-ready Flutter and web components. Implemented smooth micro-animations, adaptive layouts, and Material Design compliance.',
                'tech_stack' => ['Figma', 'Flutter', 'Animations'],
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
