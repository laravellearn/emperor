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
        Schema::connection('mysql-products')->create('transactions', function (Blueprint $table) {
            $table->id();
            $table->char('payment_id')->index();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('emperor.users');
            $table->unsignedBigInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->unsignedBigInteger('paid');
            $table->unsignedTinyInteger('status')->default(1);
            $table->text('invoice_details')->nullable();
            $table->string('transaction_id')->nullable();
            $table->text('transaction_result')->nullable();
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
        Schema::connection('mysql-products')->dropIfExists('transactions');
    }
};
