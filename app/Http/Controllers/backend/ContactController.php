<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function restore(string $id){
        $contact = Contact::find($id);
        if($contact==null){
            return redirect()->route('admin.contact.index');
        }
        $contact->status=2;
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->updated_by=Auth::id()??1;

        $contact->save();
        return redirect()->route('admin.contact.trash');
    }
    public function delete(string $id){
        $contact = Contact::find($id);
        if($contact==null){
            return redirect()->route('admin.contact.index');
        }
        $contact->status=0;
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->updated_by=Auth::id()??1;

        $contact->save();
        return redirect()->route('admin.contact.index');
    }
    public function status($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $contact->status = $contact->status == 1 ? 2 : 1;
            $contact->save();
        }

        return redirect()->route('admin.contact.index');
    }
    public function index()
    {
        $list = Contact::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name","email","phone","status")
        ->get();
        return view("backend.contact.index",compact("list"));
    }
    public function trash(){
        $list = Contact::where('status','=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name","email","phone")
        ->get();
        return view("backend.contact.trash",compact("list"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Contact::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name","email","phone")
        ->get();
        return view("backend.contact.create",compact("list"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }
        return view("backend.contact.show", compact("contact"));
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
        $contact = Contact::find($id);
        if($contact==null){
            return redirect()->route('admin.contact.index');
        }
        $contact->delete();
        return redirect()->route('admin.contact.trash');
    }
}
