<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::with('genres', 'images')->get();
        return view('podcasts.index', compact('podcasts'));
    }

    public function show(Podcast $podcast)
    {
        $podcast->with('user', 'images', 'genres')->get();
        return view('podcasts.show', compact('podcast'));
    }
}
