@extends('backend.layouts.app')

@section('title','Create Genre')
@section('genre','mm-active')
@section('content')
<x-dashboard-title name='Add Genre' icon='pe-7s-film'></x-dashboard-title>

<div class="card">
    <div class="card-header">
        Create Genre
    </div>
    <div class="card-body p-5">
        <form action="{{ route('admin.genre.store') }}" method="POST">
            @csrf
           <x-input name='name' type='text' ></x-input>
           <button class="btn btn-primary">Create</button>
           <a href="{{ route('admin.genre.index') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
        </form>
    </div>
</div>
@endsection
