<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{


    /**
     * Yeni layihəni bazaya əlavə et.
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_title'    => 'required|string|max:255',
            'vessel_name'      => 'nullable|string|max:255',
            'company_or_owner' => 'nullable|string|max:255',
            'completion_year'  => 'nullable|integer|min:1800|max:2100',
            'dimensions'       => 'nullable|string|max:255',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $data = $request->only([
            'project_title',
            'vessel_name',
            'company_or_owner',
            'completion_year',
            'dimensions',
        ]);

        if ($request->hasFile('image')) {
            $data['image_url'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Layihə uğurla əlavə olundu!');
    }

    /**
     * Edit formunu aç.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('backend.pages.project.editProject', compact('project'));
    }

    /**
     * Layihəni yenilə.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'project_title'    => 'required|string|max:255',
            'vessel_name'      => 'nullable|string|max:255',
            'company_or_owner' => 'nullable|string|max:255',
            'completion_year'  => 'nullable|integer|min:1800|max:2100',
            'dimensions'       => 'nullable|string|max:255',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $data = $request->only([
            'project_title',
            'vessel_name',
            'company_or_owner',
            'completion_year',
            'dimensions',
        ]);

        if ($request->hasFile('image')) {
            $newPath = $request->file('image')->store('projects', 'public');

            // köhnə şəkli sil
            if ($project->image_url && !Str::startsWith($project->image_url, ['http://', 'https://'])) {
                if (Storage::disk('public')->exists($project->image_url)) {
                    Storage::disk('public')->delete($project->image_url);
                }
            }

            $data['image_url'] = $newPath;
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Layihə uğurla yeniləndi!');
    }

    /**
     * Layihəni sil.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image_url && !Str::startsWith($project->image_url, ['http://', 'https://'])) {
            if (Storage::disk('public')->exists($project->image_url)) {
                Storage::disk('public')->delete($project->image_url);
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Layihə uğurla silindi!');
    }
}
