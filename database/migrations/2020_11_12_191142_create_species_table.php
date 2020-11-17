<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->id();
            $table->string('edited');
            $table->string('classification');
            $table->string('name');
            $table->string('designation');
            $table->string('created');
            $table->string('eye_colors');
            $table->json('people');
            $table->string('skin_colors');
            $table->string('language');
            $table->string('hair_colors');
            $table->integer('homeworld')->nullable();
            $table->string('average_lifespan');
            $table->string('average_height');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('species');
    }
}
