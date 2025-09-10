<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Formu göstərmək

    // Məlumatı bazaya yazmaq
    public function store(Request $request)
    {
        $data = $request->validate([
            'section' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->back()->with('success', 'Service added successfully!');
    }
}
