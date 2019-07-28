<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;

class PhotoController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id', $album_id);
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image|max:1999'
        ]);

        // $filenameWithExt =  $request->file('photo')->getClientOriginalName();

        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // $extension = $request->file('photo')->getClientOriginalExtension();

        // $filenameToStore = $filename.'_'.time().'.'.$extension;

        // $path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenameToStore);


        $filenameWithExt =  $request->file('photo')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('photo')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $path = $request->file('photo')->storeAs('public/photos', $filenameToStore);

        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $filenameToStore;

        $photo->save();
        
        return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photo Uploaded');
    }
}
