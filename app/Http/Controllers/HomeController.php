<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        return view('home')->with('users', $users);
        
    }

    // public function index()
    // {
    //     $user = User::all();
    //     $post = Post::all();
    //     return view('home');
    // }

    
    public function show(Post $post)
    {
        return view('home')->with('posts',$post);
    } 
}
