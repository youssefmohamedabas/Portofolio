<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Tech;

class GeneralController extends Controller
{
    public function index()
    {
        return view("welcome", [
            "user" => Setting::first(),
            "projects" => Project::latest()->take(6)->get(),
        ]);
    }

    public function about()
    {
        return view("about", [
            "user" => Setting::first(),
            "educations" => Education::all(), // Changed from get() to all() for consistency
            "experiences" => Experience::all(), // Changed from get() to all() for consistency
            "techstasks" => Tech::all(), // Changed from get() to all() for consistency
        ]);
    }

    public function projects()
    {
        return view("projects", [
            "user" => Setting::first(),
            "projects" => Project::get(),
        ]);
    }

    public function photos()
    {
        return view("photos", [
            "user" => Setting::first(),
            "photos" => Image::latest()->get(),
        ]);
    }
}