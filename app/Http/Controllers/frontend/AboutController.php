<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $post = Post::where([['status', '=', 1],['type','=','page']])
        ->orderBy('created_at', 'asc')
        ->get();
        return view('frontend.about',compact('post'));
    }
}
