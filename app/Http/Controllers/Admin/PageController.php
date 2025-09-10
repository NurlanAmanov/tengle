<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function  index() {
        return view('backend.pages.dashboard');
    }
    function servicelist() {
        return view('backend.pages.servicelist');
    }
    function sliderlist() {
         $sliders = Slider::latest()->get();
        return view('backend.pages.slider',compact('sliders'));
    }
    function addSlider() {
        return view('backend.pages.addSlider');
    }
    function projectlist() {
        $projects = Project::all();

        return view('backend.pages.project',compact('projects'));
    }
    function addproject() {
        return view('backend.pages.addProject');
    }

    function aboutlist() {
        return view('backend.pages.about');
    }
    function addservice() {
        return view('backend.pages.addService');
    }
}
