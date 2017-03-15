<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Front;
use App\valuable;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
      $fronts = Front::all();
      $valuables = valuable::all();
    	return view('posts.index', compact('posts', 'fronts', 'valuables'));
    }


    public function show(Post $post) {
      $posts = Post::all();
    	return view('posts.show', compact('post', 'posts'));
    }



     public function create()
      {
         $valuables = valuable::all();
         $fronts = Front::all();
        $posts = Post::all();
      	return view('dashboard.create')->with(compact('posts','fronts', 'valuables'));
      }

     public function store() {
   		
   		// $post->save();
      $path = null;
      if(request()->hasFile('blog-image')) {
        $path = $this->storeImage( request()->file('blog-image'));
      }
      $post = new Post;
      $post->author = request('author');
      $post->title = request('title');
      $post->body = request('body');
      $post->image = $path;
      $post->save();
   		return back()->with('success', 'Your post has been saved!');
    }

    protected function storeImage($image) {
      $ext = $image->getClientOriginalExtension();
      $name = str_random(20);
      $image->move(public_path() . '/img/blog', $name . '.' . $ext );
      return "/img/blog/{$name}.{$ext}";
    }
}
