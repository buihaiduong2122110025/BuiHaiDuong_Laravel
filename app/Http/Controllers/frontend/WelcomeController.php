<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function index()
    { 
    $product = DB::table('product')->get();
    return view('frontend/welcome',['product'=> $product ]);
    }
}
