<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @stack('style')
</head>

<body>

    @include('admin.components.sidebar')
    @yield('main-content')
    @include('admin.components.footer')
    
</body>
</html>