<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
{
    $validatedData = $request->validate([
        'body' => 'required',
    ]);

    $comment = $post->comments()->create([
        'body' => $validatedData['body'],
        'user_id' => Auth::id(), // Assuming user authentication is implemented
    ]);

    return redirect()->route('posts.show', $post->id); // Redirect after successful comment creation
}
}
