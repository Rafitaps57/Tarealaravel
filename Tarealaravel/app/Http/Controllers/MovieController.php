<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private $movies = [
        1 => ['id' => 1, 'title' => 'Inception', 'director' => 'Christopher Nolan', 'genre' => 'Sci-Fi', 'year' => 2010, 'rating' => 9, 'synopsis' => 'Un ladrón que roba secretos a través de los sueños.'],
        2 => ['id' => 2, 'title' => 'The Godfather', 'director' => 'Francis Ford Coppola', 'genre' => 'Drama', 'year' => 1972, 'rating' => 10, 'synopsis' => 'El patriarca de una dinastía criminal.'],
        3 => ['id' => 3, 'title' => 'Pulp Fiction', 'director' => 'Quentin Tarantino', 'genre' => 'Crime', 'year' => 1994, 'rating' => 9, 'synopsis' => 'Vidas de criminales se entrelazan.'],
        4 => ['id' => 4, 'title' => 'The Dark Knight', 'director' => 'Christopher Nolan', 'genre' => 'Action', 'year' => 2008, 'rating' => 10, 'synopsis' => 'Batman se enfrenta al Joker.'],
        5 => ['id' => 5, 'title' => 'Interstellar', 'director' => 'Christopher Nolan', 'genre' => 'Sci-Fi', 'year' => 2014, 'rating' => 8, 'synopsis' => 'Viaje a través de un agujero de gusano.'],
        6 => ['id' => 6, 'title' => 'Gladiator', 'director' => 'Ridley Scott', 'genre' => 'Action', 'year' => 2000, 'rating' => 8, 'synopsis' => 'Venganza en el coliseo romano.'],
        7 => ['id' => 7, 'title' => 'The Matrix', 'director' => 'Hermanas Wachowski', 'genre' => 'Sci-Fi', 'year' => 1999, 'rating' => 9, 'synopsis' => 'La realidad es una simulación.'],
        8 => ['id' => 8, 'title' => 'Parasite', 'director' => 'Bong Joon-ho', 'genre' => 'Drama', 'year' => 2019, 'rating' => 9, 'synopsis' => 'Infiltración en una familia rica.'],
    ];

    public function index(Request $request)
    {
        $movies = collect($this->movies);
        if ($request->has('genre')) {
            $movies = $movies->where('genre', $request->genre);
        }
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        if (!isset($this->movies[$id])) {
            return redirect()->route('movies.index')->with('error', 'Película no encontrada.');
        }
        $movie = $this->movies[$id];
        return view('movies.show', compact('movie'));
    }

    public function create() { return view('movies.create'); }
    public function store(Request $request) { return redirect()->route('movies.index'); }
}