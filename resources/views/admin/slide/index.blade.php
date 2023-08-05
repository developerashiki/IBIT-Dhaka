@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> All  slide </h1>
    <a href="{{ route('slide.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add slide
    </a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 table-width-style">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> slide Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th> Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $key=>$slide)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td>
                             <img src="{{ Storage::url($slide->slide)}}" width="200" class="" alt="{{$slide->slide}}">
                        </td>
                        <td class="btn">
                            {{-- <a href="{{ route('slide.edit',$slide->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> --}}
                            <a href="{{ route('slide.show',$slide->id) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                            <form method="POST" action="{{ route('slide.destroy',$slide->id) }}">
                                @csrf
                                @method('delete')

                                <button onclick=" return confirm('Are your sure delete') " class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
