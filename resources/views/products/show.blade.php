@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Details') }}</div>

                <div class="card-body">
                    <h5>ID: {{ $product->id }}</h5>
                    <h5>Product Name: {{ $product->name }}</h5>
                    <p>Description: {{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
