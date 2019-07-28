<?php

namespace App\Http\Controllers;
use App\Comitee;
use App\ComiteeUser;
use Session;
use Auth;
use App\Models\User;

use Illuminate\Http\Request;

class CommiteeController extends Controller
{
    public function add(Request $request){
    	$this->validate($request,[
    		'email'=>'required',
    		'start_date'=>'required',
    		'designation'=>'required'
    	]);
    	$user=User::where('email',$request->email)->first();
    	$designation=Comitee::where('id',$request->designation)->first();
    	if($user){
    		$commitee=new ComiteeUser;
    		$commitee->user_id=$user->id;
    		$commitee->comitee_id=$designation->id;
    		$commitee->start_date=$request->start_date;
    		if($request->end_date){
    			$commitee->end_date=$request->end_date;
    		}
    		if($request->status){
    			$commitee->status=$request->status;
    		}
    		$commitee->save();
    		Session::flash('message','Member Added to the commitee');
    		return redirect()->back();

    	}else{
    		return 'No User Found';
    	}
    }

    public function add_designation(Request $request){
    	$this->validate($request,[
    		'designation'=>'required',
    		'responsibility'=>'required'
    	]);
    	$designation=new Comitee;
    	$designation->designation=$request->designation;
    	$designation->responsibility=$request->responsibility;
    	if($request->status){
    		$designation->status=$request->status;

    	}
    	$designation->save();
    	Session::flash('message','Designation Addded');
    	return redirect()->back();
    }
    public function add_comitee(){

    	return view('admin.dashboard.add_comitee');
    }
    public function designation(){
    	return view('admin.dashboard.add_comitee_designation');
    }

}
