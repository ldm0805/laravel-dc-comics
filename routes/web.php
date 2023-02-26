<?php

use Illuminate\Support\Facades\Route;
//Richiamo ComicController
use App\Http\Controllers\ComicController as ComicController;
//Richiamo PagesController
use App\Http\Controllers\PagesController as PagesController;



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

//Recupero la route della homepage
Route::get('/', [PagesController::class, 'index'])->name('homepage');

//Recupero in automatico tutte le rotte nella cartella comics.
Route::resource('comics', ComicController::class);