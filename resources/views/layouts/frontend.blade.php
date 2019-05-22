<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>{{config('app/name')}}</title>
    <!-- CSS -->

    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>

@include('frontend.partials._navbar')
<main role="main">
    @include('frontend.partials._jumbotron')
    @yield('main')

</main>

@include('frontend.partials._footer')
<script src="{{mix('js/app.js')}}"> </script>
@yield('js')
</body>
</html>
