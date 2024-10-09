<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
//get posts
$posts = Post::latest()->paginate(5);
//render view with posts
return view('posts.index', compact('posts'));
}
}
