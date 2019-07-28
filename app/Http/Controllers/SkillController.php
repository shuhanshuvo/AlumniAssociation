<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Auth;

class SkillController extends Controller
{
    public function user_skills(Request $request){
    	
    	$user_id = Auth::user()->id;
        

        $user = new Skill;
        $user->skill_name 	       = $request->skill_name;
        $user->experience_label	   = $request->experience_label;
        $user->user_id              =  $user_id;
        $user->save();
        return Redirect('/user_profile')->with('message','skill added Successfully');
    }
}
