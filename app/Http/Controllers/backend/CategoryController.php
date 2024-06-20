<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateStoreCategoryRequest;
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
        // $category->image=$request->image;
        //up anh
        $category->slug = Str::of($request->name)->slug('-');

        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ["png", "jpg", "jpeg", "git", "webp"])) {
                $fileName = $category->slug . "." . $exten;
                $request->image->move(public_path('img/categorys/'), $fileName);
                $category->image = $fileName;
            }
            // $fileName = date('YmdHis') . '.' . $request->image->extension();
            // $request->image->move(public_path('images/categorys/'), $fileName);
            // $category->image = $fileName;
        }
        //end
        $category->status = $request->status;
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
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        return view("backend.category.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        $list = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("id", "name", "sort_order")
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            if ($category->parent_id == $row->id) {
                $htmlparentid .= "<option selected value='" . $row->id . "'>" . $row->name . "</option>";
            } else {
                $htmlparentid .= "<option value='" . $row->id . "'>" . $row->name . "</option>";
            }
            if ($category->sort_order - 1 == $row->sort_order) {
                $htmlsortorder .= "<option selected value='" . ($row->sort_order + 1) . "'>sau: " . $row->name . "</option>";
            } else {
                $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>sau: " . $row->name . "</option>";
            }
        }
        return view("backend.category.edit", compact("list", "htmlparentid", "htmlsortorder", "category"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreCategoryRequest $request, string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        } // lấy đoạn cập nhật 
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        // $category->image=$request->image;
        //up anh
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ["png", "jpg", "jpeg", "git", "webp"])) {
                $fileName = $category->slug . "." . $exten;
                $request->image->move(public_path('img/categorys/'), $fileName);
                $category->image = $fileName;
            }
            // $fileName = date('YmdHis') . '.' . $request->image->extension();
            // $request->image->move(public_path('images/categorys/'), $fileName);
            // $category->image = $fileName;
        }
        //end
        $category->status = $request->status;
        $category->slug = Str::of($request->name)->slug('-');
        $category->updated_at = date('Y-m-d H:i:s');
        $category->updated_by = Auth::id() ?? 1;

        $category->save();
        return redirect()->route('admin.category.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        $category->delete();
        return redirect()->route('admin.category.trash');
    }

    public function trash()
    {
        $list = Category::where('status', '=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("id", "image", "name", "slug", "sort_order", "status")
            ->get();

        return view("backend.category.trash", compact("list"));
    }

    public function restore(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }   
        $category->status = 2;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->updated_by = Auth::id() ?? 1;

        $category->save();
        return redirect()->route('admin.category.trash');
    }
    public function delete(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        $category->status = 0;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->updated_by = Auth::id() ?? 1;

        $category->save();
        return redirect()->route('admin.category.index');
    }
    //////////////////////////////
    public function status(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        $category->status = ($category->status == 1) ? 2 : 1;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->updated_by = Auth::id() ?? 1;

        $category->save();
        return redirect()->route('admin.category.index');
    }
}



