<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('pricing_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coffee_id');
            $table->foreign('coffee_id')->references('id')->on('coffees')->onDelete('cascade');
            $table->unsignedInteger('quantity_in_grams');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_options');
    }
}
