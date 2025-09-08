<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    function index() {
        return view('frontend.pages.index');
    }
    function about() {
        return view('frontend.pages.about');
    }
    function service() {
        return view('frontend.pages.services');
    }
    function project() {
        return view('frontend.pages.project');
    }
    function contact() {
        return view('frontend.pages.contact');
    }
}
