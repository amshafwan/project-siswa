@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="card">
    <div class="card-header">Siswa Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $tambahs->nama }}</h5>
                <p class="card-text">Kelas : {{ $tambahs->kelas }}</p>
                <p class="card-text">jurusan : {{ $tambahs->jurusan }}</p>
                <a href="{{ url('/tambah')}}" class="btn btn-primary btn-sm fw-bold"><i class="fa-solid fa-backward"></i>Back</a>
            </div>
        </hr>
    </div>
</div>
