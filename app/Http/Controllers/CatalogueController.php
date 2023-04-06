<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        return view('catalogue.index', compact('categorys'))->with('no', 1);
    }

    public function testing()
    {
        $categorys = Category::get();
        return view('catalogue.testing', compact('categorys'))->with('no', 1);
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
