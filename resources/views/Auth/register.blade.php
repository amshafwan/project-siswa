@extends('layouts.app')

@section('title', 'Register')

@section('content')


<div class="row ">
    <div class="col-md-4 mx-auto">

        <div class="card shadow">
  <h5 class="card-header text-center">Register</h5>
  <div class="card-body">
    
    <form method="POST" action="{{route('register')}}">
        @csrf

        @if(session()->has('error_message'))
          <div class="alert alert-danger">
            {{ session()->get('error_message') }}
          </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
            <small class="text-danger">{{ $errors->first('name') }}</small>
            @endif
        </div>
        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @if($errors->has('email'))
            <small class="text-danger">{{ $errors->first('email') }}</small>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            @if($errors->has('password'))
            <small class="text-danger">{{ $errors->first('password') }}</small>
            @endif
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @if($errors->has('password_confirmation'))
            <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
            @endif
        </div>

        <div class="text-center">
             <button type="submit" class="btn btn-primary ">Login</button>
        </div>
       
        </form>
  </div>
</div>

    </div>
</div>


@endsection