<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getIndividual($slug)
    {
    	$post = Post::where('slug',$slug)->first();
    	return view('blog.individual')->withPost($post);
    }

    public function getIndex()
    {
    	$posts = Post::orderBy('id', 'DESC')->paginate(10);
    	return view('blog.index')->withPosts($posts);

    }
}
