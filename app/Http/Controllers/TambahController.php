<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\tambah;


class TambahController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('is_admin');
        $this->middleware('verified');
    }

    public function index()
    {
        // if(!Auth::check()){
        //     return redirect('login')->withErrors(['msg', 'Anda harus login terlebih dahulu']);
        // }

        $tambah = tambah::all();
        return view ('posts.index')->with('tambahs', $tambah);
    }

    public function create()
    {
        // if(!Auth::check()){
        //     return redirect('login');
        // }

        return view('posts.create');
    }

        public function store(Request $request)
        {
            if(!Auth::check()){
                return redirect('login');
            }

            $input = $request->all();
            tambah::create($input);
            return redirect('tambah')->with('flash_message', 'tambah Addedd!');
        }

    public function show(string $id)
    {
        // if(!Auth::check()){
        //     return redirect('login');
        // }

        $tambah = tambah::find($id);
        return view('posts.show')->with('tambahs', $tambah);
    }

    public function edit(string $id)
    {
        // if(!Auth::check()){
        //     return redirect('login');
        // }

        $tambah = tambah::find($id);
        return view('posts.edit')->with('tambahs', $tambah);
    }

    public function update(Request $request, string $id)
    {
        // if(!Auth::check()){
        //     return redirect('login');
        // }

        $tambah = tambah::find($id);
        $input = $request->all();
        $tambah->update($input);
        return redirect('/tambah')->with('flash_message', 'tambah Updated!');  
    }

    
    public function destroy(string $id)
    {
        // if(!Auth::check()){
        //     return redirect('login');
        // }

        tambah::destroy($id);
        return redirect('tambah')->with('flash_message', 'tambah deleted!'); 
    }
}