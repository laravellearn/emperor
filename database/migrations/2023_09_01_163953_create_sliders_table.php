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
        Schema::connection('mysql-settings')->create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('alt');
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->enum('position',['bannerTop','sliderMain','bannerLeftTop','banner4','banner2']);
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
        Schema::connection('mysql-settings')->dropIfExists('sliders');
    }
};
