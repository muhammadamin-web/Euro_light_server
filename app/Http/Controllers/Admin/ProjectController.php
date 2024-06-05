<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'description_ru' => 'required|string',
            'description_uz' => 'required|string',
            'tags_uz' => 'required|string',
            'tags_ru' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $imageName = null;

        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/projects/'), $imageName);
        }
        Project::create([
            'name_ru' => $request->name_ru,
            'name_uz' => $request->name_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'tags_uz' => $request->tags_uz,
            'tags_ru' => $request->tags_ru,
            'image_path' => $imageName ? '/images/projects/' . $imageName : null,
            'image_name' => $imageName,
        ]);

        return redirect()->route('projects.index')
                         ->with('success', __('Проект создан.'));
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));

    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'description_ru' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'tags_uz' => 'nullable|string',
            'tags_ru' => 'nullable|string',

        ]);
        $imageName = $project->image_name;
        
        if ($request->hasFile('image_path')) {
            if ($project->image_name) {
                unlink(public_path('/images/projects/' . $project->image_name));
            }

            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('/images/projects'), $imageName);
        }
        $project->update([
            'name_ru' => $request->name_ru,
            'name_uz' => $request->name_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'tags_uz' => $request->tags_uz,
            'tags_ru' => $request->tags_ru,
            'image_path' => $imageName ? '/images/projects/' . $imageName : null,
            'image_name' => $imageName,
        ]);

        return redirect()->route('projects.index')
                         ->with('success', __('Проект обновлен.'));
    }

    public function destroy(Project $project)
    {
        if ($project->image_name) {
            unlink(public_path('images/projects/' . $project->image_name));
        }
        $project->delete();

        return redirect()->route('projects.index')
                         ->with('success', __('Проект удален.'));
    }
}
