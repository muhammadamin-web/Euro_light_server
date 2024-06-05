<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interier_design;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
        return view('categories.index', compact('categories', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
    }



    public function show($locale, $slug)
    {
        $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
        $category = Category::where('slug_' . $locale, $slug)->first();

        if (!$category) {
            Log::error('Category not found with slug: ' . $slug);
            abort(404);
        }

        $products = Product::where('category_id', $category->id)->get();

        return view('categories.show', compact('category', 'products', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
    }
}
