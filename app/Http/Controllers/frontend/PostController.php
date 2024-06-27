<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $post_list = Post::where([['status', '=', 1],['type','=','post']])
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        return view('frontend.post', compact("post_list"));
    }
    public function topic($slug)
    {

        $row_topic =  Topic::where([['slug', '=', $slug], ['status', '=', 1]])
        ->select("id", "name", 'slug')
        ->first();
      
        $post_list = Post::where([['status', '=', 1],['type','=','post'],['topic_id','=',$row_topic->id]])
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        return view('frontend.post_category', compact("post_list", "row_topic"));
    }


    public function post_detail($slug)
    {
        $post = Post::where([['status', '=', 1], ['slug', '=', $slug],['type','=','post']])->first();
        $post_list = Post::where([['status', '=', 1],['id','!=',$post->id],['topic_id','=',$post->topic_id],['type','=','post']])
        ->orderBy('created_at', 'desc')
        ->limit(9)
        ->get();

        return view('frontend.post_detail', compact('post','post_list'));
    }

    public function page($slug)
    {

        $page_list = Post::where([['status', '=', 1],['type','=','page'], ['slug', '=', $slug]])
            ->orderBy('created_at', 'desc')
            // ->paginate(4);
            ->get();

        return view('frontend.page_category', compact("page_list"));
    }

}
 