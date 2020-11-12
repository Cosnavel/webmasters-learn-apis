<?php

use App\Http\Resources\Film as FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/films', function () {
    return FilmResource::collection(Film::all());
});

Route::get('/films/{id}', function ($film) {
    return FilmResource::collection(Film::find($film));
});
