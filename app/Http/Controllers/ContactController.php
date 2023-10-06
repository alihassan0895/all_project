<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all=Contact::all();
        return view('Dashboard.contact.table_contact',compact('all'));
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
    public function store(StoreContactRequest $request)
    {
//        $validation=$request->validate([
//            'name'=>'required|string|min:3',
//            'email'=>'required|email',
//            'subject'=>'required|string|min:3',
//            'message'=>'required|string|min:4|max:200'
//
//        ]);
//        $content=new Contact();
//
//        $content->name=$request->input('name');
//        $content->email=$request->input('email');
//        $content->subject=$request->input('subject');
//        $content->message=$request->input('message');
//        $content->save();
//        return redirect()->route('Welcome.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
