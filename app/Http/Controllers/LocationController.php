<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Redirect;
use Auth;

class LocationController extends Controller
{
   	public function user_location(Request $request){


   		$user_id = Auth::user()->id;
        

        $user = new Location;
        $user->address 	    = $request->address;
        $user->city		    = $request->city;
        $user->country 			= $request->country;
        $user->phone              = $request->phone;
        $user->user_id              =  $user_id;
        $user->save();
        return Redirect('/user_profile')->with('message','Location added Successfully');

   	}

}
