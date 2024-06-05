<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interier_design;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
        return view('projects.index', compact('projects', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
    }
    public function show($locale, $slug)
{
    // Til almashtirish funksiyasi kodlari
    $project = Project::where('slug_' . $locale, $slug)->first();
    $products_footer = Product::latest()->take(3)->get();
    $projects_footer = Project::latest()->take(3)->get();
    $categories_footer = Category::latest()->take(3)->get();
    $interier_designs_footer = Interier_design::latest()->take(3)->get();
    return view('projects.show', compact('project', 'categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
}
}
