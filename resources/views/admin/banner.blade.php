@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Headline</h1>
    <a href="{{ route('banner-upload') }}">Create</a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Banner</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
          
            <table>
                <th>Photo</th>
                <td>
                    <img src="#"width="150" alt="">
                </td>
            </table>
        </div>
    </div>
</div>
@endsection
