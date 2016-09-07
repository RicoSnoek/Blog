<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
    	$tags = $tag->get();
    	$posts = $tag->posts()->orderBy('created_at','desc')->get();

    	// $posts = $tag->posts()->createdAt()->get();

    	return view('posts.overzicht')->with('posts', $posts)->with('tags', $tags);
    }
}
