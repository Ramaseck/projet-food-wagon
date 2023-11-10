
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

<div class=" container  mb-4" style="max-width: 90%; height:5%;">
  <div class="row g-0">
    
    <div class="col-md-4" style="background-color: white; border:none; box-shadow:5px 5px 5px 5px rgb(235,239,242);border-radius:30px 0px 0px 30px;" >
      <div class="card-body content2" >
        <h3 class="card-title ">Best deals <span>Crispy <br> Sandwishes</span>  </h3> 
        <p class="card-text">Enjoy the large sixe of sandwiches.Complete <br> perfect slice of sandwiches.</p>
         
        <div class="a">
        <h5><a href="#" >PROCEED TO ORDER     </a></h5>
        </div>
    </div>
    </div> <br> <br>
    <div class="col-md-8">
      <img src="{{asset('img/Right.jpg')}}" class="img-fluid rounded-start" width="300%" style="height:100%;">
    </div>
  </div>
</div>

<div class=" container mb-4" style="max-width: 90%; height:5%% ;">
  <div class="row g-0">
    <div class="col-md-8" >
      <img src="{{asset('img/Right.jpg')}}" class="img-fluid rounded-start" width="300%" style="height:100%;">
    </div>
    <div class="col-md-4" style="background-color: white; border:none; box-shadow:5px 5px 5px 5px rgb(235,239,242);border-radius:0px 30px 30px 0px;" >
    <div class="card-body content2" >
        <h3 class="card-title ">Best deals <span>Crispy <br> Sandwishes</span>  </h3> 
        <p class="card-text">Enjoy the large sixe of sandwiches.Complete <br> perfect slice of sandwiches.</p>
       

        <div class="a">
        <h5><a href="#" >PROCEED TO ORDER     </a></h5>
        </div>
       
      </div>
    </div>
  </div>
</div>
<div class="container  mb-4" style="max-width: 90%; height:5%;">
  <div class="row g-0">
  <div class="col-md-4" style="background-color: white; border:none; box-shadow:5px 5px 5px 5px rgb(235,239,242);border-radius:30px 0px 0px 30px;" >
    <div class="card-body content2" >
        <h3 class="card-title ">Best deals <span>Crispy <br> Sandwishes</span>  </h3> 
        <p class="card-text">Enjoy the large sixe of sandwiches.Complete <br> perfect slice of sandwiches.</p>
       
        <div class="a">
        <h5><a href="#" >PROCEED TO ORDER       </a></h5>
        </div>    </div>
    </div>
    <div class="col-md-8">
      <img src="{{asset('img/Right.jpg')}}" class="img-fluid rounded-start" width="300%" style="height:100%;">
    </div>
  </div>
</div> <br> <br>
<div class=" container mb-4" style=" padding:8%;background:radial-gradient(circle,  white,girgb(239, 233, 221), white) ; height:500px;box-shadow:2px 2px 2px 2px gray">
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
@include('components/promotion')

@include('components/popular-item')
    
</body>
</html>
