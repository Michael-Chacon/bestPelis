<?php

namespace App\Http\Controllers;

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
        return view('series.show', [
            'serie' => $serie
        ]);
    }
}
