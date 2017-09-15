<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Developers</title>
  <link rel="icon" href="{!! asset('img/code.ico') !!}"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hind|Slabo+27px" rel="stylesheet">
  <!--scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body, html {
    height: 100%;
    margin: 0;
}

  p {font-size: 16px;}
  .margin {
    margin-bottom: 45px;
    color: black;
  }
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 15px;
      /*letter-spacing: 5px;*/
      font-family: "verdana";

  }
  .navbar-nav  li a:hover {
      color: white !important;
  }
  .hero-image {
  background-image: url("{{asset('img/developing-2.jpg')}}");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{url('/welcome')}}">
        <img src="{{ asset('img/logo_code.png') }} " class="img-resposive"
            srcset="{{ asset('img/logo_code.png') }} 2x, 
             {{ asset('img/logo_code.png') }} 768w, 
             {{ asset('img/logo_code.png') }} 768w 2x, 
             {{ asset('img/logo_code.png') }} 1200w, 
             {{ asset('img/logo_code.png') }} 1200w 2x">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('login')}}">Sign in</a></li>
        <li><a href="{{route('register')}}">Sign up</a></li>
        <li><a href="#">About us</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Welcome Developers</h1>
    <p></p>
    <button class="btn btn-success">Get started</button>
  </div>
</div>

<div class="container-fluid bg-3 text-center">    
  <h2 class="margin"> <span class="glyphicon glyphicon-pushpin"></span>Outstanding</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="{{ asset('img/developer.jpg') }} " class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="{{ asset('img/developer.jpg') }} " class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="{{ asset('img/developer.jpg') }} " class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
  <div class="container-fluid bg-3 text-center">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <a href="{{route('login')}}"><button class="btn btn-primary">Sign in</button></a>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Developers Copyright 2017 |<a href="http://localhost:8000/welcome"> www.developers.com</a></p> 
</footer>

</body>
</html>
