@extends('layout.master')

@section('title', 'Archive List')

@section('content')

    @include('layout.drive')

    <div class="container">
        <div class="row justify-content-cetner">
            <a href="/archive/create"><button class="main-buttons new">New File</button></a>
            <table style="text-align:center;" id="archive-table" class="table table-responsive-lg table-bordered project-table">
                <thead style=" color:rgba(228, 100, 98, 0.9);">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">File Name</th>
                    <th scope="col">Preview</th>
                    <th scope="col">Download</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>

                @if($files->count())

                    @foreach($files as $file)


                        <tbody>
                        <tr>
                            <td>{{ $file->title }}</td>
                            <td>{{ $file->real_name }}</td>
                            <td class="table-icons">
                                <a href="/archive/{{ $file->id }}"><img class="icon" src="open-iconic-master/svg/aperture.svg" alt="Preview"></a>
                            </td>

                            <td class="table-icons">
                                <a href="archive/download/{{ $file->file_name  }}"><img class="icon" src="open-iconic-master/svg/data-transfer-download.svg" alt="Download"></a>
                            </td>

                            <td class="table-icons">
                                <a href="/archive/delete/{{ $file->id }}"><img class="icon" src="open-iconic-master/svg/trash.svg" alt="Delete"></a>
                            </td>
                        </tr>
                        </tbody>

                    @endforeach

            </table>

        </div>

                {{ $files->links('pagination.simple-bootstrap-4') }}

        @else

            <tbody>
            <tr>
                <td class="text-muted" colspan="8" style="letter-spacing: 1px;font-size: 20px;"><strong>File list is empty</strong></td>
            </tr>
            </tbody>

            </table>

    </div>

        @endif
    </div>

@endsection