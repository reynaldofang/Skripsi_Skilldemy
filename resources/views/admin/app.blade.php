<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('admin.partials.styles')
</head>
    <body class="app sidebar-mini">
        @include('admin.partials.header')
        @include('admin.partials.sidebar')
        @yield('content')
        @include('admin.partials.scripts')
    </body>
</html>
