<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interier_design;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
        return view('products.index', compact('products', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
    }
    public function show($locale, $slug)
{
    // Til almashtirish funksiyasi kodlari
    $product = Product::where('slug_' . $locale, $slug)->first();
    $products_footer = Product::latest()->take(3)->get();
    $projects_footer = Project::latest()->take(3)->get();
    $categories_footer = Category::latest()->take(3)->get();
    $interier_designs_footer = Interier_design::latest()->take(3)->get();
    return view('products.show', compact('product', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
}
}
