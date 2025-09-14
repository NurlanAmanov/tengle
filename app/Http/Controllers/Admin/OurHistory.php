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

        // DÜZGÜN redirect (səndə səhv idi)
        return redirect()->route('admin.historylist')
            ->with('success', 'History entry created successfully.');
    }

    // EDIT formu (view qaytarır)
    public function edit($id)
    {
        $history = HistoryOur::findOrFail($id);
        return view('backend.pages.about.editHistory', compact('history'));
    }

    // UPDATE (DB-də məlumatı yenilə)
    public function update(Request $request, $id)
    {
        $history = HistoryOur::findOrFail($id);

        $request->validate([
            'year'    => 'required|integer|min:1900|max:' . date('Y'),
            'title'   => 'nullable|string|max:255',
            'content' => 'required|string',
        ]);

        $history->update([
            'year'    => $request->year,
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.historylist')
            ->with('success', 'History entry updated successfully.');
    }

    // DELETE
    public function destroy($id)
    {
        $history = HistoryOur::findOrFail($id);
        $history->delete();

        return redirect()->route('admin.historylist')
            ->with('success', 'History entry deleted successfully.');
    }
}
