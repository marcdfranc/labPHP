@extends('layout.app', ['current' => 'product']);

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/products/edit/{{ $product->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($product->categories as $category)
                            <option value="{{$category->id}}" @if ($category->id == $product->category_id) selected="selected" @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input class="form-control" value="{{ $product->name }}" type="text" name="name" id="name" placeholder="Product Name">
                </div>
				
				<div class="form-group">
					<label for="price">Price</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">$</div>
						</div>
						<input type="text" value="{{ $product->price }}" class="form-control" id="price" name="price" placeholder="$ Price">
					</div>
				</div>
				<div class="form-group">
					<label for="stock">Stock</label>
					<input class="form-control" value="{{ $product->stock }}" type="number" name="stock" id="stock" placeholder="Stock">
				</div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <a href="/products" type="button" class="btn btn-danger btn-sm" role="button">Cancel</a>
            </form>
        </div>

    </div>
@endsection