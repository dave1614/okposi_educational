<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\WebsiteContent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PublicController extends Controller
{


    public function homePage(Request $request){

        $props['projects'] = Project::limit(4)->get();

        return Inertia::render('Public/Home', $props);
    }

    public function projects(Request $request){

        $props['projects'] = Project::all();

        return Inertia::render('Public/Projects', $props);
    }

    public function aboutUs(Request $request){


        $props['about_us_content'] = WebsiteContent::where('type', 'about_us')->first()->content;

        return Inertia::render('Public/AboutUs', $props);
    }

    public function contactUs(Request $request){

        // $props['projects'] = Project::limit(4)->get();
        // $props['about_us_content'] = WebsiteContent::where('type', 'about_us')->first()->content;
        $props[''] = '';
        return Inertia::render('Public/ContactUs', $props);
    }
}
