@extends('layout.master')

@section('title', 'Client List')

@section('content')

    @include('layout.drive')

    <div class="container">
    <div class="row justify-content-cetner">
        <a href="/client-list/create"><button class="main-buttons new">New Client</button></a>
        <table style="text-align:center;" id="client-table" class="table table-responsive-lg table-bordered">
            <thead style=" color:rgba(228, 100, 98, 0.9);">
            <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Preview</th>
                <th scope="col">Edit</th>
                <th scope="col">Add Comment</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>

            @if($clients->count())

                @foreach($clients as $client)

                    <tbody>
                    <tr>
                        <td>{{ $client->company_name }}</td>

                        <td class="table-icons">
                            <a href="/client-list/{{ $client->id }}"><img class="icon" src="open-iconic-master/svg/aperture.svg" alt="Preview"></a>
                        </td>

                        <td class="table-icons">
                            <a href="/client-list/edit/{{ $client->id }}"><img class="icon" src="open-iconic-master/svg/pencil.svg" alt="Edit"></a>
                        </td>

                        <td class="table-icons">
                            <a href="/client-list/comment/{{ $client->id }}"><img class="icon" src="open-iconic-master/svg/comment-square.svg" alt="Add Comment"></a>
                        </td>

                        <td class="table-icons">
                            <a href="/client-list/delete/{{ $client->id }}"><img class="icon" src="open-iconic-master/svg/trash.svg" alt="Delete"></a>
                        </td>
                    </tr>
                    </tbody>

                @endforeach

        </table>

    </div>

                {{ $clients->links('pagination.simple-bootstrap-4') }}

        @else

            <tbody>
            <tr>
                <td class="text-muted" colspan="8" style="letter-spacing: 1px;font-size: 20px;"><strong>Client list is empty</strong></td>
            </tr>
            </tbody>

            </table>

    </div>

        @endif
    </div>

@endsection