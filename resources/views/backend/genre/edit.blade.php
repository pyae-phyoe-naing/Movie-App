@extends('backend.layouts.app')

@section('title','Update Genre')
@section('genre','mm-active')
@section('content')
<x-dashboard-title name='Update Genre' icon='pe-7s-film'></x-dashboard-title>

<div class="card">
    <div class="card-header">
        Update Genre
    </div>
    <div class="card-body p-5">
        <form action="{{ route('admin.genre.update',$genre->id) }}" method="POST">
            @csrf
            @method('PATCH')
           <x-input name='name' type='text' value='{{ $genre->name }}'></x-input>
           <button class="btn btn-primary">Update</button>
           <a href="{{ route('admin.category') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
        </form>
    </div>
</div>
@endsection
