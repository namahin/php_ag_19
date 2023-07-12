<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Posts(){
        $posts = Post::all();
        return response()->json($posts);
    }

    public function SinglePost($id){
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}
