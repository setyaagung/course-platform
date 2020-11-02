@extends('layouts.backend.main')

@section('title','Input Kelas')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold">Input Kelas</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('course.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Sub Title</label>
                            <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{ old('sub_title')}}">
                            @error('sub_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pengajar</label>
                            <select name="instructor_id" class="form-control">
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id}}">{{ $instructor->name}}</option>
                                @endforeach
                            </select>
                            @error('instructor_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ old('description')}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Playlist URL</label>
                            <input type="text" class="form-control" name="playlist_url" value="{{ old('playlist_url')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tags</label>
                            <input type="text" class="form-control" name="tags[]" value="{{ old('tags')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control p-1" name="photo" value="{{ old('photo')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Promo Video URL</label>
                            <input type="text" class="form-control" name="promo_video_url" value="{{ old('playlist_url')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Kamu akan mempelajari</label>
                    <textarea class="form-control" name="what_will_learn" id="what_will_learn" rows="3">{{ old('what_will_learn')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Target</label>
                    <textarea class="form-control" name="target" id="target" rows="3">{{ old('target')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Persyaratan</label>
                    <textarea class="form-control" name="requirements" id="requirements" rows="3">{{ old('requirements')}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Diskon</label>
                            <input type="number" name="discount_price" class="form-control" value="{{ old('discount_price')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="actual_price" class="form-control" value="{{ old('actual_price')}}">
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a href="{{ route('course.index')}}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#about_instructor' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#what_will_learn' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#target' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#requirements' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush