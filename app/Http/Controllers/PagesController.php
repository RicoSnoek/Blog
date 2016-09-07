<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {

    	$posts = Post::orderBy('created_at','desc')->take(3)->get();

    	return view('home')->with('posts', $posts);
    }

    public function waarbenik()
    {
    	return view('waarbenik');
    }
}
