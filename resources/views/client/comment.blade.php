@extends('layout.master')

@section('title', 'Add Comment')

@section('content')

    @include('layout.drive')

    <div class="container" style="padding: 0;">
        <div class="row justify-content-left">
            <h1>Client: {{ $client->company_name }}</h1>
        </div>
        <hr class="featurette-divider">

    <form method="POST" action="/client-list/comment/{{ $client->id }}">
        {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Comment title</label>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Comment</label>
                <textarea name="body" class="form-control" rows="5"></textarea>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                @include('errors')
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <button type="submit" id="client-comment" style="margin-left:0;" class="main-buttons new">Add Comment</button>
            </div>
            <div class="empty-space"></div>
        </div>
    </form>

    </div>

@endsection