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
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>SN</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Location name</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($siteContact as $contact)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $contact->number }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->location_name }}</td>
                                    <td><a href="{{ $contact->location_value }}"
                                            target="_blank">{{ $contact->location_value }}</a></td>
                                    <td><a name="" id="" class="btn btn-success btn-sm"
                                            href="{{ route('admin.site-contact.show', $contact->id) }}"
                                            role="button">View</a>
                                        <a name="" id="" class="btn btn-primary btn-sm"
                                            href="{{ route('admin.site-contact.edit', $contact->id) }}"
                                            role="button">Edit</a>
                                        <form action="{{ route('admin.site-contact.destroy', $contact->id) }}"
                                            method="post" class="d-inline-block">
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
