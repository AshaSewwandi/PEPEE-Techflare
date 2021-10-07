<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Addpost(){
        return view('Addpost');  
    }

    public function viewpost(){
        return view('viewpost');  
    }

    public function index(){
        
    }
    
}
