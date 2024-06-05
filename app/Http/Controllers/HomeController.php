<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interier_design;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
{
    $projects = Project::latest()->take(3)->get();
    $categories = Category::latest()->take(3)->get();

    $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
    return view('home', compact('projects','categories','interier_designs_footer','products_footer','projects_footer','categories_footer'));
}
public function show(Request $request, Project $project)
{
    $products_footer = Product::latest()->take(3)->get();
    $projects_footer = Project::latest()->take(3)->get();
    $categories_footer = Category::latest()->take(3)->get();
    $interier_designs_footer = Interier_design::latest()->take(3)->get();
    
    return view('projects.show', compact('project','interier_designs_footer','products_footer','projects_footer','categories_footer'));

}

}
