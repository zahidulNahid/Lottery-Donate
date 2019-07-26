<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('gender');
            $table->int('nid');
            $table->string('password');
            $table->string('confirmPass');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('users',function(Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->string('type');
            $table->string('lastLogin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
        Schema::dropIfExists('users');
    }
}
