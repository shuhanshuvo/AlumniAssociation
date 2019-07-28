<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Auth;

class ExperienceController extends Controller
{
    public function user_experience(Request $request){
         
         $user_id = Auth::user()->id;
        

        $user = new Experience;
        $user->job_title 	    = $request->job_title;
        $user->company_name	    = $request->company_name;
        $user->started_at 		= $request->started_at;
        $user->end_at           = $request->end_at;
        $user->job_details      = $request->job_details;
        $user->present          = $request->present;
        $user->user_id          =  $user_id;
        $user->save();
        return Redirect('/user_profile')->with('message','Experience added Successfully');
    }
}
