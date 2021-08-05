<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        $data = array(
            'posts' => $posts
        );
        return view('home', $data);
    }
}