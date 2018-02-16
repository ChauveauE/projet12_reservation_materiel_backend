<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('quantiteReserv');
            $table->integer('idP')->unsigned();
            $table->integer('idM')->unsigned();
            $table->timestamps();
        });
        Schema::table('reservations', function (Blueprint $table){
            $table->foreign('idP')->references('id')->on('professors');
            $table->foreign('idM')->references('id')->on('materiels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
