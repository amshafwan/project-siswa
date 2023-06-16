@extends('layouts.app')

@section('title', 'Login')

@section('content')


        <div class="card border-0 shadow mx-5 px-2">
            <h5 class="card-header text-center border-0 bg-white pt-3 fs-4">verify email</h5>
            <div class="card-body">

            @if (session('status'))
                    <div class="alert alert-success text-center">Email Verification Has Been Send</div>
                @endif


                    <div  iv class="card border-0 shadow mx-5 my-3 px-2 py-2" style="border-radius: 20px;">
                        <h5 class="card-header text-center border-0 bg-white pt-3 fs-2">Reset Password</h5>
                            <div class="card-body">
                                Before proceeding, please check your email for a verification link, or 
                                <form class="d-inline" action="{{route('verification.send')}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                        {{__('Click here to resend verification email')}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection