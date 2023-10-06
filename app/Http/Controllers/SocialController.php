<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all=Social::all();
        return view('Dashboard.social.table_social',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                return view('Dashboard.social.f_social');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocialRequest $request)
    {
        $validate=$request->validate([
            'name'=>'required|string|unique:socials',
            'icon'=>'required|string|unique:socials',
            'url'=>'required|url|unique:socials'
        ]);

        $social=new Social();

        $social->name=$request->input('name');
        $social->url=$request->input('url');
        $social->icon=$request->input('icon');
        $social->save();

        return redirect()->route('social.create')->with('msg','Add Successful '.$request->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {

        $data=Social::findorfail($social->id);

        return view('Dashboard.social.edit_social',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        $validate=$request->validate([
            'name'=>'required|string|unique:socials,id'.$request->id,
            'icon'=>'required|string|unique:socials,id'.$request->id,
            'url'=>'required|url|unique:socials,id'.$request->id
        ]);

       $social->name= $request->input('name');
       $social->icon= $request->input('icon');
       $social->url= $request->input('url');
       $social->save();

       return redirect()->route('social.index')->with('msg','Update Successful '.$request->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $social->delete();

        return redirect()->route('social.index')->with('msg','Delete Successful '.$social->name);
    }
}
