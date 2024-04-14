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
            Create Site
        </div>
        @php
        $fb=$li=$yt=$tw=$in="";
        foreach ($sitename as $site) {


            if($site['name']=='FACEBOOK'){
            $fb="hidden";
          }
          if($site['name']=='LINKEDIN'){
            $li="hidden";
          }
          if($site['name']=='YOUTUBE'){
            $yt="hidden";
          }
          if($site['name']=='TWITTER'){
            $tw="hidden";
          }
          if($site['name']=='INSTAGRAM'){
            $in="hidden";
          }
        }
        @endphp
        <div class="card-body">
            <div class="pt-2">
                <h4>Add a New Site</h4>
                <form action="{{ route('admin.site-config.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="sitename" class="form-label">Site Name</label>
                        <select class="form-select" id="sitename" name="sitename" aria-label="Default select example">
                            <option {{$fb}} value="FACEBOOK">Facebook</option>
                            <option {{$yt}} value="YOUTUBE">Youtube</option>
                            <option {{$tw}} value="TWITTER">Twitter</option>
                            <option {{$li}} value="LINKEDIN">LinkedIn</option>
                            <option {{$in}} value="INSTAGRAM">Instagram</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Site Link</label>
                        <input type="text" class="form-control" name="sitelink" id=""
                            placeholder="https://www.linkedin.com" aria-describedby="helpId">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
