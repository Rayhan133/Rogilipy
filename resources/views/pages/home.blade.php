{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
@include('layout.partials.banner')
@include('layout.partials.features')
{{-- @include('layout.partials.others') --}}

@endsection
