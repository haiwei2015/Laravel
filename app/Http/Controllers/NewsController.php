<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::where('published_at','<=',Carbon::now())
    			->orderBy('published_at','desc')
    			->paginate(config('blog.posts_per_page'));
    	return view('news.index',compact('news'));
    }
    
    public function show($slug){
    	$new = News::whereSlug($slug)->firstOrFail();
    	return view('news.show')->with(compact('new'));
    }
    
    
}
