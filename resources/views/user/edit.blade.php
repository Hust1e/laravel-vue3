@extends('layouts.main')
@section('content')
    <x-header title="Edit user"/>
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            <x-form_for_edit label="Name" type="text" field="name" :user="$user->name" :error="$errors"/>
            <x-form_for_edit label="Email" type="text" field="email" :user="$user->email"/>
            <x-form_for_edit label="Address" type="text" field="address" :user="$user->address"/>
            <input type="submit" class="btn btn-primary" value="Edit">
        </div>
    </form>
@endsection
