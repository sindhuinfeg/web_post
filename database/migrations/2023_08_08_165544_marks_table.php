<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function(Blueprint $table){
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreignId('user_id')->reference('id')->on('users_table');
            $table->float('mark1',3,2)->nullable();
            $table->float('mark2',3,2)->nullable();
            $table->float('mark3',3,2)->nullable();
            $table->float('total',3,2)->nullable();
            $table->string('remarks',200)->nullable();
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
        //
    }
}
