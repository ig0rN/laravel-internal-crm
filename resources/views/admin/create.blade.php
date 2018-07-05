@extends('layout.master')

@section('title', 'Create User')

@section('content')

    <br>
    <br>
    <form method="POST" action="/admin/create-user" class="container">

        {{ csrf_field() }}

        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>First &amp; Last Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="col-md-4">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Role</label>
                <select type="text" name="role" class="form-control">
                    <option selected disabled>Choose option</option>
                    <option value="2">User</option>
                    <option value="1">Admin</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('errors')
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <button class="main-buttons new create-new" id="new-project" type="submit">Create new user</button>
            </div>
        </div>
    </form>

@endsection