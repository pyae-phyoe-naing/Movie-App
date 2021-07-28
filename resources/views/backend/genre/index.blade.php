@extends('backend.layouts.app')

@section('title', 'Genre')
@section('genre', 'mm-active')
@section('content')
    <x-dashboard-title name='Genre' icon='pe-7s-film'></x-dashboard-title>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            Genre List
            <a href="{{ route('admin.genre.create') }}" class="btn btn-primary btn-sm "><i class="feather-plus-circle"></i> create</a>
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm table-bordered" id="genre" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($genres as $val)
                     <tr>
                         <td>{{ $val->id }}</td>
                         <td>{{ $val->name }}</td>
                         <td>{{ Carbon\Carbon::parse($val->created_at)->format('Y-m-d h:i:s A') }}</td>
                         <td>
                             <a href="{{ route('admin.genre.edit',$val->id) }}" class="btn btn-success btn-sm"><i class="feather-edit"></i></a>
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

        $(document).ready(function() {
            $('#genre').DataTable({
                "pageLength":3,
                "bLengthChange": false,
            });
        });
    </script>
@stop
