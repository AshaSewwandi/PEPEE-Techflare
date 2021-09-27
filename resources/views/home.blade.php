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
                                          <img src="/img/profile.jpg" class="img-circle avatar" alt="user profile image">    
                                      </div>
                                      <div class="pull-right meta">
                                          <i class="material-icons"style="font-size:48px">&#xe5d3;</i>
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
                    <div class="card-body">
                        
                        <p>Name : <br>{{ Auth::user()->name }}</p>
                       
                        <p>Email : {{ Auth::user()->email }} </p>
                        <p>Contact :{{ Auth::user()->MobileNo }} </p>
                        
                            <a  href="" class="btn btn-primary-3"> Edit Profile</a>
                            <a  href="" class="btn btn-primary-4"> Add New Post</a>
                        
                    </div>
                </div> 
            </div>


        </div>
    </div>  
@endsection
