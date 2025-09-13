<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'title'    => 'required|string|max:255',
            'image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'content' => 'nullable|string|max:255',
        ]);
        $path = $request->file('image')->store('aboutUs', 'public');

        AboutUs::create([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content,
        ]);
        return redirect()->route('backend.pages.about.about')->with('success','About us added  successfully!');
    }
}
