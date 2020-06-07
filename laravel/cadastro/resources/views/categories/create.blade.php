@extends('layout.app', ['current' => 'categories']);

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categories" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Catregory Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Category Name">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <button type="button" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>

    </div>
@endsection