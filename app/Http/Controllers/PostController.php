<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\StoreBlogPostRequest;

use App\Post;

use Validator;

class PostController extends Controller
{
    function index()
    {
    	$posts = Post::where('deleted', false)
	    	->orderBy('created_at', 'desc')
	    	->get();

    	return view('post.index', [
    		'posts' => $posts
    	]);
    }

    function create()
    {
    	return view('post.create');
    }

    function store(Request $request)
    {
        // store Action
    	$post = new Post;
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();

    	return redirect('/posts');
    }

}
