<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {


    	$this->validate(request(), ['body' => 'required|min:2']);
      
    	$post->addComment(request('body'));	

    	return back();
    }

     function deletecomment($id) {
       $comment = Comment::find($id);
       $comment->delete();
       return back()->with('success', 'Your Comment has been deleted!');
    }
}
