<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('libraries.dashboard.styles')
    @stack('css')
</head>
<body>
        @include('components.dashboard.nav')
    @yield('content')
        @include('components.dashboard.footer')
        @include('libraries.dashboard.scripts')
    @stack('scripts')
</body>
</html>
