<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Contact::where('status','!=',0)
        ->orderBy('Created_at', 'DESC')
        ->select("id","name","email","phone","title","status", )
        ->get();
        
        return view('backend/contact/index',compact("list"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/contact/create');
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
        $list = Contact::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("contatc.*")
        ->get();
    return view('backend/contact/show',compact("list"));
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
