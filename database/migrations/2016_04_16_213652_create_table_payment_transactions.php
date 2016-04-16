<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaymentTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('payer_id')->nullable();
            $table->string('paypal_payment_id')->nullable();
            $table->string('state')->nullable();
            $table->string('create_time')->nullable();
            $table->string('currency')->nullable();
            $table->decimal('amount',8,2);
            $table->integer('timestamp')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_transaction');
    }
}
