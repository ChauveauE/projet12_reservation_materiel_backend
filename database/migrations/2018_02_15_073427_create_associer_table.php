<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssocierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idP')->unsigned();
            $table->integer('idE')->unsigned();
            $table->timestamps();
        });
        Schema::table('associer', function (Blueprint $table){
            $table->foreign('idP')->references('id')->on('professor');
            $table->foreign('idE')->references('id')->on('ecole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associer');
    }
}
