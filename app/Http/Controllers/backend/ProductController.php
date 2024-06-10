<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $list_category = Category::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();
        $list_brand = Brand::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

        $list = Product::join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->where('product.status', '!=', 0)
            ->orderBy('product.created_at', 'desc')
            ->select("product.id","product.name","product.image","product.category_id","product.brand_id","product.status", "category.name as category_name", "brand.name as brand_name")
            ->get();


        $category_id_html = "";
        $brand_id_html = "";

        $htmlsortorder = "";

        foreach ($list_category as $row) {
            $category_id_html .= "<option value ='$row->id'>$row->name</option>";
        }

        foreach ($list_brand as $row) {
            $brand_id_html .= "<option value ='$row->id'>$row->name</option>";
        }
       
        return view('backend/product/index', compact("list", "category_id_html", "brand_id_html"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_category = Category::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();
        $list_brand = Brand::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

        $list = Product::join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->where('product.status', '!=', 0)
            ->orderBy('product.created_at', 'desc')
            ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->get();


        $category_id_html = "";
        $brand_id_html = "";


        foreach ($list_category as $row) {
            $category_id_html .= "<option value ='$row->id'>$row->name</option>";
        }

        foreach ($list_brand as $row) {
            $brand_id_html .= "<option value ='$row->id'>$row->name</option>";
        }
       
        return view('backend/product/create', compact("list", "category_id_html", "brand_id_html"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;

        $product->detail = $request->detail;

        $product->description = $request->description;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;

        //up anh
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('img/products/'), $fileName);
            $product->image = $fileName;
        }
        //end

        $product->status = $request->status;
        $product->slug = Str::of($request->name)->slug('-');
        $product->created_at = date('Y-m-d H:i:s');
        $product->created_by = Auth::id() ?? 1;

        $product->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $list = Product::join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->where('product.status', '!=', 0)
            ->orderBy('product.created_at', 'desc')
            ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->get();
        return view('backend/product/show', compact("list"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
