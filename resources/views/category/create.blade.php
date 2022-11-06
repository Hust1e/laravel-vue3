@extends('layouts.main')
@section('content')
    <x-header title="Create category"/>
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
