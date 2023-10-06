<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all=Project::all();
        return view('Dashboard.project.table_project',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.project.f_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $validate = $request->validate([
            'name' => 'string|min:3|required',
            'description' => 'string|required',
            'date' => 'date|nullable',
            'link' => 'url|nullable',
            'status' => 'numeric|required',
            'files' => 'max:2048',
            'files.*' => 'max:2048',

        ]);


        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->date = $request->input('date');
        $project->link = $request->input('link');
        $project->status = $request->input('status');
        $project->save();

        if ($request->file('files')) {

            foreach ($request->file('files') as $key => $file) {
                $table_img = new Image();

                $myimg_after = $file->store('/images', 'public');
//                echo $myimg_after;
                $table_img->name = $myimg_after;
                $table_img->project_id = $project->id;
            $table_img->save();

            }
        }
        return redirect()->route('project.create')->with('msg', "Add Successful $request->name");


    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data=Project::findorfail($project->id);
        return view('Dashboard.project.edit_project',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validate = $request->validate([
            'name' => 'string|min:3|required',
            'description' => 'string|required',
            'date' => 'date|nullable',
            'link' => 'url|nullable',
            'status' => 'numeric|required',
            'files' => 'max:2048',
            'files.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
//        dd ($project->id);
        if ($request->file('files')) {

            DB::table('images')->where('project_id',$project->id)->delete();

            foreach ($request->file('files') as $key => $file) {
                $table_img = new Image();

                $myimg_after = $file->store('/images', 'public');
//                echo $myimg_after;
                $table_img->name = $myimg_after;
                $table_img->project_id = $project->id;
                $table_img->save();
            }
        }
        $project->name=$request->input('name');
        $project->description=$request->input('description');
        $project->date=$request->input('date');
        $project->link=$request->input('link');
        $project->status=$request->input('status');
        $project->save();

        return redirect()->route('project.index')->with('msg','Update Successful  '.$request->name);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
//        $images=Image::where('project_id',$project->id)->select('name')->get();

//        if(isset($images)) {
//            foreach ($images as $img) {
//              $del=  Storage::disk()->delete($img);
//
//            }
//        }
       DB::table('images')->where('project_id',$project->id)->delete();
        $project->delete();
        return redirect()->route('project.index')->with('msg',"Delete Successful $project->name");
    }
}
