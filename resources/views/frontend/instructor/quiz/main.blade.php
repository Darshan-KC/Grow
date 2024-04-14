@extends('backend.layouts.main')
@section('page-title')
    Quiz
@endsection
@section('s-title')
    Quiz
@endsection
@section('main-section')
    <table class="table table-responsive-sm">
        <thead>
            <tr class="text-center">
                <th scope="col">S.N</th>
                <th scope="col">Course</th>
                <th scope="col">Question</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quiz as $qz)
                <tr class="text-center">
                    <td>1</td>
                    <td>course ko name</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, fuga.</td>
                    <td>
                        <a href="{{route('admin.quiz.show',$qz->q_id)}}" class="btn btn-secondary">view</a>
                        <a href="{{route('admin.quiz.edit',$qz->q_id)}}" class="btn btn-success">edit</a>
                        <form action="{{route('admin.quiz.edit',$qz->q_id)}}" class="d-inline">
                            <button type="button" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            <tr class="text-center">
                <td>1</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, fuga.</td>
                <td>
                    <a href="" class="btn btn-secondary">view</a>
                    <a href="" class="btn btn-success">edit</a>
                    <form action="" class="d-inline">
                        <button type="button" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>


        </tbody>
    </table>
@endsection
