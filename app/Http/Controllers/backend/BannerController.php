<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 

        $list = Banner::where('status', '!=', 0)
        ->orderBy('created_at','DESC')
        ->select("id","image","name","link" ,"position","status")
        ->get();

    return view('backend/banner/index',compact("list"));
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $banner=new Banner();
        // $banner->name=request('name');
        // $banner->link=request('link');
        // $banner->position=request('position');
        // $banner->sort_order=request('sort_order');
        // $banner->image=request('image');
        // $banner->created_by=request('created_by');


        // $banner->status=request('status');
        // $banner->save();
        return view('backend/banner/create');



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->position = $request->position;

        $banner->description = $request->description;
        //up anh
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('img/banners/'), $fileName);
            $banner->image = $fileName;
        }
        //end

        $banner->status = $request->status;
        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;

        $banner->save();
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $banner =  Banner::find($id);
        return view('backend/banner/show',compact("banner"));

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
