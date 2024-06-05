<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'meta_description_ru' => 'required|string',
            'meta_description_uz' => 'required|string',
            'tags_uz' => 'nullable|string',
            'tags_ru' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/categories'), $imageName);
        }

        Category::create([
            'name_ru' => $request->name_ru,
            'name_uz' => $request->name_uz,
            'meta_description_ru' => $request->meta_description_ru,
            'meta_description_uz' => $request->meta_description_uz,
            'tags_uz' => $request->tags_uz,
            'tags_ru' => $request->tags_ru,
            'image_path' => $imageName ? 'images/categories/' . $imageName : null,
            'image_name' => $imageName,
            // Sluglar model orqali avtomatik yaratiladi
        ]);

        return redirect()->route('categories.index');
    }


    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));

    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Ma'lumotlarni tekshirish
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'meta_description_ru' => 'required|string',
            'meta_description_uz' => 'required|string',
            'tags_uz' => 'nullable|string',
            'tags_ru' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Rasmni yangilash
        $imageName = $category->image_name;
        if ($request->hasFile('image_path')) {
            // Eski rasmni o'chirish
            if ($category->image_name && file_exists(public_path($category->image_path))) {
                unlink(public_path($category->image_path));
            }
    
            // Yangi rasmni saqlash
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/categories'), $imageName);
        }
    
        // Kategoriyani yangilash
        $category->update([
            'name_ru' => $request->name_ru,
            'name_uz' => $request->name_uz,
            'meta_description_ru' => $request->meta_description_ru,
            'meta_description_uz' => $request->meta_description_uz,
            'tags_uz' => $request->tags_uz,
            'tags_ru' => $request->tags_ru,
            'image_path' => $imageName ? 'images/categories/' . $imageName : $category->image_path,
            'image_name' => $imageName ?: $category->image_name,
        ]);
    
        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        if ($category->image_name) {
            unlink(public_path('images/categories/' . $category->image_name));
        }
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', __('Категория удалена.'));
    }
}
