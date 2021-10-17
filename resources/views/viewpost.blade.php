
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
                    <h4>Sort result by:</h4>
                    <select name="type" class="custom-select" required>
                        <option value=""  selected >Select the type</option>
                        <option value="Dog">xxxxx</option>
                        <option value="Cat">xxxxx</option>
                    </select>
                </div>      
                <br><br>  
                <div class="col-sm-6">
                    <h4>Filter result by location:</h4>
                    <select name="type" class="custom-select" required>
                        <option value=""  selected >Select the type</option>
                        <option value="Dog">xxxxx</option>
                        <option value="Cat">xxxxx</option>
                    </select>
                </div> 
                <br><br>
                <div class="col-sm-6">
                    <h4>Filter result by type:</h4>
                    <select name="type" class="custom-select" required>
                        <option value=""  selected >Select the type</option>
                        <option value="Dog">xxxxx</option>
                        <option value="Cat">xxxxx</option>
                    </select>
                </div>       
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
                    @foreach ($animals as $animal)
                        <br>
                        <div class="card flex-row flex-wrap" >
                            <div class="card-header border-0">
                                <img src="{{ asset('uploads/post/') }}" width=150px height=150px>
                            </div>
                            <div class="card-block px-2">
                                <h4 class="card-title">Type: {{$animal->type}}</h4>
                                <h6 class="card-text">{{optional($animal->post)->description}}</h6>
                                <br>
                                <h5 class="card-title">Age: {{$animal->age}}</h5>
                                <h5 class="card-title">Gender: {{$animal->sex}}</h5>   
                                <h5 class="card-title">Location: {{$animal->location}}</h5>          
                            </div>
                            <div class="w-100"></div>
                        </div>
                    @endforeach

            </div>
           
        </body>
      
        
  
</html>


   