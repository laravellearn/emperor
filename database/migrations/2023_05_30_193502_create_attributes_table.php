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
        Schema::connection('mysql-products')->create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('isFilter')->default(0);
            $table->boolean('isActive')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql-products')->create('attribute_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->on('attributes')->references('id')->cascadeOnDelete();
            $table->string('value')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql-products')->create('attribute_product', function (Blueprint $table) {
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->on('attributes')->references('id')->cascadeOnDelete();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->unsignedBigInteger('value_id');
            $table->foreign('value_id')->on('attribute_values')->references('id')->cascadeOnDelete();
            $table->primary(['attribute_id','product_id','value_id']);
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
        Schema::connection('mysql-products')->dropIfExists('attribute_product');
        Schema::connection('mysql-products')->dropIfExists('attribute_values');
        Schema::connection('mysql-products')->dropIfExists('attributes');
    }
};
