@extends('backend.layouts.main')
@section('page-title')
    Site Configuration
@endsection
@section('s-title')
    Site Configuration
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Site
        </div>
        @if (Session::has('msg'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('msg') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card-body">
            <div class="pt-2">
                <div class="table-responsive">
                    <table class="table table-striped
    table-hover
    align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>SN</th>
                                <th>Site Name</th>
                                <th>Site link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($site as $sites)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $sites->sitename }}</td>
                                    <td><a href="{{ $sites->sitelink }}" target="_blank">{{ $sites->sitelink }}</a></td>
                                    <td><a name="" id="" class="btn btn-primary btn-sm"
                                            href="{{ route('admin.site-config.update', $sites->id) }}"
                                            role="button">Edit</a>
                                        <form action="{{ route('admin.site-config.destroy', $sites->id) }}" method="post"
                                            class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
