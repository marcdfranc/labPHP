@extends('layout.app', ['current' => 'product']);

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/products" method="POST">
                @csrf
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Product Name">
                </div>
				
				<div class="form-group">
					<label for="price">Price</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">$</div>
						</div>
						<input type="text" class="form-control" id="price" name="price" placeholder="$ Price">
					</div>
				</div>
				<div class="form-group">
					<label for="stock">Stock</label>
					<input class="form-control" type="number" name="stock" id="stock" placeholder="Stock">
				</div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <button type="button" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>

    </div>
@endsection