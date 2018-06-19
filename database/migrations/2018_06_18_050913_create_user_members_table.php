<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('phone');
            $table->string('password');
            $table->string('gender');
            $table->string('email');
            $table ->string('salt');
            $table->string('role');
            $table->integer('status');
            $table->string('avatar');
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
        Schema::dropIfExists('user_members');
    }
}
