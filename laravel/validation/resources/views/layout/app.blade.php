<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <style>
        body {
            margin-top: 20px
        }

        .navbar {
            margin-bottom: 20px;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        @component('components/navbar', ['current' => $current])
            
        @endcomponent

        <main role="main">
            @hasSection ('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"  type="text/javascript" > </script>
</body>
</html>