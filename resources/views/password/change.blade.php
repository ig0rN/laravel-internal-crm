@extends('layout.master')

@section('title', 'Change Password')

@section('content')

    <br>
    <br>
    <form method="POST" action="/change-password" class="container">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="password">New Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @include('errors')
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <button class="main-buttons new create-new" id="new-client" type="submit">Change Password</button>
                </div>
            </div>
        </div>
    </form>

@endsection