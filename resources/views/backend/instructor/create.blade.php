@extends('layouts.backend.main')

@section('title','Pengajar')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold">Input Pengajar</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('instructor.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control p-1 @error('photo') is-invalid @enderror" name="photo">
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Tentang</label>
                    <textarea name="about" class="form-control @error('about') is-invalid @enderror" rows="4">{{ old('about')}}</textarea>
                    @error('about')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" class="form-control" name="job" value="{{old('job')}}">
                </div>
                <div class="float-right">
                    <a href="{{ route('instructor.index')}}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection