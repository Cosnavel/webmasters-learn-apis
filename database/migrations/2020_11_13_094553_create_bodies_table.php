<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bodies', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->boolean('isPlanet');
            $table->json('moons');
            $table->float('semimajorAxis');
            $table->float('perihelion');
            $table->float('aphelion');
            $table->float('eccentricity');
            $table->float('inclination');
            $table->json('mass');
            $table->json('vol');
            $table->float('density');
            $table->float('gravity');
            $table->float('escape');
            $table->float('meanRadius');
            $table->float('equaRadius');
            $table->float('polarRadius');
            $table->float('flattening');
            $table->string('dimension');
            $table->float('sideralOrbit');
            $table->float('sideralRotation');
            $table->json('aroundPlanet');
            $table->string('discoveredBy');
            $table->string('discoveryDate');
            $table->string('alternativeName');
            $table->float('axialTilt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodies');
    }
};
