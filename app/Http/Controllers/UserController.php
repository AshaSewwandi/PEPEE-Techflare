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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function AddUser()
    {       
        $user = User::find($id);
        $posts = $user->posts()->get();
    }
    
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = User::find($id) ;
        return view('editprofile')->with('users',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
       $data->image=$image;

        // if($request->hasfile('image')){
        //     $file=$request->file('image');
        //     $extension=$file->getClientOriginalExtension();//get image extension
        //     $filename= time().'.'.$extension;
        //     $file->move('uploads/users/',$filename); 
        //     $data->image=$filename;
        //     }else{
        //         return $request;
        //         $data->image = '';
        // }

       

        $data->save();

        $datas = User::all();

        return view('home')->with('users',$datas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
