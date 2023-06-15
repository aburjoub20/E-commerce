@extends('index');
@section('content')
<form method="POST" action="{{ route('admin.store') }}">
    @include('Admin._form')
   </form>
@endsection