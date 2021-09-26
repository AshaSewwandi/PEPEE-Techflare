<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addpost(){
        return view('addpost');  
    }

    public function viewpost(){
        return view('viewpost');  
    }

    public function index(){
        
    }
    
}
