<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $serie = Serie::find(1);
        return view('series.index', compact('serie'));
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
