@extends('layouts.app')

@section('content')
<div class="shop_area shop_reverse mt-148 mb-128">
    <div class="container">
        <div class="row">
            @include('components.shop.sidebar')

            @include('components.shop.product-list')
        </div>
    </div>
</div>
@endsection