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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->integer('bottling_year')->nullable();
            $table->text('blend_information')->nullable();
            $table->integer('bottle_size')->nullable();
            $table->integer('alcohol_level')->nullable();
            $table->string('wine_maker')->nullable();
            $table->unsignedBigInteger('wine_type_id');
            $table->unsignedBigInteger('cellar_id')->nullable();
            $table->unsignedBigInteger('variety_id')->nullable();
            $table->timestamps();

            $table->foreign('wine_type_id')->references('id')->on('wine_types');
            $table->foreign('cellar_id')->references('id')->on('cellars');
            $table->foreign('variety_id')->references('id')->on('varieties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
