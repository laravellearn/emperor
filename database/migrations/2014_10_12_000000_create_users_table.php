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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->unique();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->string('profilePhoto')->default('/home/images/svg/user-profile.svg');
            $table->enum('typeUser',['user','vendor','admin'])->default('user');
            $table->boolean('isActive')->default(1);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('emperor.users');
            $table->enum('type',['verify','resendSms','register']);
            $table->string('code',4)->unique();
            $table->string('expired_at');
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
        Schema::dropIfExists('tokens');
        Schema::dropIfExists('users');
    }
};
