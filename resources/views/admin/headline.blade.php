@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Headline</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Headline</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
          
            <form method="post" action="{{ route('store_headline') }}" role="form" class="custom-form contact-form">
                @csrf
            
                <div class="form-group">
                    <textarea name="headline" rows="2" class="form-control  @error('headline') is-invalid @enderror" id="message" placeholder="Headline Here">

                    </textarea>
                    @error('headline')
                    <small class="text-danger">{{ $headline }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>

            </form>
        </div>
    </div>
</div>
@endsection
