@extends('layout.master')

@section('title', 'Admin Panel')

@section('content')

    <br>
    <div class="container">

        @include('flash')

        <div class="row justify-content-cetner">
            <a href="/admin/create-user"><button class="main-buttons new">Add New User</button></a>
            <table style="text-align:center;" id="client-table" class="table table-responsive-lg table-bordered">
                <thead style=" color:rgba(228, 100, 98, 0.9);">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Make/Remove Admin</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>

                @if($users->count())

                    @foreach($users as $user)

                        @if($user->id == auth()->user()->id)
                            @continue
                        @else

                            <tbody>
                            <tr>
                                <td>{{ $user->name }}</td>

                                <td>{{ $user->email }}</td>

                                <td class="table-icons">
                                    @if(!$user->isAdmin())
                                        <a class="btn btn-xs btn-success" href="/admin/make-admin/{{ $user->id }}">Make Admin</a>
                                    @else
                                        <a class="btn btn-xs btn-danger" href="/admin/remove-admin/{{ $user->id }}">Remove Admin</a>
                                    @endif
                                </td>

                                <td class="table-icons">
                                    <a href="/admin/delete-user/{{ $user->id }}"><img class="icon" src="open-iconic-master/svg/trash.svg" alt="Delete"></a>
                                </td>
                            </tr>
                            </tbody>

                        @endif

                    @endforeach

            </table>

        </div>

        {{ $users->links('pagination.simple-bootstrap-4') }}

        @else

            <tbody>
            <tr>
                <td class="text-muted" colspan="8" style="letter-spacing: 1px;font-size: 20px;"><strong>User list is empty</strong></td>
            </tr>
            </tbody>

            </table>

    </div>

    @endif
    </div>

@endsection