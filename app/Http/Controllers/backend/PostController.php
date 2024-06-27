<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateStorePostRequest;
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
       $post->slug = Str::of($request->title)->slug('-');

       $post->detail = $request->detail;
        //up anh

        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ["png", "jpg", "jpeg", "git", "webp"])) {
                $fileName = $post->slug . "." . $exten;
                $request->image->move(public_path('img/posts/'), $fileName);
                $post->image = $fileName;
            }
        }
        // if ($request->image) {
        //     $fileName = date('YmdHis') . '.' . $request->image->extension();
        //     $request->image->move(public_path('img/posts/'), $fileName);
        //    $post->image = $fileName;
        // }
        //end

       $post->status = $request->status;
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
        $post = Post::leftJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->where('post.status', '!=', 0)
        ->orderBy('post.created_at', 'desc')
        ->select("post.*", "topic.name as topic_name")
        ->get();
        $post = Post::find($id);
        if ($post == null) {
            return redirect()->route('admin.post.index');
        }
        
           return view('backend/post/show',compact("post"));
    }
    // public function show(string $id)
    // {
    //     $category = Category::find($id);
    //     if ($category == null) {
    //         return redirect()->route('admin.category.index');
    //     }
    //     return view("backend.category.show", compact("category"));
    // }


    /**
     * Show the form for editing the specified resource.
     */
    public function restore(string $id){
        $post = Post::find($id);
        if($post==null){
            return redirect()->route('admin.post.index');
        }
        $post->status=2;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->updated_by=Auth::id()??1;

        $post->save();
        return redirect()->route('admin.post.trash');
    }
    public function delete(string $id){
        $post = Post::find($id);
        if($post==null){
            return redirect()->route('admin.post.index');
        }
        $post->status=0;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->updated_by=Auth::id()??1;

        $post->save();
        return redirect()->route('admin.post.index');
    }
    public function status($id)
    {
        $post = Post::find($id);
        if ($post) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $post->status = $post->status == 1 ? 2 : 1;
            $post->save();
        }

        return redirect()->route('admin.post.index');
    }

    private function getTopic()
    {
        return Topic::where('status', '!=', 0)->orderBy('name')->get();
    }
    public function edit(string $id)
    {
        $post = Post::find($id);
        if ($post == null) {
            return redirect()->route('admin.post.index');
        }
        // $list = Product::where('product.status','!=',0)
        // ->join('category','product.category_id','=','category.id')
        // ->join('brand','product.brand_id','=','brand.id')
        // ->orderBy('product.created_at','DESC')
        // ->select("product.id","product.name","product.image","category.name as categoryname","brand.name as brandname")
        // ->get();
        $topic_id = Topic::where('status', '!=', 0)->orderBy('name')->get();
        // $type = Topic::where('status', '!=', 0)->orderBy('name')->get();

        return view("backend.post.edit", compact("post", "topic_id"));
    }

    // public function edit(string $id)
    // {
    //     $list_topic = Topic::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

    //     $post = Post::leftJoin('topic', 'post.topic_id', '=', 'topic.id')
    //     ->where('post.status', '!=', 0)
    //     ->orderBy('post.created_at', 'desc')
    //     ->select("post.id","post.title","post.topic_id","post.description","post.image","post.type","post.status", "topic.name as topic_name")
    //     ->get();

    //     $topic_id_html = "";


    //     foreach ($list_topic as $row) {
    //         $topic_id_html .= "<option value ='$row->id'>$row->name</option>";
    //     }
    //        return view('backend/post/edit',compact("post","topic_id_html"));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStorePostRequest $request, string $id)
    {
        $post = Post::find($id);
        if($post==null){
            return redirect()->route('admin.post.index');
        }
        $post->title=$request->title;
        $post->detail=$request->detail;
        $post->description=$request->description;
        $post->topic_id=$request->topic_id;
        $post->type=$request->type;
        
        $post->slug=Str::of($request->title)->slug('-');

        // $post->image=$request->image;
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ["png", "jpg", "jpeg", "git", "webp"])) {
                $fileName = $post->slug . "." . $exten;
                $request->image->move(public_path('img/posts/'), $fileName);
                $post->image = $fileName;
            }
        }
        $post->status=$request->status;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->updated_by=Auth::id()??1;

        $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if($post==null){
            return redirect()->route('admin.post.index');
        }
        $post->delete();
        return redirect()->route('admin.post.trash');
    }
    public function trash(){
        $list = Post::where('status', '=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("id", "image", "title", "detail", "type")
            ->get();
        return view("backend.post.trash", compact("list"));
    }
}
