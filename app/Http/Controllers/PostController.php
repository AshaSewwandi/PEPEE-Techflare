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

        $animals=new Animal;
        $animals->animal_id=$request->animal_id;
        $animals->type=$request->type;
        $animals->age=$request->age;
        $animals->location=$request->location;
        $animals->vaccination=$request->vaccination;
        $animals->sex=$request->sex;
        $animals->post_id=$post->post_id;

        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $animals['image'] = $image_name;
        }
        $animals->save();
        return redirect("/home");
    }
    public  function addPostById(){

        $post = Post::where('user_id','=', Auth::user()->id)->get();
        //dd($post);
        return view('addnewpost', ['posts'=>$post]);  
    }

    
}
