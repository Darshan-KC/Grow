@extends('backend.layouts.main')
@section('page-title', 'User Information')
@section('s-title')
    User
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary"> User</h3>
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
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">role</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($user as $usr)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->role }}</td>
                                    <td>
                                        @if ($usr->photo != '')
                                            <a href="{{ asset('uploads/profile/' . $usr->photo) }}">
                                                <img src="{{ asset('uploads/profile/' . $usr->photo) }}" width="50px"
                                                    height="50px" alt="profile" srcset="">
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.admin_user.show', $usr->id) }}"
                                            class="btn btn-sm btn-success m-1">View</a>
                                        <a href="{{ route('admin.admin_user.edit', $usr->id) }}"
                                            class="btn btn-sm btn-primary m-1">Edit</a>
                                        <form action="{{ route('admin.admin_user.destroy', $usr->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-danger btn-sm m-1 delete-button">Delete</button>
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
