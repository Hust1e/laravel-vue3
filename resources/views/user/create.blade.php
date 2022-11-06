@extends('layouts.main')
@section('content')
    <x-header title="Create user"/>
    <div class="card card-primary">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="card-body">
                <x-form_for_create label="Name" type="text" field="name" :error="$errors"/>
                <x-form_for_create label="Email" type="email" field="email"/>
                <x-form_for_create label="Address" type="text" field="address"/>
                <x-form_for_create label="Password" type="password" field="password"/>
                <x-form_for_create label="Password confirmation" type="password" field="password_confirmation"/>
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>
    </div>
@endsection
