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
        $post->District=$request->District;
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

    public function delete($post_id)
    {
        $posts = Post::find($post_id) ;
        $posts->delete();

        return redirect()->back();
    }

    public function edit($post_id)
    {
        $posts = Post::find($post_id);
        //$posts = Post::all();
        $posts = DB::table('posts')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->where('animals.post_id','=', $post_id)
            ->select('animals.*', 'posts.*')
            ->first();

            //dd($posts);

        return view('editpost', compact('posts'));
        //return view('editpost')->with('posts',$posts);
        
    }

    public function updatePost(Request $request, Post $post){

        $data = Post::find($request->input('post_id'));
        $data->post_id=$request->input('post_id');
        //$data->animal_id=$request->input('animal_id');
        $data->image = $request->image;
        $data->description=$request->description;
        $data->location=$request->location;
        


        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $data['image'] = $image_name;
        }

        $animal = Animal::find($request->input('animal_id'));
        //$animal = $request->all();
        $animal->age=$request->age;
        $animal->vaccination=$request->vaccination;
        // $animal->age=$age;
        // $animal->vaccination=$vaccination;

        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $animal['image'] = $image_name;
        }

        $animal->save();
        $data->save();

        return redirect('/home');
    }

    public function viewLatestpost()
    {
        $posts = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->join('animals', 'posts.post_id', '=', 'animals.post_id')
        ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.image','animals.type','posts.created_at')
        ->orderBy('created_at','desc')->get();

        return view('Viewpost',compact('posts'));
    }

    public function viewOldestpost()
    {    
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.image','animals.type','posts.created_at')
            ->orderBy('created_at','asc')->get();

        return view('Viewpost',compact('posts'));
    }
    

    public function filterByType()
    {    
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.image','animals.type','posts.created_at')
            ->where('animals.type', '=', 'Dog')
            ->orWhere('animals.type','Puppy')
            ->get();

        return view('Viewpost',compact('posts'));
    }

    public function filterByTypes()
    {    
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('animals', 'posts.post_id', '=', 'animals.post_id')
            ->select('users.mobileNo', 'posts.description', 'posts.location', 'posts.image','animals.type','posts.created_at')
            ->where('animals.type', '=', 'Kitten')
            ->orWhere('animals.type','Adult Cat')
            ->get();

        return view('Viewpost',compact('posts'));
    }

      
}
