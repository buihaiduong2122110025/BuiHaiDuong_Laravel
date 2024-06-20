<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateStoreProductRequest;
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
        $product = Product::join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->where('product.status', '!=', 0)
            ->orderBy('product.created_at', 'desc')
            ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->get();
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        
           return view('backend/product/show',compact("product"));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function restore(string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        $product->status = 2;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->updated_by = Auth::id() ?? 1;

        $product->save();
        return redirect()->route('admin.product.trash');
    }
    public function delete(string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        $product->status = 0;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->updated_by = Auth::id() ?? 1;

        $product->save();
        return redirect()->route('admin.product.index');
    }
    public function status(string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        $product->status = ($product->status == 1) ? 2 : 1;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->updated_by = Auth::id() ?? 1;

        $product->save();
        return redirect()->route('admin.product.index');
    }
    public function trash()
    {
        $list = Product::where('product.status', '=', 0)
            ->join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->orderBy('product.created_at', 'desc')
            ->select("product.id", "product.name", "product.image", "category.name as categoryname", "brand.name as brandname")
            ->get();
        return view("backend.product.trash", compact("list"));
    }
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        $product->delete();
        return redirect()->route('admin.product.trash');
    }

    private function getBrands()
    {
        return Brand::where('status', '!=', 0)->orderBy('name')->get();
    }
    public function edit(string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        // $list = Product::where('product.status','!=',0)
        // ->join('category','product.category_id','=','category.id')
        // ->join('brand','product.brand_id','=','brand.id')
        // ->orderBy('product.created_at','DESC')
        // ->select("product.id","product.name","product.image","category.name as categoryname","brand.name as brandname")
        // ->get();
        $categories = Category::where('status', '!=', 0)->orderBy('name')->get();
        $brands = $this->getBrands();
        return view("backend.product.edit", compact("product", "categories", "brands"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreProductRequest $request, string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index');
        }
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        // $product->image=$request->image;
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ["png", "jpg", "jpeg", "git", "webp"])) {
                $fileName = $product->slug . "." . $exten;
                $request->image->move(public_path('img/products/'), $fileName);
                $product->image = $fileName;
            }
        }
        $product->slug = Str::of($request->name)->slug('-');
        $product->status = $request->status;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->updated_by = Auth::id() ?? 1;

        $product->save();
        return redirect()->route('admin.product.index');
    }
}
