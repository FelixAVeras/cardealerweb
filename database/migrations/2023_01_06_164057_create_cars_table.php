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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Model');
            $table->integer('Year');
            $table->decimal('Price', 8, 2);
            $table->string('Miles')->nullable();
            $table->string('Plate');
            $table->string('City_Location');
            $table->string('Car_Image')->nullable();
            $table->boolean('IsAvailable')->default(false);
            //$table->boolean('IsReserved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
