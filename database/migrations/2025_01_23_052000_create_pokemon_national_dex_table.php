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
        Schema::create('pokemon_national_dex', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->integer('dex_number')->unique();
            $table->string('type_1');
            $table->string('type_2')->nullable();
            $table->decimal('weight', 5, 2)->nullable();
            $table->decimal('height_meter', 5, 2)->nullable();
            $table->integer('height_feet')->nullable();
            $table->integer('height_inches')->nullable();
            $table->integer('generation')->nullable();
            $table->boolean('legendary')->nullable();
            $table->boolean('mythical')->nullable();
            $table->boolean('mega')->nullable();
            $table->boolean('alolan')->nullable();
            $table->boolean('galarian')->nullable();
            $table->boolean('gmax')->nullable();
            $table->boolean('regional')->nullable();
            $table->boolean('starter')->nullable();
            $table->boolean('baby')->nullable();
            $table->boolean('fossil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_national_dex');
    }
};
