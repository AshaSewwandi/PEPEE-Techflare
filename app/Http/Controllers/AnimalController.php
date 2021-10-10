<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Post;

class AnimalController extends Controller
{
    
    public function AddAnimal()
    {   
       // $animal = Animal::all();     
        $animal=  DB::table('posts')->where('post_id',$post_id)->get()->first();
        return view('Addpost')->with('post', $animal);
    }

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
}
