<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Front;
use App\valuable;
use App\Gallery;
use App\Winner;
use App\Video;
use App\Theme;
class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
      $fronts = Front::all();
      $valuables = valuable::all();
      $galleries = Gallery::all();

      $videos = Video::latest()->get();

     
      $winner = Winner::latest()->first();
    	return view('posts.index', compact('posts', 'fronts', 'valuables', 'galleries', 'winner', 'videos'));
    }

    public function allPosts()
    {
      $posts = Post::all();
      return view('posts.postlist', compact('posts'));
    }
    

    public function show(Post $post) {
      $posts = Post::all();
      $comments = $post->comments()->with('user')->get();
    	return view('posts.show', compact('post', 'posts', 'comments'));
    }



    
     public function store(Request $req) {
   		
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
// image
    protected function storeImage($image) {
      $ext = $image->getClientOriginalExtension();
      $name = str_random(20);
      $image->move(public_path() . '/img/blog', $name . '.' . $ext );
      return "/img/blog/{$name}.{$ext}";
    }

// image END

      public function getDeletePost($post_id)
    {
       $post = Post::find($post_id);

       $this->deleteImage($post->name);
    		$img = $post->image;

	   $this->deleteImage($path);
     $post->delete();
       // return redirect()->route('blogs.index')
       return back()->with('success', 'Your post has been deleted!');
    }

	

    function deleteFront($id) {
       $front = Front::find($id);
       $this->deleteImage($front->image);
       $front->delete();
       return back()->with('success', 'Your post has been deleted!');
    } 
    function deletevaluable($id) {
       $valuable = valuable::find($id);
       $this->deleteImage($valuable->image);
       $valuable->delete();
       return back()->with('success', 'Your post has been deleted!');
    }

     function deletegallery($id) {
       $gallery = Gallery::find($id);
       $this->deleteImage($gallery->image);
       $gallery->delete();
       return back()->with('success', 'Your gallery has been deleted!');
    }

   
}
