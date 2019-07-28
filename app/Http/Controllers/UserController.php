<?php
namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Album;
use App\Models\Photo;
use Session;
use Auth;
use Redirect;
use Storage;
session_start();
class UserController extends Controller{

    public function user_registration(Request $request){

        $this->validation($request);
        $user = new User;
        $user->full_name = $request->full_name;
        $user->email=$request->email;
        $user->session_id=$request->session_id;
        $user->password = bcrypt($request->password);
        $user->role_type_id = 2;
        $user->department_name = $request->department_name;
        $user->batch_id = $request->batch_id; 
        $user->save();
        return Redirect('/user_login')->with('message','User registration Successfully');
        
    }
    public function validation($request){

        return $this->validate($request, [
            'full_name'    =>'required|min:4',
            'email'        =>'required|string|email|unique:users|max:255',
            'password'     =>'required|string|confirmed|min:7',
        ]);
    }

    public function user_login(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember_me = $request->has('remember') ? true : false; 
    
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me))
        {
            $user = auth()->user();
            Auth::login($user,true);
            return redirect()->route('user_profile');
        }else{
            return back()->with('message','Email Or Password Is Incorrect');
        }
    }


    public function reset_password(){
        return view('new_password');
    }

    public function change_password(){
        return view('change_password');
    }
    public function user_logout(){
        Auth::logout();
        return Redirect('/');
    }
    public function user_profile(Request $request){

        $user_id = Auth::user()->id;
        $user =  User::find($user_id);

        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/images');
            $image->move($location, $filename);
            $user->avatar = $filename;
         }
        $user->save();
        return Redirect('/user_profile')->with('message','Profile picture added Successfully');
    }
    public function user_introduction(Request $request){
       $user_id = Auth::user()->id;
       $user =  User::find($user_id);
       $user->designation = $request->designation;
       $user->about = $request->about;
       $user->save();
       return Redirect('/user_profile')->with('message','Introductuion added Successfully');
    }
    public function alumni_profile($request){

        $user = User::where('id', $request)->get();
        return view('/alumni_profile')->withUser($user);
     }
    public function edit_profile(){
        $user_id = Auth::user()->id;
        $user =  User::find($user_id);
        $user->avatar = $image->getFilename().'.'.$extension;
        $user->save();
        return Redirect('/user_profile')->with('message','Profile picture added Successfully!');
    }

    public function photo_gallery(){
        $albums=Album::all();  
        return view('photo_gallery')->with('albums',$albums);
    }
   
}