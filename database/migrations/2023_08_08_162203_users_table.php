<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_table', function (Blueprint $table) {
            $table -> integer('id') -> unsigned();
            $table -> string('first_name',30);
            $table -> string('last_name',30) -> nullable();
            $table -> string('email', 50);
            $table -> enum('gender',['male','female','others']);
            $table -> boolean('rember_me')-> defalut(0);
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
