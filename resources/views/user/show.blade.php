@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('user.status.update'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session()->get('user.status.update') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><a href="{{ route('user.show', $user->id) }}"> {{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex p-3">
                    <div class="mr-3">
                        <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                    </div>
                    <div class="mr-3">
                        <form action="{{ route('user.delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                    <a class="btn btn-primary" href="{{ route('user.index') }}">All users</a>
                </div>
            </div>
        </div>
    </div>
@endsection
