<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\ContactMessage;

class PortfolioApiController extends Controller
{
    public function getPortfolio()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $projects = Project::all();

        return response()->json([
            'status' => 'success',
            'data' => [
                'profile' => $profile,
                'skills' => $skills,
                'projects' => $projects,
            ]
        ], 200);
    }

    public function getProfile()
    {
        $profile = Profile::first();
        return response()->json(['status' => 'success', 'data' => $profile], 200);
    }

    public function getSkills()
    {
        $skills = Skill::all();
        return response()->json(['status' => 'success', 'data' => $skills], 200);
    }

    public function getProjects()
    {
        $projects = Project::all();
        return response()->json(['status' => 'success', 'data' => $projects], 200);
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        $contact = ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for reaching out! Your message has been saved into MySQL.',
            'data' => $contact
        ], 201);
    }
}
