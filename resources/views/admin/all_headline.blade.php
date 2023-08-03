@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Headline</h1>
    <a href="{{ route('create_headline') }}">Create</a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Headline</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
          
            <table>
                <thead>
                    <th>
                       headline
                    </th>
                </thead>
                <tbody>
                    @foreach ($headline as $head)
                        <tr>
                            <td>{{ $head->headline }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
