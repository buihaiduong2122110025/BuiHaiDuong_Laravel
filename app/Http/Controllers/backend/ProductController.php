<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $list = Product::join('category', 'product.category_id', '=', 'category.id')
        ->join('brand', 'product.brand_id', '=', 'brand.id')
        ->where('product.status', '!=', 0)
        ->orderBy('product.created_at', 'desc')
        ->select("product.*", "category.name as category_name", "brand.name as brand_name")
        ->get();
            return view('backend/product/index',compact("list"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/product/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            return view('backend/product/show',compact("list"));
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
