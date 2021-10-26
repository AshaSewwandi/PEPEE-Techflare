@extends('layouts.app')
@section('content')
<section>
    <div class="container bootstrap snippets bootdey">
        <div class="col-md-4">
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
                                <div class="pull-right meta">
                                    <a>
                                        <i onclick="myFunction()" class="material-icons"style="font-size:48px">&#xe5d3;</i>
                                    </a>                                       
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
                                    <!-- <img src="/img/cat1.jpg" class="image" alt="image post">  -->
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" > 
                                    <input type="hidden" name="user_id" value="{{ $post->user_id }}" > 
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
@endsection