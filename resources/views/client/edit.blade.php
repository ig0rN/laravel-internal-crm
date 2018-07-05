@extends('layout.master')

@section('title')
    Edit Client: {{ $client->company_name }}
@endsection

@section('content')

    @include('layout.drive')

    <form method="POST" action="/client-list/edit/{{ $client->id }}" class="container">

        {{ csrf_field() }}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label>Company name</label>
                    <input type="text" class="form-control" name="company_name" value="{{ $client->company_name }}">
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $client->address }}">
                </div>

                <div class="col-md-3">
                    <label>Zip</label>
                    <input type="text" class="form-control" name="postal_code" value="{{ $client->postal_code }}">
                </div>

                <div class="col-md-3">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="{{ $client->city }}">
                </div>

                <div class="col-md-3">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" value="{{ $client->country }}">
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $client->phone }}">
                </div>

                <div class="col-md-3">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="{{ $client->mobile }}">
                </div>

                <div class="col-md-3">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="mail" value="{{ $client->mail }}">
                </div>

                <div class="col-md-3">
                    <label>Contact person</label>
                    <input type="text" class="form-control" name="contact_person" value="{{ $client->contact_person }}">
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
                <div class="col-md-4">
                    <button class="main-buttons new" id="update-client" type="submit">Update</button>
                </div>
            </div>
        </div>
    </form>

@endsection