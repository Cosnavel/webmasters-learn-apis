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
        Schema::create('starships', function (Blueprint $table) {
            $table->id();
            $table->json('pilots');
            $table->string('MGLT');
            $table->string('starship_class');
            $table->string('hyperdrive_rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('starships');
    }
};
