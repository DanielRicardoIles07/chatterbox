<!DOCTYPE html>
@extends('layouts.app')

@section('titulo')
Developers
@endsection
<!---->
@section('content')

@foreach ($developers as $dev)
<div> 
<a href="">
<h2>{{$dev->name}}</h2>
<h4>{{$dev->email}}</h4>
</a>
</div>



@endforeach
	

@endsection