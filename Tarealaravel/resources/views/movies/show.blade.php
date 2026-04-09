@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-lg">
        <h1 class="text-4xl font-bold mb-2">{{ $movie['title'] }}</h1>
        
        {{-- Badge de calificación condicional (Paso 4) --}}
        @if($movie['rating'] >= 9)
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded text-sm font-bold">Excelente</span>
        @elseif($movie['rating'] >= 7)
            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded text-sm font-bold">Buena</span>
        @else
            <span class="bg-red-100 text-red-800 px-3 py-1 rounded text-sm font-bold">Regular</span>
        @endif

        <div class="mt-6 space-y-2">
            <p><strong>Director:</strong> {{ $movie['director'] }}</p>
            <p><strong>Género:</strong> {{ $movie['genre'] }}</p>
            <p><strong>Año:</strong> {{ $movie['year'] }}</p>
            <p class="mt-4 text-gray-700 italic border-t pt-4">{{ $movie['synopsis'] }}</p>
        </div>
        <a href="{{ route('movies.index') }}" class="mt-8 inline-block text-blue-500">← Volver al catálogo</a>
    </div>
@endsection