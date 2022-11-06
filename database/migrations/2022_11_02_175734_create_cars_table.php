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
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('name_car');
            $table->integer('seat_car');
            $table->integer('door_car');
            $table->integer('bagage_car');
            $table->string('license_plate');
            $table->enum('transmission_car', ['Manual', 'Automatic']);
            $table->string('brand_car');
            $table->string('year_car');
            $table->integer('price_car');
            $table->date('is_deleted')->nullable();
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
