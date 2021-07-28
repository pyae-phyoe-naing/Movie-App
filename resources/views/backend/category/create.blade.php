@extends('backend.layouts.app')

@section('title', 'Create Category')
@section('category', 'mm-active')
@section('content')

    <x-dashboard-title name='Add Category' icon='pe-7s-albums'></x-dashboard-title>
    <div class="card">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body p-5">
            <form action="{{ route('admin.store-category') }}" method="POST">
                @csrf
                <x-input name='name' type='text'></x-input>
                <button class="btn btn-primary">Create</button>
                <a href="{{ route('admin.category') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
            </form>
        </div>
    </div>

@endsection
