@extends('layouts.app')

@section('title', 'Nueva Película')

@section('content')
    <h1 style="text-align:center; margin-top:0;">Añadir Nueva Película</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Título</label>
            <input type="text" name="title" placeholder="Ej: Pulp Fiction" required>
        </div>
        <div class="form-group">
            <label>Director</label>
            <input type="text" name="director" required>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%">Guardar Película</button>
    </form>
    <div style="text-align:center; margin-top:20px;">
        <a href="{{ route('movies.index') }}" style="color: #7f8c8d; text-decoration:none;">← Volver</a>
    </div>
@endsection