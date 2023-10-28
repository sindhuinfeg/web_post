<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('users_post',function(Blueprint $table){
            $table -> integer('id') -> unsigned();
            $table -> foreignId('user_id')->reference('id')->on('login_users');
            $table -> string('title',50);
            $table -> text('content',500);
            $table -> string('img_src',100);
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
