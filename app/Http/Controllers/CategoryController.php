<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MasterCategory;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $main_categorys = MasterCategory::with('sub_category')->get();
        $categorys = Category::all();
        $sub_categorys = MasterCategory::with('main_category')->where('id', 'id_master_category')->get();
        $products = Product::latest()
            ->take(9)
            ->get();

        return view(
            "catalogue.index",
            compact("products", "sub_categorys", "main_categorys")
        )
            ->with("no", 1);
    }

    public function show_category($id)
    {
        $main_categorys = MasterCategory::with('sub_category')->get();
        $sub_categorys = MasterCategory::with('main_category')->where('id', 'id_master_category')->get();
        $products = Product::where("id_sub_category", $id)->get();
        $categorys = Category::get();
        $cat = Category::where("id", $id)->select('nama_kategori')->get();

        return view(
            "catalogue.slug",
            compact("products", "categorys", "cat", "main_categorys", "sub_categorys")
        )
            ->with(
                "no",
                1
            );
    }
}
