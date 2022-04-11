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
        Schema::connection('mysql-settings')->create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('upLabel')->nullable();
            $table->string('widgetLabel1')->nullable();
            $table->string('widgetLabel2')->nullable();
            $table->string('widgetLabel3')->nullable();
            $table->string('widgetLabel4')->nullable();
            $table->string('widgetLabel5')->nullable();
            $table->string('rssLabel')->nullable();
            $table->string('socialLabel')->nullable();
            $table->string('supportLabel')->nullable();
            $table->string('phoneLabel')->nullable();
            $table->string('addressLabel')->nullable();
            $table->string('emailLabel')->nullable();
            $table->string('aboutHeadLabel')->nullable();
            $table->text('aboutbodyLabel')->nullable();
            $table->text('copyRight')->nullable();

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
        Schema::connection('mysql-settings')->dropIfExists('footers');
    }
};
