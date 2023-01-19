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
        $peliculas = Movie::latest()->limit(6)->get();
        $series = Serie::latest()->limit(6)->get();
        $animes = Anime::latest()->limit(6)->get();
        return view('cine', compact('peliculas', 'series', 'animes'));
    }
}
