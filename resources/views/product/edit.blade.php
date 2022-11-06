@extends('layouts.main')
@section('content')
    <x-header title="Edit product"/>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" required class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $product->title) }}" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" required class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description', $product->description) }}" placeholder="Description">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" required class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="Quantity">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" required class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price', $product->price) }}" placeholder="Price">
            </div>
            <div class="form-group">
                <label>category_id</label>
                <input type="text" required class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" value="{{ old('category_id', $product->category_id) }}" placeholder="Category id">
            </div>
            <input type="submit" class="btn btn-primary" value="Edit">
        </div>
    </form>
@endsection
