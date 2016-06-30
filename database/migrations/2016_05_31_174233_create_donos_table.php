<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('canecas_id')->unsigned();
            $table->foreign('canecas_id')->references('id')->on('canecas');
            $table->timestamps();
            $table->string('nome');
            $table->integer('idade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donos');
    }
}
