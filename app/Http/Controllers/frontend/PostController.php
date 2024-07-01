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
       

        $list_topic = Topic::where([['status', '=', 1],['id','=',$post->topic_id]])
        ->orderBy('Created_at', 'DESC')->get();

        $list = Post::where([['status', '=', 1],['topic_id','=',$post->topic_id],['type','=','post']])
        ->orderBy('created_at', 'desc')
        
        ->get();
        // $topic_id_html = "";


        // foreach ($list_topic as $row) {
        //     $topic_id_html ;
        // }
     
        return view('frontend.post_detail', compact('post','post_list','list','list_topic'));
    }

    // public function Post_Detail($slug)
    // {
       
    //     // Lấy thông tin của post dựa trên slug và status
    //     $post = Post::where([
    //         ['slug', '=', $slug],
    //         ['status', '=', 1]
    //     ]) ->first();
        
    //     $topic_list = Topic::where([['status', '=', 1],['id','=',$post->topic_id]])
    //     ->orderBy('created_at', 'DESC')
    //     ->get();
    //     $post_list = Post::where([['status', '=', 1],['type','=','post'],['topic_id','=',$post->topic_id],['id','!=',$post->id]])
       
    //     ->orderBy('created_at', 'desc')
    //     ->limit(2)
    //     ->get();
    //     // Trả về view với dữ liệu post và topic
    //     return view('frontend.post_detail', compact('post','topic_list','post_list'));
    // }
    

    public function page($slug)
    {

        $page_list = Post::where([['status', '=', 1],['type','=','page'], ['slug', '=', $slug]])
            ->orderBy('created_at', 'desc')
            // ->paginate(4);
            ->get();

        return view('frontend.page_category', compact("page_list"));
    }

}
 