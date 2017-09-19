<!DOCTYPE html>
<html lang="en">
<head>
  <title>Developers</title>
  <link rel="icon" href="{!! asset('img/code.ico') !!}"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body, html{
    font-family: "Segoe UI",Arial,sans-serif;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    a{
      text-decoration: none;
      color: #686868; 
    }
    a:hover{
      text-decoration: none;
      color: black;
    }

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{ asset('img/logo_code.png') }} " class="img-resposive"
            srcset="{{ asset('img/logo_code.png') }} 2x, 
             {{ asset('img/logo_code.png') }} 768w, 
             {{ asset('img/logo_code.png') }} 768w 2x, 
             {{ asset('img/logo_code.png') }} 1200w, 
             {{ asset('img/logo_code.png') }} 1200w 2x">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a>
        </li>
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" id="links">
      <p><a href="{{ url('developers/') }}"><h5><span class="glyphicon glyphicon-user"></span> Developers</a></h5></p>
      <p><a href="#"><h5><span class="glyphicon glyphicon-comment"></span> Communication</a></h5></p>
      <p><a href="#"><h5><span class="glyphicon glyphicon-comment"></span> Communication</a></h5></a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      
      <div class="col-sm-110 text-center ">
        <h2>
      @yield('titulo')
      </h2>
    </div>
      <div class="col-sm-9">
      @yield('content')
      </div>
</div>
</div>
</div>

<footer class="container-fluid text-center" id="footer">
  <p>Footer Text</p>
</footer>

</body>
</html>
