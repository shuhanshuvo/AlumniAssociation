<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use Auth;

class EducationController extends Controller
{
    public function user_education(Request $request){

        $user_id = Auth::user()->id;
        

        $user = new Education;
        $user->institute_name 	    = $request->institute_name;
        $user->education_name		= $request->education_name;
        $user->started_at 			= $request->started_at;
        $user->end_at 			    = $request->end_at;
        $user->present              = $request->present_institute;
        $user->user_id              =  $user_id;
        $user->save();
        return Redirect('/user_profile')->with('message','Education added Successfully');
    }

    public function user_update_education(Request $request){

        $user_id = Auth::user()->id;
        $getuser = Education::where('user_id','=',$user_id)->first();

        //$user = Education::find($getuserid);

        $getuser->institute_name       = $request->institute_name;
        $getuser->education_name       = $request->education_name;
        $getuser->started_at           = $request->started_at;
        $getuser->end_at               = $request->end_at;
        $getuser->present              = $request->present_institute;
        $getuser->user_id              =  $user_id;
        $getuser->save();
        return Redirect('/edit_profile')->with('message','Education added Successfully');
    }
}
