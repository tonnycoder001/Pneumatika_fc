<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
    {

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);




        return back();
        // if (Auth::check()) {
    //         $user = Auth::user();
    //         $like = Like::create([
    //             'user_id' => $user->id,
    //             'post_id' => $post->id,
    //         ]);
    //     } else {
    //         return back();
    //     }

    //     return back();
     }
}
