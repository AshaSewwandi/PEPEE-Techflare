<html>
    <title>PEPEE</title>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    <link href="/css/editprofile.css" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="/updateprofile" method="post" >
        @csrf
            <input type="hidden" name="id" value="{{$users->id}}">
            <div class="row">
                <div class="col-25">
                    <label for="file" ><b>Image:</b></label>
                </div>
                <div class="col-75">
                    <input type="file" name="image" value="{{$users->image}}">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="name" ><b>Name:</b></label>
                </div>
                <div class="col-75">
                    <input type="text"  name="name" value="{{$users->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="address" ><b>Address:</b></label>
                </div>
                <div class="col-75">
                    <input type="text"  name="address" value="{{$users->address}}">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email"><b>Email:</b></label>
                </div>
                <div class="col-75">
                    <input type="text"  name="email" value="{{$users->email}}" >
                </div> 
            </div>                        
            <div class="row">
                <div class="col-25">
                    <label for="contact"><b>Contact:</b></label>
                </div>
                <div class="col-75">
                    <input type="text"  name="mobileNo"  value="{{$users->mobileNo}}">
                </div>
            </div>
               
            <br><br>                           
            <div class="row">
                <button type="button" class="btn btn-primary-5"value="close" >Close</button>
                <button type="submit" class="btn btn-primary-6" value="update" >Save changes</button>
            </div> 
                      
        </form> 
    </div>  
</body>
</html>

 