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
            View Notes
        </div>
        <div class="card-body">
            <div class="row">

                <div class="card col-12">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><strong>Title: {{ $note->title }}</strong></h5>
                        <p class="card-text mb-3 fs-4"><strong>Content:<br></strong> {{ $note->content }}</p>
                        @if ($note->pdf)
                            <h5>PDF File:</h5>
                            <iframe src="{{ asset('uploads/files/' . $note->pdf) }}" width="100%" height="500px"
                                class="scroll-smooth scrollbar"></iframe>
                        @endif


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
