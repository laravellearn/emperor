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
        // Schema::connection('mysql-settings')->create('provinces', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('slug')->nullable();
        //     $table->decimal('lat')->nullable();
        //     $table->decimal('long')->nullable();
        //     $table->boolean('is_active')->default(1);
        //     $table->timestamps();
        // });

        // Schema::connection('mysql-settings')->create('cities', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('province_id');
        //     $table->foreign('province_id')->on('emperor_settings.provinces')->references('id')->cascadeOnDelete();
        //     $table->unsignedBigInteger('county_id');

        //     $table->string('name');
        //     $table->string('slug')->nullable();
        //     $table->decimal('lat')->nullable();
        //     $table->decimal('long')->nullable();
        //     $table->boolean('is_active')->default(1);
        //     $table->timestamps();
        // });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('deliverName');
            $table->string('mobile');
            $table->string('phone');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->on('emperor_settings.provinces')->references('id')->cascadeOnDelete();

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->on('emperor_settings.cities')->references('id')->cascadeOnDelete();

            $table->string('postalCode');
            $table->text('address');
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
        Schema::dropIfExists('addresses');
    }
};
