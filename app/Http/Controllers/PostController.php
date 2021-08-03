<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // :: static function //
        $posts = Post::paginate(2);
        $categories = Category::get();

        return view('posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'category' => 'required',
            'profile_image' => 'max:5048'
        ]);

        $image = $request->file('profile_image')->store('/posts/thumbnail/', 'public');
        Post::create([
            'name' => $request->input('name'),
            'user_id' => Auth::user()->id,
            'body' => $request->body,
            'category_id' => $request->category,
            'profile_image' => $image

        ]);
        return redirect()->route("home");
    }

    public function down()
    {
    }
}