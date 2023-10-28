<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoginPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_users',function(Blueprint $table){
            $table -> integer('id') -> unsigned();
            $table -> string('first_name',30);
            $table -> string('last_name',30);
            $table -> enum('gender',['male','female','others']);
            $table -> string('user_name',50);
            $table -> string('password',10);
            $table -> string('confirm_password',10);
            $table -> string('email',50);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
