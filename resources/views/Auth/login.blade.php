@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card border-0 shadow mx-5 px-2">
            <h5 class="card-header text-center border-0 bg-white pt-3 fs-2">Masuk</h5>
            <div class="card-body">

                <form method="POST" action="{{route("login")}}">
                    @csrf

                    @if (session()->has('error_message'))
                    <div class="alert alert-danger">{{session()->get('error_message')}}</div>
                    @endif
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" aria-describedby="emailHelp" value="{{old('email')}}">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        @if($errors->has('email'))
                        <span class="text-danger" style="font-size: 12px">your email or password is wrong!</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" placeholder="Sandi" name="password" id="exampleInputPassword1">
                    </div>

                    <div class=" d-grid text-center gap-3">
                        <button type="submit" class="btn btn-primary">Enter</button>
                        <a href="{{route('password.request')}}" class="btn btn-link " style="font-size: 12px">Forgot Password?</a>
                        <div class="text-black justify-content-center fs-6">Don't have an account yet?</div>
                        <a href="{{ url('register')}}" type="submit" class="btn btn-outline-primary">Sign-Up</a>                        
                    </div>
                
                    </form>
            </div>
        </div>

    </div>

    </div>
</div>


@endsection