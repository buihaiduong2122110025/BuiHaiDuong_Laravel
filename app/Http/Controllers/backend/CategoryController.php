<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $list = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("id","name","image","slug","status")
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlparentid .= "<option value='" . $row->id . "'>" . $row->name . "</option>";
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>After: " . $row->name . "</option>";
        }
        return view('backend/category/index', compact("list", "htmlparentid", "htmlsortorder"));
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
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        //up anh
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('img/categorys/'), $fileName);
            $category->image = $fileName;
        }
        //end

        $category->status = $request->status;
        $category->slug = Str::of($request->name)->slug('-');
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;

        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category =  Category::find($id);
        return view('backend/category/show', compact("category"));
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
