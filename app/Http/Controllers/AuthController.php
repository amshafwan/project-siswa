<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login(){
        if(Auth::check()){
            return redirect('tambah');
        }
        else{
            return view('auth.login');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form() {
        if(!Auth::check()){
            return view('auth.register');
        }
        else{
            return redirect('tambah');
        }
    }

    public function register(Request $request) {
        $request->validate([
            'name'     => 'min:3|max:12',
            'email'    => 'email|unique:users',
            'password' => 'min:4|max:12|confirmed'
        ]);

        User::create ([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login');
    }
    
    public function authenticate(Request $request){
        $kartu = $request->only('email', 'password');

        if(Auth::attempt($kartu)){
            return redirect('tambah');
        }else{
            return redirect('login');
        }
    }
}