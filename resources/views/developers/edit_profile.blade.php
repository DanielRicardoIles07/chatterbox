<!DOCTYPE html>
@extends('layouts.app')

@section('titulo')
Complete your profile <b>{{ Auth::user()->name }}</b>
@endsection
<!---->
@section('content')
<br>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <div class="flash">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach 
            </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'developers/completeprofile','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="Names" type="text" value="{{Auth::user()->name}}" name="name" id="name" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="Email-Address" type="email" value="{{Auth::user()->email}}" name="email" id="email" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="Email-Address 2" type="email" value="{{Auth::user()->email_2}}" name="email_2" id="email_2" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="Username" type="text" value="{{Auth::user()->username}}" name="username" id="username" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="Developer in" type="text" value="{{Auth::user()->developer_in}}" name="developer_in" id="developer_in" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="Birth" type="date" value="{{Auth::user()->birth}}" name="birth" id="birth" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>
    <strong class="col-md-3">Profile Photo:</strong>
    <div class="field" style="width: 70%">
        <input autofocus="autofocus" placeholder="" type="file" value="1" name="photo" id="photo" width="">
          <span class="help-block">
             <strong></strong>
          </span>
    </div>

    <div class="form-actions clearfix">
      <a href=""><button class="btn btn-primary" type="submit">Save</button></a> or
      <a href="{{route('home')}}"><button type="button" class="btn btn-default">Skip</button></a>
    </div>
    {{Form::close()}}
  </div>
  <hr>
<br><br><br><br>

@endsection