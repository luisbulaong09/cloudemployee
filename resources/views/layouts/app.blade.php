<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet">
    <link href="{{asset("css/header.css")}}" rel="stylesheet">
    <link href="{{asset("library/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{assets("js/app.js")}}"></script>
</body>
</html>
