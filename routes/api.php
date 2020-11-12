<?php

use App\Http\Resources\Film as FilmResource;
use App\Http\Resources\People as PeopleResource;
use App\Http\Resources\Planet as PlanetResource;
use App\Http\Resources\Specie as SpecieResource;
use App\Models\Film;
use App\Models\People;
use App\Models\Planet;
use App\Models\Specie;
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

Route::domain('swapi.api.test')->group(function () {
    Route::get('/films', function () {
        return FilmResource::collection(Film::all());
    });

    Route::get('/films/{id}', function ($film) {
        return new FilmResource(Film::find($film));
    });

    Route::get('/people', function () {
        return PeopleResource::collection(People::all());
    });

    Route::get('/people/{id}', function ($people) {
        return new PeopleResource(People::find($people));
    });
    Route::get('/planets', function () {
        return PlanetResource::collection(Planet::all());
    });

    Route::get('/planets/{id}', function ($planet) {
        return new PlanetResource(Planet::find($planet));
    });

    Route::get('/species', function () {
        return SpecieResource::collection(Specie::all());
    });

    Route::get('/species/{id}', function ($specie) {
        return new SpecieResource(Specie::find($specie));
    });
});
