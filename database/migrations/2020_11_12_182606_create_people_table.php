<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('edited');
            $table->string('name');
            $table->string('created');
            $table->string('gender');
            $table->string('skin_color');
            $table->string('hair_color');
            $table->string('height');
            $table->string('eye_color');
            $table->string('mass');
            $table->integer('homeworld');
            $table->string('birth_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
