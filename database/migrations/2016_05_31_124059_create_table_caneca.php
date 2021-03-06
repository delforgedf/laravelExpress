<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCaneca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canecas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('marca', 255);
            $table->string('modelo' , 255 );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('canecas');
    }
}
