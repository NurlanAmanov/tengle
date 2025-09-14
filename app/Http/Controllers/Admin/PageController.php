<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\HistoryOur;
use App\Models\ourhistoryCountry;
use App\Models\ProcessStep;
use App\Models\Project;
use App\Models\service;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function  index()
    {
        return view('backend.pages.dashboard');
    }
    function servicelist()
    {
        $procses = ProcessStep::all();
        $service = service::all();
        return view('backend.pages.service.servicelist', compact('service', 'procses'));
    }
    function sliderlist()
    {
        $sliders = Slider::latest()->get();
        return view('backend.pages.slider.slider', compact('sliders'));
    }
    function addSlider()
    {
        return view('backend.pages.slider.addSlider');
    }
    function projectlist()
    {
        $projects = Project::all();

        return view('backend.pages.project.project', compact('projects'));
    }
    function addproject()
    {
        return view('backend.pages.project.addProject');
    }

    function aboutlist()
    {
        $about = AboutUs::all();
        return view('backend.pages.about.about',compact('about'));
    }
    function addAbout()
    {
        return view('backend.pages.about.addAbout');
    }
    function HistoryPage(){
                $history = HistoryOur::all();
        return view('backend.pages.about.History',compact('history'));
    }
    function addHistpage()
    {
      

        return view('backend.pages.about.addHistory');
    }
    function addservice()
    {
        return view('backend.pages.service.addService');
    }

    function ourCountry() {
        $countries = ourhistoryCountry::latest()->paginate(10);
        return view('backend.pages.about.ourhistoryCountry',compact('countries'));
    } 
    public function addOurCountry()
{
    return view('backend.pages.about.addourhistoryCountry');
}
}
