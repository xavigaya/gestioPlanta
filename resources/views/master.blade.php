<html lang="es">
    <head>
        <title> @yield('title') </title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" >
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="/css/estils.css" >
        <script src="//code.jquery.com/jquery-1.11.3.min.js" ></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
        
        <meta charset="UTF-8">
        
        
        <!--[if lt IE 7]>
        <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
        <![endif]-->

        <!--[if IE 7]>
        <html class="no-js lt-ie9 lt-ie8" lang="en">
        <![endif]-->

        <!--[if IE 8]>
        <html class="no-js lt-ie9" lang="en">
        <![endif]-->

        <!--[if gt IE 8]><!--> <html class="no-js" lang="en">
        <!--<![endif]-->
        
        
        
    </head>
    <body>
        @include('shared.navbar')
        @yield('content')
    </body>
</html>