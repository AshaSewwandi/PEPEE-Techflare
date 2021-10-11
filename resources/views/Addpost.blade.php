<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    <link href="/css/addpost.css" rel="stylesheet">
    </head>
    <body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
    <div class="container" style="background :none !important ">
        <div class="card">
            <div class="card-header">
                <h3 class="form-title"><b>Add Post</b></h3>
            </div>
            <div class="card-body">
                <form action="/StorePost" >
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly>
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label" >Type of the pet: </label>
                            <div class="col-sm-6">
                            <select name="type" class="custom-select" required>
                                <option value=""  selected >Select the type</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Upload Image:</label>
                            <div class="col-sm-6">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Write a caption:</label>
                            <div class="col-sm-9">
                                <textarea rows="4" cols="50" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-sm-3 col-form-label">Location:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="location" >
                            </div>   
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-sm-3 col-form-label">Age:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="age" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sex" class="col-sm-2 col-form-label">Gender:</label>
                            <div class="col-sm-3">
                            <label class="container">Male
                                <input type="radio" name="sex" value="Male"  >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Female
                                <input type="radio" name="sex" value="Female" >
                                <span class="checkmark"></span>
                            </label>
                            </div>
                        </div>    
                        <div class="form-group row">                        
                            <label class="container">Vaccinated:
                                <input type="checkbox" name="vaccination" value="Yes">
                                <span class="checkmark"></span>
                            </label>
                         </div>
                        <button type="submit" class="btn btn-primary-1" value="Submit" >Add Post</button>
                        <button type="Reset" class="btn btn-primary-2" value="Reset">Cancel</button>
                
                    </form>
                </div>       
            </div>   
        </div>
    </body>
</html>


