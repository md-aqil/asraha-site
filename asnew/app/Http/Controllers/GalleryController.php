<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
class GalleryController extends Controller
{
  public function store() {
    		
    		// $post->save();
       $path = null;
       if(request()->hasFile('gallery-image')) {
         $path = $this->storeImage( request()->file('gallery-image'));
       }

       $gallery = new Gallery;
       $gallery->image = $path;
       $gallery->save();
    		return back()->with('success', 'Your gallery has been saved!');
     }

     protected function storeImage($image) {
       $ext = $image->getClientOriginalExtension();
       $name = str_random(20);
       $image->move(public_path() . '/img/gallery', $name . '.' . $ext );
       return "/img/gallery/{$name}.{$ext}";
     }
}
