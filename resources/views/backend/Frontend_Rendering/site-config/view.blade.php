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
  <div class="table-responsive">
    <table class="table table-striped
    table-hover
    align-middle">
        <thead class="table-light">
            <tr>
                <th>SN</th>
                <th>Site Name</th>
                <th>Site link</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr >
                    <td scope="row">1</td>
                    <td>Facebook</td>
                    <td>https://www.facebook.com</td>
                    <td> <a href="{{ route('edit-site') }}"><button type="submit" class="btn-sm btn-primary">Edit</button></a>
                    <button type="submit"class="btn-sm btn-danger">Delete</button></td>

                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>Linked In</td>
                    <td>https://www.linkedin.com</td>
                    <td> <a href="{{ route('edit-site') }}"><button type="submit" class="btn-sm btn-primary">Edit</button></a>
                        <button type="submit"class="btn-sm btn-danger">Delete</button></td>


                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>Twitter</td>
                    <td>https://www.twiter.com</td>
                    <td> <a href="{{ route('edit-site') }}"><button type="submit" class="btn-sm btn-primary">Edit</button></a>
                        <button type="submit"class="btn-sm btn-danger">Delete</button></td>

                </tr>
                <tr>
                    <td scope="row">4</td>
                    <td>Instagram</td>
                    <td>https://www.instagram.com</td>
                    <td> <a href="{{ route('edit-site') }}"><button type="submit" class="btn-sm btn-primary">Edit</button></a>
                        <button type="submit"class="btn-sm btn-danger">Delete</button></td>

                </tr>
                <tr>
                    <td scope="row">5</td>
                    <td>Youtube</td>
                    <td>https://www.youtube.com</td>
                    <td> <a href="{{ route('edit-site') }}"><button type="submit" class="btn-sm btn-primary">Edit</button></a>
                        <button type="submit"class="btn-sm btn-danger">Delete</button></td>

                </tr>
            </tbody>
            <tfoot>

            </tfoot>
    </table>
  </div>

        </div>
    </div>
</div>


@endsection
