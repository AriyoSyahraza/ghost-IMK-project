<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'comment' => $request->comment,
            'rating' => $request->rating,
            'post_id' => $request->post_id, //nanti ambil dari form viewnya
            'user_id' => $request->user_id //nanti ambil dari sesi id usernya e.g auth()->user()->id
        ]);
    }
}
