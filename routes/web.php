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
Route::view('/documentation', 'documentation.swapi')->domain(config('settings.swapi_url'))->name('documentation.swapi');
Route::view('/documentation', 'documentation.solar')->domain(config('settings.solar_url'))->name('documentation.solar');

Route::view('/', 'welcome');
