<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        // dd($posts);
        return view('index', [
            "posts" => $posts,
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog-single', [
            'post' => $post
        ]);
    }

    public function comment(Request $request)
    {
        Comment::create([
            'comment' => $request->comment,
            'rating' => $request->rating,
            'post_id' => $request->post_id, //nanti ambil dari form viewnya
            'user_id' => $request->user_id //nanti ambil dari sesi id usernya e.g auth()->user()->id
        ]);

        return back();
    }
}
