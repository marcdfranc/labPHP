<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        table {
            border-collapse: collapse;
        }

        table th, td {
            border: 1px solid black;
        }

    </style>

    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Categories</td>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <ul>
                            @foreach ($product->categories as $category)
                                <li>{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</body>
</html>