@extends('layouts.app')
@section('content')

<div class="container">
    <div class="caption text-center text-white" data-stellar-ratio="0.7">
        <!-- start view post by id -->
            <div class="row">
                @foreach($animals as $animal)
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left image">
                                @if(Auth::user()->image)
                                    <img src=" {{ asset ('storage/images/users/' . Auth::user()->image) }}" alt="user profile image" class="img-circle avatar" >
                                @else
                                    <img src="/img/profile.png" alt="user profile image" class="img-circle avatar">
                                @endif 
                            </div>
                            <div class="dropdown">
                                <i class="material-icons"style="font-size:48px">&#xe5d3;</i>
                                    <div class="dropdown-content">
                                        <a href="/deletepost/{{$animal->post_id}}">Delete Post</a>
                                        <a href="/editpost/{{$animal->post_id}}">Edit Post</a>  
                                    </div>
                            </div>
                        </div>
                        <div class="post-image">
                            <img src=" {{ asset ('storage/images/posts/' . $animal->image) }}" alt="Card image" class="image">                                                                                       
                        </div>
                        <div class=" post-description">
                            
                            <div class="myDIV">See More</div>
                            <div class="hide">
                                 Location : {{$animal->location }}
                                 <br>
                                 Age : {{$animal->age }}
                                 <br>
                                 Caption : {{$animal->description }}
                                 <br>
                                 vaccination : {{$animal->vaccination }}
                            </div>
                        </div>          
                    </div> 
                    <br>  
                @endforeach 
            </div>
            <!-- end view post by id -->

            <!-- start profile card -->
            <div class="split right">
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
                        <p>Email :<br> {{ Auth::user()->email }} </p>
                        <p>Contact :<br>{{ Auth::user()->mobileNo }} </p>               
                        <button onclick="location.href='editprofile/{{ Auth::user()->id }}'" type="button" class="btn btn-primary-3" >Edit Profile</button>
                        <br><br>
                        <button onclick="location.href='Addpost/{{ Auth::user()->id }}'" type="button" class="btn btn-primary-4" >Add New Post</button>            
                    </div>
            </div> 
            <!-- end profile card -->
    </div>
</div>    
@endsection 



 
