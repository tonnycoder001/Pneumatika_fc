<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(Post $post)
    {
        // pagination, helps only show a number of post on the post page, rather that alot of post. in my case it outputs only 20 post per page
        // eager loading the users and likes to controll the query builders
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
        ]);



        // saving the content in the data base
        $request->user()->posts()->create([
            'body' => $request->body,

        ]);
        return back();
    }
}
