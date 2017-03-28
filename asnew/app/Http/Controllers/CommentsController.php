<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

    	$this->validate(request(), ['body' => 'required|min:2']);
    	$post->addComment(request('body'));	

    	return back();
    }

     function deletecomment($id) {
       $comment = Comment::find($id)->first();
       $comment->delete();
       return back()->with('success', 'Your Comment has been deleted!');
    }
}
