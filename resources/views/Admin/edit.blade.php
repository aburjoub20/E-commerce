@extends('index');
@section('content')
<form method="POST" action="{{ route('admin.update') }}">
    @method('PUT')
    <input type="text" name="{{ $admin->id }}"value="{{ $admin->id }}">
    @include('Admin._form')
   </form>
@endsection