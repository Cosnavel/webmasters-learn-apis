<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->json('starships');
            $table->string('edited');
            $table->json('vehicles');
            $table->json('planets');
            $table->string('producer');
            $table->string('title');
            $table->string('created');
            $table->integer('episode_id');
            $table->string('director');
            $table->string('release_date');
            $table->string('opening_crawl');
            $table->json('characters');
            $table->json('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
