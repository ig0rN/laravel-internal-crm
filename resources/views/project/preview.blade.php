@extends('layout.master')

@section('title')
    Preview Project: {{ $project->project_name }}
@endsection

@section('content')

    @include('layout.drive')

    <div class="container" style="padding: 0;">
        <h1>Project: {{ $project->project_name }}</h1>
        <hr class="featurette-divider">
        <div class="row justify-content-center">

            <div class="col-md-4">
                <label>Project name</label>
                <input type="text" class="form-control" value="{{ $project->project_name }}" disabled>
            </div>
            <div class="col-md-4">
                <label>Status</label>
                <input class="form-control" placeholder="{{ $project->status }}" disabled>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">

            <div class="col-md-4">
                <label>Project type</label>
                <input type="text" class="form-control" value="{{ $project->project_type }}" disabled>
            </div>
            <div class="col-md-4">
                <label>Client</label>
                <input class="form-control" placeholder="{{ $project->client }}" disabled>
            </div>
        </div>


        <br><br>
        <div class="row justify-content-left">
            <h1 class="mb-0">Comments</h1>
        </div>
        <hr class="featurette-divider">


        <div class="row justify-content-left">
            <div class="col-md-12">
                <div id="accordion" role="tablist">

                    @if($comments->count())

                        @foreach($comments as $comment)

                            <div class="card">
                                <div class="card-header" role="tab" id="heading{{ $comment->id }}">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse{{ $comment->id }}" aria-expanded="true" aria-controls="collapse{{ $comment->id }}">
                                            {{ $comment->user->name }} on {{ $comment->created_at->format('j. M, Y H:i') }}: {{ $comment->title }}
                                        </a>
                                        <span style="float:right"><a href="/project-list/comm-del/{{ $comment->id }}"><img src="{{ asset('open-iconic-master/svg/x.svg') }}" alt=""></a></span>
                                    </h5>
                                </div>

                                <div id="collapse{{ $comment->id }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $comment->id }}" data-parent="#accordion">
                                    <div class="card-body">
                                        {{ $comment->body }}
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    @else

                        <div class="text-center">
                            <span class="text-muted" style="font-size: 20px;">Comment list is empty</span>
                        </div>

                    @endif

                </div>
            </div>
        </div>

    </div>

@endsection