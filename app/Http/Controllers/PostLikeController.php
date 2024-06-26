<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    // public function _construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function store(Post $post, Request $request)
    {

        // making a user only like once per post
        if ($post->likedBy($request->user())) {
            return response(null, 409);
        }

        // distinguishing which user has likes a certain post
        $post->likes()->create([

            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    // delete the like/unliking a post
    public function destroy(Post $post, Request $request)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
