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
        Schema::connection('mysql-products')->create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('value');
            $table->boolean('isActive')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql-products')->create('garanties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('isActive')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql-products')->create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('isActive')->default(1);
            $table->timestamps();
        });

        Schema::connection('mysql-products')->create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->boolean('isActive')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });


        Schema::connection('mysql-products')->create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->unsignedBigInteger('level1_id');
            $table->foreign('level1_id')->references('id')->on('emperor_products.categories');
            $table->unsignedBigInteger('level2_id');
            $table->foreign('level2_id')->references('id')->on('emperor_products.categories');
            $table->unsignedBigInteger('level3_id');
            $table->foreign('level3_id')->references('id')->on('emperor_products.categories');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('emperor_products.brands');
            $table->string('description');
            $table->text('body');
            $table->string('price');
            $table->string('discountPrice')->nullable();
            $table->string('number')->default(0);
            $table->string('weight')->nullable();
            $table->string('viewCount')->default(0);
            $table->integer('digiclub')->default(0);
            $table->integer('orderMax')->default(0);
            $table->integer('orderMin')->default(0);
            $table->boolean('special')->default(0);
            $table->boolean('isActive')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql-products')->create('product_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('emperor_products.products');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('emperor_products.tags');
            $table->primary(['tag_id','product_id']);
        });

        Schema::connection('mysql-products')->create('color_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('emperor_products.products');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('emperor_products.colors');
            $table->primary(['color_id','product_id']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql-products')->dropIfExists('color_product');
        Schema::connection('mysql-products')->dropIfExists('product_tag');
        Schema::connection('mysql-products')->dropIfExists('products');
        Schema::connection('mysql-products')->dropIfExists('brands');
        Schema::connection('mysql-products')->dropIfExists('tags');
        Schema::connection('mysql-products')->dropIfExists('garanties');
        Schema::connection('mysql-products')->dropIfExists('colors');
    }
};
