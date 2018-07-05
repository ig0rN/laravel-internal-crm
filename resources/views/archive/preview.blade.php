@extends('layout.master')

@section('title')
    Preview File: {{ $file->title }}
@endsection

@section('content')

    @include('layout.drive')

    <div class="container">

            <div class="row justify-content-center">
                    <div class="col-md-4" style="text-align: left;">
                        <label>Name</label>
                        <input type="text" name="title" class="form-control" value="{{ $file->title }}" disabled>
                    </div>
                    <div class="col-md-4" style="text-align: left;">
                        <label>Text</label>
                        <input type="text" name="body" class="form-control" value="{{ $file->body }}" disabled>
                    </div>
                </div>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <p>File:</p>
                        <a href="/archive/download/{{ $file->file_name  }}">{{ $file->real_name }}</a>
                    </div>
                </div>

            </div>

@endsection