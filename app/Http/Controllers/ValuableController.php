<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valuable;

class ValuableController extends Controller
{
   public function store(Request $req)
	{

		$path = null;
      	if(request()->hasFile('value-image')) {
        	$path = $this->storeImage( request()->file('value-image'));
      	}

		$front = new Valuable;
		$front->name = $req->input('name');
		$front->number = $req->input('number');
		$front->massage = $req->input('massage');
		$front->image = $path;
		$front->save();

		return back()->with('success', 'Your content has been uploaded');
	}
  protected function storeImage($image) {
      $ext = $image->getClientOriginalExtension();
      $name = str_random(20);
      $image->move(public_path() . '/img/value', $name . '.' . $ext );
      return "/img/value/{$name}.{$ext}";
    }

    public function about()
    {
    	return view('about');
    }
     public function india()
    {
    	return view('india');
    }

}
