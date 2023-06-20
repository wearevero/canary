<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::select("id", "nama_kategori")->get();
        $products = Product::latest()
            ->take(9)
            ->get();

        return view("catalogue.index", compact("products", "categorys"))->with(
            "no",
            1
        );
    }

    public function show_category($id)
    {
        $products = Product::where("id_kategori", $id)->get();
        $categorys = Category::select("id", "nama_kategori")->get();

        return view("catalogue.slug", compact("products", "categorys"))->with(
            "no",
            1
        );
    }
}
