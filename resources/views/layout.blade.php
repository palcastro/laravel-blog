<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
    <title>Laravel Primera Prueba</title>
</head>

<body>

    <ul class="menu">

        <li><a href="{{ route('home') }}">INICIO</a></li>
        <li><a href="{{ route('about') }}">INFO</a></li>
        <li><a href="{{ route('blog.index') }}">BLOG</a></li>
        <li><a href="{{ route('contact') }}">CONTACTO</a></li>

    </ul>


    <div class="contenido">
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>

</html>
