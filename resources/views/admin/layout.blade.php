<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('style')
</head>
<body>
    <div class="admin-wrapper">
        @include('admin.components.sidebar')
        <main class="admin-main">
            @yield('main-content')
        </main>
    </div>
    @include('admin.components.footer')
    @stack('script')
</body>
</html>
