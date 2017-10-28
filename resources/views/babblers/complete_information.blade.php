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
        background-color: red;
        color: white;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 20px;
      }
      .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
    </style>

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

          <p class="abk"><b style="color: #3097d1">Tu informacion</b><br><a href="" style="color: red; text-decoration: none;">No hay informacion para mostrar</a></p>

          <ul class="blh">
            <li class="bli">
              <a href="#userModal" class="bjx" data-toggle="modal">
                Babblers
                <h6 class="aal">0</h6>
              </a>
            </li>

            <li class="bli">
              <a href="#userModal" class="bjx" data-toggle="modal">
                Lanzados
                <h6 class="aal">0</h6>
              </a>
            </li>
          </ul>
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
              <h6>Ya eres un babbler...</h6>
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
        </li>

        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="{{asset ('img/lognavbar.png')}}">
          <div class="or">
            <div class="bky">
              <h6><b>Foto de perfil</b>
              <button type="button" class="cg kt uo">
                <span class="h awl"></span>
                <input type="file" name="">
              </button>
              </h6>
            </div>
            <p>
              Elige tu foto de perfil, sera publica para tus babblers.
            </p>
          </div>
        </li>
      </ul>
    </div>
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

