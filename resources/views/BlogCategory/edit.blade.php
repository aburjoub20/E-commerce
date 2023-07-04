@extends('index');
@section('content')

<form action="{{ route('BlogCategory.update') }}" method="POST">
    @method('PUT')
    <input type="hidden" name="id" value="{{ $BlogCategory->id }}">
        @include('Admin._form')
   </form>
@endsection