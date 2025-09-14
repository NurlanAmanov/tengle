<?php
// app/Http/Controllers/Admin/OurHistoryCountryController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurHistoryCountry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurHistoryCountryController extends Controller
{
    public function store(Request $r)
    {
        $r->validate([
            'title'   => 'required|string|max:255',
            'content' => 'nullable|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $path = $r->hasFile('image')
            ? $r->file('image')->store('uploads/ourhistory/country', 'public')
            : null;

        OurHistoryCountry::create([
            'title'   => $r->title,
            'content' => $r->content,
            'image'   => $path,
        ]);

        return redirect()->route('admin.ourCountry')->with('success','Country history created.');
    }

    public function edit($id)
    {
        $country = OurHistoryCountry::findOrFail($id);
        return view('backend.pages.about.editourhistoryCountry', compact('country'));
    }

    public function update(Request $r, $id)
    {
        $country = OurHistoryCountry::findOrFail($id);

        $r->validate([
            'title'   => 'required|string|max:255',
            'content' => 'nullable|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $data = [
            'title'   => $r->title,
            'content' => $r->content,
        ];

        if ($r->hasFile('image')) {
            if ($country->image && Storage::disk('public')->exists($country->image)) {
                Storage::disk('public')->delete($country->image);
            }
            $data['image'] = $r->file('image')->store('uploads/ourhistory/country', 'public');
        }

        $country->update($data);

        return redirect()->route('admin.ourCountry')->with('success','Country history updated.');
    }

    public function destroy($id)
    {
        $country = OurHistoryCountry::findOrFail($id);
        if ($country->image && Storage::disk('public')->exists($country->image)) {
            Storage::disk('public')->delete($country->image);
        }
        $country->delete();

        return redirect()->route('admin.ourCountry')->with('success','Country history deleted.');
    }
}
