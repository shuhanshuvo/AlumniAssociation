<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Comment;
use Auth;
use Redirect;

class JobController extends Controller
{
    public function user_job_post(Request $request){
        // return Redirect('/');
        $user_id = Auth::user()->id;
        $user =  User::find($user_id);
        $user = new JobPost;
        $user->job_title        = $request->job_title;
        $user->company          = $request->company;
        $user->job_description  = $request->job_description;
        $user->user_id          =  $user_id;
        $user->save();

        return Redirect('/public_post')->with('message','Post added Successfully!');
    }
    public function public_post(){

        $jobs = JobPost::orderBy('id','desc')->paginate(2);
        $rjobs = JobPost::orderBy('id','desc')->take(5)->get();
        return view('jobs',compact('jobs'),compact('rjobs'));
    }

    public function getSinglePost($id){
        $job = JobPost::find($id);
        $rjobs = JobPost::orderBy('id','desc')->take(5)->get();
        $commts = Comment::where('job_post_id','=',$id)->orderBy('id','asc')->get();
        return view('jobsingle',compact('job'),compact('rjobs'))->withComments($commts);
    }

}
