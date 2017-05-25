<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Post extends Model
{
   public function comments()
   {
   	return $this->hasMany(Comment::class);
   }

   public function addComment($body)
   {
   	$user_id = Auth::id();
   	// dd($user_id);
   	$this->comments()->create(compact('body', 'user_id'));
   }
}
