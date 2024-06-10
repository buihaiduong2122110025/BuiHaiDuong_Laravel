<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 

        $list = Topic::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name","slug","sort_order","status")
            ->get();
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>After: " . $row->name . "</option>";
        }
        return view('backend/topic/index', compact("list", "htmlsortorder"));
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/topic/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->sort_order = $request->sort_order;
        //up anh
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('img/topics/'), $fileName);
            $topic->image = $fileName;
        }
        //end

        $topic->status = $request->status;
        $topic->slug = Str::of($request->name)->slug('-');
        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;

        $topic->save();
        return redirect()->route('admin.topic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $list = Topic::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","description","name","slug")
        ->get();
    return view('backend/topic/show',compact("list"));
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
