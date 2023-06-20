<?php

namespace App\Http\Controllers;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth"]);
        return view("product.index");
    }

    public function index(Request $request)
    {
        if ($request->keyword) {
            $products = Product::search($request->keyword)->paginate(10);
        } else {
            $products = Product::with("category")
                ->select("id", "no_item", "image", "id_kategori")
                ->paginate(10);
        }

        return view("product.index", compact("products"))->with("no", 1);
    }

    public function create()
    {
        $categorys = Category::select("id", "nama_kategori")->get();
        return view("product.create", compact("categorys"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "no_item" => "required",
            "id_kategori" => "required",
            "image" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:5120",
            "size" => "nullable",
            "size_stone" => "nullable",
            "qty_stone" => "nullable",
        ]);

        $input = $request->all();
        if ($image = $request->file("image")) {
            $destinationPath = "image/";
            $itemImage =
                str_replace(
                    str_split("~\/:*?<>|?+: "),
                    "-",
                    $request["no_item"]
                ) .
                "." .
                $image->getClientOriginalExtension();
            $image->move($destinationPath, $itemImage);
            $input["image"] = "$itemImage";
        }
        Product::create($input);

        Alert::success("Berhasil 🎉🥳", "Berhasil menambahkan data " . $request->no_item);
        return redirect()->route("products.index");
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
        $categorys = Category::get();

        return view("product.edit", compact("product", "categorys"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "no_item" => "required",
            "id_kategori" => "required",
            "size" => "nullable",
            "size_stone" => "nullable",
            "qty_stone" => "nullable",
        ]);
        $update["no_item"] = $request->get("no_item");
        $update["id_kategori"] = $request->get("id_kategori");
        $update["size"] = $request->get("size");
        $update["size_stone"] = $request->get("size_stone");
        $update["qty_stone"] = $request->get("qty_stone");
        if ($files = $request->file("image")) {
            $destinationPath = "image/";
            $itemImage =
                str_replace(
                    str_split("~\/:*?<>|?+: "),
                    "-",
                    $request["no_item"]
                ) .
                "." .
                $files->getClientOriginalExtension();
            $files->move($destinationPath, $itemImage);
            $update["image"] = "$itemImage";
        }
        Product::where("id", $id)->update($update);

        Alert::success(
            "Berhasil 🎉🥳",
            "Berhasil mengubah data " . $request->no_item
        );
        return redirect()->route("products.index");
    }

    public function destroy($id)
    {
        $product = Product::findOrfail($id);
        $product->delete();

        Alert::success("Berhasil 🎉🥳", "Berhasil menghapus data " . $product->no_item);
        return redirect()->route("products.index");
    }

    public function export()
    {
        return new ProductsExport();
    }

    public function importstore(Request $request)
    {
        $file = $request->file("file");
        (new ProductsImport())->import($file);

        Alert::success("Berhasil 🎉🥳", "Berhasil import data");
        return back();
    }

    public function import()
    {
        return view("product.import");
    }
}
