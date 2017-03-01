<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zack Sunderland</title>
        <link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
        <link rel="manifest" href="img/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


        <script type="text/javascript" src="{{'js/app.js?v='.date('His')}}"></script>
        <script type="text/javascript" src="{{'js/jquery.scrollify.min.js'}}"></script>
        <link rel="stylesheet" href="{{'css/app.css?v='.date('His')}}">
    </head>
    <body>
        <div class="page-header">
            @yield('header')
        </div>
        <div class="sidebar">
            @yield('sidebar')
        </div>
        <div class="main-content">
            @yield('content')
        </div>

        @yield('script')
    </body>
</html>
