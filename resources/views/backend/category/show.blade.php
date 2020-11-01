@extends('layouts.backend.main')

@section('title','Show Kategori')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold">{{ $category->name}}</h5>
            <div class="float-right">
                <a href="{{ route('category.index')}}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>:</td>
                                    <td>{{ $category->description}}</td>
                                </tr>
                                <tr>
                                    <th>View</th>
                                    <td>:</td>
                                    <td>{{ $category->view_count}}</td>
                                </tr>
                                <tr>
                                    <th>Dibuat</th>
                                    <td>:</td>
                                    <td>{{ $category->created_at->isoFormat('hh:m - dddd, D MMMM Y')}}</td>
                                    <th>Diperbarui</th>
                                    <td>:</td>
                                    <td>{{ $category->updated_at->isoFormat('hh:m - dddd, D MMMM Y')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <h2 class="m-0 font-weight-bold text-center">Kelas {{ $category->name}}</h2>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Diskon</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>
                                    <a href="{{ route('course.show',$course->id)}}"><b>{{ $course->title }}</b></a>
                                    <p>
                                        Author : {{$course->user->name }}<br>
                                        {{ $course->sub_title}}
                                    </p>
                                </td>
                                <td>Rp {{ number_format($course->discount_price)}}</td>
                                <td>Rp {{ number_format($course->actual_price)}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection