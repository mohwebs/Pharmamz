<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('achat_id');
            $table->unsignedInteger('medicament_id');
            $table->date('datefab');
            $table->date('dateper');
            $table->decimal('prix', 10, 2);
            $table->integer('qtachete');
            $table->integer('qtstock');
            $table->foreign('achat_id')->references('id')->on('achats');   
            $table->foreign('medicament_id')->references('id')->on('medicaments');     
  





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
        Schema::dropIfExists('lots');
    }
}
