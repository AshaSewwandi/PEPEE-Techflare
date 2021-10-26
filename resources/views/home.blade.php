@extends('layouts.app')
@section('content')

<div class="container">
    <div class="caption text-center text-white" data-stellar-ratio="0.7">
        <section>
            <div class="container bootstrap snippets bootdey">
                <div class="col-md-8">
                    <div class="row">
                        <div class="column">
                            @foreach($posts as $post)
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">
                                        <div class="pull-left image">
                                            @if(Auth::user()->image)
                                                <img src=" {{ asset ('storage/images/users/' . Auth::user()->image) }}" alt="user profile image" class="img-circle avatar" >
                                            @else
                                                <img src="/img/profile.png" alt="user profile image" class="img-circle avatar">
                                            @endif   
                                        </div>
                                    </div>

                                    <div class="post-image">
                                        <img src=" {{ asset ('storage/images/posts/' . $post->image) }}" alt="Card image" class="image" >                                                                                       
                                    </div>

                                    <div class=" post-description">
                                        <h4><a href="#">View Post</a></h4>
                                    </div>          
                                </div>   
                            @endforeach 
                        </div>      
                    </div>
                </div>
            </div>
        </section> 
            <div class="card pull left">
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
@endsection 



 
