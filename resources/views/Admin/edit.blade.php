@extends('index');
@section('content')

<form action="{{ route('admin.update') }}" method="POST">
    @method('PUT')
    <input type="hidden" name="id" value="{{ $admin->id }}">
        @include('Admin._form')
   </form>
@endsection