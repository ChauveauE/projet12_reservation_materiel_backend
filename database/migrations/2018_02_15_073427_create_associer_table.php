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
        Schema::create('associations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idP')->unsigned();
            $table->integer('idE')->unsigned();
            $table->timestamps();
        });
        Schema::table('associations', function (Blueprint $table){
            $table->foreign('idP')->references('id')->on('professors');
            $table->foreign('idE')->references('id')->on('ecoles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associations');
    }
}
