@extends('layout.master')

@section('title', 'Create Client')

@section('content')

    @include('layout.drive')

    <form method="POST" action="/client-list" class="container">
        {{ csrf_field() }}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Company name</label>
                <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
            </div>

            <div class="col-md-3">
                <label>Zip</label>
                <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">
            </div>

            <div class="col-md-3">
                <label>City</label>
                <input type="text" class="form-control" name="city" value="{{ old('city') }}">
            </div>

            <div class="col-md-3">
                <label>Country</label>
                <input type="text" class="form-control" name="country" value="{{ old('country') }}">
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="col-md-3">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
            </div>

            <div class="col-md-3">
                <label>E-mail</label>
                <input type="email" class="form-control" name="mail" value="{{ old('mail') }}">
            </div>

            <div class="col-md-3">
                <label>Contact person</label>
                <input type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}">
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('errors')
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4"  style="text-align: center">
                <button class="main-buttons new create-new" id="new-client" type="submit">Create new client</button>
            </div>
        </div>
    </div>
</form>

@endsection