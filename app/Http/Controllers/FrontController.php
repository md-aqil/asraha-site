<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Front;
class FrontController extends Controller
{

	public function store(Request $req)
	{
		$path = null;
      	if(request()->hasFile('front-image')) {
        	$path = $this->storeImage( request()->file('front-image'));
      	}

		$front = new Front;
		$front->body = $req->input('body');
		$front->image = $path;
		$front->save();

		return back()->with('success', 'Your content has been uploaded');
	}
  protected function storeImage($image) {
      $ext = $image->getClientOriginalExtension();
      $name = str_random(20);
      $image->move(public_path() . '/img/front', $name . '.' . $ext );
      return "/img/front/{$name}.{$ext}";
    }

}


