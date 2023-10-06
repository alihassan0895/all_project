<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all=Experience::all();
        return view('Dashboard.experience.table_experience',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.experience.f_experience');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        $validate=$request->validate([
            'name'=>'required|string|min:3',
            'description'=>'nullable|string',
            'date_st'=>'required|date|date_format:Y-m-d',
            'date_end'=>'required|date|date_format:Y-m-d|after:date_st',

        ]);

        $course =new Experience();
        $course->name=$request->input('name');
        $course->description=$request->input('description');
        $course->date_st=$request->input('date_st');
        $course->date_end=$request->input('date_end');
        $course->save();

        return redirect()->route('experience.create')->with('msg','Add Successful '.$request->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        $data=Experience::findorfail($experience->id);
        return view('Dashboard.experience.edit_experience',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        $validate=$request->validate([
            'name'=>'required|string|min:3',
            'description'=>'nullable|string',
            'date_st'=>'required|date|date_format:Y-m-d',
            'date_end'=>'required|date|date_format:Y-m-d|after:date_st',

        ]);
        $experience->name=$request->input('name');
        $experience->description=$request->input('description');
        $experience->date_st=$request->input('date_st');
        $experience->date_end=$request->input('date_end');
        $experience->save();
        return redirect()->route('experience.index')->with('msg','Update Successful '.$request->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experience.index')->with('msg','Update Delete '.$experience->name);
    }
}
