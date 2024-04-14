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
            Edit Site
        </div>
        <div class="card-body">
            <div class="pt-2">
                <h4>Edit Site</h4>
                <div class="mb-3">
                    <form action="{{ route('admin.site-config.edit', $site->id) }}" method="post">
                        @method('put')
                        @csrf
                        <label for="" class="form-label">Site Name</label>
                        <input type="text" class="form-control" name="sitename" id=""
                            placeholder="Eg:- Facebook, Instagram, Twitter, Youtube" aria-describedby="helpId"
                            value="Facebook">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Site Link</label>
                    <input type="text" class="form-control" name="sitelink" id=""
                        placeholder="https://www.facebook.com" aria-describedby="helpId" value="https://www.facebook.com">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
