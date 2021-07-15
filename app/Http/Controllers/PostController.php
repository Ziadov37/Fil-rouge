<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        // $request->user()->posts()->create([
        //     'body' => $request->body
        // ]);
        Post::create([
            'user_id' => Auth::user()->id,
            'body' => $request->body,
            'profile_image' => $request->profile_image
        ]);

        // $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
