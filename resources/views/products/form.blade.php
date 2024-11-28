@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h1>
    <form method="POST" action="{{ isset($product) ? route('products.update', $product['id']) : route('products.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product['name'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $product['description'] ?? '' }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product['price'] ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Submit' }}</button>
    </form>
</div>
@endsection
