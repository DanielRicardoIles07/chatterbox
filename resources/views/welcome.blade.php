@extends('layouts.cover')
@section('title')
Babbler
@endsection
@section('body')
<style type="text/css">
      body{
        background: url({{ asset ('img/wp5.jpg')}});
      }
    </style>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="{{url('/')}}">Iniciar Sesion</a>
                <a class="nav-link" href="{{route('register')}}">Registrarme</a>
              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
            <h1 class="cover-heading"><l>Bab</l><l style="color:rgb(0, 185, 254);">bler</l></li></h1>
            <p class="lead">Babbler es un chat web.</p>
            <p class="lead">
              <a href="" data-target="#modal-login" data-toggle="modal" class="btn btn-lg btn-secondary">Iniciar Sesion</a>
            </p>
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p>
              Visitame para mas <a href="https://www.facebook.com/danielricardo.iles"> Dr7</a>.
            </p>
            </div>
          </footer>
        </div>
      </div>
    </div>
    @include('auth.login')
@endsection