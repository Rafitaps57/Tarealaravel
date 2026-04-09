<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-slate-900 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('movies.index') }}" class="text-xl font-bold">🎬 MovieApp</a>
            <div class="space-x-4">
                <a href="{{ route('movies.index', ['genre' => 'Sci-Fi']) }}">Sci-Fi</a>
                <a href="{{ route('movies.index', ['genre' => 'Drama']) }}">Drama</a>
                <a href="{{ route('movies.create') }}" class="bg-blue-600 px-3 py-1 rounded">Añadir</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 p-4 flex-grow">
        @if(session('error'))
            <div class="bg-red-500 text-white p-3 mb-4 rounded">{{ session('error') }}</div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-white text-center p-4 mt-10">
        © {{ date('Y') }} - Catálogo Personal de Películas
    </footer>
</body>
</html>