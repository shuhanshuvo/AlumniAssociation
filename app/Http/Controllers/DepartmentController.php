<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Redirect;
use DB;
use Auth;

class DepartmentController extends Controller
{
    public function user_introduction(Request $request){

        $user_id = Auth::user()->id;
        $user =  Department::find($user_id);
        $user->department_alumni_introduction = $request->about;
      
        $user->save();
        return Redirect('/user_profile')->with('message','User registration Successfully');

    }
}
