<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        $post->location=$request->location;
        $post->user_id=$request->user_id;

        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $post['image'] = $image_name;
        }

        $post->save();

        $animal=new Animal;
        $animal->animal_id=$request->animal_id;
        $animal->type=$request->type;
        $animal->age=$request->age;
        $animal->location=$request->location;
        $animal->vaccination=$request->vaccination;
        $animal->sex=$request->sex;
        $animal->post_id=$post->post_id;

        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $animal['image'] = $image_name;
        }
        $animal->save();
        $post = Post::all();

       //return back()->with('success','Post add successfully');
        return view('home')->with('posts',$post);


    }
    public  function addPostById(){

        $post = Post::where('user_id','=', Auth::user()->id)->get();
        //dd($post);
        return view('addnewpost', ['posts'=>$post]);  
    }

    
}
