@extends('layouts.backend.main')

@section('title','Show Kategori')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold">{{ $category->name}}</h6>
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
                <h2 class="m-0 font-weight-bold text-center">Pelatihan</h2>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Deskripsi</th>
                            <th>Diskon</th>
                            <th>Harga</th>
                            <th>View</th>
                            <th>Subscriber</th>
                            <th>Status</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>
                                    <b>{{ $course->title}}</b> - {{ $course->description}}
                                </td>
                                <td>{{ $course->discount_price}}</td>
                                <td>{{ $course->actual_price}}</td>
                                <td>{{ $course->view_count}}</td>
                                <td>{{ $course->subscriber_count}}</td>
                                <td>{{ $course->status}}</td>
                                <td>{{ $course->photo}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection