@extends('backend.layouts.app')

@section('title', 'Category')
@section('category', 'mm-active')
@section('content')
    <x-dashboard-title name='Category' icon='pe-7s-albums'></x-dashboard-title>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            Category List
            <a href="{{ route('admin.create-category') }}" class="btn btn-dark btn-sm "><i class="feather-plus-circle"></i> create</a>
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm table-hover" id="category" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $val)
                     <tr>
                         <td>{{ $val->id }}</td>
                         <td>{{ $val->name }}</td>
                         <td>{{ Carbon\Carbon::parse($val->created_at)->format('Y-m-d h:i:s A') }}</td>
                         <td>
                             <a href="{{ route('admin.edit-category',$val->id) }}" class="btn btn-info btn-sm"><i class="feather-edit"></i></a>
                         </td>
                     </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        toastr.success("rrgdc")
        $(document).ready(function() {
            $('#category').DataTable();
        });
    </script>
@stop
