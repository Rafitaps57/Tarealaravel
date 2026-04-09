@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Mis Películas</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @forelse($movies as $movie)
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="https://via.placeholder.com/150x200?text=Poster" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="font-bold text-lg">{{ $movie['title'] }}</h3>
                <p class="text-gray-600 text-sm">{{ $movie['director'] }}</p>
                <a href="{{ route('movies.show', $movie['id']) }}" class="text-blue-500 mt-2 block">Ver detalles →</a>
            </div>
        @empty
            <p>No se encontraron películas para este filtro.</p>
        @endforelse
    </div>
@endsection