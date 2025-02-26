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
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('profileImage')->nullable();
            $table->string('address')->nullable();
           
            $table->string('license_car_image')->nullable();
            $table->string('license_person_image')->nullable();
            $table->string('status')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('rool');
            $table->longText('password');
            $table->string('order')->nullable();

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
        Schema::dropIfExists('users');
    }
};
