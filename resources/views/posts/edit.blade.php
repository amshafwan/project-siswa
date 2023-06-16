@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="card mt-5 shadow">
    <div class="card-header">Edit Siswa</div>
    <div class="card-body">

        <form action="{{ url('tambah/' .$tambahs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
            
            <input type="hidden" name="id" id="id" value="{{$tambahs->id}}" id="id" />
            
            <label>Nama</label></br>
            
            <input type="text" name="nama" id="nama" value="{{$tambahs->nama}}" class="form-control"></br>
            
            <label>Kelas</label></br>
            
            <input type="text" name="kelas" id="kelas" value="{{$tambahs->kelas}}" class="form-control"></br>
            
            <label>Jurusan</label></br>
            
            <input type="text" name="jurusan" id="jurusan" value="{{$tambahs->jurusan}}" class="form-control"></br>
            
            <input type="submit" value="Update" class="btn btn-success">

            <a href="{{ url('/tambah')}}" class="btn btn-primary fw-bold "><i class="fa-solid fa-backward"></i>Back</a>

        </form>
    </div>
</div>

@stop