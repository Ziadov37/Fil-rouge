<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware((['auth']));
    }

    // public function index()
    // {
    //     return view('dashboard');
    // }
    public function index()
    {
        // dd([$user->name]);
        // $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('dashboard', [
            'posts' => $posts
        ]);
    }
}