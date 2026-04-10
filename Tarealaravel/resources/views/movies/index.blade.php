@extends('layouts.app')

@section('title', 'Catálogo de Películas')

@section('content')
    <h1 style="margin-top:0;">Películas Disponibles</h1>
    
    <div style="margin-bottom: 30px;">
        <p style="font-weight: bold; color: var(--text-muted); margin-bottom: 10px;">Filtrar por género:</p>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="{{ route('movies.index') }}" class="btn" style="background: #eee; color: #333; font-size: 14px;">Todos</a>
            <a href="{{ route('movies.index', ['genre' => 'Sci-Fi']) }}" class="btn" style="background: #e1f5fe; color: #01579b; font-size: 14px;">Ciencia Ficción</a>
            <a href="{{ route('movies.index', ['genre' => 'Drama']) }}" class="btn" style="background: #f3e5f5; color: #4a148c; font-size: 14px;">Drama</a>
            <a href="{{ route('movies.index', ['genre' => 'Action']) }}" class="btn" style="background: #ffebee; color: #b71c1c; font-size: 14px;">Acción</a>
            <a href="{{ route('movies.index', ['genre' => 'Crime']) }}" class="btn" style="background: #e8f5e9; color: #1b5e20; font-size: 14px;">Crimen</a>
        </div>
    </div>

    <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
    
    <div style="display: grid; gap: 15px;">
        @forelse($movies as $movie)
            <div style="padding:20px; border: 1px solid #f0f0f0; border-radius: 10px; display: flex; justify-content: space-between; align-items: center; transition: 0.3s;" onmouseover="this.style.borderColor='var(--primary-color)'" onmouseout="this.style.borderColor='#f0f0f0'">
                <div>
                    <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--primary-color); font-weight: bold;">{{ $movie['genre'] }}</span>
                    <h3 style="margin: 5px 0;">{{ $movie['title'] }}</h3>
                    <small style="color: #999;">Director: {{ $movie['director'] }} | Año: {{ $movie['year'] }}</small>
                </div>
                <a href="{{ route('movies.show', $movie['id']) }}" class="btn btn-primary" style="padding: 8px 16px; font-size: 14px;">Detalles</a>
            </div>
        @empty
            <p style="text-align: center; color: #999;">No hay películas en este género.</p>
        @endforelse
    </div>
@endsection