<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware((['auth']));
    }

    public function index()
    {
        // dd([$user->name]);
        // $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('dashboard', [
            'posts' => $posts
        ]);
    }

    public function delete($id)
    {
        // $data = Post::find($id);
        // $data->delete();
        // return redirect('index');

        $delete = DB::table('posts')
            ->where('id', $id)->delete();
        return redirect('dashboard');
    }
}