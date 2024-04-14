@extends('backend.layouts.main')
@section('page-title')
    contact message
@endsection
@section('s-title')
    user message
@endsection
@section('main-section')
    <table class="table table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">subject</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $arr)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$arr->name}}</td>
                <td>{{$arr->email}}</td>
                <td>{{$arr->subject}}</td>
                <td>
                    <a href="{{route('admin.contact.show',$arr->id)}}" class="btn btn-success">view</a>
                    <form action="{{route('admin.contact.destroy',$arr->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
@endsection
