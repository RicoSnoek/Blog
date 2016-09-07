<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }


    public function overzicht(Tag $tag)
    {
        $tags = $tag->get();
    	$posts = Post::orderBy('created_at','desc')->get();

    	return view('posts.overzicht')->with('posts', $posts)->with('tags', $tags);
    }

    public function show(Post $post)
    {
    	return view('posts.show')->with('post', $post);
    }
    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('admin')->with('tags', $tags);
    }
    public function store(PostRequest $request)
    {
         
        $this->createPost($request);
        
        return redirect('admin')->with('message', 'Het aanmaken is gelukt.');
    }
    public function edit(Post $post)
    {
        $tags = Tag::lists('name', 'id');
        return view('posts.edit')->with('post', $post)->with('tags', $tags);
    }
    public function update(PostRequest $request, Post $post)
    {

        $post->update($request->except('created_at'));

        $this->syncTags($post, $request->input('tag_list'));


        return redirect('overzicht');
    }

    private function syncTags(Post $post, array $tags)
    {
        $post->tags()->sync($tags);
    }

    private function createPost(PostRequest $request)
    {
        $post = Auth::user()->posts()->create($request->all());

        $this->syncTags($post, $request->input('tag_list'));

        return $post;
    }
}
