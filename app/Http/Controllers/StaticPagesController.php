<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Interier_design;
use App\Models\Product;
use App\Models\Project;
class StaticPagesController extends Controller
{
    public function lyustra_v_tashkente()
    {
        $products_footer = Product::latest()->take(3)->get();
        $projects_footer = Project::latest()->take(3)->get();
        $categories_footer = Category::latest()->take(3)->get();
        $interier_designs_footer = Interier_design::latest()->take(3)->get();
        return view('lyustra_v_tashkente', compact('categories_footer', 'interier_designs_footer', 'projects_footer', 'products_footer'));
    }
    public function about()
    {
        return view('lyustra_v_tashkente');
    }
}
