<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MasterCategory;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $main_categorys = MasterCategory::get();
        $categorys = Category::get();

        return view('dashboard', compact('products', 'main_categorys', 'categorys'));
    }
}
