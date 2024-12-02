<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Biblioteca')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Estilo CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('autor.index') }}">Autores</a>
            <a href="{{ route('editorial.index') }}">Editoriales</a>
            <a href="{{ route('seccion.index') }}">Secciones</a>
            <a href="{{ route('articulo.index') }}">Artículos</a>
            <a href="{{ route('cliente.index') }}">Clientes</a>
            <a href="{{ route('personal.index') }}">Personal</a>
            <a href="{{ route('prestamo.index') }}">Préstamos</a>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Sección para insertar el contenido de cada vista -->
    </main>

    <footer>
        <p>© 2024 Biblioteca | Todos los derechos reservados</p>
    </footer>
</body>
</html>
