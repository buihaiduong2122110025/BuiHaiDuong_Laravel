<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    { 
        $menu = DB::table('menu')->get();
        return view('frontend/home',['product'=> $menu ]);
        }}
