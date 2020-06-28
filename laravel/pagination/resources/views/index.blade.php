<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Pagination</title>
       
    </head>
    <body>
        <div class="container">
            <div class="card text-center">
                <div class="card-header">Customers Table</div>
                <div class="card-body">
                    <h5 class="card-title">Shomwing {{ $customers->count() }} of {{ $customers->total() }} customers ({{ $customers->firstItem() }} to {{ $customers->lastItem() }})</h5>
                    <table class="table table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Email</th>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)                                
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->surname }}</td>
                                    <td>{{ $customer->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="card-footer">
                    {{ $customers->links() }}
                </div>

            </div>
        </div>
        

        <script src="{{ asset('js/app.js') }}"></script>

        
    </body>
</html>
