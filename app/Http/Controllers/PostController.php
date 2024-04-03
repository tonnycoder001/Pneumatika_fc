<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

//     public function show(Post $post)
// {
//     $post = $post->with('comments')->first();

//     return view('posts.show', compact('post'));
// }

    public function index(Post $post)
    {
        // pagination, helps only show a number of post on the post page, rather that alot of post. in my case it outputs only 20 post per page
        $posts = Post::paginate(5);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {

        // validating create posts table from the migration
        $this->validate($request, [
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('posts', 'public'); // Store in posts folder within public storage
        }

        // saving the content in the data base
        $request->user()->posts()->create([
            'body' => $request->body,
            'image' => $imageName,

        ]);
        return back();
    }
}
