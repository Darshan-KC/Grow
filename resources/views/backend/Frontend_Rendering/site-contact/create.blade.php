@extends('backend.layouts.main')
@section('page-title')
    Site Contacts
@endsection
@section('s-title')
    Site Contacts
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            Create Site Contacts
        </div>
        <div class="card-body">
            <div class="pt-2">
                <h4>Add Site Contacts</h4>
                <form action="{{ route('admin.site-contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Number Heading</label>
                        <input type="text" class="form-control" name="number_heading" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('number_heading')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Number</label>
                        <input type="text" class="form-control" name="number" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('number')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email Heading</label>
                        <input type="text" class="form-control" name="email_heading" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('email_heading')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Location Heading</label>
                        <input type="text" class="form-control" name="location_heading" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('location_heading')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Location name</label>
                        <input type="text" class="form-control" name="location_name" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('location_name')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location_value" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('location_value')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Messageus Heading</label>
                        <input type="text" class="form-control" name="contact_message_heading" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('contact_message_heading')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Messageus Subheading</label>
                        <input type="text" class="form-control" name="contact_message_subhead" id="" aria-describedby="helpId">
                        <div class="text-danger">
                            @error('contact_message_subhead')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
