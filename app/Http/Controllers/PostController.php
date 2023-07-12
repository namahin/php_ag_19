<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Posts(){
        $posts = Post::all();
        return view('pages.home',compact('posts'));
    }

    public  function SinglePost($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
//        return response()->json($post);
        return view('pages.single-blog',compact('post'));
    }
}
