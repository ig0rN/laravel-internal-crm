@extends('layout.master')

@section('title', 'Create File')

@section('content')

    @include('layout.drive')

    <div class="container">

        <form method="POST" action="/archive" enctype="multipart/form-data">

            {{ csrf_field() }}

        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align: left;">
                <label>Name</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="col-md-4" style="text-align: left;">
                <label>Text</label>
                <input type="text" name="body" class="form-control" value="{{ old('body') }}">
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center" style="text-align: left;">
            <label class="custom-file">
                <input type="file" name="file" id="file2" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
        </div>
            <br>
        <div class="row justify-content-center">
            <div class="col-md-4 ">
                @include('errors')
            </div>
        </div>

            <div class="row justify-content-center">
            <div class="col-md-4" style="text-align: center">
                <button class="main-buttons new create-new" type="submit" id="new-archive">Create new file</button>
            </div>
        </div>

        </form>

    </div>

@endsection