@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">{{ __('Add Product') }}</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-primary btn-sm">Show</a>
                                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
