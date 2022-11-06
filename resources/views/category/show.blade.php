@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('category.status.update'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session()->get('category.status.update') }}
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
                            <th>Category</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex p-3">
                        <div class="mr-3">
                            <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>
                        </div>
                        <div class="mr-3">
                            <form action="{{ route('category.delete', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                        <a class="btn btn-primary" href="{{ route('category.index') }}">All categories</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
