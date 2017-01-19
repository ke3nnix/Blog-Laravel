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
}
