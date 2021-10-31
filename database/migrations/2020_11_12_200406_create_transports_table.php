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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('edited');
            $table->string('consumables');
            $table->string('name');
            $table->string('created');
            $table->string('cargo_capacity');
            $table->string('passengers');
            $table->string('max_atmosphering_speed');
            $table->string('crew');
            $table->string('length');
            $table->string('cost_in_credits');
            $table->string('manufacturer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
