<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;
use Session;
use File;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function add(Request $request){
        $image = $request->file('image');
        
    	$this->validate($request,[
            'file' => 'max:10240',
    		'title'=>'required',
    		'sub_title'=>'required',
    		'image'=>'required',
    	]);
        //dd($image->getClientOriginalExtension());
    	$slider=new Slider;
    	$slider->title=$request->title;
    	$slider->sub_title=$request->sub_title;
       // return $request->image;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/images');
            $image->move($location, $filename);
           
         }else{
         	return 'Give a image please';
         }
         $slider->image=$filename;
         $slider->save();
         Session::flash('message','Slider has been added');
         return redirect()->back();
    }


    public function show_slider(){

    		return redirect('/');
    }
    	
    public function all_slider() {

        $all_slider =Slider::all();
        return view('admin.dashboard.all_slider')
                   ->with('sliders',$all_slider);
    } 

    public function delete_slider($id) {
        $img = Slider::where('id',$id)->first();
        //dd($img);
        DB::table('sliders')
            ->where('id',$id)
            ->delete();
        //unlink(public_path('uploads/images/'.$img));
        Storage::disk('public')->delete('/images/'.$img->image);
        //dd(Storage::disk('public')->delete('/images'.$img->image));
        /*if(\File::exists(public_path('uploads/images/'.$img))){
          \File::delete(public_path('uploads/images/'.$img));
        }else{
          dd('File does not exists.');
        }*/
        return redirect('/all_slider');
    }

}
