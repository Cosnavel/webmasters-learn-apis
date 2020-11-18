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
Route::domain(env('SWAPI_URL'))->get('/documentation', function () {
    return view('documentation.swapi');
})->name('documentation.swapi');
Route::domain(env('SOLAR_URL'))->get('/documentation', function () {
    return view('documentation.solar');
})->name('documentation.solar');

Route::get('/', function () {
    return view('welcome');
});
