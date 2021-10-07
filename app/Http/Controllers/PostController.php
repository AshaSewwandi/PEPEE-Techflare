<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addpost(){
        return view('home');  
    }

    public function viewpost(){
        return view('viewpost');  
    }

    public function index(){
        
    }
    
}
