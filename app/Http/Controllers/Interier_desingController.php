<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interier_design;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class Interier_desingController extends Controller
{
    public function index()
    {
        $interier_designs = Interier_design::all();
        $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
        return view('interier_designs.index', compact('interier_designs', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
    }
    public function show($locale, $slug)
{
    // Til almashtirish funksiyasi kodlari
    $interier_design = Interier_design::where('slug_' . $locale, $slug)->first();
    $products_footer = Product::latest()->take(3)->get();
    $projects_footer = Project::latest()->take(3)->get();
    $categories_footer = Category::latest()->take(3)->get();
    $interier_designs_footer = Interier_design::latest()->take(3)->get();
    return view('interier_designs.show', compact('interier_design', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
}
}
