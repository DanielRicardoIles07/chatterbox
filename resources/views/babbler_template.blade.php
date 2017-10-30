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
}
</style>
<body>
<div class="w3-content" style="max-width:1800px; max-height: 78px">
  <header class="w3-container w3-xlarge w3-padding-30">

    <a href="#" class="w3-left w3-button w3-white">Bab<l class="l">bler</l></a>
    <a href="#about" id="r" class="w3-right w3-white">Registrarme</a>
    <a href="#about" id="r" class="w3-right w3-white">Ingresar</a>
  </header>
</div>
<div class="w3-content" style="max-width:1100px">
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Inicia Sesion</h1><br>
      <h5 class="w3-center">Solo usuarios registrados</h5>
      <p class="w3-large"> 
      	<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
      </p>
    </div>
  </div>
</div>
<footer class="footer">
      <div class="">
        <a href="https://www.facebook.com/danielricardo.iles" id="r" target="_blank"><span class="text-muted">@dr7</span></a>
      </div>
    </footer>
</body>
</html>
