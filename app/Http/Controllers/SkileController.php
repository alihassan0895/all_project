<?php

namespace App\Http\Controllers;

use App\Models\Skile;
use App\Http\Requests\StoreSkileRequest;
use App\Http\Requests\UpdateSkileRequest;

class SkileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all=Skile::all();
        return view('Dashboard.skile.table_skiles',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Dashboard.skile.f_skile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkileRequest $request)
    {
//        dd($request);
        $validation=$request->validate([
            'name'=>'string|required|min:2|unique:skiles',
            'rate'=>'numeric|required'
        ]);
        $skiles=new Skile();
        $skiles->name=$request->input('name');
        $skiles->rate=$request->input('rate');
        $skiles->save();
//        انا هستخدم whit مش compact عشان withe في الحاله تعامل معاملة session
       return redirect()->route('skile.create')->with('msg','insert Successful '.$request->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Skile $skile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skile $skile)
    {
       $data=Skile::findOrfail($skile->id);
       return view('Dashboard.skile.edit_skile',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkileRequest $request, Skile $skile)
    {
        $validation=$request->validate([
            'name'=>'string|required|min:2|unique:skiles,id,'.$request->id,
            'rate'=>'numeric|required'
        ]);
        $skile->name=$request->input('name');
        $skile->rate=$request->input('rate');
        $skile->save();
        return redirect()->route('skile.index')->with('msg','Update Successful '.$request->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skile $skile)
    {
        $skile->delete();
        return redirect()->route('skile.index')->with('msg','Delete Successful '.$skile->name);
    }
}
