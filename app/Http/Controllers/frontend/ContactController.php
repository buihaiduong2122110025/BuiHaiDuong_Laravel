<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function getcontact()
    {
        return view('frontend.contact');
    }
    public function docontact(Request $request)
    {
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->title=$request->title;

        $contact->content=$request->content;
        // $contact->sort_order=$request->sort_order
        // $contact->image=$request->image;
       
        $contact->status='1';
        $contact->created_at=date('Y-m-d H:i:s');
        $contact->user_id=Auth::id()??1;

        $contact->save();
        return redirect()->route('website.getcontact');
   }
}
