<?php

use Illuminate\Support\Facades\Route;
//Richiamo ComicController
use App\Http\Controllers\ComicController as ComicController;
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

// //Route della pagina principale
// Route::get('/', [ComicController::class, 'getAllCards'])->name('homepage');
// //Route della seconda pagina con il comic in dettaglio
// Route::get('/single-card/{slug}', [ComicController::class, 'show'])->name('single-card');

// //Funzione per cambiare il formato data
// function changeDate($saleDate)
// {
//     $date = $saleDate['sale_date'];
//     return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('M d Y');
// }

Route::get('/', [PagesController::class, 'index'])->name('homepage');