@extends('layout.master')

@section('title')
    Delete User: {{ $user->name }}
@endsection

@section('content')

    <div class="cover">
        <div class="cover-text">
            <h1>Are you sure you want to delete user "<strong><em>{{ $user->name }}</em></strong>"?</h1>

            <form method="post" action="/admin/delete-user/{{ $user->id }}">

                {{ csrf_field() }}

                <button type="submit" name="yes" class="main-buttons">Yes, delete this user</button>
                <button type="submit" name="no" id="no" class="main-buttons">No, don't delete this user</button>

            </form>
        </div>
    </div>

@endsection