<html>
    <title>PEPEE</title>
<head>
    <link href="/css/editprofile.css" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="/action_page.php" method="post" id="myform">
            <div class="row">
                <div class="col-25">
                    <label for="file" ><b>Image:</b></label>
                </div>
                <div class="col-75">
                    <input type="file" name="image" value="{{Auth::user()->image}}">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="name" ><b>Name:</b></label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Enter Name" name="name" value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="address" ><b>Address:</b></label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Enter Address" name="address" value="{{Auth::user()->address}}">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email"><b>Email:</b></label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Enter Email" name="email" value="{{Auth::user()->email}}" >
                </div> 
            </div>                        
            <div class="row">
                <div class="col-25">
                    <label for="contact"><b>Contact:</b></label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Enter Contact Number" name="mobileNo"  value="{{Auth::user()->mobileNo}}">
                </div>
            </div>    
            <br><br>                           
            <div class="row">
                <button type="button" class="btn btn-primary-5" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary-6" data-target="#exampleModal" data-toggle="modal" >Save changes</button>
            </div>           
        </form> 
    </div>  
</body>
</html>

 