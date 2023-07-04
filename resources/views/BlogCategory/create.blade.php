@extends('index');
@section('content')
<form method="POST" action="{{ route('BlogCategory.store') }}">
    @include('BlogCategory._form')
   </form>
@endsection