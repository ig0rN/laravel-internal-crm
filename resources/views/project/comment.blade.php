@extends('layout.master')

@section('title', 'Add Comment')

@section('content')

    @include('layout.drive')

    <div class="container" style="padding: 0;">
        <div class="row justify-content-left">
            <h1>Project: {{ $project->project_name }}</h1>
        </div>
        <hr class="featurette-divider">

        <form method="POST" action="/project-list/comment/{{ $project->id }}">

            {{ csrf_field() }}

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label>Comment title</label>
                    <input name="title" type="text" class="form-control">
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
                    <button id="project-commnet" style="margin-left:0;" type="submit" class="main-buttons new">Add Comment</button>
                </div>
                <div class="empty-space"></div>
            </div>

        </form>


    </div>

@endsection