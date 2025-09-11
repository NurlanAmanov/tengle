<?php

namespace App\Http\Controllers;

use App\Models\ProcessStep;
use App\Models\Project;
use App\Models\service;
use App\Models\Slider;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    function index() {
        $project = Project::all();
        $slider = Slider::all();
        return view('frontend.pages.index',compact('project','slider'));
    }
    function about() {
        return view('frontend.pages.about');
    }
    function service() {
           $procses = ProcessStep::all();
        $service = service::all();
        return view('frontend.pages.services',compact('procses','service'));
    }
    function project() {
        $project = Project::all();
        return view('frontend.pages.project',compact('project'));
    }
    function contact() {
        return view('frontend.pages.contact');
    }
}
