<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Developers | Login</title>
    <!--<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">-->
    <link rel="icon" href="{!! asset('img/code.ico') !!}"/>
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color: rgba(204,204,204,0.2); ">
<div class="min-wrapper login">
    <a href="{{ route('login') }}" class="logo"><img src="{{ asset('img/logo.png') }} " class="img-resposive"></a>
    <div class="form-group">
        <p><h3>Welcome</h3></p>
        <div class="flash">
            Input your info for access
        </div>
        <form class="new_user" id="new_user" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
    
    <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
        <input autofocus="autofocus" placeholder="Email-Address" type="email" value="" name="email" id="email">
        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    </div>
    
    <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
        <input placeholder="Password" type="password" name="password" id="password">
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
    </div>
    

    <!-- temp param to go to new admin redirect uri -->

    <div class="form-actions clearfix">
      <a class="pull-left" href="">¿Forgot your password?</a>
      <a href=""><button class="btn btn-primary" type="submit">Sign in</button></a>
      <!-- <a href="{{url('/welcome')}}" ><button class="btn btn-danger" type="button">Cancel</button></a> -->
     </div>
</form>
    </div>
    <div class="bottom-links">
        <a href="{{route('register')}}">¿You haven't a account? <strong>Sign Up here</strong></a>
    </div>
</div>
</body>
</html
