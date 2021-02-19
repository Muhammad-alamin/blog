<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        Post::findOrFail($id)->increment('total_read');
        $data['post'] = Post::with('author','category')->findOrFail($id);
        $data['popular_posts'] = Post::popular();
        return view('front.post.show',$data);
    }
}
