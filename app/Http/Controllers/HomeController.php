<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Experience;
use App\Models\Home;
use App\Models\Project;
use App\Models\Skile;
use App\Models\Social;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::findorfail(1);
        $social=Social::all();
        $skiles=Skile::all();
        $experiences=Experience::all();
        $pro=Project::all();
        $projectes=  DB::table('projects')
            ->leftJoin('images', 'projects.id', '=', 'images.project_id')
            ->select( DB::raw('DISTINCT(projects.id) as project_id'),'projects.name as project_name', 'images.name as image_name')->where('status',1)
            ->get();
//            DB::table('projects')
//            ->leftJoin('images', 'projects.id', '=', 'images.project_id')
//            ->select('projects.name as project_name', 'images.name as image_name', 'projects.id')
//
//            ->get();

//        \Carbon\Carbon::parse($user->birth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
        $age=Carbon::parse($user->birthday)->diff(Carbon::now()->format('Y'));
//dd($projectes);
        return view('welcome',compact('user','social','skiles','age','experiences','projectes','pro'));
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
    public function store(Request $request)
    {
                $validation=$request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'subject'=>'required|string|min:3',
            'message'=>'required|string|min:4|max:200'

        ]);
//        $content=new Contact();
        $content=new Contact();
        $content->name=$request->input('name');
        $content->email=$request->input('email');
        $content->subject=$request->input('subject');
        $content->message=$request->input('message');
        $content->save();
        return redirect()->route('Welcome.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
