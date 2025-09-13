<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ProcessStep; // ✅ DÜZGÜN MODEL
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
        // Validasiya
        $request->validate([
            // What We Do – optional array
            'what_we_do'                   => ['nullable','array'],
            'what_we_do.*.title'           => ['required_with:what_we_do','string','max:255'],
            'what_we_do.*.icon'            => ['required_with:what_we_do','image','max:4096'],
            'what_we_do.*.description'     => ['required_with:what_we_do','string'],
         

            // Our Process – optional array
            'our_process'                  => ['nullable','array'],
            'our_process.*.title'          => ['required_with:our_process','string','max:255'],
            'our_process.*.image'          => ['required_with:our_process','image','max:6144'],
            'our_process.*.description'    => ['required_with:our_process','string'],

        ]);

        // WHAT WE DO → services cədvəli
        foreach (($request->what_we_do ?? []) as $i => $item) {
            $iconPath = $request->file("what_we_do.$i.icon")
                ? $request->file("what_we_do.$i.icon")->store('services/icons', 'public')
                : null;

            Service::create([
                'section'     => 'what_we_do',
                'title'       => $item['title'] ?? '',
                'icon'        => $iconPath,      // ikon ŞƏKİL yolu
                'image'       => null,
                'description' => $item['description'] ?? '',
                
            ]);
        }

        // OUR PROCESS → process_steps cədvəli
        foreach (($request->our_process ?? []) as $i => $item) {
            $imgPath = $request->file("our_process.$i.image")
                ? $request->file("our_process.$i.image")->store('services/process', 'public')
                : null;

            ProcessStep::create([
                'title'       => $item['title'] ?? '',
                'image'       => $imgPath,       // proses ŞƏKİL yolu
                'description' => $item['description'] ?? '',
               
            ]);
        }

       return redirect()->route('admin.services.index')->with('success', 'Saved successfully!');
    }
      public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.pages.service.service_edit', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title'       => ['required','string','max:255'],
            'description' => ['required','string'],
            'icon'        => ['nullable','image','max:4096'], // yeni ikon şəkil (optional)
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('icon')) {
            if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('services/icons', 'public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated!');
    }

    public function destroyService($id)
    {
        $service = Service::findOrFail($id);

        if ($service->icon && Storage::disk('public')->exists($service->icon)) {
            Storage::disk('public')->delete($service->icon);
        }
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->back()->with('success', 'Service deleted!');
    }

    /* ===== Process Steps (Our Process) ===== */
    public function editProcess($id)
    {
        $step = ProcessStep::findOrFail($id);
        return view('backend.pages.process_step_edit', compact('step'));
    }

    public function updateProcess(Request $request, $id)
    {
        $step = ProcessStep::findOrFail($id);

        $request->validate([
            'title'       => ['required','string','max:255'],
            'description' => ['required','string'],
            'image'       => ['nullable','image','max:6144'], // optional
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($step->image && Storage::disk('public')->exists($step->image)) {
                Storage::disk('public')->delete($step->image);
            }
            $data['image'] = $request->file('image')->store('services/process', 'public');
        }

        $step->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Process step updated!');
    }

    public function destroyProcess($id)
    {
        $step = ProcessStep::findOrFail($id);

        if ($step->image && Storage::disk('public')->exists($step->image)) {
            Storage::disk('public')->delete($step->image);
        }

        $step->delete();

        return redirect()->back()->with('success', 'Process step deleted!');
    }
}

