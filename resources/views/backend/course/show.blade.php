@extends('layouts.backend.main')

@section('title', 'Detail Kelas')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="form-group">
                <h3 class="font-weight-bold">{{ $course->title}}</h3>
                <p>{{ $course->sub_title }}</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""><b>Author</b></label>
                        <p>{{ $course->user->name}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""><b>Status</b></label>
                        @if ($course->status == 1)
                            <p>
                                Published
                                <form action="{{ route('course.unpublish',$course->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin mengunpublish kelas ini ?')"><i class="fas fa-trash"></i> Klik untuk mengunpublish</button>
                                </form>
                            </p>
                        @else
                            <p>
                                Unpublished
                                <form action="{{ route('course.publish',$course->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Yakin ingin mempublish kelas ini ?')"><i class="fas fa-thumbs-up"></i> Klik untuk mempublish</button>
                                </form>
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""><b>Kategori</b></label>
                        <p><a href="{{ route('category.show',$course->category->id)}}">{{ $course->category->name}}</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label><b>Dibuat</b></label>
                    <p>{{ $course->created_at->isoFormat('hh:m - dddd, D MMMM Y')}}</p>
                </div>
                <div class="col-md-6">
                    <label><b>Diperbarui</b></label>
                    <p>{{ $course->updated_at->isoFormat('hh:m - dddd, D MMMM Y')}}</p>
                </div>
            </div>
            <div class="form-group">
                <label><b>Deskripsi</b></label>
                {!! $course->description!!}
            </div>
            <div class="form-group">
                <label><b>Tentang Pengajar</b></label><br>
                <i>{{ $course->instructor->name }}</i> - {!! $course->instructor->about !!}
            </div>
            <div class="form-group">
                <label><b>Playlist Url</b></label>
                <p>{{ $course->playlist_url}}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label><b>Tags</b></label>
                    <p>{{ $course->tags}}</p>
                </div>
                <div class="col-md-6">
                    <label><b>Photo</b></label>
                    <p>
                        <img src="{{ Storage::url($course->photo)}}" class="img-fluid" style="width: 100px">
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label><b>Promo Video Url</b></label>
                <p>{{ $course->promo_video_url}}</p>
            </div>
            <div class="form-group">
                <label><b>Kamu akan mempelajari</b></label>
                {!! $course->what_will_learn !!}
            </div>
            <div class="form-group">
                <label><b>Target</b></label>
                {!! $course->target !!}
            </div>
            <div class="form-group">
                <label><b>Persyaratan</b></label>
                {!! $course->requirements !!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label><b>Diskon</b></label>
                    <p>Rp {{number_format($course->discount_price)}}</p>
                </div>
                <div class="col-md-6">
                    <label><b>Harga</b></label>
                    <p>Rp {{number_format($course->actual_price)}}</p>
                </div>
            </div>
            <div class="float-right">
                <a href="{{ route('course.index')}}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection