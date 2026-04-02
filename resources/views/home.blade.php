@extends('base.base')

@section('content')
    <h1>This is my homepage</h1>
    <p>Product Category: {{ $product_category }}</p>
    <p>Product Name: {{ $product_name }}</p>
    {{-- # To render the html  --}}
    {!! $button !!}
@endsection