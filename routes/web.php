<?php

use App\Models\Anime;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('cine');

Route::get('series', [SerieController::class, 'index'])->name('series.index');
Route::get('series/show/{serie}', [SerieController::class, 'show'])->name('series.show');

Route::resource('animes', 'App\Http\Controllers\AnimeController')->names('anime')->parameters(['animes' => 'anime']);
Route::resource('movies', 'App\Http\Controllers\MovieController')->names('movie')->parameters(['movies' => 'movie']);
Route::resource('podcasts', 'App\Http\Controllers\PodcastController')->names('podcast')->parameters(['podcasts' => 'podcast']);
Route::resource('actors', 'App\Http\Controllers\ActorController')->names('actor')->parameters(['actors' => 'actor']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
