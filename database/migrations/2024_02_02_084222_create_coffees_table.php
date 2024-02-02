<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeesTable extends Migration
{
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin');
            $table->json('taste_factors');
            $table->unsignedTinyInteger('strength');
            $table->text('description')->nullable();
            $table->json('pictures')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffees');
    }
}
