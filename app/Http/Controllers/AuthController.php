<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view("login");
    }
    public function dologin(Request $request)
    {
        $credentials = [
            
            'password' => $request->password,
            'status' => 1
        ];
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $credentials["email"] = $request->username;
        } else {
            $credentials["username"] = $request->username;
        }
        if (Auth::attempt($credentials)) {


            return redirect()->route('site.home');
        } else {
            return redirect()->route('website.getlogin')->with("message", "Đăng nhập không thành công");
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('site.home');
    }

    public function getregister()
    {
        return view("register");

    }
    public function doregister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
 
        $user->gender = $request->gender;
 
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->gender = $request->gender;
        $user->roles = 'customer';
 
         //up anh
         if ($request->image) {
             $fileName = date('YmdHis') . '.' . $request->image->extension();
             $request->image->move(public_path('img/users/'), $fileName);
            $user->image = $fileName;
         }
         //end
 
        // $user->address = $request->address;
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->status = '1';

        $user->save();
        return redirect()->route('site.home');
    }




}
