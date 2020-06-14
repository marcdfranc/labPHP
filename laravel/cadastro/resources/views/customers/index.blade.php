@extends('layout.app', ['current' => 'customers']);

@section('body')
<div class="card border">
    <div class="card-body">
        <h5>Customers</h5>            
        @if (count($customers) > 0)
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Mail</th>                            
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->mail }}</td>
                            <td>
                                <a href="/customers/edit/{{ $customer->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/customers/delete/{{ $customer->id }}" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>           
        @endif
        <div class="card-footer">
             <a href="/customers/new" class="btn btn-sm btn-primary" role="button">Add Customer</a>
         </div>
    </div>
</div>
@endsection


