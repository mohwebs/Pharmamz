<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->string('sexe');
            $table->string('tel');
            $table->string('email');
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('postal')->nullable();
            $table->string('pic')->nullable();
            $table->boolean('isadmin')->default('0');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
