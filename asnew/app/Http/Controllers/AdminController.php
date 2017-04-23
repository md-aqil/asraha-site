<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class AdminController extends Controller
{
    //
    public function __construct() {
    }

    public function dashboard(Request $req) {
    	$posts = Post::all();
    	$fronts = \App\Front::all();
    	$valuables = \App\Valuable::all();
        $galleries = \App\Gallery::all();
        $winners = \App\Winner::all();
        $themes = \App\Theme::all();

    	return view('dashboard.create')->with(compact('posts', 'fronts','valuables','galleries', 'winners', 'themes'));
    	return 'passed';
    }
}
