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
                    <h5 class="card-title" id="table-bread">Shomwing x of y customers (z to w)</h5>
                    <table id="customersTable" class="table table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Email</th>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>

                </div>

                <div class="card-footer">
                    <nav id="paginator">
                        <ul class="pagination">
                          <li class="page-item disabled first">
                            <a class="page-link pager-link" href="#" data-page="1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item pager-data"><a class="page-link" data-page="x" href="#">X</a></li>
                          <li class="page-item pager-data active" aria-current="page"><a class="page-link" data-page="y" href="#">Y</a></li>                          
                          <li class="page-item last">
                        	<a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>

            </div>
        </div>
        

        <script src="{{ asset('js/app.js') }}"></script>

        
    </body>
</html>
