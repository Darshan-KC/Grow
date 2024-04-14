@extends('backend.layouts.main')
@section('page-title')
    Quiz
@endsection
@section('s-title')
    Create Quiz
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Create Quiz</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
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
                        <label for="option2" class="form-label">Option4</label>
                        <input type="text" class="form-control" id="option2" name="option2" required>
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Correct Answer</label>
                        <input type="text" class="form-control" id="answer" name="answer" required>
                    </div>




                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
