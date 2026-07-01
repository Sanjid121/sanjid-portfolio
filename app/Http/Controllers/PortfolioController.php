<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('profiles') && Profile::count() > 0) {
                $dbProfile = Profile::first();
                $profile = [
                    'name' => $dbProfile->name,
                    'fullName' => $dbProfile->full_name,
                    'title' => $dbProfile->title,
                    'location' => $dbProfile->location,
                    'phone' => $dbProfile->phone,
                    'email' => $dbProfile->email,
                    'github' => $dbProfile->github_url,
                    'playStore' => $dbProfile->playstore_url,
                    'cvUrl' => $dbProfile->cv_url,
                    'experienceYears' => $dbProfile->experience_years,
                    'badgeText' => $dbProfile->badge_text,
                    'bio' => $dbProfile->bio,
                ];
                $skills = Skill::all()->toArray();
                $projects = Project::all()->toArray();

                return view('portfolio.index', compact('profile', 'skills', 'projects'));
            }
        } catch (\Exception $e) {
            // Fallback to portfolio_data.json
        }

        $jsonPath = base_path('portfolio_data.json');
        if (file_exists($jsonPath)) {
            $data = json_decode(file_get_contents($jsonPath), true);
            $profile = $data['profile'] ?? [];
            $skills = $data['skills'] ?? [];
            $projects = $data['projects'] ?? [];
        } else {
            $profile = [];
            $skills = [];
            $projects = [];
        }

        return view('portfolio.index', compact('profile', 'skills', 'projects'));
    }

    public function downloadCv()
    {
        $filePath = base_path('CV_Sanjid_Hasan.pdf');
        if (file_exists($filePath)) {
            return response()->download($filePath, 'CV_Sanjid_Hasan.pdf');
        }
        return back()->with('error', 'CV file not found.');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        return back()->with('success', 'Thank you for reaching out! Sanjid will get back to you soon.');
    }
}
