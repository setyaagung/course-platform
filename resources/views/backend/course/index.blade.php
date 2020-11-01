@extends('layouts.backend.main')

@section('title','Kelas')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold">Kelas</h5>
            <div class="float-right">
                <a href="{{ route('course.create')}}" class="btn btn-sm btn-primary">Tambah</a>
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
                            <th>Title</th>
                            <th>Diskon</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>
                                    <a href="{{ route('course.show',$course->id)}}"><b>{{ $course->title }}</b></a>
                                </td>
                                <td>Rp {{ number_format($course->discount_price)}}</td>
                                <td>Rp {{ number_format($course->actual_price)}}</td>
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