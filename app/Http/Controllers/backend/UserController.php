<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            
        $list = User::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("user.*")
        ->get();
    return view('backend/user/show',compact("list"));
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
