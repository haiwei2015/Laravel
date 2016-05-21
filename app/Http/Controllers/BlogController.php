<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
	public function index(){
    	$posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

   		return view('index', compact('posts'));
	}
	
	public function showPost($slug)
	{
		$post = Post::whereSlug($slug)->firstOrFail();
		return view('blog.post')->withPost($post);
	}
	
}
