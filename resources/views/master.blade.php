<html lang="es">
    <head>
        <title> @yield('title') </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="/css/estils.css" >
        <script src="//code.jquery.com/jquery-1.11.3.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
        
        <meta charset="UTF-8">
        
        
    </head>
    <body>
        @include('shared.navbar')
        @yield('content')
    </body>
</html>