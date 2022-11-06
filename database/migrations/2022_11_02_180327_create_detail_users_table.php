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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('identity_number');
            $table->date('dob');
            $table->string('pob');
            $table->integer('address');
            $table->integer('villages');
            $table->integer('city');
            $table->string('state');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('path_user');
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
        Schema::dropIfExists('detail_users');
    }
};
