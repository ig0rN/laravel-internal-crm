@extends('layout.master')

@section('title')
    Preview Client: {{ $client->company_name }}
@endsection

@section('content')

    @include('layout.drive')

    <div class="container" style="padding: 0;">
    <div class="row justify-content-left">
        <h1>Client: {{ $client->company_name }}</h1>
    </div>
    <hr class="featurette-divider">
    <div class="row justify-content-left">
        <form class="container">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <label>Company name</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->company_name }}" disabled>
                    </div>
                </div>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->address }}" disabled>
                    </div>

                    <div class="col-md-3">
                        <label>Zip</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->postal_code }}" disabled>
                    </div>

                    <div class="col-md-3">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->city }}" disabled>
                    </div>

                    <div class="col-md-3">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->country }}" disabled>
                    </div>
                </div>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->phone }}" disabled>
                    </div>

                    <div class="col-md-3">
                        <label>Mobile</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->mobile }}" disabled>
                    </div>

                    <div class="col-md-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" placeholder="" value="{{ $client->mail }}" disabled>
                    </div>

                    <div class="col-md-3">
                        <label>Contact person</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $client->contact_person }}" disabled>
                    </div>
                </div>
                <br>
                <br><br>
            </div>
        </form>
    </div>


    <div class="row justify-content-left">
        <h1>Comments</h1>
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
                                    <span style="float:right"><a href="/client-list/comm-del/{{ $comment->id }}"><img src="{{ asset('open-iconic-master/svg/x.svg') }}" alt=""></a></span>
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

@endsection