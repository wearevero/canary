<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        $products = Product::get();
        return view('catalogue.index', compact('products','categorys'))->with('no', 1);
    }

    public function show_category(string $id)
    {
        return view('catalogue.slug', compact('categorys'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
