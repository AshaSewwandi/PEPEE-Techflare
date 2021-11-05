<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Post;
use App\Models\User;

class AnimalController extends Controller
{
    
    //add animals
    public function AddAnimal()
    {     
        $animal=  DB::table('posts')->where('post_id',$post_id)->get()->first();
        return view('Addpost')->with('post', $animal);
    }

    //store animals
    public function StoreAnimal(Request $request)
    {            
        $animal=new Animal;
        $animal->animal_id=$request->animal_id;
        $animal->type=$request->type;
        $animal->age=$request->age;
        $animal->breed=$request->breed;
        $animal->location=$request->location;
        $animal->vaccination=$request->vaccination;
        $animal->image=$request->image;
        $animal->sex=$request->sex;
        $animal->post_id=$request->post_id;

        $animal->save();

        return back()->with('success','Post add successfully');
    }

    //filter by location 
    public function filterByLocationC()
    {    
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.District', 'posts.image','animals.type','posts.created_at')
            ->where('posts.District', '=', 'Colombo')
            ->get();

        return view('Viewpost',compact('posts'));
    }

    //filter by location 
    public function filterByLocationK()
    {    
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.District', 'posts.image','animals.type','posts.created_at')
            ->where('posts.District', '=', 'Kaluthara')
            ->get();

        return view('Viewpost',compact('posts'));
    }

    //filter by location 
    public function filterByLocationG()
    {    
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.District', 'posts.image','animals.type','posts.created_at')
            ->where('posts.District', '=', 'Gampaha')
            ->get();

        return view('Viewpost',compact('posts'));
    }
    
}
