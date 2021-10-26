@extends('layouts.app')
@section('content')

<div class="container">
    <div class="caption text-center text-white" data-stellar-ratio="0.7">

    <main class="py-4">
            @yield('content')
        </main>
        

            <div class="pull-left container1">
                <div class="card" >
                    <div class="card-head">
                    
                    @if(Auth::user()->image)
                    <img src=" {{ asset ('storage/images/users/' . Auth::user()->image) }}" alt="Card image" class="avatar" >
                    @else
                    <img src="/img/profile.png" alt="Card image" class="avatar">
                    @endif
                   
                    <h2><i>{{ Auth::user()->name }} </i></h2>
                    <br>

                    </div>
                    <div class="card-body">
                        <p>Name : <br>{{Auth::user()->name }}</p>

                        <p>Email : {{ Auth::user()->email }} </p>

                        <p>Contact :<br>{{ Auth::user()->mobileNo }} </p>
                            
                        <button onclick="location.href='editprofile/{{ Auth::user()->id }}'" type="button" class="btn btn-primary-3" >Edit Profile</button>
                        <br><br>
                       
                        <button onclick="location.href='Addpost/{{ Auth::user()->id }}'" type="button" class="btn btn-primary-4" >Add New Post</button>
                        
                    
                    </div>
                </div> 
            </div>   
    </div>
</div>
     
@endsection    


 
