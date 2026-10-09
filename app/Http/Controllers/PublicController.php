<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Project;
use App\Models\AboutMe;
use App\Models\Technology;

class PublicController extends Controller
{
    public function home()
    {
        $profile = Profile::first();
        $featuredProjects = Project::with([
            'technologies',
            'coverImage',
        ])
            ->where('is_featured', true)
            ->latest()
            ->take(3)
            ->get();
        return view('public.home', compact('profile', 'featuredProjects'));
    }

    public function about()
    {
        $AboutMe = AboutMe::first();
        $technologies = Technology::all();
        return view('public.about', compact('AboutMe', 'technologies'));
    }

    public function projects()
    {
        $projects = Project::with([
            'technologies',
            'coverImage',
        ])
            ->latest()
            ->get();
        return view('public.projects', compact('projects'));
    }
}
