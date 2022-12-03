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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // $table->string('cart_id');
            $table->string('user_id');
            $table->string('car_id');
            $table->string('cart_id');

            // Tripay
            $table->string('reference')->nullable();
            $table->string('merchant_ref')->nullable()->unique()->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_name')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('callback_url')->nullable();
            $table->string('return_url')->nullable();
            $table->integer('fee_merchant')->nullable();
            $table->integer('fee_customer')->nullable();
            $table->integer('total_fee')->nullable();
            $table->integer('amount_received')->nullable();
            $table->string('pay_code')->nullable();
            $table->string('pay_url')->nullable();
            $table->string('checkout_url')->nullable();
            $table->enum('status', ['UNPAID', 'PAID', 'REFUND', 'EXPIRED', 'FAILED'])->nullable();
            $table->integer('expired_time')->nullable();
            $table->string('qr_string')->nullable();
            $table->string('qr_url')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
};
