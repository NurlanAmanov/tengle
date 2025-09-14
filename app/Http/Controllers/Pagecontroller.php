<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\HistoryOur;
use App\Models\ourhistoryCountry;
use App\Models\ProcessStep;
use App\Models\Project;
use App\Models\service;
use App\Models\Slider;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    function index()
    {
        $project = Project::all();
        $slider = Slider::all();
        $about = AboutUs::all();
        $our_story = HistoryOur::all();
        $oursContry = ourhistoryCountry::all();
        $service = service::all();
        $procses = ProcessStep::all();
        return view('frontend.pages.index', compact('project', 'slider', 'about', 'our_story', 'oursContry', 'service','procses'));
    }
    function about()
    {
        $about = AboutUs::all();
        $our_story = HistoryOur::all();
        $oursContry = ourhistoryCountry::all();
        return view('frontend.pages.about', compact('about', 'our_story', 'oursContry'));
    }
    function service()
    {
        $procses = ProcessStep::all();
        $service = service::all();

        return view('frontend.pages.services', compact('procses', 'service'));
    }
public function project(Request $request)
{
    $total = Project::count();

    // URL-dən limit oxu (default 6)
    $limit = (int) $request->get('limit', 6);
    $limit = max(1, min($limit, $total ?: 1)); // 1..total aralığında saxla

    // Layihələri yığ (ilk N dənə)
    $projects = Project::latest()->take($limit)->get();

    // Növbəti limit (hər klikdə +3 artsın)
    $nextLimit = min($limit + 3, $total);

    return view('frontend.pages.project', compact('projects', 'limit', 'total', 'nextLimit'));
}
    function contact()
    {
        
        return view('frontend.pages.contact');
    }
}
