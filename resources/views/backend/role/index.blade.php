@extends('layouts.backend.main')

@section('title','Role Permission')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold">Role Permission</h5>
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
                            <th>Nama</th>
                            <th>Dibuat</th>
                            <th>Diperbarui</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>
                                    <form action="{{ route('role.update',$role->id)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" value="{{ $role->name }}" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-success" type="submit">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>{{ $role->created_at->isoFormat('D MMMM Y HH:m:s')}}</td>
                                <td>{{ $role->updated_at->isoFormat('D MMMM Y HH:m:s')}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection