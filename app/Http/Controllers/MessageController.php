<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   
    //add messages
    public function AddMessage()
    {   
        $message = message::all();

        return view('landingpage');
    }

    //store messages
    public function StoreMessage(Request $request)
    {            
        $message=new message;
        $message->id=$request->id;
        $message->name=$request->name;
        $message->email=$request->email;
        $message->contact_number=$request->contact_number;
        $message->message=$request->message;

        $message->save();

        return back()->with('success','Message sent successfully');
    }
}