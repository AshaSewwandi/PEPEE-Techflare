<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    <link href="/css/editpost.css" rel="stylesheet">
    </head>
    <body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container" style="background :none !important ">
    <!-- start edit post card -->
        <div class="card">
            <div class="card-header">
                <h3 class="form-title"><b>Edit Post</b></h3>
            </div>
            <div class="card-body">
                <form action="/updatePost" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="post_id" value="{{$posts->post_id}}" readonly>
                    <input type="hidden" name="animal_id" value="{{$posts->animal_id}}" readonly>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Upload Image:</label>
                            <div class="col-sm-6">
                            <input type="file" name="image" placeholder="image" value="{{$posts->image}}">
                            <img src="/storage/images/posts/{{ $posts->image}}" alt="" class="image" width="50px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Write a caption:</label>
                            <div class="col-sm-9">
                                <textarea rows="4" cols="50" name="description" >{{$posts->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-sm-3 col-form-label">Location:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="location" value="{{$posts->location}}">
                            </div>   
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-sm-3 col-form-label">Age:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="age" value="{{$posts->age}}">
                            </div>
                        </div> 
                        <div class="form-group row">                        
                            <label class="container">Vaccinated:
                                <input type="checkbox" name="vaccination" value="Yes">
                                <span class="checkmark"></span>
                            </label>
                         </div>
                        <button type="submit" class="btn btn-primary-1" value="Submit" >Save Changes</button>
                        <button onclick="location.href='/home'" type="button" class="btn btn-primary-2">Cancel</button>
                    </form>
                </div>       
            </div> 
            <!-- enf of the edit post card   -->
        </div>
    </body>
</html>


