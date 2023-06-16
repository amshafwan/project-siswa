@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')


<div class="row ">
    <div class="col-md-4 mx-auto">

        <div class="card shadow">
  <h5 class="card-header text-center">Reset Password</h5>
  <div class="card-body">
    
    <form method="POST" action="{{route('password.update')}}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- {{-- 1 --}} -->

        <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="email" class="form-control" id="" name="email" value="{{ old('email', $request->email) }}" >
            @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- {{-- 2 --}} -->

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