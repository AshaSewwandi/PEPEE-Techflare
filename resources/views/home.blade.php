@extends('layouts.app')
@section('content')

<div class="container">
    <div class="caption text-center text-white" data-stellar-ratio="0.7">
        <section>
            <div class="rightcolumn">
                <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
                    <div class="container bootstrap snippets bootdey">
                      <di class="col-md-8">
                          <div class="col-sm-12">
                              <div class="panel panel-white post panel-shadow">
                                  <div class="post-heading">
                                      <div class="pull-left image">
                                          <img src="/img/profile.png" class="img-circle avatar" alt="user profile image">    
                                      </div>
                                      <div class="pull-right meta">
                                      <a><i onclick="myFunction()" class="material-icons"style="font-size:48px">&#xe5d3;</i></a>
                                        
                                            <div class="dropdown"> 
                                                <div id="myDropdown" class="dropdown-content">
                                                    <a href="#home">Delete post</a>
                                                    <a href="#about">Edit post</a>
                                                </div>
                                            </div>

                                            <script>
                                                function myFunction() {
                                                document.getElementById("myDropdown").classList.toggle("show");
                                                }
                                                window.onclick = function(event) {
                                                if (!event.target.matches('.material-icons')) {
                                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                                    var i;
                                                    for (i = 0; i < dropdowns.length; i++) {
                                                    var openDropdown = dropdowns[i];
                                                    if (openDropdown.classList.contains('show')) {
                                                        openDropdown.classList.remove('show');
                                                    }
                                                    }
                                                }
                                                }
                                                </script>
                                      </div>
                                  </div>
                                  <div class="post-image">
                                      <img src="/img/cat1.jpg" class="image" alt="image post">
                                  </div>
                                  <div class=" post-description">
                                      <h4><a href="#">View Post</a></h4>
                                  </div>    
                              </div> 
                          </div>
                      </di>
                    </div>
            </div>
        </section>

            <div class="pull-left container1">
                <div class="card" >
                    <div class="card-head">
                    <img class="avatar" src="/img/profile.png" alt="Card image" >
                    <h2><i>{{ Auth::user()->name }} </i></h2>
                    <br>

                    </div>
                    <div class="card-body">
                        <p>Name : <br>{{ Auth::user()->name }}</p>

                        <p>Email : {{ Auth::user()->email }} </p>

                        <p>Contact :<br>{{ Auth::user()->mobileNo }} </p>
                            
                        <button type="button" class="open-button" >Edit Profile</button>

                    <!--   <button type="button" class="btn btn-primary-4" >Add New Post</button>-->
                    <!-- <button type="button" class="btn btn-primary-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Post</button> -->
                    <a href="/Addpost" class="btn btn-primary-4">Add New Post</a>
                    </div>
                </div> 
            </div>   
    </div>
</div>
     
@endsection    


 
