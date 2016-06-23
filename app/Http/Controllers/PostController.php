<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostController extends Controller
{
    function index()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();
    	return view('post.index', [
    		'posts' => $posts
    	]);
    }


}
