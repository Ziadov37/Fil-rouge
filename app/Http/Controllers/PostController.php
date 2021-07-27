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
            'body' => 'required',
            'category' => 'required',
            'profile_image' => 'max:5048'
        ]);

        // $newImageName = time() . '-' . $request->name . '.' . $request->profile_image->extension();

        // $request->profile_image->move(public_path('images'), $newImageName);

        // $request->user()->posts()->create([
        //     'body' => $request->body
        // ]);
        Post::create([
            'name' => $request->input('name'),
            'user_id' => Auth::user()->id,
            'body' => $request->body,
            'category' => $request->category,
            'profile_image' => $request->profile_image

        ]);

        // $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function down()
    {
    }
}