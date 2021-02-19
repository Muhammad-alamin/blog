<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['editors_picks'] = Post::with('author','category')
            ->where('is_editors_pick',1)
            ->where('status','Published')
            ->limit(5)->orderBy('id','desc')->get();
        $data['trendings'] = Post::with('author','category')
            ->where('is_trending',1)
            ->where('status','Published')
            ->limit(4)->orderBy('id','desc')->get();
        $data['featured_categories'] = Category::with(['posts'=>function($query){
            $query->orderBy('id', 'desc');
        }])
            ->where('is_featured',1)->limit(2)->get();
        $data['latest_posts'] = Post::with('author','category')
            ->where('status','Published')
            ->limit(3)->orderBy('id','desc')->get();
        $data['popular_posts'] = Post::popular();
        return view('front.index',$data);
    }
}
