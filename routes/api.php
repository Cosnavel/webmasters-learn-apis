<?php

use App\Models\Body;
use App\Models\Film;
use App\Models\People;
use App\Models\Planet;
use App\Models\Specie;
use App\Models\Vehicle;
use App\Models\Starship;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Resources\Body as BodyResource;
use App\Http\Resources\Film as FilmResource;
use App\Http\Resources\People as PeopleResource;
use App\Http\Resources\Planet as PlanetResource;
use App\Http\Resources\Specie as SpecieResource;
use App\Http\Resources\Vehicle as VehicleResource;
use App\Http\Resources\Starship as StarshipResource;
use App\Http\Resources\Transport as TransportResource;

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
        return new FilmResource(Film::findOrFail($film));
    });

    Route::get('/people', function () {
        return PeopleResource::collection(People::all());
    });

    Route::get('/people/{id}', function ($people) {
        return new PeopleResource(People::findOrFail($people));
    });
    Route::get('/planets', function () {
        return PlanetResource::collection(Planet::all());
    });

    Route::get('/planets/{id}', function ($planet) {
        return new PlanetResource(Planet::findOrFail($planet));
    });

    Route::get('/species', function () {
        return SpecieResource::collection(Specie::all());
    });

    Route::get('/species/{id}', function ($specie) {
        return new SpecieResource(Specie::findOrFail($specie));
    });

    Route::get('/starships', function () {
        return StarshipResource::collection(Starship::all());
    });

    Route::get('/starships/{id}', function ($starship) {
        return new StarshipResource(Starship::findOrFail($starship));
    });

    Route::get('/transport', function () {
        return TransportResource::collection(Transport::all());
    });

    Route::get('/transport/{id}', function ($transport) {
        return new TransportResource(Transport::findOrFail($transport));
    });

    Route::get('/vehicles', function () {
        return VehicleResource::collection(Vehicle::all());
    });

    Route::get('/vehicles/{id}', function ($vehicle) {
        return new VehicleResource(Vehicle::findOrFail($vehicle));
    });

    Route::fallback(function () {
        return response()->json(['message' => 'Not Found'], 404);
    });
});

Route::domain('solar.api.test')->group(function () {
    Route::get('/bodies', function () {
        $bodies = QueryBuilder::for(Body::class)
    ->allowedFilters(['englishName'])
    ->get();
        return $bodies ? $bodies : BodyResource::collection(Body::all());
    });

    Route::get('/bodies/{id}', function ($body) {
        return new BodyResource(Body::findOrFail($body));
    });

    Route::fallback(function () {
        return response()->json(['message' => 'Not Found'], 404);
    });
});
