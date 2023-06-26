<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Illuminate\Http\Request;

class ProductEximController extends Controller
{
    public function productExport()
    {
        return new ProductsExport();
    }

    public function import()
    {
        return view("product.import");
    }

    public function importstore(Request $request)
    {
        $file = $request->file("file");
        (new ProductsImport())->import($file);

        return back()->with("success", "Berhasil import data product 😾👍");
    }
}
