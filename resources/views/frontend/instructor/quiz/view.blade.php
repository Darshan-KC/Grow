@extends('backend.layouts.main')
@section('page-title')
    view quiz
@endsection
@section('s-title')
    view quiz
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View quiz
        </div>
        <div class="card-body">
            <div class="pt-5">
                <h1>View a Quiz</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                       
                            <textarea class="form-control" id="question" rows="3"></textarea>
                       
                    </div>
                    <div class="mb-3">
                        <label for="option2" class="form-label">Option1</label>
                        <input type="text" class="form-control" id="option2" name="option2" required>
                    </div>
                    <div class="mb-3">
                        <label for="option3" class="form-label">Option2</label>
                        <input type="text" class="form-control" id="option3" name="option3" required>
                    </div>
                    <div class="mb-3">
                        <label for="option4" class="form-label">Option3</label>
                        <input type="text" class="form-control" id="option4" name="option4" required>
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">correct answer</label>
                        <input type="text" class="form-control" id="answer" name="answer" required>
                    </div>  
                </form>
            </div>
        </div>
    </div>
@endsection
