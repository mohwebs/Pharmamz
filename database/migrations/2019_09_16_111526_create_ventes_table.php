<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lot_id');
            $table->unsignedInteger('user_id');
            $table->date('date');
            $table->integer('quantite');
            $table->foreign('lot_id')->references('id')->on('lots');   
            $table->foreign('user_id')->references('id')->on('users');   




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
        Schema::dropIfExists('ventes');
    }
}
