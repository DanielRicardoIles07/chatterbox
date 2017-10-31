<!DOCTYPE html>
<html>
<head>
  <title>Babbler</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
<link rel="icon" type="img/png" href="{{asset ('img/log2.png')}}">
<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
  font-family: "Raleway", Arial, sans-serif;
}
.w3-row img {
  margin-bottom: -800px
}
.w3-content{
  border-bottom: solid gray 1px;
}
.l{
  color: rgb(0,162,232);
}
#r{
  text-decoration: none;
  padding: 10px;
  font-size: 18px;
  color: black;
}
footer{
  border-top: solid gray 1px;
}
</style>
<body>
<div class="w3-content" style="max-width:1800px; max-height: 78px">
  <header class="w3-container w3-xlarge w3-padding-30">
    <!--<a href="#" class="w3-left w3-button w3-white">Bab<l class="l">bler</l></a>-->
    <a href="#about" id="r" class="w3-left w3-white"><img src="{{asset('img/log2.png')}}" class="img-circle" alt="Cinque Terre" width="30" height="30"></a>
    <a href="#about" id="r" class="w3-right w3-white">Registrarme</a>
    <a href="#about" id="r" class="w3-right w3-white">Iniciar Sesion</a>
  </header>
</div>
<div class="container">
    <h1 class="w3-center"> Vamos Estas a poco de ser un miembro babbler! </h1><br>
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
          <h3 class="w3-center">Registrate!</h3>
          <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus="" placeholder="Nombres">
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif                        
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Correo Electronico">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                        
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirma tu contraseña">

                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-block btn-lg">
                                    Registrarme
                                </button>
                            </div>
                        </div>
          </form>
        </div>
    </div>
    <br> <br> <br> <br> 
</div>
<!-- /bootstrap grid example -->
<footer class="footer">
      <div class="">
        <a href="https://www.facebook.com/danielricardo.iles" id="r" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> dr7</a>
      </div>
    </footer>
</body>
</html>
