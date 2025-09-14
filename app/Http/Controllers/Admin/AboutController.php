<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'image'   => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
            // Quill HTML ola bilər, 255-lə limitləmə — DB-də TEXT sahəsi saxla
            'content' => 'nullable|string',
        ]);

        $path = $request->file('image')->store('aboutUs', 'public');

        AboutUs::create([
            'title'   => $request->title,
            'image'   => $path,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.aboutlist')->with('success', 'About us added successfully!');
    }

    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        return view('backend.pages.about.editAbout', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $request->validate([
            'title'   => 'required|string|max:255',
            // update-də şəkil opsional olsun
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'content' => 'nullable|string',
        ]);

        $data = [
            'title'   => $request->title,
            'content' => $request->content,
        ];

        if ($request->hasFile('image')) {
            // köhnəni sil (istəsən saxla)
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('aboutUs', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.aboutlist')->with('success', 'About us updated successfully!');
    }

    public function destroy($id)
    {
        $about = AboutUs::findOrFail($id);

        // şəkili sil
        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('admin.aboutlist')->with('success', 'About us deleted successfully!');
    }
}
