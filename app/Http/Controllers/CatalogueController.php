<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CatalogueController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        $products = Product::latest()->get();

        return view("catalogue.index", compact("products", "categorys"))->with(
            "no",
            1
        );
    }

    public function show_category(string $id)
    {
        return view("catalogue.slug", compact("categorys"));
    }
}
