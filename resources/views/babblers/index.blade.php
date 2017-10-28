<!DOCTYPE html>
@extends('layouts.app')

@section('titulo')
Developers
@endsection
<!---->
@section('content')
<br>
@foreach ($developers as $dev)
	<div class="row">
		<a href="">
        <div class="col-sm-2 text-center">
          <img src="{{ asset('img/usuario.png') }}" class="img-circle" height="65" width="65" alt="Dev">
        </div>
        <div class="col-sm-10">
          <h4>{{$dev->name}} <small>PHP</small></h4>
          <p>{{$dev->email}}</p>
          <br>
        </div>
        </a>
    </div>
        <hr>
@endforeach
@endsection