<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
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
            'meta_description_ru' => 'required|string',
            'meta_description_uz' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = null;

        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/products'), $imageName);
        }

        Product::create([
            'name_ru' => $request->name_ru,
            'name_uz' => $request->name_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'tags_uz' => $request->tags_uz,
            'tags_ru' => $request->tags_ru,
            'meta_description_ru' => $request->meta_description_ru,
            'meta_description_uz' => $request->meta_description_uz,
            'category_id' => $request->category_id,
            'image_path' => $imageName ? '/images/products/' . $imageName : null,
            'image_name' => $imageName,
            // slug_uz va slug_ru maydonlari avtomatik ravishda model mutatorlari tomonidan yaratiladi
        ]);

        return redirect()->route('products.index')
            ->with('success', __('Продукт создан.'));
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // Ma'lumotlarni tekshirish
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'description_ru' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'tags_uz' => 'nullable|string',
            'tags_ru' => 'nullable|string',
            'meta_description_ru' => 'nullable|string',
            'meta_description_uz' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Rasmni yangilash yoki almashtirish
        $imageName = $product->image_name;
        if ($request->hasFile('image_path')) {
            // Eski rasmni o'chirish
            if ($product->image_name && file_exists(public_path('/images/products/' . $product->image_name))) {
                unlink(public_path('/images/products/' . $product->image_name));
            }
    
            // Yangi rasmni saqlash
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('/images/products'), $imageName);
        }
    
        // Mahsulotni yangilash
        $product->update([
            'name_ru' => $request->name_ru,
            'name_uz' => $request->name_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'tags_uz' => $request->tags_uz,
            'tags_ru' => $request->tags_ru,
            'meta_description_ru' => $request->meta_description_ru,
            'meta_description_uz' => $request->meta_description_uz,
            'category_id' => $request->category_id,
            'image_path' => $imageName ? 'images/products/' . $imageName : null,
            'image_name' => $imageName,
            // slug_uz va slug_ru maydonlari avtomatik ravishda model mutatorlari tomonidan yangilanadi
        ]);
    
        // Foydalanuvchini mahsulotlar ro'yxatiga qaytarish
        return redirect()->route('products.index')
            ->with('success', __('Товар обновлен.'));
    }
    

    public function destroy(Product $product)
    {
        if ($product->image_name) {
            unlink(public_path('images/products/' . $product->image_name));
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', __('Товар удален.'));
    }
}
