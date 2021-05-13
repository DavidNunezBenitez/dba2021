<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('pk_empleado');
            $table->string('cargo');
            $table->integer('fk_id_persona');
            $table->integer('fk_personaDom');
            $table->foreign('fk_id_persona')->references('pk_persona')->on('personas');
            $table->foreign('fk_personaDom')->references('pk_personaDom')->on('domicilio_personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
