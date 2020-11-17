<?php

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

Route::domain('swapi.api.test')->get('/documentation', function () {
    return view('documentation.swapi');
})->name('documentation.swapi');
Route::domain('solar.api.test')->get('/documentation', function () {
    return view('documentation.solar');
})->name('documentation.solar');
