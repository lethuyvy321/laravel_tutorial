<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .active {
            color: rgb(215, 118, 83);
        }

        .navbar-nav {
            display: flex;
            flex-direction: row;
        }

        .nav-item {
            margin-right: 15px;
            /* Khoảng cách giữa các mục menu */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('layouts.header')
    {{-- content --}}
    @yield('content')
    {{-- end content --}}
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
