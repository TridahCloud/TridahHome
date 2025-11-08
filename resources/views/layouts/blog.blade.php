<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('images/tridah icon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/tridah icon.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toast.css') }}">

    @yield('blog-custom-css')
    @stack('styles')
</head>
<body class="homepage-body">
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    @include('partials.toast-container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/theme-toggle.js') }}"></script>
    <script src="{{ asset('js/toast.js') }}"></script>

    @yield('blog-custom-js')
    @stack('scripts')
</body>
</html>

