<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coress', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('canecas_id')->unsigned();
            $table->foreign('canecas_id')->references('id')->on('canecas');
            $table->string('cor');
            $table->integer('tonalidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cores');
    }
}
