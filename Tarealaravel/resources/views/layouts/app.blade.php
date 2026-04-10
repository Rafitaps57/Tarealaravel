<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movie Catalog')</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --bg-gradient: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --card-bg: #ffffff;
            --text-main: #333;
            --text-muted: #7f8c8d;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background: var(--bg-gradient);
            background-attachment: fixed;
            margin: 0;
            min-height: 100vh;
            color: var(--text-main);
        }

        /* Navegación */
        nav {
            background: rgba(255, 255, 255, 0.9);
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        nav a {
            text-decoration: none;
            color: var(--text-main);
            font-weight: 600;
            margin-left: 20px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-color);
        }

        /* Contenedor Principal */
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Estilos de Tarjeta (Reutilizables) */
        .main-card {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Botones Globales */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            text-align: center;
        }

        .btn-primary { background: var(--primary-color); color: white; }
        .btn-primary:hover { background: var(--secondary-color); transform: scale(1.02); }

        /* Estilos para formularios (dentro de las secciones) */
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; }
        input, select, textarea {
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;
            font-size: 16px; box-sizing: border-box;
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">🎬 MovieApp</div>
    <div>
        <a href="{{ route('movies.index') }}">Inicio</a>
        <a href="{{ route('movies.create') }}">Añadir Película</a>
    </div>
</nav>

<div class="container">
    <div class="main-card">
        @yield('content')
    </div>
</div>

</body>
</html>