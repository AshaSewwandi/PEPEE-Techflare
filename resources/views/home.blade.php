@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif
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
            <!-- <div class="card">
                <div class="container1">
                    <img src="/img/profile.jpg"  class="avatar" alt="Annie" >
                    <h1><i>{{ Auth::user()->name }} </i></h1>
                    <p>Name :{{ Auth::user()->name }}</p>
                    <p>Email : {{ Auth::user()->email }} </p>
                    <p>Contact : 0705802042</p>
                    
                    <div class="text-right">
                      <a  href="" class="btn btn-primary-3"> Edit Profile</a>
                      <a  href="" class="btn btn-primary-4"> Add New Post</a>	
                    </div>
                </div>
                
             </div>  -->
            <div class="pull-left container1">
                <div class="card" >
                    <div class="card-head">
                        <img class="avatar" src="/img/profile.jpg" alt="Card image" >
                        <h2><i>{{ Auth::user()->name }} </i></h2>
                        <br>

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

                        <p>Contact :{{ Auth::user()->MobileNo }} </p>
                            
                        <a  href="" class="btn btn-primary-3"> Edit Profile</a>

                        <button type="button" class="btn btn-primary-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add New Post</button>
 
                    </div>
                </div> 
            </div>   
    </div>
</div>
     
@endsection    



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Add Post</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group row">
                        <label for="input1" class="col-sm-3 col-form-label" ><b>Type of the pet:</b> </label>
                        <div class="col-sm-6">
                        <select name="pet" class="custom-select" required>
                            <option value=""  selected >Select the type</option>
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="input" class="col-sm-3 col-form-label"><b>Upload Image:</b></label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" id="input" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="input3" class="col-sm-3 col-form-label"><b>Write a caption:</b></label>
                        <div class="col-sm-9">
                            <textarea rows="4" cols="50" name="comment" id="usrform"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="input3" class="col-sm-3 col-form-label"><b>Add Location:</b></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="input3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input4" class="col-sm-3 col-form-label"><b>Age:</b></label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" id="input4" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="input4" class="col-sm-2 col-form-label"><b>Gender:</b></label>
                        <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">Male</label>
                        <br>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios1">Female</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="checkbox">
                           <b>Vaccinated: </b>   <label><input type="checkbox"> </label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary-1" data-bs-dismiss="modal">Add Post</button>
                    <button type="submit" class="btn btn-primary-2" value="Submit">Cancel</button>
                </form>
            </div>       

                        <p>Email : {{ Auth::user()->email }} </p>
                        <p>Contact :<br> {{ Auth::user()->mobileNo }} </p>
                            <!-- <button class="open-button" onclick="openForm()">Edit Profile</button> -->
                            <button class="open-button" data-toggle="modal" data-target="#exampleModal">Edit Profile</button>
                            <a  href="" class="btn btn-primary-4"> Add New Post</a> 
                    </div>
                </div> 
            </div>
            <!-- create edit profile button -->
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Profile</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-25">
                                <label for="file" ><b>Image:</b></label>
                                </div>
                                <div class="col-75">
                                <input type="file" name="image" value="{{Auth::user()->image}}">
                                </div>
                                <br>
                                <div class="col-25">
                                <label for="name" ><b>Name:</b></label>
                                </div>
                                <div class="col-75">
                                <input type="text" placeholder="Enter Name" name="name" value="{{Auth::user()->name}}">
                                </div>
                                <br>
                                <div class="col-25">
                                <label for="address" ><b>Address:</b></label>
                                </div>
                                <div class="col-75">
                                <input type="text" placeholder="Enter Address" name="address" value="{{Auth::user()->address}}">
                                </div>
                                <br>
                                <div class="col-25">
                                <label for="email"><b>Email:</b></label>
                                </div>
                                <div class="col-75">
                                <input type="text" placeholder="Enter Email" name="email" value="{{Auth::user()->email}}" >
                                </div>
                                <br>
                                <div class="col-25">
                                <label for="contact"><b>Contact:</b></label>
                                </div>
                                <div class="col-75">
                                <input type="text" placeholder="Enter Contact Number" name="mobileNo"  value="{{Auth::user()->mobileNo}}">
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary-1" data-dismiss="modal"><a href="home">Close</a></button>
                        <button type="button" class="btn btn-primary-2">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            <!-- close edit profile button -->

        </div>
    </div>
</div>

 
