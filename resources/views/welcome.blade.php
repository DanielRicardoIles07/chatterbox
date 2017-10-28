@extends('layouts.cover')
@section('title')
Babbler
@endsection
@section('body')
<style type="text/css">
      body{
        background-image: url({{ asset ('img/wp9.jpg')}});
      }
      #iniciar{
        color: black;
      }
      #registrar{
        color: black; 
      }
      #registrar:hover{
        color: #3097d1;
      }
      #visit-me{
        color: black;
      }
    </style>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <nav class="nav nav-masthead">
                <a class="nav-link btn-lg active" id="iniciar" href="{{url('/')}}" >Iniciar Sesion</a>
                <a class="nav-link btn-lg" id="registrar" href="{{route('register')}}">Registrarme</a>
              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
            <h1 class="cover-heading"><l style="color:black">Bab</l><l style="color:#3097d1;">bler</l></li></h1>
            <p class="lead" style="color:black">Babbler es un chat web.</p>
            <p class="lead">
              <a href="" data-target="#modal-login" data-toggle="modal" class="btn btn-lg btn-dark"> Iniciar Sesion</a>
            </p>
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p id="visit-me">
              Visitame<a href="https://www.facebook.com/danielricardo.iles" target="_blank"> Dr7</a>.
            </p>
            </div>
          </footer>
        </div>
      </div>
    </div>
    @include('auth.login')
@endsection