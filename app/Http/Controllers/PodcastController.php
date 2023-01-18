<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        return view('podcasts.index');
    }

    public function show(Podcast $podcast)
    {
        $generos = $podcast->genres;
        return view('podcasts.show', [
            'generos' => $generos,
            'podcast' => $podcast,
        ]);
    }
}
