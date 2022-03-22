<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Show the form for creating a new Artist
Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');

// Handle the form for creating an Artist (store the record in the db)
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');

