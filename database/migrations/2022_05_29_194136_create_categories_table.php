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
        Schema::connection('mysql-products')->create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('emperor_products.categories');
            $table->enum('level',['1','2','3']);
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('metaTitle');
            $table->text('metaDescription');
            $table->boolean('isActive')->default(1);
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
        Schema::connection('mysql-products')->dropIfExists('categories');
    }
};
