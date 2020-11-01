@extends('layouts.backend.main')

@section('title','Pengajar')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold">Pengajar</h5>
            <div class="float-right">
                <a href="{{ route('instructor.create')}}" class="btn btn-sm btn-primary">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if ($message = Session::get('create'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> {{ $message }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($message = Session::get('update'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Perbarui!</strong> {{ $message }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Tentang</th>
                            <th>Job</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instructors as $instructor)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>
                                    <img src="{{ Storage::url($instructor->photo)}}" class="img-fluid" style="width: 75px">
                                </td>
                                <td>{{ $instructor->name }}</td>
                                <td>{{ $instructor->about}}</td>
                                <td>{{ $instructor->job}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection