@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Product</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" required class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" required class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('quantity') }}" placeholder="Description">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" required class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" value="{{ old('quantity') }}" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" required class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" placeholder="Price">
                </div>
                <div class="form-group">
                    <label>category_id</label>
                    <input type="text" required class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" value="{{ old('category_id') }}" placeholder="Category id">
                </div>
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
