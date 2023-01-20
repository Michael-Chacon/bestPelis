<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::get();
        return view('podcasts.index', compact('podcasts'));
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
