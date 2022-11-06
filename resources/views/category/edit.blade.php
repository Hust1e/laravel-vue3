@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit category</h1>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" required class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="Price">
            </div>
            <input type="submit" class="btn btn-primary" value="Edit">
            <a class="btn btn-danger" href="{{ route('category.delete', $category->id) }}">Delete</a>
        </div>
    </form>
@endsection
