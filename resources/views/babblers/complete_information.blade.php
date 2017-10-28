<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
        Babbler | Informacion
    </title>
    <link rel="icon" type="img/png" href="{{ asset ('img/log2.png')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://bootstrap-themes.github.io/application/assets/css/toolkit.css" rel="stylesheet">
    
    <link href="https://bootstrap-themes.github.io/application/assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
      #completaralert{
        background-color: #ff0505;
        color: white;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 20px;
      }
      

.omitir{
  color: #fff;
    background-color: #3097d1;
    border-color: #4cae4c;
    padding: 6px 12px;
    font-size: 14px;
    border: 1px solid transparent;
    border-radius: 4px;
    cursor: pointer;

}
    </style>
<style>#botones-para-compartir{ text-align:center;}.likedino:hover, .facebooko:hover, .twittero:hover, .googleo:hover,.pinteresto:hover {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);transform: rotate(360deg);transition:all .3s ease-out;-moz-transition: all .5s;-webkit-transition: all .5s;-o-transition: all .5s;}.likedino, .facebooko, .twittero, .googleo, .pinteresto {transition:all .3s ease-out;-moz-transition: all .5s;-webkit-transition: all .5s;-o-transition: all .5s;margin-left:10px; /* espacio entre cada boton */}</style>
          </ul>
  </head>


<body class="bjy">
  <nav class="ck mo zq mt qh app-navbar">
    <button
          class="mk blk se"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="NBFIDSBGDISB">
      <span role="button" tabindex="0" 
       aria-pressed="false" onclick="handleBtnClick(event)" 
       onKeyPress="handleBtnKeyPress(event)">
        <b style="color: white">Menu
        </b></span>
    </button>

    <div class="collapse f" id="navbarResponsive">
      <ul class="navbar-nav adn">
        <li class="md active">
          <button class="cg bll blm bkf" >
            <img class="rl" src="{{asset ('img/log4.png')}}" alt="Babbler">
          </button>
        </li>
      </ul>
      <ul class="navbar-nav adn">
        <li class="md active">
          <button class="cg bll blm bkf" >
            <h1 style="color: white">Babbler</h1>
          </button>
        </li>
      </ul>
      <ul id="#js-popoverContent" class="nav navbar-nav zc aah ro sk">
        
        <li class="md aax">
          <button class="cg bll blm bkf" data-toggle="popover">
            <img class="rl" src="{{asset ('img/lognavbar.png')}}">
          </button>
        </li>
      </ul>

      <ul class="nav navbar-nav ro" id="js-popoverContent">
        <li class="md"><a class="mb" href="#" data-action="growl">Cuenta</a></li>
        <li class="md">
              <a class="mb" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
               Cerrar Sesion
              </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        </li>
      </ul>
    </div>
  </nav>
<div class="by acy adh">
  <div class="dp">
    <div class="fj">
      <div class="mu blf abk">
        <div class="na" style="background-image: url({{asset ('img/lognavbar.png')}});"></div>
        <div class="mv arx">
          <a href="profile/index.html">
            <img
              class="blg"
              src="{{asset ('img/lognavbar.png')}}">
          </a>

          <h6 class="mw">
            <div class="alert oj alert-dismissible ro sp" role="alert" id="completaralert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"> <l style="color: white;">&times;</l></span></button>
              <a class="oe" href="#" style="color: white">Hola {{Auth::user()->name}}!</a><br>Vamos completa tu perfil.
            </div>
            <a class="bjx" href="profile/index.html">{{Auth::user()->name}}</a>
          </h6>

          <p class="abk"><b style="color: #3097d1">Informacion Adicional</b><br><a href="" style="color: red; text-decoration: none;">No hay informacion para mostrar</a></p>
        </div>
      </div>

      <div class="mu sh sp abk">
        <div class="mv">
          <h6 class="abd">Sobre mi <small>· <a href="#" style="color: red">Vacio</a></small></h6>
          <ul class="dc atd">
            <li><span class="asz h awk abc"></span>Estudio en <a href="#" style="color: red">Vacio</a>
            <li><span class="asz h bax abc"></span>Trabajo en <a href="#" style="color: red">Vacio</a>
            <li><span class="asz h bbn abc"></span>Vivo en <a href="#" style="color: red">Vacio</a>
            <li><span class="asz h bcw abc"></span>Soy de <a href="#" style="color: red">Vacio</a>
          </ul>
        </div>
      </div>
    </div>

    <div class="fm">

      <ul class="ca bkt bku abk">

        <li class="oq b acx">
          <div class="input-group">
             <h1>Hola <l style="color: #3097d1">{{Auth::user()->name}}!</h1>
          </div>
        </li>

        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <h6>
                <p>Ya eres un babbler! <l style="color: #00b300">!Felicidades¡</l></p>
              </h6>
            </div>
            <p>
              Es un placer para mi que estes aqui, permiteme decirte que aun te falta informacion que quizas desees compartir con los demas babblers.
            </p>
          </div>
        </li>
      </ul>

      <ul class="ca bkt bku abk">

        <li class="oq b acx">
          <div class="input-group">
             <h3>Completa tu perfil.</h3>

          </div>
            <a href="{{url('/home')}}"><button class="omitir">Omitir</button></a>
        </li>

        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Foto de perfil</b> <br>
              <span class="btn btn-default btn-file">
               <input type="file" class="form-control">
              </span>
            </div><hr>
            <p>
              * Tu foto de portada es importante, sera visible para tus babblers.
            </p>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Foto de Portada</b> <br>
              <span class="btn btn-default btn-file">
               <input type="file" class="form-control">
              </span>
            </div><hr>
            <p>
              * Tu foto de perfil es importante, sera visible para tus babblers.
            </p>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Nombres</b><br>
              <input type="text" class="form-control" placeholder="Nombres y apellidos" name="" required="">
            </div><hr>
            <p>
              * Tus nombres y apellidos son muy importantes.
            </p>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Informacion Adicional</b><br>
              <input type="text" class="form-control" placeholder="Informacion Adicional (Ej. soy Junbbler y soy muy divertido)" name="" required="">
            </div><hr>
            <p>
              * Añade informacion que consideres importante para ti y desees compartir con tus babblers.
            </p>
          </div>
        </li>
      </ul>

      <ul class="ca bkt bku abk">
        <li class="oq b acx">
          <div class="input-group">
             <h3>Sobre ti</h3>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Donde estudias</b><br>
              <input type="text" class="form-control" placeholder="Nombre de tu lugar educativo..." name="" >
              <hr>
              <span class="asz h bcw abc"><b>Direccion</b></span><br>
              <input type="text" class="form-control" placeholder="Direccion de tu lugar educativo..." name="" >
            </div>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Donde Trabajas</b><br>
              <input type="text" class="form-control" placeholder="Nombre de tu lugar de trabajo..." name="" >
              <hr>
              <span class="asz h bcw abc"><b>Direccion</b></span><br>
              <input type="text" class="form-control" placeholder="Direccion de tu lugar de trabajo..." name="" >
            </div>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>Donde vives</b><br>
              <input type="text" class="form-control" placeholder="Nombre lugar donde vives" name="" >
              <hr>
              <span class="asz h bbn abc"><b>Direccion</b></span><br>
              <input type="text" class="form-control" placeholder="Direccion lugar donde vives..." name="" >
            </div>
          </div>
        </li>
        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <b>De donde eres</b><br>
              <input type="text" class="form-control" placeholder="Nombre de tu lugar de origen..." name="" >
              <hr> 
              <span class="asz h bcw abc"><b>Direccion</b></span><br>
              <input type="text" class="form-control" placeholder="Direccion de tu lugar de origen..." name="" >
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="mu blj">
        <div class="mv">
          © 2018 Bootstrap
          <a href="#">About</a>
          <a href="#">Help</a>
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Cookies</a>
          <a href="#">Ads </a>
          <a href="#">Info</a>
          <a href="#">Brand</a>
          <a href="#">Blog</a>
          <a href="#">Status</a>
          <a href="#">Apps</a>
          <a href="#">Jobs</a>
          <a href="#">Advertise</a>
        </div>
      </div>
    <script src="https://bootstrap-themes.github.io/application/assets/js/jquery.min.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/popper.min.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/chart.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/toolkit.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
  </body>
</html>

