@extends('backend.layouts.main')
@section('page-title')
    Site Configuration
@endsection
@section('s-title')
    Site Contact
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            Edit Site Contact
        </div>
        <div class="card-body">
            <div class="pt-2">
                <h4>Edit Site Contact</h4>
                <div class="mb-3">
                    <form action="{{ route('admin.site-contact.update', $siteContact->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Number Heading</label>
                            <input type="text" class="form-control" name="number_heading" id=""
                                value="{{ $siteContact->number_heading }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('number_heading')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Number</label>
                            <input type="text" class="form-control" name="number" id=""
                                value="{{ $siteContact->number }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('number')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email Heading</label>
                            <input type="text" class="form-control" name="email_heading" id=""
                                value="{{ $siteContact->email_heading }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('email_heading')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id=""
                                value="{{ $siteContact->email }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Location Heading</label>
                            <input type="text" class="form-control" name="location_heading" id=""
                                value="{{ $siteContact->location_heading }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('location_heading')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Location name</label>
                            <input type="text" class="form-control" name="location_name" id=""
                                value="{{ $siteContact->location_name }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('location_name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Location</label>
                            <input type="text" class="form-control" name="location_value" id=""
                                value="{{ $siteContact->location_value }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('location_value')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Messageus Heading</label>
                            <input type="text" class="form-control" name="contact_message_heading" id=""
                                value="{{ $siteContact->contact_message_heading }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('contact_message_heading')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Messageus Subheading</label>
                            <input type="text" class="form-control" name="contact_message_subhead" id=""
                                value="{{ $siteContact->contact_message_subhead }}" aria-describedby="helpId">
                            <div class="text-danger">
                                @error('contact_message_subhead')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
