<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_materiels', function (Blueprint $table) {
            $table->integer('reservations_id')->unsigned();
            $table->integer('materiels_id')->unsigned();
            $table->foreign('reservations_id')->references('id')->on('reservations');
            $table->foreign('materiels_id')->references('id')->on('materiels');
            $table->integer('quantiteReserv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations_materiels');
    }
}
