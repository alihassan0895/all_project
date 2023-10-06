<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all=Course::all();
        return view('Dashboard.course.table_course',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.course.f_course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $validate=$request->validate([
            'name'=>'string|min:2|required|unique:courses',
            'description'=>'string|nullable'

        ]);
        $course=new Course();
        $course->name=$request->input('name');
        $course->description=$request->input('description');
        $course->save();
        return redirect()->route('course.create')->with('msg','insert Successful '.$course->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $data=Course::findorfail($course->id);
        return view('Dashboard.course.edit_course',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validate=$request->validate([
            'name'=>'string|min:2|required|unique:courses,id'.$request->id,
            'description'=>'string|nullable'

        ]);

        $course->name=$request->input('name');
        $course->description=$request->input('description');
        $course->save();
        return redirect()->route('course.index')->with('msg','Update Successful '.$course->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('msg','Delete Successful '.$course->name);
    }
}
