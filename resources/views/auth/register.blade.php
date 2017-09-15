<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Developers | Register</title>
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
        <p><h3>Register</h3></p>
        <div class="flash">
            Create a new account
        <form class="new_user" id="new_user" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

    <div class="field {{ $errors->has('name') ? ' has-error' : '' }}">
        <input autofocus="autofocus" placeholder="Names" type="text" value="" name="name" id="name">
        @if ($errors->has('name|'))
        <span class="help-block">
          <strong>{{ $errors->first('name|') }}</strong>
        </span>
        @endif
    </div>

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
    
    <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
        <input placeholder="Confirm Password" type="password" name="password_confirmation" id="password-confirm">
    </div>
    
    <!-- temp param to go to new admin redirect uri -->

    <div class="form-actions clearfix">
      <a href=""><button class="btn btn-primary btn-block" type="submit">Sign up</button></a>
    </div>
</form>
    </div>
   
</div>
 <div class="bottom-links">
        <a href="{{route('login')}}">¿You have a account? <strong>Log In here</strong></a>
    </div>
</body>
</html
