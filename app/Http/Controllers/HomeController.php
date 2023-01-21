<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Movie;
use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $peliculas = Movie::with('images')->orderByDesc('score')->limit(6)->get();
        $series = Serie::with('images')->orderByDesc('score')->limit(6)->get();
        $animes = Anime::with('images')->orderByDesc('score')->limit(6)->get();
        return view('cine', compact('peliculas', 'series', 'animes'));
    }
}
