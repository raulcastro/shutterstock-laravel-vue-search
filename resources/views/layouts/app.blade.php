<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content="Epilog Theme">

    <!-- Title -->
    <title>@yield('title', 'Shutter Stock Search')</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    @include('partials.styles')
</head>

<body>

    @include('layouts.preloader')

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <div class="top-bottom-scroll">
        <i class="bx bx-chevrons-up bx-fade-up"></i>
    </div>

    @include('partials.scripts')
</body>

</html>
