@extends('layout.master')

@section('title')
    Delete Client: {{ $client->company_name }}
@endsection

@section('content')

    <div class="cover">
        <div class="cover-text">
            <h1>Are you sure you want to delete client "<strong><em>{{ $client->company_name }}</em></strong>"?</h1>

            <form method="post" action="/client-list/delete/{{ $client->id }}">

                {{ csrf_field() }}

                <button type="submit" name="yes" class="main-buttons">Yes, delete this comment</button>
                <button type="submit" name="no" id="no" class="main-buttons">No, don't delete this comment</button>

            </form>
        </div>
    </div>

@endsection