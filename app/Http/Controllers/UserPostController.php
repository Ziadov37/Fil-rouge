<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class UserPostController extends Controller
{
    public function index(User $user)
    {
        // $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        $posts = Post::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}