<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $products = Product::search($request->keyword)->select('id', 'no_item', 'kode_barang')->get();
        } else {
            $products = Product::all();
        }

        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_item' => 'required',
            'kode_barang' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        return view("product.slug", [
            "product" => Product::findOrFail($id),
        ]);
    }

    public function edit(string $id)
    {
        $product = Product::findOrfail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
