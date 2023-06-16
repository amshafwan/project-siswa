@extends('layouts.layout')
@section('content')
@section('title', "Home")


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container">
        <div class="row d-flex justify-content-center py-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-dark">
                        <h2 class="text-light"><span class="text-white"><i class="fa-solid fa-cloud"></i>DSis</span>.</h2>
                    </div>
                    <div class="card-body bg-dark">
                        <a href="{{ url('/tambah/create') }}" class="btn btn-success fw-bold" title="Add New Siswa">
                            Add New Siswa+
                        </a>
                    <br/>
                    <br/>
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-light">#</th>
                                        <th class="text-light">Nama</th>
                                        <th class="text-light">Kelas</th>
                                        <th class="text-light">jurusan</th>
                                        <th class="text-light">action</th>
                                    </tr>
                                </thead>
                                @php ($number = 1)
                                @foreach($tambahs as $t)
                                    <tr>
                                        <td class="text-light">{{ $number }}</td>
                                        <td class="text-light">{{ $t->nama }}</td>
                                        <td class="text-light">{{ $t->kelas }}</td>
                                        <td class="text-light">{{ $t->jurusan }}</td>

                                        <td>
                                            <a href="{{ url('/tambah/' . $t->id . '/edit') }}" title="Edit Siswa"><button class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>

                                            <form method="POST" action="{{ url('/tambah' . '/' . $t->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Siswa"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @php ($number++)
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection