@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create category</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Category name">
                </div>
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>
    </div>
@endsection
