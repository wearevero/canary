<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $products = Product::search($request->keyword)->get();
        } else {
            $products = Product::get();
        }
        return view('product.index', compact('products'))->with('no', 1);
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
            'id_kategori' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);
        return redirect()->route('products.index')->with('success', 'Success ading product 😾👍');
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

    public function update(Request $request, $id)
    {
        $input = Product::findOrFail($id);
        $input->update($request->except(["_token"]));

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

        } else { unset($input['image']); }
        return redirect()->route('products.index')->with('success', 'Success update product 😾👍');
    }

    public function destroy($id)
    {
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect()->route('products.index')->with('Success', 'Success delete product 😾👍');
    }
}
