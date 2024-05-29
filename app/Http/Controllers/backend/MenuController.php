<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Menu::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();
        $list_category = Category::where('status', '!=', '0')->orderBy('created_at', 'desc')->get();
        $list_brand = Brand::where('status', '!=', '0')->orderBy('created_at', 'desc')->get();
        $list_topic = Topic::where('status', '!=', '0')->orderBy('created_at', 'desc')->get();
        $list_post = Post::where([['status', '!=', '0'], ['type', '=', 'post']])->orderBy('created_at', 'desc')->get();
            return view('backend/menu/index',compact("list","list_category","list_brand","list_topic","list_post"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
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
