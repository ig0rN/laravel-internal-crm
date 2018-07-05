@extends('layout.master')

@section('title')
    Delete Project: {{ $project->project_name }}
@endsection

@section('content')

    <div class="cover">
        <div class="cover-text">
            <h1>Are you sure you want to delete project "<strong><em>{{ $project->project_name }}</em></strong>"?</h1>

            <form method="post" action="/project-list/delete/{{ $project->id }}">

                {{ csrf_field() }}

                <button type="submit" name="yes" class="main-buttons">Yes, delete this comment</button>
                <button type="submit" name="no" id="no" class="main-buttons">No, don't delete this comment</button>

            </form>
        </div>
    </div>

@endsection