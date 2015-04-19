<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')

</body>
</html>