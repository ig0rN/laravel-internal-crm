@extends('layout.master')

@section('title')
    Delete Comment: {{ $comment->title }}
@endsection

@section('content')

    @include('layout.drive')

    <div class="cover">
        <div class="cover-text">
            <h1>Are you sure you want to delete comment "<strong><em>{{ $comment->title }}</em></strong>"?</h1>

            <form method="post" action="/project-list/comm-del/{{ $comment->id }}">

                {{ csrf_field() }}

                <button type="submit" name="yes" class="main-buttons">Yes, delete this comment</button>
                <button type="submit" name="no" id="no" class="main-buttons">No, don't delete this comment</button>

            </form>
        </div>
    </div>

@endsection