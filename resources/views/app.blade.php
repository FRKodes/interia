<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.metas')
        @include('partials.styles')
    </head>
    <body>
        <header>@include('partials.header')</header>
        <section>@yield('content')</section>
        <footer>@include('partials.footer')</footer>
        <script src="js/jquery.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
