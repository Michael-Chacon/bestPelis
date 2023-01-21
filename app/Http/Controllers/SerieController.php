<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Serie;
use App\Models\Like;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $series = Serie::with('images','likes')->orderByDesc('score')->get();
        return view('series.index', [
            'series' => $series,
        ]);
    }

    public function show(Serie $serie)
    {
        $actores = $serie->actors;
        $generos = $serie->genres;
        return view('series.show', [
            'serie' => $serie, 
            'actores' => $actores,
            'generos' => $generos,
        ]);
    }
}
