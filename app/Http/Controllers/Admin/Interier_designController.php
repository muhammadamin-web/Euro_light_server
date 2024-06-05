<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Interier_design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Interier_designController extends Controller
{
    public function index()
    {
        $designs = Interier_design::all();
        return view('admin.interier_designs.index', compact('designs'));
    }

    public function create()
    {
        return view('admin.interier_designs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'description_ru' => 'required|string',
            'description_uz' => 'required|string',
            'tags_uz' => 'nullable|string',
            'tags_ru' => 'nullable|string',
            'meta_description_ru' => 'nullable|string',
            'meta_description_uz' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/interier_designs'), $imageName);
        }

        Interier_design::create([
            'name_ru' => $validatedData['name_ru'],
            'name_uz' => $validatedData['name_uz'],
            'description_ru' => $validatedData['description_ru'],
            'description_uz' => $validatedData['description_uz'],
            'tags_uz' => $validatedData['tags_uz'],
            'tags_ru' => $validatedData['tags_ru'],
            'meta_description_ru' => $validatedData['meta_description_ru'],
            'meta_description_uz' => $validatedData['meta_description_uz'],
            'slug_ru' => Str::slug($validatedData['name_ru']),
            'slug_uz' => Str::slug($validatedData['name_uz']),
            'image_path' => $imageName ? 'images/interier_designs/' . $imageName : null,
            'image_name' => $imageName,
        ]);

        return redirect()->route('interier_designs.index')->with('success', 'Design created successfully.');
    }

    public function show(Interier_design $Interier_design)
    {
        return view('admin.interier_designs.show', compact('Interier_design'));
    }

    public function edit(Interier_design $Interier_design)
    {
        return view('admin.interier_designs.edit', compact('Interier_design'));
    }

    public function update(Request $request, Interier_design $Interier_design)
    {
        $validatedData = $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'description_ru' => 'required|string',
            'description_uz' => 'required|string',
            'tags_uz' => 'nullable|string',
            'tags_ru' => 'nullable|string',
            'meta_description_ru' => 'nullable|string',
            'meta_description_uz' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image_path')) {
            if ($Interier_design->image_name && file_exists(public_path('images/interier_designs/' . $Interier_design->image_name))) {
                unlink(public_path('images/interier_designs/' . $Interier_design->image_name));
            }
    
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/interier_designs'), $imageName);
        } else {
            $imageName = $Interier_design->image_name;
        }
    

        $Interier_design->update([
            'name_ru' => $validatedData['name_ru'],
            'name_uz' => $validatedData['name_uz'],
            'description_ru' => $validatedData['description_ru'],
            'description_uz' => $validatedData['description_uz'],
            'tags_uz' => $validatedData['tags_uz'],
            'tags_ru' => $validatedData['tags_ru'],
            'meta_description_ru' => $validatedData['meta_description_ru'],
            'meta_description_uz' => $validatedData['meta_description_uz'],
            'slug_ru' => Str::slug($validatedData['name_ru']),
            'slug_uz' => Str::slug($validatedData['name_uz']),
            'image_path' => $imageName ? 'images/interier_designs/' . $imageName : $Interier_design->image_path,
            'image_name' => $imageName,
        ]);

        return redirect()->route('interier_designs.index')->with('success', 'Design updated successfully.');
    }

    public function destroy(Interier_design $Interier_design)
    {
        // Rasmni o'chirish
        if ($Interier_design->image_name) {
            $imagePath = public_path('images/interier_designs/' . $Interier_design->image_name);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        // Ma'lumotni o'chirish
        $Interier_design->delete();
    
        return redirect()->route('interier_designs.index')->with('success', 'Design deleted successfully.');
    }
    
}
