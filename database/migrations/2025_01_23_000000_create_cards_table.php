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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('rarity_id')->constrained()->cascadeOnDelete();
            $table->foreignId('set_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('stage')->nullable();
            $table->string('evolves_from')->nullable();
            $table->integer('hp')->nullable();
            $table->string('type')->nullable();
            $table->string('length')->nullable();
            $table->string('weight')->nullable();
            $table->string('pokemon_power_name')->nullable();
            $table->text('pokemon_power_description')->nullable();
            $table->string('attack1_name')->nullable();
            $table->integer('attack1_damage')->nullable();
            $table->text('attack1_effect')->nullable();
            $table->string('attack2_name')->nullable();
            $table->integer('attack2_damage')->nullable();
            $table->text('attack2_effect')->nullable();
            $table->string('weakness')->nullable();
            $table->string('resistance')->nullable();
            $table->integer('retreat_cost')->nullable();
            $table->text('flavor_text')->nullable();
            $table->string('illustrator')->nullable();
            $table->integer('card_number');
            $table->integer('year');
            $table->string('copyright');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
