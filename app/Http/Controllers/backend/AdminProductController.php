<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class AdminProductController extends Controller
{
    public function index()
    { 
    $product = DB::table('product')->get();
    return view('backend/product',['product'=> $product ]);
    }
}
