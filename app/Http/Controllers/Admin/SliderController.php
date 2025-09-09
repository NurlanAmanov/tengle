<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    // Show all sliders
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
    }

    // Show create form
    public function create()
    {
        return view('backend.slider.create');
    }

    // Store new slider
    public function store(Request $request)
    {
        $request->validate([
            'image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'    => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        $path = $request->file('image')->store('sliders', 'public');

        Slider::create([
            'image'    => $path,
            'title'    => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider added successfully!');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.pages.Slideedit', compact('slider'));
    }

    // Update slider
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'    => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        $data = [
            'title'    => $request->title,
            'subtitle' => $request->subtitle,
        ];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sliders', 'public');

            // delete old image if exists
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }

            $data['image'] = $path;
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider updated successfully!');
    }

    // Delete slider
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->image && Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider deleted successfully!');
    }
}
