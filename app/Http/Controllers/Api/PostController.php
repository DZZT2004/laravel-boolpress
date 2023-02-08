<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return response()->json([
            'success' => true,
            'results' => $posts,
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.index', compact('post'));
    }

    public function everything(){
        $posts = Post::all();
        $categories = Category::all();
        return response()->json([
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
