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
            /////////////////////////////// Social Media
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();

            $table->string('socialIcon1')->nullable();
            $table->string('socialLink1')->nullable();
            $table->string('socialIcon2')->nullable();
            $table->string('socialLink2')->nullable();
            $table->string('socialIcon3')->nullable();
            $table->string('socialLink3')->nullable();
            $table->string('socialIcon4')->nullable();
            $table->string('socialLink4')->nullable();
            $table->string('socialIcon5')->nullable();
            $table->string('socialLink5')->nullable();
            $table->string('socialIcon6')->nullable();
            $table->string('socialLink6')->nullable();
            /////////////////////////////////enamad
            $table->string('enamad')->nullable();
            $table->string('linkApp1')->nullable();
            $table->string('imageApp1')->nullable();
            $table->string('linkApp2')->nullable();
            $table->string('imageApp2')->nullable();
            $table->timestamps();
        });

        Schema::connection('mysql-settings')->create('footer-logos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->enum('type', ['top', 'bottom']);
            $table->boolean('isActive')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql-settings')->create('footer-menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->enum('type', ['widgetLabel1', 'widgetLabel2', 'widgetLabel3', 'widgetLabel4', 'widgetLabel5']);
            $table->boolean('isActive')->nullable();
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
        Schema::connection('mysql-settings')->dropIfExists('footer-menus');
        Schema::connection('mysql-settings')->dropIfExists('footer-logos');
        Schema::connection('mysql-settings')->dropIfExists('footers');
    }
};
