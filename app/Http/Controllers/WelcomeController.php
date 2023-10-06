<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Project;
use App\Models\Skile;
use App\Models\Social;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        $url=' ';
        $user=User::findorfail(1);
        $social=Social::all();
        $skiles=Skile::all();
        $experiences=Experience::all();
        $pro=Project::where('status',1)->get();
        $projectes=  DB::table('projects')
            ->leftJoin('images', 'projects.id', '=', 'images.project_id')
            ->select( DB::raw('DISTINCT(projects.id) as project_id'),'projects.name as project_name', 'images.name as image_name')->where('status',1)
            ->get();
        $age=Carbon::parse($user->birthday)->diff(Carbon::now()->format('Y'));

        return view('welcome',compact('user','social','skiles','age','experiences','projectes','pro','url'));

    }

    public function store( Request $request){

               $validation=$request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'subject'=>'required|string|min:3',
            'message'=>'required|string|min:4|max:200'

        ]);
//               dd($validation);

        $content=new Contact();
        $content->name=$request->input('name');
        $content->email=$request->input('email');
        $content->subject=$request->input('subject');
        $content->message=$request->input('message');
        $content->save();

        if ($validation->fails()) {
            return redirect()->route('welcom',['#contact']);

        } else {
            return redirect()->route('welcom',['#contact'])->with('msg', 'It Was Send Successfully');

        }
    }


    public function show(Request $request){
$url='/';
        $record=Project::findorfail($request->id);
        if ($record) {
            $record->increment('view');
        }
        $user=User::findorfail(1);
        $social=Social::all();
//        $project=Project::whereRaw('id=? and status=?',[$request->id,1])->get();
//        $project=Project::where('id',$request->id)->where('status',1)->get();
        $project=Project::where('id',$request->id)->where('status',1)->first();
        $images=Image::where('project_id',$request->id)->get();
//        $images=DB::table('images')->where('project_id',$request->id)->where('status',1)->get();
        return view('pages.details_project',compact('user','social','images','project','url'));
//        dd($request->id);
    }
}
