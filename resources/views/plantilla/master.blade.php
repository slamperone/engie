<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
        <title>{{ config('app.name', 'Laravel') }} </title>
        <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('clientlibs/favicon.ico') }}"/>
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="{{ asset('clientlibs/favicon.ico') }}"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- G N R L -->
        <script src="{{ asset('clientlibs/jQuery/v.1.12.4/jquery.min.js') }}">   </script>
        <script src="{{ asset('clientlibs/jQuery/v.1.12.4/jquery-ui.min.js') }}"></script>

        <!-- B A S E -->
        <link rel="stylesheet" href="{{ asset('clientlibs/fontawesome/v.4.7.0/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('clientlibs/css/styles.css') }}"/>
        <script src="{{ asset('clientlibs/scripts/header/script.js') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100869975-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-100869975-3');
    </script>
    </head>

    <body>
            <div class="main">

                 @yield('content')

            </div>
    </body>
</html>