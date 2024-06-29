<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('libraries.login.styles')
    @stack('css')
</head>
<body class="img js-fullheight" style="background-image: url({{ asset('public/assets/login/images/bg.jpg') }});">
    @yield('content')
        @include('libraries.login.scripts')
    @stack('scripts')
</body>
</html>
