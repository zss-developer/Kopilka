@extends('layouts.common')

@push('left-sidebar')
    @include('layouts.left-sidebar')
@endpush

@push('right-sidebar')
    @include('layouts.right-sidebar')
@endpush

@section('content')
    {{$section->name}}
@endsection