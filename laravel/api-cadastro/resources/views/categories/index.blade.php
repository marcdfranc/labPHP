@extends('layout.app', ['current' => 'categories']);

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5>Categories</h5>

            @if (count($categories) > 0)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="/categories/edit/{{ $category->id }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/categories/delete/{{ $category->id }}" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            @endif
            <div class="card-footer">
                <a href="/categories/new" class="btn btn-sm btn-primary" role="button">Add Category</a>
            </div>
        </div>
    </div>
@endsection