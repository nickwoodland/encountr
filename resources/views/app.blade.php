<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/css/all.css" />
    </head>
    <body>

        {{--@include('nav/_primary')--}}

        <div class="container">

            @include('flash::message')

            @yield('content')

        </div>

        <script type="text/javascript" src="/js/all.js"></script>

    </body>

    @yield('footer')

</html>
