@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> All Shop slide </h1>
    <a href="{{ route('slide.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add slide
    </a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 table-width-style">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Shop slide Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <h1>slideImage Information</h1>
     <table class="table">
       
            <th>Slide</th>
          

            <tbody>
                {{-- <td>
                    <img @if(!isset($slide->slide))  @endif src="{{$slide->slide}}" width="150" alt="">
                </td> --}}
                <td>
                    @if($slide->slide)
                    <img width="200" src="{{ $slide->slide }}" alt="homeImg">
                    @endif
                </td>
              
            </tbody>
     </table>
        </div>
    </div>
</div>
@endsection
