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
        Schema::create('rent_cars', function (Blueprint $table) {
            $table->id();
            // customer id
            // car id
            $table->date('StartDate');
            $table->date('EndDate');
            $table->decimal('TotalPrice', 8, 2);
            $table->decimal('InitialPayment', 8, 2);
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
        Schema::dropIfExists('rent_cars');
    }
};
