<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Animal;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //view home page
    public function index()
    {
        $users = User::all();
        $posts = Post::where('user_id','=', Auth::user()->id)->get();
        // $animals = Animal::all();

        // $animals = DB::table('animals')
        //     ->join('users', 'posts.user_id', '=', 'users.id')
        //     ->join('animals', 'posts.post_id', '=', 'animals.post_id')
        //     ->select('animals.age','animals.vaccination')
        //      ->where('animals.District', '=', 'Colombo')
        //     ->get();


        $animals = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->join('animals', 'posts.post_id', '=', 'animals.post_id')
        ->select('animals.age', 'animals.vaccination','posts.location','posts.description','posts.post_id','posts.image')
        //  ->where('user_id','=', 'Auth::user()->id)->get()')
        ->get();


        // return view('Viewpost',compact('posts'));
        return view('home', compact('users','posts','animals'));
        
    }   
    // public function show(Post $post)
    // {
    //     return view('home')->with('posts',$post);
    // } 
}
