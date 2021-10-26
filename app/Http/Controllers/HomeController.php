<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $posts = Post::where('user_id','=', Auth::user()->id)->get();

        return view('home', compact('users','posts'));
        
    }   
    public function show(Post $post)
    {
        return view('home')->with('posts',$post);
    } 
}
