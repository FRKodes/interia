<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.metas')
        @include('partials.styles')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-21"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-84802922-21');
        </script>
    </head>
    <body>
        <header>@include('partials.header')</header>
        <section>@yield('content')</section>
        <footer>@include('partials.footer')</footer>
        <script src="js/interia-all.js"></script>
    </body>
</html>
