@extends('layouts.layout')
@section('content')

<div class="card mt-5 shadow">
    <div class="card-header">Siswa Page</div>
    
        <div class="card-body">
    
            <form action="{{ url('tambah') }}" method="post">
            {!! csrf_field() !!}

                <label>Name</label></br>
                
                <input type="text" name="nama" id="nama" class="form-control"></br>
                
                <label>Kelas</label></br>
                
                <input type="number" name="kelas" id="kelas" class="form-control"></br>
                
                <label>jurusan</label></br>
                
                <input type="text" name="jurusan" id="jurusan" class="form-control"></br>
                
                <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop