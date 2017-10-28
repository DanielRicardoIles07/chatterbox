
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">
    <title>Babbler</title>
    <link rel="icon" type="img/png" href="{{ asset ('img/log2.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
  </head>
  <style type="text/css">
    body{
      background-image: url("{!! asset('img/wp7.png') !!}");
    }
  </style>
  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <header class="masthead clearfix">
            <div class="inner">
              <nav class="nav nav-masthead">
                <a class="nav-link " href="{{ url('/welcome') }}">Iniciar Sesion</a>
                <a class="nav-link active" href="{{ route('register') }}">Registrarme</a>
              </nav>
            </div>
          </header>
          </div>
          <div class="col-sm-4"></div>
          
          <div class="col-sm-4">
            <div class="content-fluid">

      <div class="modal-header">
        <h4>Registrate</h4>
      </div> 

      <div class="modal-body">
         <form class="new_user" id="new_user" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
            <!--nombres-->
          <div class="form-group">
            <div class="input-group field{{ $errors->has('name') ? ' has-error' : '' }}">
              <input autofocus="autofocus" class="form-control" placeholder="Nombres" type="text" required="" name="name" id="name">
              <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
            </div>
          </div> 
          @if ($errors->has('name|'))
        <span class="help-block">
          <strong>{{ $errors->first('name|') }}</strong>
        </span>
        @endif
        <!--correo  -->
        <div class="form-group">
            <div class="input-group field{{ $errors->has('email') ? ' has-error' : '' }}">
              <input autofocus="autofocus" class="form-control" placeholder="correo Electronico" type="email" required="" name="email" id="name">
              <label for="uLogin" class="input-group-addon glyphicon glyphicon-envelope"></label>
            </div>
          </div> 
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <!--contraseña1  -->
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
              <input id="password" type="password" class="form-control" name="password" required="" placeholder="Contraseña">
              <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div>
              @if ($errors->has('password'))
                <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
          </div>
          <!--contraseña2  -->
          <div class="form-group">
            <div class="input-group">
              <input placeholder="Confirmar Contraseña" class="form-control" id="password-confirm" type="password" name="password_confirmation" required>
              <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> 
          </div>
      </div> 

      <div class="modal-footer">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><button type="submit" class="btn btn-default">Registarme</button></div>
      </div>
      <br>
    </form>
          </div>
          <div class="col-sm-4"></div>
        </div>
      </div>
    </div>
    <footer class="mastfoot">
        <p>ChatterBox <a href="https://twitter.com/daniel_dr7">@Dr7</a>.</p>
    </footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>
