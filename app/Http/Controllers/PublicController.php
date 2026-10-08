<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Project;

class PublicController extends Controller
{
    public function home()
    {
        $profile = Profile::first();
        $featuredProjects = Project::where('is_featured', true)->get();
        return view('public.home', compact('profile', 'featuredProjects'));
    }

}
