@extends('layout.master')

@section('title')
    Delete File: {{ $file->title }}
@endsection

@section('content')

    <div class="cover">
        <div class="cover-text">
            <h1>Are you sure you want to delete file "<strong><em>{{ $file->title }}</em></strong>"?</h1>

            <form method="post" action="/archive/delete/{{ $file->id }}">

                {{ csrf_field() }}

                <button type="submit" name="yes" class="main-buttons">Yes, delete this comment</button>
                <button type="submit" name="no" id="no" class="main-buttons">No, don't delete this comment</button>

            </form>
        </div>
    </div>

@endsection