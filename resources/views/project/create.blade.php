@extends('layout.master')

@section('title', 'Create Project')

@section('content')

    @include('layout.drive')

    <form method="POST" action="/project-list" class="container">

        {{ csrf_field() }}

        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Project name</label>
                <input type="text" name="project_name" class="form-control" value="{{ old('project_name') }}">
            </div>
            <div class="col-md-4">
                <label>Status</label>
                <select type="text" name="status" class="form-control">
                    <option selected disabled>Choose option</option>
                    <option>Open</option>
                    <option>Pending</option>
                    <option>Closed</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label>Project type</label>
                <input type="text" name="project_type" class="form-control" value="{{ old('project_type') }}">
            </div>
            <div class="col-md-4">
                <label>Client</label>
                <input type="text" name="client" class="form-control" value="{{ old('client') }}">
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('errors')
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align: center">
                <button class="main-buttons new create-new" id="new-project" type="submit">Create new project</button>
            </div>
        </div>
    </form>

@endsection