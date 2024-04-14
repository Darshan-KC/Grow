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
    <div class="card-body">
        <div class="pt-2">
            <form>
                <div class="mb-3">
                    <label for="" class="form-label">Number Heading</label>
                    <input type="text" class="form-control" name="number_heading" id=""
                        value="{{ $siteContact->number_heading }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Number</label>
                    <input type="text" class="form-control" name="number" id=""
                        value="{{ $siteContact->number }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email Heading</label>
                    <input type="text" class="form-control" name="email_heading" id=""
                        value="{{ $siteContact->email_heading }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id=""
                        value="{{ $siteContact->email }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Location Heading</label>
                    <input type="text" class="form-control" name="location_heading" id=""
                        value="{{ $siteContact->location_heading }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Location name</label>
                    <input type="text" class="form-control" name="location_name" id=""
                        value="{{ $siteContact->location_name }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location_value" id=""
                        value="{{ $siteContact->location_value }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Messageus Heading</label>
                    <input type="text" class="form-control" name="contact_message_heading" id=""
                        value="{{ $siteContact->contact_message_heading }}" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Messageus Subheading</label>
                    <input type="text" class="form-control" name="contact_message_subhead" id=""
                        value="{{ $siteContact->contact_message_subhead }}" aria-describedby="helpId">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
