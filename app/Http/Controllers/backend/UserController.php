<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateStoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $list = User::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","image","name","username","phone","email","roles","status")
        ->get();
    return view('backend/user/index',compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/user/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
       $user = new User();
       $user->name = $request->name;
       $user->username = $request->username;
       $user->password = bcrypt($request->password);

       $user->gender = $request->gender;

       $user->email = $request->email;
       $user->phone = $request->phone;
       $user->gender = $request->gender;
       $user->roles = $request->roles;

        //up anh
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('img/users/'), $fileName);
           $user->image = $fileName;
        }
        //end

       $user->address = $request->address;
       $user->created_at = date('Y-m-d H:i:s');
       $user->created_by = Auth::id() ?? 1;

       $user->save();
        return redirect()->route('admin.user.index');
    }

    public function delete(string $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $user->status = 0;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->updated_by = Auth::id() ?? 1;

        $user->save();
        return redirect()->route('admin.user.index');
    }
    public function restore(string $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $user->status = 2;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->updated_by = Auth::id() ?? 1;

        $user->save();
        return redirect()->route('admin.user.trash');
    }
    public function trash()
    {
        $list = User::where('status', '=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'image', 'name', 'username', 'phone', 'email', 'user.roles',"status")
            ->get();
        return view('backend.user.trash', compact('list'));
    }
    public function status($id)
    {
        $user = User::find($id);
        if ($user) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $user->status = $user->status == 1 ? 2 : 1;
            $user->save();
        }

        return redirect()->route('admin.user.index');
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $list = User::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name', 'user.roles')
            ->get();

        return view('backend.user.edit', compact('list', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreUserRequest $request, string $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ["png", "jpg", "jpeg", "git", "webp"])) {
                $fileName = $user->slug . "." . $exten;
                $request->image->move(public_path('img/users/'), $fileName);
                $user->image = $fileName;
            }
        }
        $user->roles = $request->roles;
        $user->status = $request->status;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->updated_by = Auth::id() ?? 1;
        $user->save();
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $user->delete();
        return redirect()->route('admin.user.trash');
    }
    public function show(string $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        return view("backend.user.show", compact("user"));
    }
}
