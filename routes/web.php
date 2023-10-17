<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaTableController;
use App\Http\Controllers\LeLieuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/le-lieu', [LeLieuController::class, 'index'])->name('le-lieu');


// Groupe de routes pour les services, activités et restaurants
Route::prefix('la-table')->group(function () {
    Route::get('/la-table', [LaTableController::class, 'table'])->name('table');



});

