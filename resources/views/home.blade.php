@extends('layouts.common')

@push('left-sidebar')
    @include('layouts.left-sidebar')
@endpush

@push('right-sidebar')
    @include('layouts.right-sidebar')
@endpush

@push('styles')

@endpush

@section('content')
    index page
@endsection