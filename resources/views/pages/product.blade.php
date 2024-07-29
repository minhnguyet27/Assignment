@extends('layouts.app')

@section('content')
    @include('components.product.detail')
    {{--  --}}
    @include('components.product.description')
    {{-- @include('components.product.related') --}}
@endsection