<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $list_topic = Topic::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

        $list = Post::leftJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->where('post.status', '!=', 0)
        ->orderBy('post.created_at', 'desc')
        ->select("post.id","post.title","post.topic_id","post.description","post.image","post.type","post.status", "topic.name as topic_name")
        ->get();

        $topic_id_html = "";


        foreach ($list_topic as $row) {
            $topic_id_html .= "<option value ='$row->id'>$row->name</option>";
        }
           return view('backend/post/index',compact("list","topic_id_html"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_topic = Topic::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

        $list = Post::leftJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->where('post.status', '!=', 0)
        ->orderBy('post.created_at', 'desc')
        ->select("post.*", "topic.name as topic_name")
        ->get();

        $topic_id_html = "";


        foreach ($list_topic as $row) {
            $topic_id_html .= "<option value ='$row->id'>$row->name</option>";
        }
           return view('backend/post/create',compact("list","topic_id_html"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
       $post = new Post();
       $post->title = $request->title;
       $post->topic_id = $request->topic_id;
       $post->description = $request->description;
       $post->type = $request->type;
       $post->detail = $request->detail;
        //up anh
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('img/posts/'), $fileName);
           $post->image = $fileName;
        }
        //end

       $post->status = $request->status;
       $post->slug = Str::of($request->name)->slug('-');
       $post->created_at = date('Y-m-d H:i:s');
       $post->created_by = Auth::id() ?? 1;

       $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $list = Post::leftJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->where('post.status', '!=', 0)
        ->orderBy('post.created_at', 'desc')
        ->select("post.*", "topic.name as topic_name")
        ->get();
           return view('backend/post/show',compact("list"));
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
