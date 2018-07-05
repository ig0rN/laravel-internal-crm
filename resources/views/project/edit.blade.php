@extends('layout.master')

@section('title')
    Edit Project: {{ $project->project_name }}
@endsection

@section('content')

    @include('layout.drive')

    <form method="POST" action="/project-list/edit/{{ $project->id }}" class="container">

        {{ csrf_field() }}

        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Project name</label>
                <input type="text" name="project_name" class="form-control" value="{{ $project->project_name }}">
            </div>
            <div class="col-md-4">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option selected disabled>Choose option</option>
                    <option>Open</option>
                    <option>Pending</option>
                    <option>Closed</option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Project type</label>
                <input type="text" name="project_type" class="form-control" value="{{ $project->project_type }}">
            </div>

            <div class="col-md-4">
                <label>Client</label>
                <input type="text" name="client" class="form-control" value="{{ $project->client }}">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('errors')
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <button class="main-buttons new" id="edit-project" type="submit">Edit project</button>
            </div>
        </div>
    </form>

@endsection