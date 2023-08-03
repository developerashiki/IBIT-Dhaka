@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Banner</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Banner</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
          
            <form method="post" action="" role="form" class="custom-form contact-form">
                @csrf
            
                <div class="form-group">
                    <label class="form-label">Photo</label>
                    <input type="file" class="form-control"
                    onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0])"
                      name="photo">
                     <img src="" width="160" height="160" id='photo' alt="">
                </div>
                <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>

            </form>
        </div>
    </div>
</div>
@endsection
