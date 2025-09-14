<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryOur;
use Illuminate\Http\Request;

class OurHistory extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'year'    => 'required|integer|min:1900|max:' . date('Y'),
            'title'   => 'nullable|string|max:255',
            'content' => 'required|string',
        ]);

        HistoryOur::create([
            'year'    => $request->year,
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()
            ->route('admin.backend.about.aboutlist')
            ->with('success', 'History entry created successfully.');
    }
}
