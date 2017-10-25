
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">
    <title>ChatterBox</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
  </head>
  <style type="text/css">
    body{
      background-image: url("{!! asset('img/wp5.jpg') !!}");
    }
  </style>
  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">ChatterBox</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="{{ route('login') }}">Ingresar</a>
                <a class="nav-link" href="{{ route('register') }}">Registrame</a>
              </nav>
            </div>
          </header>
          </div>
          <div class="col-sm-4"></div>
          
          <div class="col-sm-4">
            <div class="content-fluid">

      <div class="modal-header">
        <h4>Bienvenido</h4>
      </div> 

      <div class="modal-body">
         <form class="new_user" id="new_user" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

          <div class="form-group">
            <div class="input-group field {{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="email" class="form-control" id="email" placeholder="Correo Electronico" name="email">
              <label for="uLogin" class="input-group-addon glyphicon glyphicon-envelope"></label>
            </div>
          </div> 
          @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
          @endif

          <div class="form-group">
            <div class="input-group field{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" class="form-control" id="uPassword" placeholder="Password">
              <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> 
          </div>
          @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
          @endif
          
      </div> 

      <div class="modal-footer">
        <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
        </label>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><button type="submit" class="btn btn-default">Ingresar</button></div>
      </div>
      <div>
      <a class="btn-default" href="{{ route('password.request') }}">
        ¿Olvidaste Tu contraseña?
      </a>
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
