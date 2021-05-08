<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::where('title','!=','')->orderBy('created_at','desc')->get();
        $count = Post::where('title','!=','')->count();
        return view('welcome', compact('posts', 'count'));
    }

    public function dashboard()
    {
        return view('home');
    }
}
