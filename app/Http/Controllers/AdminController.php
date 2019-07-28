<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
session_start();
use Auth;
use App\Models\User;
use App\Batch;
use App\Session;
use App\constitution;
use Illuminate\Support\Facades\Schema;


class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth')->except(['admin_logout','dashboard', 'admin_login']);
	}
	
    public function admin_login(){
    	return view('admin.admin_login');
    }

    public function index(){
    	return view('admin.dashboard.index');
    }

    public function dashboard(Request $request){
		if(Auth::attempt(['email' => $request->input('admin_email'), 'password' => $request->input('admin_password')]))
		{
			return Redirect::to('/dashboard');
		}else{
			return false;
		}
    }

    public function admin_logout(){
    	Auth::logout();
    	return Redirect::to('/admin');
	}

	public function alumni()
	{
		$alumnis = User::orderBy('alumniStatus', 'DESC')->get();
		return view('admin.dashboard.alumni.index', compact('alumnis'));
	}
	public function add_slider()
	{
		return view('admin.add_slider');
	}
	public function constitution()
	{
		return view('admin.add_constitution');
	}
	public function add_constitution(Request $request){
		$constitution = new Constitution;
		if($request->hasFile('constitution')){
            $image = $request->file('constitution');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/images');
            $image->move($location, $filename);
            $constitution->constitution = $filename;
         }
        $constitution->save();
		return Redirect('/constitution')->with('message','constitution file uploaded successfully!');
	}
	public function show_constitution(){
		//
	}

	public function alumniAccept($id, Request $request)
	{
		//dd($request->alumniStatus);
		$alumni = User::find($id);
		$alumni->alumniStatus = $request->alumniStatus;
		$alumni->save();
		return redirect('/admin/alumni');
	}


	public function batch(){

		return view('admin.add_batch');
	}
    
    public function add_batch(Request $request){

    	$batch = new Batch;
        $batch->batch_name = $request->batch_name; 
        $batch->save();
        return Redirect('/batch')->with('message','User registration Successfully');
    }

    public function batchWise($id){
    		$users = User::where('batch_id',$id)->paginate(5);
    		return view('alumni', compact('users'));

    }


    public function session(){

		return view('admin.add_session');
	}
    public function add_session(Request $request){

    	$session = new Session;
        $session->session_name = $request->session_name; 
        $session->save();
        return Redirect('/session')->with('message','User registration Successfully');
    }

    
    public function delete_alumni($id) {
        $user =  User::find($id);
        $user->delete();
        return redirect('/admin/alumni');

    }

}
