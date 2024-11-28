@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add new product</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['description'] }}</td>
                <td>${{ $product['price'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
