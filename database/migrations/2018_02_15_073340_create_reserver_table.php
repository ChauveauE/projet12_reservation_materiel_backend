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
        Schema::create('reserver', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('quantiteReserv');
            $table->integer('idP')->unsigned();
            $table->integer('idM')->unsigned();
            $table->timestamps();
        });
        Schema::table('reserver', function (Blueprint $table){
            $table->foreign('idP')->references('id')->on('professor');
            $table->foreign('idM')->references('id')->on('materiel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserver');
    }
}
