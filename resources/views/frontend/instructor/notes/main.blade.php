@extends('backend.layouts.main')
@section('page-title')
    Notes Configuration
@endsection
@section('s-title')
    View Notes
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">View Notes</h3>
        </div>
        <div class="card-body text-center">
            <div class="pt-2">
                <div class="table-responsive">
                    <table class="table table-striped
    table-hover
    table-bordered
    align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Pdf</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($notes as $note)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$note->title}}</td>
                    <td><a href="{{ asset('uploads/files/'.$note->pdf) }}" download class="btn btn-primary" id="print-button"> <i class="fa fa-print" aria-hidden="true"></i>&nbsp;{{ $note->pdf }}</a>
                    </td>


                    <td>
                        <a href="{{route('admin.notes.show',$note->id)}}" class="btn btn-primary btn-sm">View</a>

                        <a href="{{route('admin.notes.edit',$note->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('admin.notes.destroy', $note->id) }}" method="post"
                            class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
