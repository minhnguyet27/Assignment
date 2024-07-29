@extends('layouts.app')

@section('content')
    @include('components.home.slider')
    @include('components.home.featured-products')
    @include('components.home.customers-say')
    @include('components.home.brand')
    @include('components.home.newsletter')
@endsection