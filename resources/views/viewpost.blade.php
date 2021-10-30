
<html>
    <title>PEPEE</title>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity=sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <link href="/css/viewpost.css" rel="stylesheet">   
        </head>
        <body> 
            <div class="split left">
                <div class="left">
                    <img src="/img/logo.png" alt="" width="120" height="60">
                </div> 
                <br><br> 
                <div class="col-sm-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label><strong><h5>Sort result by:</strong></h5></label>
                            <select id='status' class="form-control" onchange="location = this.value;" style="width: 200px">
                                <option value="">---Select---</option>
                                <option value="http://127.0.0.1:8000/Viewpost">Newest to Oldest</option>
                                <option value="http://127.0.0.1:8000/viewpost">Oldest to Newest</option>
                            </select>
                        </div>
                    </div>
                </div>          
                <div class="col-sm-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label><strong><h5>Filter result by Location:</strong></h5></label>
                            <select id='district' class="form-control" onchange="location = this.value;" style="width: 200px">
                                <option value="">---Select District---</option>
                                <option value="http://127.0.0.1:8000/FilterLocationC">Colombo</option>
                                <option value="http://127.0.0.1:8000/FilterLocationK">Kaluthara</option>
                                <option value="http://127.0.0.1:8000/FilterLocationG">Gampaha</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label><strong><h5>Filter result by Type:</strong></h5></label>
                            <select id='type' class="form-control" onchange="location = this.value;" style="width: 200px">
                                <option value="">---Select Type---</option>
                                <option value="http://127.0.0.1:8000/FilterPost">Dog</option>
                                <option value="http://127.0.0.1:8000/filterPost">Cat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br><br> 
                <!-- <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary-1" onchange="location = this.value;" value="Submit" >Apply</button>   
                </div>   -->
            </div>
            <div class="split right">               
                <div class="right">
                    <div class="row">   
                        <div class="container">
                            <div class="caption text-center text-white" data-stellar-ratio="0.7">    
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/#section2">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/#section3">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/#section4">Contact</a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>             
            </div>
            <div class="col-sm-4">
                <br><br><br>  
                    @foreach($posts as $post)
                        <br>
                        <div class="card flex-row flex-wrap" >
                            <div class="card-header border-0">
                                <img src=" {{ asset ('storage/images/posts/' . $post->image) }}" width=200px height=150px>
                            </div>
                            <div class="card-block px-2">
                                <br>
                                <h5 class="card-text">Type : {{$post->type}} </h5>        
                                <h6 class="card-title">{{$post->description}}</h6>
                                <br>
                                <h5 class="card-title-3">Contact Details : {{$post->mobileNo}}</h5>    
                                <h5 class="card-title">Location : {{$post->location}}</h5>  
                            </div>       
                            <div class="w-100"></div>
                        </div>     
                    @endforeach
            </div>
        </body>
</html>


   