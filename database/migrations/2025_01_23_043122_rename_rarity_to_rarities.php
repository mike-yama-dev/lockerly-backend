<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//comment
return new class extends Migration {
    public function up()
    {
        Schema::rename('rarity', 'rarities');
    }

    public function down()
    {
        Schema::rename('rarities', 'rarity');
    }
};
