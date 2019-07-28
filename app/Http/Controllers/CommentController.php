<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Comment;
use Auth;
use Redirect;

class CommentController extends Controller
{
    public function CreateComment(Request $request,$id){
       
        $comment = new Comment;
        $comment->name  = $request->name;
        $comment->commentbody  = $request->commentbody;
        $comment->job_post_id  = $id;

         if(Auth::check()){
        	
        	$user_id = Auth::user()->id;
        	$comment->user_id  = $user_id;
        }
        
        $comment->save();
        return redirect()->back();
    }
}
