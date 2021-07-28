@extends('backend.layouts.app')

@section('title','Update Category')
@section('category','mm-active')
@section('content')
<x-dashboard-title name='Update Category' icon='pe-7s-albums'></x-dashboard-title>

<div class="card">
    <div class="card-header">
        Update Category
    </div>
    <div class="card-body p-5">
        <form action="{{ route('admin.update-category',$category->id) }}" method="POST">
            @csrf
           <x-input name='name' type='text' value='{{ $category->name }}'></x-input>
           <button class="btn btn-primary">Update</button>
           <a href="{{ route('admin.category') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
        </form>
    </div>
</div>
@endsection
