<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $list_post = Post::where([['status', '!=', '0']])->orderBy('created_at', 'desc')->get();
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

            if(isset($request->createCategory)){
                $listid =$request->categoryid;
                if($listid){
                    foreach($listid as $id){
                        $category = Category::find($id);
                        if($category != null){
                            $menu = new Menu();
                            $menu->name = $category->name;
                            $menu->link = 'category/' . $category->slug;
                            $menu->sort_order = 0;
                            $menu->parent_id = 0;
                            $menu->type = 'category';
                            $menu->position =$request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id() ?? 1;
                            $menu->status = $request->status;
                            $menu->save(); 
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo"khong co";
                }
            }

            if(isset($request->createBrand)){
                $listid =$request->brandid;
                if($listid){
                    foreach($listid as $id){
                        $brand = Brand::find($id);
                        if($brand != null){
                            $menu = new Menu();
                            $menu->name = $brand->name;
                            $menu->link = 'brand/' . $brand->slug;
                            $menu->sort_order = 0;
                            $menu->parent_id = 0;
                            $menu->type = 'brand';
                            $menu->position =$request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id() ?? 1;
                            $menu->status = $request->status;
                            $menu->save(); 
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo"khong co";
                }

            }
            if(isset($request->createTopic)){
                $listid =$request->topicid;
                if($listid){
                    foreach($listid as $id){
                        $topic = Topic::find($id);
                        if($topic != null){
                            $menu = new Menu();
                            $menu->name = $topic->name;
                            $menu->link = 'topic/' . $topic->slug;
                            $menu->sort_order = 0;
                            $menu->parent_id = 0;
                            $menu->type = 'topic';
                            $menu->position =$request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id() ?? 1;
                            $menu->status = $request->status;
                            $menu->save(); 
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo"khong co";
                }

            }
            if(isset($request->createPage)){
                $listid =$request->postid;
                if($listid){
                    foreach($listid as $id){
                        $post = Post::where([['id','=',$id],])->first();
                        if($post != null){
                            $menu = new Menu();
                            $menu->name = $post->title;
                            $menu->link = 'page/' . $post->slug;
                            $menu->sort_order = 0;
                            $menu->parent_id = 0;
                            $menu->type = 'page';
                            $menu->position =$request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id() ?? 1;
                            $menu->status = $request->status;
                            $menu->save(); 
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo"khong co";
                }

            }
            if(isset($request->createCustom)){
                if(isset($request->name, $request->link)){
                    $menu = new Menu();
                    $menu->name = $request->name;
                    $menu->link = $request->link;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->type = 'custom';
                    $menu->position =$request->position;
                    // $menu->table_id = null;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1;
                    $menu->status = $request->status;
                    $menu->save(); 
                    return redirect()->route('admin.menu.index');

                }

            }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }
        return view("backend.menu.show", compact("menu"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            return redirect()->route('admin.menu.index');
        }
        $categories = Category::all();
        $brands = Brand::all();
        $topics = Topic::all();
        $pages = Post::where('type', 'page')->get();
        $posts = Post::where('type', 'post')->get();
        $list = Menu::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'link', 'name', 'position', 'status')
            ->get();

        return view('backend.menu.edit', compact('menu', 'list', 'categories', 'brands', 'topics', 'pages', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            return redirect()->route('admin.menu.index');
        }
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->position = $request->position;
        $menu->status = $request->status;
        $menu->parent_id = $request->parent_id;

        $menu->updated_by = Auth::id() ?? 1;
        $menu->save();
        return redirect()->route('admin.menu.index')->with('success', 'Menu đã được cập nhật thành công.');

    }

    /**
     * Remove the specified resource from storage.
     */

    public function status($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $menu->status = $menu->status == 1 ? 2 : 1;
            $menu->save();
        }

        return redirect()->route('admin.menu.index');
    }

    // public function restore(string $id){
    //     $menu = Menu::find($id);
    //     if($menu==null){
    //         return redirect()->route('admin.menu.index');
    //     }
    //     $menu->status=2;
    //     $menu->updated_at=date('Y-m-d H:i:s');
    //     $menu->updated_by=Auth::id()??1;

    //     $menu->save();
    //     return redirect()->route('admin.menu.trash');
    // }
    public function trash(){
        $list = Menu::where('status','=',0)
        ->orderBy('created_at','DESC')
        ->select("menu.*")
        ->get();
        return view("backend.menu.trash",compact("list"));
    }
    public function delete(string $id){
        $menu = Menu::find($id);
        if($menu==null){
            return redirect()->route('admin.menu.index');
        }
        $menu->status=0;
        $menu->updated_at=date('Y-m-d H:i:s');
        $menu->updated_by=Auth::id()??1;

        $menu->save();
        return redirect()->route('admin.menu.index');
    }


}
