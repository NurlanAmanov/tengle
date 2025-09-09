<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function store(Request $request) {
     $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);
         $path = $request->file('image')->store('sliders', 'public');
          Slider::create([
            'image' => $path,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);
         return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slider added successfully!');

    }
}
