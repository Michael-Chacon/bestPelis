<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $peliculas = Movie::latest()->get();
        return view('cine', compact('peliculas'));
    }
}
