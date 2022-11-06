@extends('layouts.main')
@section('content')
    <x-header title="Edit category"/>
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
