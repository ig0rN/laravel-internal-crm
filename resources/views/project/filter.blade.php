@extends('layout.master')

@section('title')
    Projects Status: {{ $filter }}
@endsection

@section('content')

    @include('layout.drive')

    <div class="container">
        <div class="row justify-content-center">
            <table style="text-align:center;" id="project-table" class="table table-responsive-lg table-bordered">
                <thead style=" color:rgba(228, 100, 98, 0.9);">
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Project Type</th>
                    <th scope="col">Client</th>
                    <th scope="col">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Status
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/project-list">All</a>
                                <a class="dropdown-item" href="/project-list/filterby/Open">Open</a>
                                <a class="dropdown-item" href="/project-list/filterby/Pending">Pending</a>
                                <a class="dropdown-item" href="/project-list/filterby/Closed">Closed</a>
                            </div>
                        </li>

                    </th>
                    <th scope="col">Preview</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Add Comment</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>

                @if($projects->count())

                    @foreach($projects as $project)

                        <tbody>
                        <tr>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->project_type }}</td>
                            <td>{{ $project->client }}</td>
                            <td
                                    @if($project->status == 'Open')
                                    class="bg-danger"
                                    @elseif($project->status == 'Pending')
                                    class="bg-warning"
                                    @elseif($project->status == 'Closed')
                                    class="bg-success"
                                    @endif

                            >{{ $project->status }}</td>
                            <td class="table-icons">
                                <a href="/project-list/{{ $project->id }}"><img class="icon" src="/open-iconic-master/svg/aperture.svg" alt="Preview"></a>
                            </td>

                            <td class="table-icons">
                                <a href="/project-list/edit/{{ $project->id }}"><img class="icon" src="/open-iconic-master/svg/pencil.svg" alt="Edit"></a>
                            </td>

                            <td class="table-icons">
                                <a href="/project-list/comment/{{ $project->id }}"><img class="icon" src="/open-iconic-master/svg/comment-square.svg" alt="Add Comment"></a>
                            </td>

                            <td class="table-icons">
                                <a href="/project-list/delete/{{ $project->id }}"><img class="icon" src="/open-iconic-master/svg/trash.svg" alt="Delete"></a>
                            </td>
                        </tr>
                        </tbody>

                    @endforeach
        @else

            <tbody>
            <tr>
                <td class="text-muted" colspan="8" style="letter-spacing: 1px;font-size: 20px;"><strong>{{ $filter }} Projects list is empty</strong></td>
            </tr>
            </tbody>

        @endif


            </table>
        </div>
    </div>

@endsection