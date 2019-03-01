<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="manifest" href="{{ asset ('/manifest.json')}}">
    <meta name="Description" content="@ArtTerror23" />
    <!-- theme-color defines the top bar color (blue in my case)-->
    <meta name="theme-color" content="#414f57" />
    <!-- Add to home screen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="@ArtTerror23" />
<link rel="apple-touch-icon" href="{{ asset('/img/android-icon-144x144.png') }}" />
    <!-- Add to home screen for Windows-->
<meta name="msapplication-TileImage" content="{{ asset('/img/android-icon-144x144.png') }}" />
    <meta name="msapplication-TileColor" content="#000000" />
</head>
<script>
    if ('serviceWorker' in navigator ) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
           // Registration was successful
           console.log('ServiceWorker registration successful with scope: ', registration.scope);
         }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
             });
          });
        }
</script> 
<body>
    @yield('content')

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>