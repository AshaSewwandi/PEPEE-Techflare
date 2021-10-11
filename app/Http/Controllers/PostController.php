<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    // public function Addpost(){
    //     return view('Addpost');  
    // }

    public function viewpost(){
        return view('viewpost');  
    }

    public function index(){
 
    }

    public function Addpost(Request $request)
    {   
        $post = Post::all();
        $user = User::find($request->input('id'));
        
        return view('Addpost', compact('post','user'));
    }

    public function StorePost(Request $request)
    {            
        $request->validate([
            'type' => 'required',
            'location' => 'required',
            'sex' => 'required',
        ]);

        $post=new Post;
        $post->post_id=$request->post_id;
        $post->description=$request->description;
        $post->image=$request->image;
        $post->location=$request->location;
        $post->user_id=$request->user_id;
        $post->save();

        $animal=new Animal;
        $animal->animal_id=$request->animal_id;
        $animal->type=$request->type;
        $animal->age=$request->age;
        $animal->location=$request->location;
        $animal->vaccination=$request->vaccination;
        $animal->image=$request->image;
        $animal->sex=$request->sex;
        $animal->post_id=$post->post_id;
        $animal->save();

       //return back()->with('success','Post add successfully');
        return view('home')->with('post',$post);


    }
    
}
