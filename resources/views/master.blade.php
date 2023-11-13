
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body > 
@include('component/promotion')

@include('component/popular-item')
<br> <br>

<div class=" container  mb-4" style="max-width: 90%; height:5%;">
  <div class="row g-0">
    
    <div class="col-md-4" style="background-color: white; border:none; box-shadow:5px 5px 5px 5px rgb(235,239,242);border-radius:30px 0px 0px 30px;" >
      <div class="card-body content2" >
        <h3 class="card-title ">Best deals <span>Crispy <br> Sandwishes</span>  </h3> 
        <p class="card-text">Enjoy the large sixe of sandwiches.Complete <br> perfect slice of sandwiches.</p>
         
       <div class="a" style="padding: 10px;background-color: orange; width: 90%;text-align: center;padding-left: 30px;padding-right: 50px;border-radius: 10px;">
        <h5><a href="#" style="text-decoration: none; color:white">PROCEED TO ORDER     </a></h5>
        </div>
    </div>
    </div> <br> <br>
    <div class="col-md-8">
      <img src="{{asset('img/Right.jpg')}}" class="img-fluid rounded-start" width="300%" style="height:100%;">
    </div>
  </div>
</div> <br> <br>

<div class=" container mb-4" style="max-width: 90%; height:5% ;">
  <div class="row g-0">
    <div class="col-md-8" >
      <img src="{{asset('img/Right.jpg')}}" class="img-fluid rounded-start" width="300%" style="height:100%;">
    </div>
    <div class="col-md-4" style="background-color: white; border:none; box-shadow:5px 5px 5px 5px rgb(235,239,242);border-radius:0px 30px 30px 0px;" >
    <div class="card-body content2" >
        <h3 class="card-title ">Best deals <span>Crispy <br> Sandwishes</span>  </h3> 
        <p class="card-text">Enjoy the large sixe of sandwiches.Complete <br> perfect slice of sandwiches.</p>
       

        
        <div class="a" style="padding: 10px;background-color: orange; width: 90%;text-align: center;padding-left: 30px;padding-right: 50px;border-radius: 10px;">
        <h5><a href="#" style="text-decoration: none; color:white">PROCEED TO ORDER     </a></h5>
        </div>        
       
     
    </div>
  </div>
</div>

 
    </div> <br> <br>
    <div class=" container  mb-4" style="max-width: 90%; height:5%;">
  <div class="row g-0">
    
    <div class="col-md-4" style="background-color: white; border:none; box-shadow:5px 5px 5px 5px rgb(235,239,242);border-radius:30px 0px 0px 30px;" >
      <div class="card-body content2" >
        <h3 class="card-title ">Best deals <span>Crispy <br> Sandwishes</span>  </h3> 
        <p class="card-text">Enjoy the large sixe of sandwiches.Complete <br> perfect slice of sandwiches.</p>
         
        <div class="a" style="padding: 10px;background-color: orange; width: 90%;text-align: center;padding-left: 30px;padding-right: 50px;border-radius: 10px;">
        <h5><a href="#" style="text-decoration: none; color:white">PROCEED TO ORDER     </a></h5>
        </div>
    </div>
    </div> <br> <br>
    <div class="col-md-8">
      <img src="{{asset('img/Right.jpg')}}" class="img-fluid rounded-start" width="300%" style="height:100%;">
    </div>
  </div>
</div> <br> <br>
    
<div class=" container mb-4" style=" padding:8%;background:radial-gradient(circle,  white,girgb(239, 233, 221), white) ; ">
<h2 class="h3 mb-4"><span>How does it work</span></h2>
  <div class="row g-4">
    <div class="col-md-3" >
      <img src="{{asset('img/loca.png')}}" class="img-fluid rounded-start" width="50%" style="height:50%;">
      <h3>Select location</h3>
      <p>chooose the location where your food will be delivered</p>
    </div>
    <div class="col-md-3" >
      <img src="{{asset('img/close.png')}}" class="img-fluid rounded-start" width="50%" style="height:50%;">
      <h3>choose order</h3>
      <p>check over hundreds of menus to pick your favorite food</p>
    </div>
    <div class="col-md-3" >
      <img src="{{asset('img/dollard.png')}}" class="img-fluid rounded-start" width="50%" style="height:50%;">
      <h3>Pay advanced</h3>
      <p>It's quick,safe, and simple, select several methods af payment</p>
    </div>

    <div class="col-md-3" >
      <img src="{{asset('img/icons.png')}}" class="img-fluid rounded-start" width="50%" style="height:50%;">
      <h3>Enjoy meals</h3>
      <p>Food is made and delivere directly several methods af payment</p>
    </div>
    

    </div>
</div>
<br> <br>

<div class="container">
  <div class="row g-1 " style="display: grid;   grid-template-columns: repeat(4, 1fr);
">
      <img src="{{asset('img/ruby.png')}}" alt="" height="100" style="width: 60%;">
  
      <img src="{{asset('img/dun.png')}}" alt="tof" height="100" style="width: 60%;">
      <img src="{{asset('img/fri.png')}}" alt="tog"height="100" style="width: 60%;">
      <img src="{{asset('img/pino.png')}}" alt="" height="100" style="width: 60%;">
      <img src="{{asset('img/redpart.png')}}" alt="" height="100" style="width: 60%;">
      <img src="{{asset('img/taco.png')}}" alt="" height="100" style="width: 60%;">
      <img src="{{asset('img/sub.png')}}" alt=""height="100" style="width: 60%;">
      <img src="{{asset('img/kfc.png')}}" alt="" height="100" style="width: 60%;">
  
  </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-GLhlTQ8iFZMZ6mljp+P2uUpAhiyCWvLUNL9/WELCvVFIlCv/RSJoKtk5Lb0CLPIa" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="{{asset('image/Mask Group.png')}}" alt="">
      <a class="navbar-brand" href="#"><span class="red-text">Food</span><span class="orange-text">Wagon</span></a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="col-7">
      <a class="navbar-brand" href="#">Delive to: <img src="{{asset('image/map-marker-alt.png')}}" alt=""></a> Current Location <a href="#" class="bold-text">Mohammadpur Bus Stand, Dhaka</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
    </div>
      <div class="d-flex align-items-center">
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <div class="dropdown">
          <a
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <img src="{{asset('image/map-marker-alt.png')}}" alt="">
            <p><a href="#" class="bold-text">Search Food</a></p>
          </a>
        </div>
        <div class="user-login">
          <a href="#" class="login-link">
            <i class="fa fa-user orange-icon"></i>
            <span class="bold-text orange-text">Login</span>
          </a>
        </div>
      </div>
    </div>
  </nav>
      <header class="header">
          <img src="" alt="FoodWagon by ThemeWagon">
      </header>

  <footer class="bg-dark  text-white">
    <footer class="bg-dark text-light text-left py-3">
      <div class="container">
        <div class="row">
          <h5 class="text-uppercase">Our top cities</h5>
          <div class="col-md-2">
            <p>San Francisco</p>
            <p>Miami</p>
            <p>San diego</p>
            <p>East Bay</p>
            <p>Long Beach</p>
          </div>
          <div class="col-md-2">
            <p>Los Angeles</p>
            <p>Washington DC</p>
            <p>Portland</p> 
            <p>Nashville</p>
          </div>
          <div class="col-md-2">
            <p>New York City</p>
            <p>Orange Country</p>
            <p>Atlanta</p>
            <p>Charlotte</p>
            <p>Denver</p>
          </div>
          <div class="col-md-2">
            <p>Chicago</p>
            <p>Phoenix</p>
            <p>Las Vegas</p>
            <p>Sacramento</p>
            <p>Oklahoma City</p>
          </div>
          <div class="col-md-4">
            <p>Columbus</p>
            <p>New Mexico</p>
            <p>Albuquerque</p>
            <p>Sacramento</p>
            <p>New Orleans</p>
          </div>
        </div>
      </div>
    </footer>
        </div>
  </section>
  <footer class="bg-dark text-light py-3">
      <hr class="my-4">
  </footer>
  <section class="">
    <footer class="bg-dark text-left">
    <footer class="bg-dark text-light text-left py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
          <h5 class="text-uppercase">Company</h5>
            <p>About us</p>
            <p>Team</p>
            <p>Careers</p>
            <p>Blog</p>
          </div>
          <div class="col-md-3">
          <h5 class="text-uppercase">Contact</h5>
            <p>Help & Support</p>
            <p>Partner with us</p>
            <p>Ride with us</p>
          </div>
          <div class="col-md-3">
          <h5 class="text-uppercase">Legal</h5>
            <p>Terms & Conditions</p>
            <p>Refund & Cancellation</p>
            <p>Privacy Policy</p>
            <p>Cookie Policy</p>
          </div>
          <div class="col-md-3">
            <div class="col-md-3">
              <form class="form-inline">
                <p class="text-uppercase">Follow us</p>
                <div class="social-icons">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
                  <input class="form-control mr-sm-2" type="search" placeholder="Entrer votre email" aria-label="Search"><i class="ri-message-2-line"></i>
                  <button class="btn btn-outline-orange my-2 my-sm-0" type="submit"><span class="bold-text orange-text">Subscribe</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      All right Reserved © Your Company 2021
      <a class="text-white" href="https://127.0.0.1.8000/master/">FoodWagon</a>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>