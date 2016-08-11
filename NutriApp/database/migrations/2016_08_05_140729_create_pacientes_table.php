<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->string('masa_corporal');
            $table->string('peso');
            $table->string('altura');
            $table->string('edad');
            $table->string('masa_muscular');
            $table->string('masa_osea');
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
        Schema::drop('pacientes');
    }
}
