<?php

use App\Http\Middleware\Cors;
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

//direct all web routes through the Vue frontend SPA
Route::get('/{route?}', function () {
    return view('app');
})->where('route', '[\/\w\.-/\d]*')->middleware(Cors::class);
