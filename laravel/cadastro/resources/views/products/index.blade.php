@extends('layout.app', ['current' => 'products']);

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5>products</h5>

            @if (count($products) > 0)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a href="/products/edit/{{ $product->id }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/products/delete/{{ $product->id }}" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            @endif
            <div class="card-footer">
                <a href="/products/new" class="btn btn-sm btn-primary" role="button">Add Product</a>
            </div>
        </div>
    </div>  
@endsection