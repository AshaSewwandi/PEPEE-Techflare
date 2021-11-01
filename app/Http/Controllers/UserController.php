<?php

namespace App\Http\Controllers;
use App\Models\User;
use DB;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function AddUser()
    {       
        $user = User::find($id);
        $posts = $user->posts()->get();
    }

    // view  edit profile view
    public function edit($id)
    { 
        $data = User::find($id) ;
        return view('editprofile')->with('users',$data); 
    }

    // strore update  users data
    public function update(Request $request)
    {
        $id=$request->id;
        $name=$request->name;
        $address=$request->address;
        $email=$request->email;
        $image=$request->image;
        $mobileNo=$request->mobileNo;

        $data =User::find($id);

        $data->name=$name;
        $data->address=$address;
        $data->email=$email;
        $data->mobileNo=$mobileNo;

        if($request->hasFile('image')){
            $destination_path = 'public/images/users';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $data['image'] = $image_name;
        }

        $data->save();

        $users = User::all();
        $posts = Post::all();

        return redirect('/home');
    }
}
