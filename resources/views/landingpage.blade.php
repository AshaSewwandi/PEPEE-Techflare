<html>
  <title>PEPEE</title>
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity=sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link href="/css/style.css" rel="stylesheet">   
    </head>
    <body>
    <section id="section1" class="parallax" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="caption text-center text-white" data-stellar-ratio="0.7">    
          <div class="logo">
            <img src="/img/logo.png" alt="" width="120" height="60">
          </div> 
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#section1">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#section2">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#section3">Services</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#section4">Contact</a>
            </li> 
          </ul>
          @if(session()->has('success'))
          <div class="alert alert-light">
              {{ session()->get('success') }}
          </div>
          @endif 
          <div class="item1">
            <h1 >Adopt</h1>
          </div>
          <div class="item2">
            <h1>Don't Shop</h1>
          </div>
          <div class="image">
            <img src="/img/img001.png" alt="" width="100" height="100">
          </div>
          <div class="text-right">
            <a href="/Viewpost" class="btn btn-primary-1">Adopt</a>
            <a  href="/login" class="btn btn-primary-2"> Find Shelter</a>
          </div>
        </div>
      </div>
    </section>     
    <section id="section2" class="parallax" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="caption text-center text-white" data-stellar-ratio="0.7">          
          <div class="item3">
            <h1><u>About Us</u><img src="/img/img003.png" alt="" width="100" height="100"> </h1>
          </div>
            <div class="item4">
              <div id="Frame-1">
              Pepee is an online platform which helps innocent animals left alone without owners. 
              Pepee mainly focus on finding shelters for animals that does not have a owner.
              Our aim is to increase public awareness of the avalibality of adoptable animals.
              This platfrom helps to increase the overall effectiveness of pet adoption all over the island.
              Pet lovers can search for your best paw friend from pepee within few minutes. 
              The services provided by pepee are entirely free.              
              </div>
              <div class="image">
                <img src="/img/img001.png" alt="" width="100" height="100">
              </div>
            </div>
        </div>
      </div>
    </section>     
    <section id="section3" class="parallax" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="caption text-center text-white" data-stellar-ratio="0.7">       
          <div class="item5">
            <h1><u> Our Services</u> <img src="/img/img003.png" alt="" width="100" height="100"> </h1>
          </div>
          <div class="item6">
            <ul style="list-style-type:none;">
              <li><i class="fas fa-link "> <a href="http://127.0.0.1:8000/login"> Find homes for pets</a></i></li>
              <li><i class="fas fa-link "> <a href="http://127.0.0.1:8000/viewpost">Find pets for adoption</a></i></li>
              <li><i class="fas fa-link "> <a href="http://127.0.0.1:8000/tipspage">Tips to take care of your pets</a></i></li>
              <li><i class="fas fa-link "> <a href="http://127.0.0.1:8000/petcarepage">Pet Care Center</a></i></li>
            </ul>
            </div>
        <div class="section2-image3"></div>
      </div>
    </section>  
    <section id="section4" class="parallax" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="caption text-center text-white" data-stellar-ratio="0.7">       
          <div class="item7">
            <h1>Leave a Comment</h1>
          </div>
          <div class="form-group">
            <form action="/StoreMessage">
              @csrf     
                <label for="name">Name:</label><br>
                <input type="text" id="name" class="form-control" size="30" name="name" ><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" class="form-control" size="30" name="email" ><br><br>
                <label for="contact_number">Contact No:</label><br>
                <input type="text" id="contact_number" class="form-control" size="30" name="contact_number" ><br><br>
          </div>
          <div class="vl"></div>
            <div id="Frame-2"><b>Message</b>
              <br>
              <p>Leave your message</p>
              <textarea class="form-control2" name="message" rows="3"  value=""></textarea>
              <br><br><br><br>
              <button type="submit" class="btn btn-primary-3" value="Submit">Send Message</button>
              </form> 
          </div>
       <div class="section2-image3"></div>
     </div>
    </section>
    <footer class="text-center text-lg-start bg-light text-muted">
    <br>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>About Us
              </h6>
              <p>
              Pepee is an online platform which helps innocent animals left alone without owners. 
              Pepee mainly focus on finding shelters for animals that does not have a owner.
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Services
              </h6>
              <p>
                <a href="http://127.0.0.1:8000/login" class="text-reset">Find homes</a>
              </p>
              <p>
                <a href="http://127.0.0.1:8000/viewpost" class="text-reset">Find pets</a>
              </p>
              <p>
                <a href="http://127.0.0.1:8000/tipspage" class="text-reset">Care Tips</a>
              </p>
              <p>
                <a href="http://127.0.0.1:8000/petcarepage" class="text-reset">Pet Care Center</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="http://127.0.0.1:8000/#section4" class="text-reset">Leave a Comment</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fas fa-home me-3"></i> Sri Lanka</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Made By
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Dream Team</a>
      </div>
    </footer>
  </body>
</html>